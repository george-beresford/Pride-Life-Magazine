<header>
    <div class="row align-items-center">
        <div class="col">
            <a id="brand" href="<?= get_site_url(); ?>/" title="<?= $config['title']['brand_name']; ?>">
                <img src="<?= get_site_url(); ?>/assets/svg/pride-life-magazine.svg" alt="<?= $config['title']['brand_name']; ?>" class="object-fit-contain">
            </a>
        </div>
        <div class="col">
            <a href="#hamburger-menu" data-role="hamburger-menu" data-action="open" title="Expand hidden navigation menu">
                <span class="visually-hidden">Expand menu</span>
                <icon>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path d="M4,10 44,10"></path>
                        <path d="M4,24 44,24"></path>
                        <path d="M4,38 44,38"></path>
                    </svg>
                </icon>
            </a>
        </div>
    </div>
</header>
<nav id="hamburger-menu" class="close" tabindex="-1">
    <div class="overscroll-container">
        <h4 class="sticky sticky-top">Explore topics in this issue</h4>
        <div class="row">
            <div class="col">
                <ul class="list-unstyled d-flex flex-column" id="main-menu">
                    <li><a href="#front-cover" title="Home">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // Find scroll-snap-y element
        const scrollSnapY = document.querySelector('.scroll-snap-y');
        if (!scrollSnapY) return;

        // Get all direct child sections within scroll-snap-y
        const sections = Array.from(scrollSnapY.children).filter(
            el => el.tagName.toLowerCase() === 'section'
        );
        if (sections.length === 0) return;

        // Create a navigation menu
        const navMenu = document.querySelector('#hamburger-menu ul');

        // Track IDs to avoid duplicates
        const addedIds = new Set();

        // Process each section
        sections.forEach(section => {
            // Find the first heading (h2, h3, etc)
            const heading = section.querySelector('h2, h3, h4, h5, h6');
            if (!heading) return;

            // Create an ID for the section if it doesn't have one, using the heading text
            if (!section.id) {
                // Sanitize heading text: lowercase, replace spaces with dashes, remove non-alphanumerics
                let baseId = heading.textContent
                    .toLowerCase()
                    .replace(/\s+/g, '-')
                    .replace(/[^a-z0-9\-]/g, '')
                    .replace(/-+/g, '-')
                    .replace(/^-|-$/g, '');
                // Ensure unique ID if duplicate
                let uniqueId = baseId;
                let suffix = 1;
                while (document.getElementById(uniqueId) || addedIds.has(uniqueId)) {
                    uniqueId = baseId + '-' + suffix++;
                }
                section.id = uniqueId;
            }

            // Skip if we've already added this ID
            if (addedIds.has(section.id)) return;
            addedIds.add(section.id);

            // Create list item for this section
            const li = document.createElement('li');
            const a = document.createElement('a');
            a.href = '#' + section.id;
            a.textContent = heading.textContent;
            a.title = heading.textContent;
            li.appendChild(a);

            // Here you could add children (e.g., sub-sections) if needed

            navMenu.appendChild(li);
        });

        // Function to navigate to and focus an element by its ID
        function navigateToElement(id) {
            if (!id) return;

            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
                element.focus({ preventScroll: true });
                // If the element isn't focusable, set a tabindex temporarily
                if (!element.hasAttribute('tabindex')) {
                    element.setAttribute('tabindex', '-1');
                    element.focus();
                    // Remove the tabindex after focusing
                    setTimeout(() => element.removeAttribute('tabindex'), 100);
                }
            }
        }

        // Scroll the overscroll-container to center the active link if possible
        function centerActiveNavLink() {
            const container = document.querySelector('#hamburger-menu .overscroll-container');
            if (!container) return;
            const activeLink = container.querySelector('li > a.active');
            if (!activeLink) return;

            // Get container and link positions
            const containerRect = container.getBoundingClientRect();
            const linkRect = activeLink.getBoundingClientRect();

            // Calculate the offset needed to center the link
            const containerScrollTop = container.scrollTop;
            const linkOffsetTop = activeLink.offsetTop;
            const linkHeight = activeLink.offsetHeight;
            const containerHeight = container.clientHeight;

            // Desired scrollTop to center the link
            let targetScrollTop = linkOffsetTop - (containerHeight / 2) + (linkHeight / 2);

            // Clamp to valid scroll range
            targetScrollTop = Math.max(0, Math.min(targetScrollTop, container.scrollHeight - containerHeight));

            // Smooth scroll
            container.scrollTo({ top: targetScrollTop, behavior: 'smooth' });
        }

        // Handle popstate events for browser history navigation
        window.addEventListener('popstate', function(event) {
            if (location.hash) {
                // Remove the # character to get the ID
                const id = location.hash.substring(1);
                navigateToElement(id);
                setTimeout(centerActiveNavLink, 200);
            }
        });

        // Also handle the initial page load with a hash
        if (location.hash) {
            // Use setTimeout to ensure the page is fully loaded
            setTimeout(() => {
                const id = location.hash.substring(1);
                navigateToElement(id);
                setTimeout(centerActiveNavLink, 200);
            }, 100);
        }

        // Watch for class changes on nav links to center the active one
        const hamburgerMenu = document.getElementById('hamburger-menu');
        if (hamburgerMenu) {
            const navLinks = hamburgerMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                // Use MutationObserver to watch for class changes
                const observer = new MutationObserver(mutations => {
                    mutations.forEach(mutation => {
                        if (
                            mutation.type === 'attributes' &&
                            mutation.attributeName === 'class' &&
                            link.classList.contains('active')
                        ) {
                            setTimeout(centerActiveNavLink, 100);
                        }
                    });
                });
                observer.observe(link, { attributes: true, attributeFilter: ['class'] });
            });
        }

        // --- Add close after delay after scrolling nav active menu item ---
        // Helper to get menu trigger and toggle function
        const menuTrigger = document.querySelector('[data-role="hamburger-menu"]');
        function toggleMenu(trigger) {
            const menuId = trigger.getAttribute("href")?.substring(1);
            if (!menuId) return;
            const nav = document.getElementById(menuId);
            if (!nav) return;
            if (nav.classList.contains('open')) {
                nav.classList.remove('open');
                nav.classList.add('close');
                trigger.dataset.action = 'open';
            } else if (nav.classList.contains('close')) {
                nav.classList.remove('close');
                nav.classList.add('open');
                trigger.dataset.action = 'close';
            }
        }

        // Close menu when any link inside nav is clicked (with short delay)
        const closeMenuOnNavLinkClick = () => {
            const navMenuId = document.querySelector('[data-role="hamburger-menu"]')?.getAttribute("href")?.substring(1);
            if (navMenuId) {
                const navElement = document.getElementById(navMenuId);
                const navLinks = navElement?.querySelectorAll('a');
                
                navLinks?.forEach(link => {
                    link.addEventListener('click', (e) => {
                        // Only close if menu is currently open
                        if (menuTrigger && menuTrigger.dataset.action === 'close') {
                            // Scroll to section and center nav active item first
                            setTimeout(() => {
                                setTimeout(() => {
                                    toggleMenu(menuTrigger);
                                }, 500); // 500ms delay before closing
                            }, 200); // Wait for scroll/center
                        }
                    });
                });
            }
        };
        
        // Initialize nav link click handler
        closeMenuOnNavLinkClick();
    });
</script>