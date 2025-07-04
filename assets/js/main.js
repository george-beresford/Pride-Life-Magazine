document.addEventListener("DOMContentLoaded", () => {
    // Debounce limit in ms for resize event handler
    const debounceLimit = 100; // recalculate repaints every 100ms

    // Debounce utility to limit how often a function runs
    const debounce = (func, wait) => {
        let timeout;
        return (...args) => {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    };

    function setVH() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
    const debouncedSetVH = debounce(setVH, debounceLimit);
    window.addEventListener('resize', debouncedSetVH);
    setVH();
    
    // Toggle the navigation menu open/close
    const toggleMenu = (trigger) => {
        const targetId = trigger.getAttribute("href").substring(1); // Get the ID from href, removing the '#'
        const targetElement = document.getElementById(targetId);

        if(!targetElement) { 
            console.warn(targetId + " wasn't found in the DOM."); 
            return; 
        }

        // Toggle between open and close states, updating classes and attributes
        if (trigger.dataset.action === "open") {
            trigger.dataset.action = "close";
            trigger.setAttribute("title", "Expand hidden navigation menu");
            targetElement.classList.add("open");
            targetElement.classList.remove("close");
            targetElement.setAttribute("tabindex", "0"); // Make focusable when open
            document.querySelector('body')?.classList.add("offcanvas-open");
        } else {
            trigger.dataset.action = "open";
            trigger.setAttribute("title", "Collapse visible navigation menu");
            targetElement.classList.add("close");
            targetElement.classList.remove("open");
            targetElement.setAttribute("tabindex", "-1"); // Remove from tab order when closed
            document.querySelector('body')?.classList.remove("offcanvas-open");
        }
    };

    // Handler for hamburger menu click
    const handleMenuClick = (event) => {
        event.preventDefault();
        toggleMenu(event.currentTarget);
    };

    // Attach click event to hamburger menu trigger if it exists
    const menuTrigger = document.querySelector('[data-role="hamburger-menu"]');
    if (menuTrigger) {
        menuTrigger.addEventListener("click", handleMenuClick);
    }

    
    // --- Modular Scroll Snap Navigation System ---

    // Get slide transition duration from CSS variable --clip-transition
    function getSlideTransitionDuration() {
        const rootStyles = getComputedStyle(document.documentElement);
        const clipTransition = rootStyles.getPropertyValue('--clip-transition').trim();
        const durationMatch = clipTransition.match(/^([\d.]+)s/);
        return durationMatch ? parseFloat(durationMatch[1]) * 1000 : 350;
    }
    const SLIDE_TRANSITION_MS = getSlideTransitionDuration();
    const NAV_THROTTLE_DURATION = SLIDE_TRANSITION_MS;
    const NAV_BUTTON_LOCK_DURATION = SLIDE_TRANSITION_MS;

    let navKeyHeld = false;
    let navKeyHoldTimeout = null;

    /**
     * Smoothly scrolls a container to a section, disabling scroll-snap during animation.
     */
    function scrollToSectionWithTiming(container, section, duration = SLIDE_TRANSITION_MS, animate = true) {
        const isX = container.classList.contains('scroll-snap-x');
        const isY = container.classList.contains('scroll-snap-y');
        let current, target;
        if (isX) {
            current = container.scrollLeft;
            target = section.offsetLeft - container.offsetLeft;
        } else if (isY) {
            current = container.scrollTop;
            target = section.offsetTop - container.offsetTop;
        }
        if ((isX || isY) && Math.abs(current - target) < 2) return;

        const originalSnapType = container.style.scrollSnapType || window.getComputedStyle(container).scrollSnapType;
        container.style.scrollSnapType = 'none';

        let start = isX ? container.scrollLeft : container.scrollTop;
        let end = isX ? section.offsetLeft - container.offsetLeft : section.offsetTop - container.offsetTop;
        const change = end - start;
        const startTime = performance.now();

        function animateScroll(now) {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const ease = progress < 0.5
            ? 4 * progress * progress * progress
            : 1 - Math.pow(-2 * progress + 2, 3) / 2;
            const value = start + change * ease;
            if (isX) container.scrollLeft = value;
            if (isY) container.scrollTop = value;
            if (progress < 1) {
            requestAnimationFrame(animateScroll);
            } else {
                container.style.scrollSnapType = originalSnapType || '';
                if (isY) {
                    section.scrollIntoView({ behavior: 'auto', block: 'start', inline: 'nearest' });
                } else if (isX) {
                    section.scrollIntoView({ behavior: 'auto', block: 'nearest', inline: 'start' });
                }
            }
        }

        if (animate) {
            requestAnimationFrame(animateScroll);
        } else {
            if (isX) container.scrollLeft = end;
            if (isY) container.scrollTop = end;
            container.style.scrollSnapType = originalSnapType || '';
            if (isY) {
                section.scrollIntoView({ behavior: 'auto', block: 'start', inline: 'nearest' });
            } else if (isX) {
                section.scrollIntoView({ behavior: 'auto', block: 'nearest', inline: 'start' });
            }
        }
    }

    /**
     * Returns the index of the currently active section.
     */
    function getCurrentActiveIndex(sections) {
        for (let i = 0; i < sections.length; i++) {
            if (sections[i].classList.contains('active')) return i;
        }
        return 0;
    }

    /**
     * Updates prev/next button states based on the active index.
     */
    function updateNavButtonStates(navContainer, activeIndex, totalSections) {
        const prevButton = navContainer.querySelector('.scroll-nav-prev');
        const nextButton = navContainer.querySelector('.scroll-nav-next');
        if (prevButton) prevButton.disabled = activeIndex === 0;
        if (nextButton) nextButton.disabled = activeIndex === totalSections - 1;
    }

    /**
     * Calculates which section is most visible in the container.
     */
    function calculateMostVisibleSection(container, sections) {
        if (sections.length === 1) return 0;
        const containerRect = container.getBoundingClientRect();
        let activeIndex = Infinity;
        let highestVisibility = 0;
        sections.forEach((section, index) => {
            const sectionRect = section.getBoundingClientRect();
            if (container.classList.contains('scroll-snap-x')) {
                const overlapLeft = Math.max(sectionRect.left, containerRect.left);
                const overlapRight = Math.min(sectionRect.right, containerRect.right);
                const overlapWidth = Math.max(0, overlapRight - overlapLeft);
                const visibilityRatio = overlapWidth / sectionRect.width;
                if (visibilityRatio > highestVisibility) {
                    highestVisibility = visibilityRatio;
                    activeIndex = index;
                }
            } else if (container.classList.contains('scroll-snap-y')) {
                const overlapTop = Math.max(sectionRect.top, containerRect.top);
                const overlapBottom = Math.min(sectionRect.bottom, containerRect.bottom);
                const overlapHeight = Math.max(0, overlapBottom - overlapTop);
                const visibilityRatio = overlapHeight / sectionRect.height;
                if (visibilityRatio > highestVisibility) {
                    highestVisibility = visibilityRatio;
                    activeIndex = index;
                }
            }
        });
        return activeIndex;
    }

    /**
     * Updates active/enter/exit classes for sections and nav dots.
     * Also updates nested scroll-snap-x if present in active scroll-snap-y section.
     */
    function updateActiveStates(sections, dots, activeIndex, _recursionGuard = new WeakSet()) {
        // Recursion guard: prevent infinite loops on nested calls
        if (_recursionGuard.has(sections)) return;
        _recursionGuard.add(sections);

        // Remove all classes
        sections.forEach(section => {
            section.classList.remove('active', 'active-x', 'active-y', 'is-entering', 'is-exiting');
        });
        dots.forEach(dot => dot.classList.remove('active'));

        // Add active/entering classes
        if (dots[activeIndex]) dots[activeIndex].classList.add('active');
        if (sections[activeIndex]) {
            sections[activeIndex].classList.add('active');
            const parent = sections[activeIndex].parentElement;
            if (parent && parent.classList.contains('scroll-snap-x')) {
                sections[activeIndex].classList.add('active-x');
            } else if (parent && parent.classList.contains('scroll-snap-y')) {
                sections[activeIndex].classList.add('active-y');
            }
            sections[activeIndex].classList.add('is-entering');
            void sections[activeIndex].offsetHeight;
        }

        // Set focus for accessibility
        sections.forEach((section, idx) => {
            if (idx === activeIndex) {
                section.setAttribute('tabindex', '0');
                section.focus({ preventScroll: true });
            } else {
                section.setAttribute('tabindex', '-1');
            }
        });

        // Update prev/next buttons
        const prevButton = dots[0]?.parentElement?.querySelector('.scroll-nav-prev');
        const nextButton = dots[0]?.parentElement?.querySelector('.scroll-nav-next');
        if (prevButton) prevButton.disabled = activeIndex === 0;
        if (nextButton) nextButton.disabled = activeIndex === sections.length - 1;

        // --- Update nested scroll-snap-x if present in active scroll-snap-y section ---
        if (sections[activeIndex]) {
            const nestedSnapContainer = sections[activeIndex].querySelector('.scroll-snap-x');
            if (nestedSnapContainer) {
                const nestedSections = nestedSnapContainer.querySelectorAll(':scope > section');
                const nestedNavContainer = nestedSnapContainer.nextElementSibling;
                if (nestedNavContainer && nestedNavContainer.classList.contains('scroll-navigation')) {
                    const nestedDots = nestedNavContainer.querySelectorAll('.scroll-nav-dot');
                    let activeNestedIndex = 0;
                    nestedSections.forEach((section, index) => {
                        if (section.classList.contains('active')) activeNestedIndex = index;
                    });
                    updateActiveStates(nestedSections, nestedDots, activeNestedIndex, _recursionGuard);
                }
            }
        }
    }

    /**
     * Handles scroll progress, updating enter/exit classes and nav dots.
     */
    function handleScrollProgress(container, sections, currentActiveIndex, dots, navContainer) {
        const newActiveIndex = calculateMostVisibleSection(container, sections);
        if (newActiveIndex === currentActiveIndex || newActiveIndex === Infinity) return currentActiveIndex;

        // Remove all active/enter/exit classes
        sections.forEach(section => section.classList.remove('active', 'active-x', 'active-y', 'is-entering', 'is-exiting'));
        dots.forEach(dot => dot.classList.remove('active'));

        // Add is-exiting to previous, is-entering to new
        if (sections[currentActiveIndex]) sections[currentActiveIndex].classList.add('is-exiting');
        if (sections[newActiveIndex]) sections[newActiveIndex].classList.add('is-entering');
        if (dots[newActiveIndex]) dots[newActiveIndex].classList.add('active');

        // Update dot proximity
        dots.forEach((dot, idx) => {
            if (idx === newActiveIndex) {
                dot.removeAttribute('data-proximity');
            } else {
                dot.setAttribute('data-proximity', Math.abs(idx - newActiveIndex));
            }
        });

        updateNavButtonStates(navContainer, newActiveIndex, sections.length);

        // Update URL hash and nav link actives
        if (sections[newActiveIndex] && sections[newActiveIndex].id) {
            history.replaceState(null, '', `#${sections[newActiveIndex].id}`);
            const hash = `#${sections[newActiveIndex].id}`;
            document.querySelectorAll('nav a[href^="#"]').forEach(link => {
                link.classList.toggle('active', link.getAttribute('href') === hash);
            });
        }

        // --- Update nested scroll-snap-x if present in active scroll-snap-y section ---
        if (container.classList.contains('scroll-snap-y')) {
            if (sections[newActiveIndex]) {
                const nestedSnapContainer = sections[newActiveIndex].querySelector('.scroll-snap-x');
                if (nestedSnapContainer) {
                    const nestedSections = nestedSnapContainer.querySelectorAll(':scope > section');
                    const nestedNavContainer = nestedSnapContainer.nextElementSibling;
                    if (nestedNavContainer && nestedNavContainer.classList.contains('scroll-navigation')) {
                        const nestedDots = nestedNavContainer.querySelectorAll('.scroll-nav-dot');
                        let activeNestedIndex = 0;
                        nestedSections.forEach((section, index) => {
                            if (section.classList.contains('active')) activeNestedIndex = index;
                        });
                        updateActiveStates(nestedSections, nestedDots, activeNestedIndex);
                    }
                }
            }
        }

        return newActiveIndex;
    }

    /**
     * Creates navigation dots and prev/next buttons for a scroll container.
     */
    function createNavigationDots(container, sections) {
        const navContainer = document.createElement('div');
        navContainer.className = 'scroll-navigation';
        navContainer.setAttribute('aria-label', 'Section Navigation');
        let isScrolling = false;

        function lockButton(button, duration = NAV_BUTTON_LOCK_DURATION) {
            if (!button || button.disabled) return;
            button.disabled = true;
            isScrolling = true;
            setTimeout(() => {
                button.disabled = false;
                isScrolling = false;
            }, duration);
        }

        // Prev button
        const prevButton = document.createElement('button');
        prevButton.className = 'scroll-nav-prev';
        prevButton.setAttribute('aria-label', 'Previous slide');
        prevButton.setAttribute('title', 'Previous slide');
        prevButton.innerHTML = '<icon aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4.01 11.98H19M10.013 5.988L4.002 12l6.011 6.012"/></svg></icon>';
        prevButton.addEventListener('click', () => {
            if (isScrolling) return;
            const currentIndex = getCurrentActiveIndex(sections);
            if (currentIndex > 0) {
                scrollToSectionWithTiming(container, sections[currentIndex - 1], SLIDE_TRANSITION_MS, true);
                updateNavButtonStates(navContainer, currentIndex - 1, sections.length);
                lockButton(prevButton);
            }
        });
        navContainer.appendChild(prevButton);

        // Dots
        sections.forEach((section, sectionIndex) => {
            const navDot = document.createElement('button');
            navDot.className = 'scroll-nav-dot';
            if (section.classList.contains('advert')) navDot.classList.add('advert');
            navDot.setAttribute('aria-label', `Go to slide ${sectionIndex + 1}`);
            navDot.dataset.index = sectionIndex;
            navDot.addEventListener('click', () => {
                if (isScrolling) return;
                const currentIndex = getCurrentActiveIndex(sections);
                if (sectionIndex === currentIndex) return;
                scrollToSectionWithTiming(container, section, SLIDE_TRANSITION_MS, true);
                updateNavButtonStates(navContainer, sectionIndex, sections.length);
                lockButton(navDot);
            });
            navContainer.appendChild(navDot);
        });

        // Next button
        const nextButton = document.createElement('button');
        nextButton.className = 'scroll-nav-next';
        nextButton.setAttribute('aria-label', 'Next slide');
        nextButton.setAttribute('title', 'Next slide');
        nextButton.innerHTML = '<icon aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4.48 11.98h14.99M13.483 5.988L19.52 12l-6.037 6.012"/></svg></icon>';
        nextButton.addEventListener('click', () => {
            if (isScrolling) return;
            const currentIndex = getCurrentActiveIndex(sections);
            if (currentIndex < sections.length - 1) {
                scrollToSectionWithTiming(container, sections[currentIndex + 1], SLIDE_TRANSITION_MS, true);
                updateNavButtonStates(navContainer, currentIndex + 1, sections.length);
                lockButton(nextButton);
            }
        });
        navContainer.appendChild(nextButton);

        // Setup dot proximity on load
        const activeIndex = getCurrentActiveIndex(sections);
        navContainer.querySelectorAll('.scroll-nav-dot').forEach((dot, idx) => {
            if (idx === activeIndex) {
                dot.removeAttribute('data-proximity');
            } else {
                dot.setAttribute('data-proximity', Math.abs(idx - activeIndex));
            }
        });
        return navContainer;
    }

    /**
     * Sets up scroll tracking for a scroll-snap container.
     */
    function setupScrollTracking(container, sections, navContainer) {
        let currentActiveIndex = 0;
        let isScrolling = false;
        const dots = navContainer.querySelectorAll('.scroll-nav-dot');

        // Debounced scroll handler for all scroll events
        const debouncedScrollHandler = debounce(() => {
            isScrolling = false;
            const activeIndex = calculateMostVisibleSection(container, sections);
            updateActiveStates(sections, dots, activeIndex);
            updateNavButtonStates(navContainer, activeIndex, sections.length);
            currentActiveIndex = activeIndex;
        }, debounceLimit);

        container.addEventListener('scroll', () => {
            if (!isScrolling) isScrolling = true;
            currentActiveIndex = handleScrollProgress(container, sections, currentActiveIndex, dots, navContainer);
            debouncedScrollHandler();
        });
    }

    /**
     * Initializes scroll navigation for all scroll-snap containers.
     */
    function createScrollNavigation() {
        const scrollContainers = document.querySelectorAll('.scroll-snap-x, .scroll-snap-y');
        scrollContainers.forEach((container) => {
            const sections = container.querySelectorAll(':scope > section');
            if (sections.length <= 1) return;
            const navContainer = createNavigationDots(container, sections);
            container.parentNode.insertBefore(navContainer, container.nextSibling);
            setupScrollTracking(container, sections, navContainer);
            const dots = navContainer.querySelectorAll('.scroll-nav-dot');
            updateActiveStates(sections, dots, 0);
            const prevButton = navContainer.querySelector('.scroll-nav-prev');
            if (prevButton) prevButton.disabled = true;
        });
    }

    /**
     * Sets up keyboard navigation for scroll-snap containers.
     */
    function setupKeyboardNavigation() {
        const ARROW_KEYS = ['ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown'];
        let navThrottle = false;

        function getSnapYContainer() {
            return document.querySelector('.scroll-snap-y');
        }

        function getSnapXContainerInActiveY() {
            const yContainer = getSnapYContainer();
            if (!yContainer) return null;
            const ySections = yContainer.querySelectorAll(':scope > section');
            if (!ySections.length) return null;
            let activeYIdx = 0, maxVis = 0;
            const yRect = yContainer.getBoundingClientRect();
            ySections.forEach((section, idx) => {
                const sRect = section.getBoundingClientRect();
                const overlapTop = Math.max(sRect.top, yRect.top);
                const overlapBottom = Math.min(sRect.bottom, yRect.bottom);
                const overlapHeight = Math.max(0, overlapBottom - overlapTop);
                const vis = overlapHeight / sRect.height;
                if (vis > maxVis) { maxVis = vis; activeYIdx = idx; }
            });
            const activeYSection = ySections[activeYIdx];
            return activeYSection.querySelector('.scroll-snap-x');
        }

        function getSectionsAndNav(container) {
            const sections = container.querySelectorAll(':scope > section');
            const navContainer = container.nextElementSibling?.classList.contains('scroll-navigation')
                ? container.nextElementSibling
                : null;
            const dots = navContainer ? navContainer.querySelectorAll('.scroll-nav-dot') : [];
            return { sections, navContainer, dots };
        }

        document.addEventListener('keydown', (e) => {
            if (!ARROW_KEYS.includes(e.key)) return;
            navKeyHeld = true;
            if (navKeyHoldTimeout) clearTimeout(navKeyHoldTimeout);
            navKeyHoldTimeout = setTimeout(() => { navKeyHeld = false; }, NAV_THROTTLE_DURATION + 50);
            if (navThrottle) { e.preventDefault(); return; }

            // Up/Down for scroll-snap-y
            if (e.key === 'ArrowUp' || e.key === 'ArrowDown') {
                const yContainer = getSnapYContainer();
                if (!yContainer) return;
                const { sections, navContainer, dots } = getSectionsAndNav(yContainer);
                if (!sections.length) return;
                let currentIndex = 0, maxVis = 0;
                const yRect = yContainer.getBoundingClientRect();
                sections.forEach((section, idx) => {
                    const sRect = section.getBoundingClientRect();
                    const overlapTop = Math.max(sRect.top, yRect.top);
                    const overlapBottom = Math.min(sRect.bottom, yRect.bottom);
                    const overlapHeight = Math.max(0, overlapBottom - overlapTop);
                    const vis = overlapHeight / sRect.height;
                    if (vis > maxVis) { maxVis = vis; currentIndex = idx; }
                });
                let nextIndex = currentIndex;
                if (e.key === 'ArrowDown') nextIndex = Math.min(currentIndex + 1, sections.length - 1);
                if (e.key === 'ArrowUp') nextIndex = Math.max(currentIndex - 1, 0);
                if (nextIndex !== currentIndex) {
                    e.preventDefault();
                    navThrottle = true;
                    sections.forEach(section => section.classList.remove('page-in', 'animate-in', 'is-entering', 'is-exiting'));
                    if (sections[currentIndex]) sections[currentIndex].classList.add('is-exiting');
                    if (sections[nextIndex]) sections[nextIndex].classList.add('is-entering');
                    scrollToSectionWithTiming(yContainer, sections[nextIndex], SLIDE_TRANSITION_MS, true);
                    if (navContainer) updateNavButtonStates(navContainer, nextIndex, sections.length);

                    // --- Update nested scroll-snap-x in new active y section ---
                    const nestedSnapContainer = sections[nextIndex].querySelector('.scroll-snap-x');
                    if (nestedSnapContainer) {
                        const nestedSections = nestedSnapContainer.querySelectorAll(':scope > section');
                        const nestedNavContainer = nestedSnapContainer.nextElementSibling;
                        if (nestedNavContainer && nestedNavContainer.classList.contains('scroll-navigation')) {
                            const nestedDots = nestedNavContainer.querySelectorAll('.scroll-nav-dot');
                            let activeNestedIndex = 0;
                            nestedSections.forEach((section, index) => {
                                if (section.classList.contains('active')) activeNestedIndex = index;
                            });
                            updateActiveStates(nestedSections, nestedDots, activeNestedIndex);
                        }
                    }

                    setTimeout(() => { navThrottle = false; }, NAV_THROTTLE_DURATION);
                }
            }

            // Left/Right for scroll-snap-x in active y section
            if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                const xContainer = getSnapXContainerInActiveY();
                if (!xContainer) return;
                const { sections, navContainer, dots } = getSectionsAndNav(xContainer);
                if (!sections.length) return;
                let currentIndex = 0, maxVis = 0;
                const xRect = xContainer.getBoundingClientRect();
                sections.forEach((section, idx) => {
                    const sRect = section.getBoundingClientRect();
                    const overlapLeft = Math.max(sRect.left, xRect.left);
                    const overlapRight = Math.min(sRect.right, xRect.right);
                    const overlapWidth = Math.max(0, overlapRight - overlapLeft);
                    const vis = overlapWidth / sRect.width;
                    if (vis > maxVis) { maxVis = vis; currentIndex = idx; }
                });
                let nextIndex = currentIndex;
                if (e.key === 'ArrowRight') nextIndex = Math.min(currentIndex + 1, sections.length - 1);
                if (e.key === 'ArrowLeft') nextIndex = Math.max(currentIndex - 1, 0);
                if (nextIndex !== currentIndex) {
                    e.preventDefault();
                    navThrottle = true;
                    sections.forEach(section => section.classList.remove('page-in', 'animate-in', 'is-entering', 'is-exiting'));
                    if (sections[currentIndex]) sections[currentIndex].classList.add('is-exiting');
                    if (sections[nextIndex]) sections[nextIndex].classList.add('is-entering');
                    scrollToSectionWithTiming(xContainer, sections[nextIndex], SLIDE_TRANSITION_MS, true);
                    if (navContainer) updateNavButtonStates(navContainer, nextIndex, sections.length);
                    setTimeout(() => { navThrottle = false; }, NAV_THROTTLE_DURATION);
                }
            }
        });

        document.addEventListener('keyup', (e) => {
            if (ARROW_KEYS.includes(e.key)) {
                navKeyHeld = false;
                if (navKeyHoldTimeout) clearTimeout(navKeyHoldTimeout);
            }
        });
    }

    // --- Initialize navigation ---
    setupKeyboardNavigation();
    createScrollNavigation();


    
    // // Pride Rainbow Ember Cursor Trail with Hover Effects
    // const createRainbowCursorTrail = () => {
    //     const colors = ["#ff0000", "#ff8000", "#ffff00", "#00ff00", "#0000ff", "#8000ff"]; // Pride flag colors
    //     const maxDots = 25; // Maximum number of dots to maintain
    //     const dotPool = []; // Pool of dot elements for recycling
    //     let dotIndex = 0; // Current index for recycling dots
    //     let lastX = -100, lastY = -100;
    //     let lastTimestamp = 0;
    //     const throttleInterval = 20; // Min milliseconds between dots
        
    //     // Create initial dot pool
    //     const fragment = document.createDocumentFragment();
    //     for (let i = 0; i < maxDots; i++) {
    //         const dot = document.createElement('div');
    //         dot.className = 'cursor-trail-dot';
    //         dot.style.cssText = `
    //             position: fixed;
    //             width: 8px;
    //             height: 8px;
    //             border-radius: 50%;
    //             background-color: ${colors[i % colors.length]};
    //             pointer-events: none;
    //             z-index: 9999;
    //             opacity: 0;
    //             transform: translate(-50%, -50%);
    //             will-change: opacity, transform;
    //             left: -100px;
    //             top: -100px;
    //             transition: opacity 1s ease, width 1.5s ease, height 1.5s ease;
    //         `;
    //         fragment.appendChild(dot);
    //         dotPool.push({
    //             element: dot,
    //             active: false,
    //             timeCreated: 0,
    //             x: -100,
    //             y: -100,
    //             vx: 0,
    //             vy: 0
    //         });
    //     }
    //     document.body.appendChild(fragment);
        
    //     // Mouse move handler
    //     document.addEventListener('mousemove', (e) => {
    //         const now = Date.now();
            
    //         // Throttle dot creation
    //         if (now - lastTimestamp < throttleInterval) return;
            
    //         // Skip if barely moved
    //         if (Math.abs(e.clientX - lastX) < 2 && Math.abs(e.clientY - lastY) < 2) return;
            
    //         lastTimestamp = now;
    //         lastX = e.clientX;
    //         lastY = e.clientY;
            
    //         // Get next dot to reuse
    //         const currentDot = dotPool[dotIndex];
            
    //         // Initialize the dot
    //         currentDot.x = e.clientX;
    //         currentDot.y = e.clientY;
    //         currentDot.vx = (Math.random() - 0.5) * 2; // Random velocity in x direction
    //         // currentDot.vy = (Math.random() - 0.5) * 2; // Random velocity in y direction
    //         currentDot.vy = (Math.random() - 0.5) * 2 - 1; // Slight upward bias for ember effect
            
    //         // Position the dot at current mouse position
    //         currentDot.element.style.left = `${currentDot.x}px`;
    //         currentDot.element.style.top = `${currentDot.y}px`;
    //         currentDot.element.style.width = `8px`;
    //         currentDot.element.style.height = `8px`;
    //         currentDot.element.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
    //         currentDot.element.style.opacity = 1;
    //         currentDot.active = true;
    //         currentDot.timeCreated = now;
            
    //         // Automatically fade out and shrink
    //         setTimeout(() => {
    //             currentDot.element.style.opacity = 0;
    //             currentDot.element.style.width = "2px";
    //             currentDot.element.style.height = "2px";
    //             setTimeout(() => {
    //                 currentDot.active = false;
    //             }, 1000);
    //         }, 500 + Math.random() * 500);
            
    //         // Move to next dot in the pool
    //         dotIndex = (dotIndex + 1) % maxDots;
    //     });
        
    //     // Animation loop for ember floating effect
    //     const animateEmbers = () => {
    //         dotPool.forEach(dot => {
    //             if (dot.active) {
    //                 // Add drift movement to active dots
    //                 dot.x += dot.vx;
    //                 dot.y += dot.vy;
    //                 dot.vy += 0.02; // Slight gravity effect
                    
    //                 // Apply some drag
    //                 dot.vx *= 0.98;
    //                 dot.vy *= 0.98;
                    
    //                 // Update position
    //                 dot.element.style.left = `${dot.x}px`;
    //                 dot.element.style.top = `${dot.y}px`;
    //             }
    //         });
    //         requestAnimationFrame(animateEmbers);
    //     };
        
    //     // Start animation loop
    //     animateEmbers();
        
    //     // Handle page visibility changes to prevent background processing
    //     document.addEventListener('visibilitychange', () => {
    //         if (document.hidden) {
    //             // Clear all dots when page is hidden
    //             dotPool.forEach(dot => {
    //                 dot.element.style.opacity = 0;
    //                 dot.active = false;
    //             });
    //         }
    //     });

    //     // Create hover particles for links and buttons
    //     const createHoverParticles = () => {
    //         const interactiveElements = document.querySelectorAll('a, button');
            
    //         interactiveElements.forEach(element => {
    //             // Create particle container for this element
    //             const particleContainer = document.createElement('div');
    //             particleContainer.className = 'hover-particle-container';
    //             particleContainer.style.cssText = `
    //                 position: absolute;
    //                 top: 0;
    //                 left: 0;
    //                 width: 100%;
    //                 height: 100%;
    //                 pointer-events: none;
    //                 overflow: visible;
    //                 z-index: 9990;
    //             `;
                
    //             // Make sure the element has position relative or absolute
    //             const elementPosition = window.getComputedStyle(element).position;
    //             if (elementPosition === 'static') {
    //                 element.style.position = 'relative';
    //             }
                
    //             element.appendChild(particleContainer);
                
    //             // Generate particles on hover
    //             element.addEventListener('mouseenter', () => {
    //                 const interval = setInterval(() => {
    //                     if (!element.matches(':hover')) {
    //                         clearInterval(interval);
    //                         return;
    //                     }
                        
    //                     createParticle(particleContainer);
    //                 }, 100);
    //             });
    //         });
    //     };
        
    //     // Create individual particle
    //     const createParticle = (container) => {
    //         const particle = document.createElement('div');
    //         const size = 5 + Math.random() * 5;
    //         const color = colors[Math.floor(Math.random() * colors.length)];
            
    //         // Position randomly around the container
    //         const x = Math.random() * 100;
    //         const y = Math.random() * 100;
            
    //         particle.style.cssText = `
    //             position: absolute;
    //             width: ${size}px;
    //             height: ${size}px;
    //             background-color: ${color};
    //             border-radius: 50%;
    //             left: ${x}%;
    //             top: ${y}%;
    //             transform: translate(-50%, -50%);
    //             opacity: 0.8;
    //             pointer-events: none;
    //             z-index: 9991;
    //         `;
            
    //         container.appendChild(particle);
            
    //         // Random movement
    //         const angle = Math.random() * Math.PI * 2;
    //         const speed = 1 + Math.random() * 3;
    //         const vx = Math.cos(angle) * speed;
    //         const vy = Math.sin(angle) * speed;
            
    //         let opacity = 0.8;
    //         const animateParticle = () => {
    //             // Update position
    //             const currentLeft = parseFloat(particle.style.left);
    //             const currentTop = parseFloat(particle.style.top);
                
    //             particle.style.left = `${currentLeft + vx * 0.2}%`;
    //             particle.style.top = `${currentTop + vy * 0.2}%`;
                
    //             // Fade out
    //             opacity -= 0.02;
    //             particle.style.opacity = opacity;
                
    //             if (opacity > 0) {
    //                 requestAnimationFrame(animateParticle);
    //             } else {
    //                 container.removeChild(particle);
    //             }
    //         };
            
    //         requestAnimationFrame(animateParticle);
    //     };
        
    //     // Initialize hover particles
    //     createHoverParticles();
    // };

    // // Initialize rainbow cursor trail
    // createRainbowCursorTrail();
});