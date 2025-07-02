<?php
    $config['title']['page_title'] = "The Pride Issue - The Bitter and the Sweet (ISSUE 38 SUMMER 2025)";
    require_once(__DIR__.'/includes/@site.config.php');
    require_once(__DIR__.'/includes/@functions.php');
?>
<?php require __DIR__.'/includes/header.php'; ?>
<!-- <main class="scroll-snap-y"> -->
    <!-- FRONT COVER: BILLY PORTER -->
    <section class="hero hero-fullscreen" id="front-cover">
        <div class="background">
            <?php /* <video class="object-fit-cover w-100" poster="<?= get_site_url(); ?>/assets/video/1280x720-video-poster.jpg" muted loop playsinline autoplay disablepictureinpicture disableremoteplayback nodownload>
                <source src="<?= get_site_url(); ?>/assets/video/1280x720-video.webm" type='video/webm; codec="vp8, vorbis"'>
                <source src="<?= get_site_url(); ?>/assets/video/1280x720-video--H264.mp4" type='video/mp4; codec="h.264"'> // Must ensure the video is encoded with H.264 codec for safari iOS autoplay
                <!-- Your browser does not support the video tag. -->
            </video> */ ?>

            <img class="object-fit-cover w-100" loading="lazy" src="<?= get_site_url(); ?>/assets/img/front-cover/Billy-Porter-by-Meredith-Truax.webp" alt="Billy Porter by Meredith Truax" />
        </div>
        <div class="container h-100 align-content-center">
            <div class="row">
                <div class="col">
                    <h1>
                        <small>ISSUE 38 SUMMER 2025 • THE PRIDE ISSUE</small>
                        THE BITTER AND<br /> THE SWEET
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="lead"><span class="accent">BILLY PORTER</span> ON PRIDE AND HIS STUNNING NEW PLAY</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>IN PROUD ASSOCIATION WITH <a href="https://prideinlondon.org/" title="Pride in London" target="_blank"><img src="<?= get_site_url(); ?>/assets/img/sponsors/pride-in-london.svg" alt="Pride in London" /></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="#the-bitter-and-the-sweet" title="Read the Digital Magazine" class="btn btn-default btn-pill">Jump to read Billy Porter's Interview</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>INTERVIEWS <span class="muted">|</span> TRAVEL <span class="muted">|</span> ENTERTAINMENT <span class="muted">|</span> ISSUES <span class="muted">|</span> DIVERSITY <span class="muted">|</span> TECH</p>
                </div>
            </div>
            <!-- <ul class="sneak-peeks">
                <li>HAPPY PRIDE!
                    THE OFFICIAL GUIDE TO PRIDE IN LONDON</li>
                <li>PRIDE ON!
                    YOUR ESSENTIAL GUIDE TO UK PRIDES AND BEYOND</li>
                <li>#VOLUNQUEER
                    BRINGING PRIDE TO YOU</li>
                <li>OUT AND SERVING
                    25 YEARS IN THE FORCES</li>
                <li>BLACK AND PROUD
                    CELEBRATING 20 YEARS OF BLACK PRIDE WITH LADY PHYLL</li>
            </ul> -->
        </div>
        <!-- <div class="cover-footer">
            <div class="container h-100 align-content-center">
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div> -->
    </section>

    <?php /* Piemonte Italy 02-03 italy.pdf */ ?>
    <section class="advert">
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'Piemonte Italy',
                'content' => '',
                'image' => get_site_url() . '/adverts/Piemonte-Italy-01.webp',
                'image_alt' => 'Let Piemonte surprise you with its extraordinary heritage of culture, history and tradition. Start your visit in the charming city of Torino, the first capital of Italy, rich in art and cultural events. Then, discover the immense offer of Piemonte, from mountains to lakes, through rolling hills and evocative towns and villages.',
                'image_credit' => '',
                'hyperlink' => array('text' => '', 'url' => ''),
            ]); ?>
            <?php echo create_layout('advert', $args = [
                'title' => 'Piemonte Italy',
                'content' => '',
                'image' => get_site_url() . '/adverts/Piemonte-Italy-02.webp',
                'image_alt' => 'Its outstanding nature and enchanting landscapes! Friendly Piemonte warmly welcomes all LGBT tourists and ensures you have the best and safest travel experience in Torino and Piemonte. Thanks to committed professionals and travel experts, the great tourist offer of the region is now enriched with beautiful rainbow colours.',
                'image_credit' => '',
                'hyperlink' => array('text' => '', 'url' => ''),
            ]); ?>
        </div>
    </section>

    <?php /* 004-005 CONTENTS.pdf */ /* NOT ADDED DUE TO MENU NAVIGATION */ ?>

    <?php /* 006 Mayor's intro.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-pink); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'MESSAGE FROM THE MAYOR OF LONDON',
                'content' => '#I’m thrilled to welcome you to Pride in London 2025 – one of the most vibrant, inclusive and affirming celebrations in the world.
                London stands proudly at the forefront of championing LGBTQI+ rights. Our city is home to people of every background, identity and orientation – and it’s this diversity that makes London truly great. Pride is a moment to celebrate that greatness and stand together in solidarity as we send a message to the world that in London you are free to be who you are and to love who you love.
                From across the UK and beyond, over a million people join us each year to take part in an all-inclusive, joyous celebration of love, equality and solidarity. It’s an unforgettable day and a vital declaration of support for LGBTQI+ people everywhere.',
                'image' => get_site_url() . '/articles/mayor-of-london/headshot.webp',
                'image_alt' => '',
                'image_credit' => 'PICTURES © GREATER LONDON AUTHORITY',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'MESSAGE FROM THE MAYOR OF LONDON',
                'content' => 'At a time when hard won rights are being challenged both here and around the world, Pride is as important as ever. It is vital that we remain united and vigilant and show that London will always be a beacon for openness, equality and LGBTQI+ rights.
                Our LGBTQI+ communities make a vital contribution to the cultural, social and political life of our capital, and I will always stand alongside you as we build a better London for everyone.
                Together we march to honour those who came before us, celebrate how far we’ve come and support the ongoing fight for equality.
                Happy Pride!
                #<strong>Sadiq Khan<br />Mayor of London</strong>',
                'image' => get_site_url() . '/articles/mayor-of-london/photos.webp',
                'image_alt' => '',
                'image_credit' => 'PICTURES © GREATER LONDON AUTHORITY',
            ]); ?>
        </div>
    </section>

    <?php /* 007 Welcome Pride in London.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'WELCOME TO PRIDE IN LONDON 2025',
                'content' => 'As we gather once again to mark Pride season, I find myself reflecting on the extraordinary duality that defines our movement today. We stand at a moment where our community faces unprecedented challenges – fromthe alarming rise in anti-LGBTQ+ legislation across the globe to the persistent inequalities that continue to affect our most vulnerable members.
                Yet simultaneously, we witness an explosion of visibility, acceptance, and joy that would have seemed impossible to previous generations of LGBTQ+ pioneers.
                This year’s Pride celebrations carry particular weight. While we continue to see progress in some corporate spaces and growing visibility in mainstream culture, we also confront the sobering reality that hate crimes against our community have reached troubling heights.',
                'image' => get_site_url() . '/articles/welcome-to-pride-london/cover.webp',
                'image_alt' => 'Pride in London (https://prideinlondon.org/)',
                'image_credit' => '© Pride in London (prideinlondon.org)',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'While young people come out earlier and with greater family support than ever before, transgender individuals – particularly trans youth and people of colour – face systematic attacks on their very right to exist authentically.
                But here’s what I know to be true: our strength has always emerged from this tension between struggle and celebration. Pride was born from protest, forged in the fires of resistance, and sustained by an unshakeable belief that love, in all its forms, deserves to be lived openly and without fear.
                This magazine celebrates that defiant joy. Within these pages, you’ll find stories of triumph alongside calls to action, profiles of trailblazers next to features about everyday heroes making their communities more inclusive.
                You’ll discover the businesses, artists, and activists who refuse to let setbacks dim their light, who understand that visibility remains our most powerful tool for change.
                To our long-time readers, thank you for your commitment to equality. To those picking up this magazine for the first time, welcome to a movement that embraces you exactly as you are. To the young people reading this who might still be finding their place in the world, know that your identity is a gift, not a burden.',
                'image' => get_site_url() . '/articles/welcome-to-pride-london/cover.webp',
                'image_alt' => 'Pride in London (https://prideinlondon.org/)',
                'image_credit' => '© Pride in London (prideinlondon.org)',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '',
                'content' => 'Pride in London isn’t just another event – it’s the heartbeat of our capital’s LGBTQ+ community and a beacon for equality across the UK. As one of the world’s most diverse and inclusive cities, London has always been a sanctuary for those seeking acceptance and authenticity.
                Our Pride represents that spirit on a global stage, showing the world what’s possible when a city truly embraces all its citizens. From the historic streets of Soho to the corridors of Westminster, Pride in London demonstrates that our community isn’t just surviving – we’re thriving, leading, and shaping the future of equality for generations to come.
                As we march, dance, and celebrate this Pride season, let us carry forward both our joy and our determination. Let us remember that every rainbow flag displayed, every authentic conversation shared, and every moment of unapologetic self-expression contributes to a world where future generations will inherit greater freedom than we found.
                The road ahead remains long, but we walk it together – with pride, with purpose, and with the unshakeable knowledge that our resistance and our joy are equally powerful forces for change.
                With solidarity and celebration,
                #<strong>Christopher Joell-Deshields<br />CEO of Pride in London</strong>',
                'image' => get_site_url() . '/articles/welcome-to-pride-london/Christopher-Joell-Deshields.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
        </div>
    </section>

    <?php /* 008-009 Pride map.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'DON’T LET THE PARADE PASS BY!',
                'content' => 'Kicking off at 12:00 on 5 July, the parade runs from Hyde Park Corner, through Piccadilly Circus, down Haymarket and along Pall Mall to Trafalgar Square, culminating at Whitehall Place. Attendees can watch from any of the designated public spaces along the route.
                The parade will see around 500 groups made up from LGBTQ+ Community Groups, LGBTQ+ businesses, and partners, forming together to make our total over 40,000 participants.
                The parade is free to watch!',
                'image' => get_site_url() . '/articles/london-pride-map-2025/map.webp',
                'image_alt' => 'Pride in London (https://prideinlondon.org/)',
                'image_credit' => '© Pride in London (prideinlondon.org)',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => 'STAGES',
                'content' => 'Get ready to be blown away by the vibrant celebration of diversity at Pride in London!
                We’re thrilled to present a captivating lineup of talented artists who represent the true beauty of our rainbow family. Brace yourself for an extraordinary showcase of performances that will leave you in awe. And guess what? All stages are absolutely free! The festivities kick off at 12:00 and continue throughout the day with performances scheduled at various times.
                Remember, entry to all areas of the event is on a first-come, first-served basis. So don’t miss out!
                #TRAFALGAR SQUARE STAGE
                The Trafalgar Square Stage is set to be bigger and more vibrant than ever this year. This iconic location will be the epicentre of the celebrations, drawing an anticipated crowd of over 5,000 visitors eager to experience the magic of Pride.
                #LGBTQIA+ WOMEN AND NON BINARY STAGE AT LEICESTER SQUARE
                This stage is a haven for LGBTQIA+ women and non-binary individuals. Immerse yourself in a world of awe-inspiring performances specially curated for this incredible community. This stage is also a hub of diverse stalls offering an array of delightful food and beverages.
                #GOLDEN SQUARE STAGE
                Get ready for a one-of-a-kind experience at the Golden Square Stage, where a diverse group of performers will take centre stage. Witness the best of their performances in a breathtaking display of talent that will leave you craving for more. Of course, this stage also offers a fantastic range of stalls filled with tempting treats and refreshing drinks.
                Go to: www.prideinlondon.org',
                'image' => get_site_url() . '/articles/london-pride-map-2025/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => 'STAGES',
                'content' => '#SOHO SQUARE STAGE
                Our trans-led stage at Soho Square is a dedicated space for trans artists and hosts, who will be presenting a fantastic array of performances, speeches and activism, showcasing a truly unforgettable afternoon. With stalls offering an exciting variety of goodies, delicious beverages, and delectable food, this stage is a must-visit.
                #DEAN STREET STAGE
                Prepare to be mesmerised as our drag kings and queens lead the way to an incredible lineup of over 25 cabaret artists and performers! This stage is set to be an absolute extravaganza of talent, with each artist delivering a performance that will leave you spellbound.
                #FAMILY AREA
                For our LGBTQ+ families, we have a dedicated space at Victoria Embankment Gardens. Join us in this delightful area, where you and your children can enjoy a range of engaging activities and captivating performances.
                Go to: www.prideinlondon.org',
                'image' => get_site_url() . '/articles/london-pride-map-2025/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('full-media', $args = [
                'title' => 'Pride in London 2025 Map',
                'content' => '',
                'image' => get_site_url() . '/articles/london-pride-map-2025/map.webp',
                'image_alt' => 'Pride in London (https://prideinlondon.org/)',
                'image_credit' => '© Pride in London (prideinlondon.org)',
            ]); ?>
        </div>
    </section>

    <?php /* 010-011 Volunqueers.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'VOLUNQUEER!',
                'content' => '#PRIDE IN LONDON’S 2025 CAMPAIGN THEME CELEBRATES THOSE ACTIVELY SUPPORTING LGBTQ+ CAUSES
                Volunteering has always been core to the LGBTQ+ movement - and in 2025, LGBTQ+ organisations need active support more than ever.',
                'image' => get_site_url() . '/articles/volunqueers/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“Resilience is at the heart of our community”',
                'content' => 'Resilience is at the heart of our community - and in challenging times, LGBTQ+ people and their allies need to stand firm, stand together, and take meaningful action to support each other.
                For this year’s campaign, Pride in London is asking people to give their time, energy and presence to LGBTQ+ charities and organisations, by calling on community members and allies to Volunqueer.
                The campaign shines a spotlight on some of the everyday heroes already undertaking acts of selflessness for their community through a striking series of images, alongside a series of punchy taglines calling on the LGBTQ+ community and their allies to lend their support however they can.',
                // 'image' => get_site_url() . '/articles/volunqueers/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => ' “Volunqueering brings me joy and fulfillment. It’s the seed you plant, even if you never see the flower grow,” says Josh, one of the participants in the campaign. 
                As an LGBTQ+ community member or ally, there are many things you can do to support and uplift: from fundraising, to volunteering with grassroots organisations, to protesting. 
                As part of the campaign, a new website has launched, volunqueer.uk, with a number of helpful links and resources on organisations and initiatives that could benefit from your support. 
                #Go to: www.volunqueer.uk',
                'image' => get_site_url() . '/articles/volunqueers/volunqueers.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => 'The cast of the campaign include:',
                'content' => '#Saima
                runs Rainbow Chai, a support group for South Asian parents of LGBTQ+ children, helping families grow in love and understanding.
                
                #Eva
                fights for trans rights through legal action, public campaigns, police education, and youth advocacy - always centring community voices.
                
                #Jason
                is part of Not a Phase and creates vital spaces for trans people — from hosting peer groups and radio shows to organising retreats and community kitchens.
                
                #Dhiren
                supports LGBTQ+ people in crisis as a helpline volunteer for Switchboard and London Friend.
                
                #Rayyan
                shares their personal story as a Just Like Us ambassador, visiting schools to support young LGBTQ+ people and promote inclusion.
                
                #Alex
                is part of the LGBTQ+ ERG at TFL and who supports multiple charities, proving change begins in everyday spaces.
                
                #Josh 
                volunteers with Pride in London to help organise the parade, bringing joy, logistics and people together on the biggest day of the year.
                
                #Emy
                champions queer wellness through yoga, energy healing, and by organising London’s first LGBTQ+ wellness festival.',
                // 'image' => get_site_url() . '/articles/volunqueers/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ], "accented"); ?>
        </div>
    </section>

    <?php /* 012 Durex AD.pdf */ ?>
    <?php echo create_layout('advert', $args = [
        'title' => 'Durex® UK',
        'content' => '',
        'image' => get_site_url() . '/adverts/Durex-01.webp',
        'image_alt' => 'Durex. LOVE IS YOUR CHOICE. *Use as directed.',
        'image_credit' => '',
        'hyperlink' => array('text' => 'Visit the Official Durex® UK Store', 'url' => 'https://durex.co.uk/'),
    ]); ?>

    <?php /* 013 Pride by numbers.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-pink); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'PRIDE BY NUMBERS',
                'content' => '',
                'image' => get_site_url() . '/articles/pride-by-numbers/cover.webp',
                'image_alt' => '40,000 people will be taking part in the Parade this year. 500 groups will be walking in the Parade. 53 years since the first Pride march in London. £1.7 million – the cost to produce the annual Pride in London. 6 fantastic stages bringing you the best of free entertainment. 25 years of being out and proud in the service. 5,000 celebrating in Trafalgar Square. 1.5 million spectators watching the Parade. Number 1 Pride in the UK and the second biggest day out in London. Over 1,000 volunteers helping out on the day. One Ninetyfour – Piccadilly and the only place to be for the official Pride After Party.',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '#Pride in London 2025 – Key Stats',
                'content' => '<strong>40,000 people will be taking part</strong> in the Parade this year.
                <strong>500 groups</strong> will be walking in the Parade.
                <strong>53 years since the first Pride march in London.</strong>
                <strong>£1.7 million</strong> – the cost to produce the annual Pride in London.
                <strong>6 fantastic stages</strong> bringing you the best of free entertainment.
                <strong>25 years</strong> of being out and proud in the service.
                <strong>5,000 celebrating</strong> in Trafalgar Square.
                <strong>1.5 million spectators</strong> watching the Parade.
                <strong>Number 1 Pride in the UK</strong> and the second biggest day out in London.
                Over <strong>1,000 volunteers</strong> helping out on the day.
                <strong>One Ninetyfour – Piccadilly</strong> and the only place to be for the official Pride After Party.',
                'image' => get_site_url() . '/articles/pride-by-numbers/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>
        </div>
    </section>

    <?php /* 014-015 Pride in London 2024.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-pink); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'HERE, THERE AND EVERYWHERE!',
                'content' => '#WeAreEverywhere was the theme of last year’s Pride in London.
                In every space, in every place and in every moment you made our fabulous presence felt, proving that London is one of the most amazing and LGBTQ+- supporting cities in the world. Let’s make this year’s celebration another one to be proud of!
                #Go to: www.prideinlondon.org',
                'image' => get_site_url() . '/articles/pride-london-2024/full-media-01.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('full-media', $args = [
                'title' => '',
                'content' => '',
                'image' => get_site_url() . '/articles/pride-london-2024/full-media.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ], "accented"); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '',
                'content' => '#Go to: www.prideinlondon.org',
                'image' => get_site_url() . '/articles/pride-london-2024/full-media-02.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
        </div>
    </section>

    <?php /* 016 Pride pints.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-pink); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => 'A PINT OF PRIDE',
                'content' => '#0% ALCOHOL, 100% SOLIDARITY
                PINT OF PRIDE IS THE NEWEST WAY FOR HOSPITALITY BUSINESSES TO SHOW SUPPORT FOR THE LGBTQ+ COMMUNITY DURING PRIDE SEASON.',
                'image' => get_site_url() . '/articles/pint-of-pride/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => 'From June 2025 onwards, if you’re in a bar or restaurant you may notice the option to buy a “Pint of Pride” on a menu - an “invisible pint” which is part of a game-changing fundraising campaign to support Pride in London. It’s simple for hospitality businesses to adopt, and one which makes pledging support to the UK’s largest free Pride event easier than ever for the LGBTQ+ community and their allies.
                Donations made go directly to Pride in London to support the organisation, the parade day and grassroots organisations via Pride in London’s Unity Fund.',
                'image' => get_site_url() . '/articles/pint-of-pride/logo.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“A large proportion of the hospitality workforce is likely to be LGBTQ+ or have close friends or family who are”',
                'content' => 'Pride in London has been rolling the initiative out with some fantastic pub and hospitality partners in the run-up to July, beginning with Market Halls - the organisation behind some of London’s best and most popular food halls.
                Over 50% of hospitality workers in London are aged under 30, and a large proportion of the hospitality workforce is likely to either be LGBTQ+ or have close friends or family who are.
                Buying a Pint of Pride for just £5 isn’t about the drink - it’s a donation that helps keep Pride in London free, supports queer communities through the Pride Unity Fund, and raises vital visibility at a time when LGBTQ+ rights are under threat around the world.',
                'image' => get_site_url() . '/articles/pint-of-pride/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
        </div>
    </section>

    <?php /* 017 Pride Theatre.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'PRIDE TAKES CENTRE STAGE',
                'content' => 'CULTURE AND COMMUNITY COME TOGETHER AS PRIDE IN LONDON AND ATG ENTERTAINMENT JOIN FORCES FOR PRIDE IN THEATRE MONTH.',
                'image' => get_site_url() . '/articles/pride-theatre/stranger-things-the-first-shadow.webp',
                'image_alt' => 'PICTURES: NO SWAN SO FINE, CELSO',
                'image_credit' => 'PICTURES: NO SWAN SO FINE, CELSO',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => 'Live entertainment holds a powerful place in the lives of so many LGBTQ+ people and allies, and has a hugely important role to play in creating space for LGBTQ+ stories.
                This year, ahead of the 2025 parade, Pride in London is teaming up with ATG Entertainment, the company behind the UK’s largest theatre group, to launch the first-ever Pride in Theatre Month across London’s West Ed.
                Throughout June and July, ATG Entertainment venues will be joining forces with Pride in London to bring celebration, community, and activism to where the spotlight
                shines brightest.
                Ten iconic venues are taking part, with venues hosting a range of fundraising initiatives throughout the month - which will directly support Pride in London and grassroots LGBTQ+ projects through the organisation’s Unity Fund.',
                'image' => get_site_url() . '/articles/pride-theatre/moulin-rouge.webp',
                'image_alt' => 'PICTURES: NO SWAN SO FINE, CELSO',
                'image_credit' => 'PICTURES: NO SWAN SO FINE, CELSO',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '',
                'content' => 'Audience members will be able to donate through various means whilst in the venues – supporting Pride in London and their wider
                community partnerships in celebrating LGBTQ+ identities through culture, creativity, and collective pride. The partnership reaffirms ATG’s belief in the power of live performance to bring people together, foster understanding, and amplify voices that deserve to be heard.
                It’s a true world-first, with London becoming the first city of the world where a major theatre group has partnered with a major Pride organisation to dedicate an entire month to visibly supporting the LGBTQ+ community. As Pride in London’s Director of Partnerships & Growth Dee Llewellyn says: “It shows what’s possible when culture and community come together with purpose, and we hope it sets a new global benchmark for solidarity and impact.”',
                'image' => get_site_url() . '/articles/pride-theatre/stranger-things-the-first-shadow.webp',
                'image_alt' => 'PICTURES: NO SWAN SO FINE, CELSO',
                'image_credit' => 'PICTURES: NO SWAN SO FINE, CELSO',
            ]); ?>
        </div>
    </section>

    <?php /* 018 Pride shop.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-red); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'PRIDE IN LONDON’S POP-UP SHOP',
                'content' => '#A VIBRANT HUB FOR CONNECTION AND CELEBRATION IN THE HEART OF SOHO.
                This year, Pride in London is hosting a Pop-Up shop in central London, combining retail, community engagement and events to create a vibrant hub for connection and celebration throughout Pride Month and until Pride in London’s parade day on 5 July 2025. It is a vibrant hub for connection and celebration in the heart of Soho.',
                'image' => get_site_url() . '/articles/pride-pop-up-shop/pride-apparel-01.webp',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '',
                'content' => 'Located at 7 Walkers Court, W1, the space has been created and designed to strengthen community bonds, fundraise for vital causes, and increase awareness of Pride in London’s mission: to unite against inequality and advocate for equal rights and freedoms for all LGBTQ+ individuals.
                It’s a space where people can come together, be themselves, and show their support for LGBTQ+ causes and Pride in London’s values of Visibility, Unity and Equality.
                Walker’s Court is a beloved Soho night-time destination, home to The Box and the Underbelly Boulevard Theatre, and close to the likes of Rupert Street Bar, The Yard Bar, and The Village.',
                'image' => get_site_url() . '/articles/pride-pop-up-shop/pride-apparel-03.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '
                It’s an ideal spot for locals and visitors alike. The space has been donated by Soho Estates, supporting Pride in London’s return to the neighbourhood that has long been at the heart of LGBTQ+ life in the capital. Soho plays a key role in the Pride celebrations each year, hosting three of the post-parade community stages at Golden Square, Soho Square, and Dean Street.
                Fawn James, Chief Executive of Soho Estates, said: “Soho has always stood for freedom, creativity, and inclusion. We’re proud to support Pride in London with a space that reflects those values and celebrates the community that continues to shape this unique neighbourhood.”
                Rebecca Paisis, Operations Director at Pride in London, said: “We’re so grateful to Soho Estates for giving us the space to open Pride in London’s pop-up LGBTQ+ community hub and shop in the heart of Soho. It feels like we’re back where we belong and surrounded by the people and spirit that make Pride in London so special.”
                Pride in London is a volunteer-led organisation which relies on the passion and dedication of thousands to deliver the UK’s largest free-toattend Pride event. The Pop-Up space is more than just a shop; it’s an opportunity for people to connect with like-minded individuals and contribute to the organisation’s vital work
                advancing LGBTQ+ rights and visibility.
                The pop-up will be open until 6 July 2025, Wednesday through Sunday, from 11am to 9:30pm.
                Come by, stock up, and celebrate Pride in London where it’s proudly visible.',
                // 'image' => get_site_url() . '/articles/pride-pop-up-shop/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => 'WHAT YOU’LL FIND AT PRIDE IN LONDON’S POP-UP SHOP',
                'content' => '• Pride in London merchandise
                • A Volunqueer pledge message board, where attendees can write their volunqueering pledges
                • Information centre for Pride in London
                • Opportunities to volunteer throughout the year
                • A lounge and bar area for drinks, coffee and gelato',
                'image' => get_site_url() . '/articles/pride-pop-up-shop/pride-apparel-02.webp',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>
        </div>
    </section>
        
    <?php /* 019 Wakeman.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'TAKING PRIDE',
                'content' => 'THIS YEAR ON 5 JULY OVER 40,000 PEOPLE WILL BE MARCHING IN THE PRIDE PARADE WITH MANY MORE THOUSANDS WATCHING ON AND JOINING IN OUR CELEBRATION. BUT IT WASN’T ALWAYS LIKE THAT. 
                IN THIS ARTICLE WHICH FIRST APPEARED IN AN EARLIER ISSUE OF PRIDE LIFE, GAY LIBERATION FRONT VETERAN, THE LATE <strong>ALAN WAKEMAN</strong>, RECALLED FIRST MARCHING FOR GAY RIGHTS IN 1971',
                'image' => get_site_url() . '/articles/alan-wakeman/cover.webp',
                'image_alt' => 'PICTURE: ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971',
                'image_credit' => 'PICTURE: ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971',
            ], "accented"); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => 'Wednesday 23 June 1971',
                'content' => '#My first attempt at Gay Pride
                I’m at a meeting of the Gay Liberation Front (GLF) at All Saints Church Hall in London’s Notting Hill listening to an imposing man from the counter-psychiatry group describe “aversion therapy” to several hundred outraged gay people. 
                “In this so-called ‘treatment’,” he says, “gay victims are restrained and stimulated with erotic photos while electric shocks are administered to their genitals.” He responds to our anger by asking for volunteers to march down Harley Street and paint black crosses on the doors of the guilty psychiatrists.
                Two days later, when I see the tiny group in Cavendish Square and their banner, NO TO AVERSION THERAPY, they look so few and so vulnerable that I’m ashamed to admit I don’t dare join them! I will myself to do it but fail.
                Nor can I walk away but instead pathetically follow them along a parallel street listening to them chanting: 
                #“Give us a G!/ Give us an A!/ Give us a Y!/ What does that spell?/ Gay!/ What is gay?/ Good!/ What else is gay?/ Angry!”
                I silently mouth the replies but still can’t join, which means something else the man from the counter-psychiatry group said is true too: “Self-oppression is the ultimate subjugation as the gay person internalises straight people’s definitions of what is good and bad.” Chastened but thoughtful, I stumble home alone.
                Next morning I realise yesterday was a watershed for me all the same because acknowledging my self-oppression is a necessary step towards overcoming it.',
                // 'image' => get_site_url() . '/articles/alan-wakeman/cover.webp',
                // 'image_alt' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
                // 'image_credit' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
            ]); ?>

            <?php echo create_layout('split-default', $args = [
                'title' => '“At Marble Arch tube I find more happy gay people than I’ve seen in my entire life”',
                // 'content' => '',
                // 'image' => get_site_url() . '/articles/alan-wakeman/cover.webp',
                // 'image_alt' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
                // 'image_credit' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
            ], "accented"); ?>

            <?php echo create_layout('split-editorial', $args = [
                'title' => 'Saturday 28 August 1971 ',
                'content' => '#Gay Pride Achieved
                The GLF Youth Group has organised a protest march against the then male age of consent (21) and this time I’ve eliminated any chance of copping out by wearing my jumpsuit embroidered with “Alan” and “Gay Love” on the breast pocket and a rainbow on the epaulettes, plus all my gay badges and a peaked cap also embroidered with “Gay Love” and my name.
                So I already feel “Out and Proud” as I set off for Marble Arch tube where I find more happy gay people than I’ve seen in my entire life – and also discover that just “being in the majority” is a liberating experience in itself.
                Now we’re ambling down Oxford Street past crowds of Saturday shoppers, “protected” by the police. It’s true that yesterday I thought people might throw stones but today I observe that most onlookers simply aren’t interested; a few look scared but many are cheering us on – so, by the time we reach Bond Street I’m so elated I go up to a gorgeous long-haired, bearded angel and say,
                “You’re lovely! Can I kiss you?” “Yes, if you want to,” he says. So I do! Then I do it again with another! And again, for the rest of the day – till I’ve kissed more divine men than I knew existed! I spot two elderly women huffing and puffing at a bus stop, clearly outraged, but today we’re the majority and they’re the psychologically disturbed!',
                // 'image' => get_site_url() . '/articles/alan-wakeman/cover.webp',
                // 'image_alt' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
                // 'image_credit' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'Saturday 28 August 1971 ',
                'content' => 'Every now and again I step out to watch our parade go by and am struck what a cross-section of humanity we are – from ordinary to amazing – with a dozen drag queens sashaying at the front. I calculate we’re about 900 altogether. 
                At one point I spot a young policeman wistfully shaking his head when he hears us chanting, “Two, four, six, eight, is that copper really straight?” When he catches me looking we exchange a secret smile.
                Now we’re heading down the Haymarket to Trafalgar Square where the Youth Group stages a Kiss-In under Nelson’s Column and, just for today, the police pretend not to notice.
                Next day every national newspaper has front-page photos of our dozen drag queens but not one of our 888 ordinary gay women and men. Thus stereotypes are maintained and our struggle continues.',
                'image' => get_site_url() . '/articles/alan-wakeman/veterans-of-1972.webp',
                'image_alt' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
                'image_credit' => 'PICTURES ALAN WAKEMAN AND HIS “GAY LOVE” JUMPSUIT FROM 1971, AND (TOP) MARCHING IN PRIDE 2012',
            ]); ?>
        </div>
    </section>

    <?php /* 020-021 Pride After Party.pdf */ ?>
    <?php echo create_layout('advert', $args = [
        'title' => 'Pride in London Official After Party 2025',
        'content' => 'Pride in London Official After Party 2025. The Ultimate Pride in London Celebration Continues! After marching through the streets of London, it’s time to dance the night away at the city’s most anticipated Pride after party. This isn’t just any party – it’s THE official celebration where the entire Pride community comes together.
        EVENT DETAILS: 📅 Date: Saturday, 5th July 2025 📍 Venue: One Ninetyfour - 194 Piccadilly, London W1J 9LN ⏰ Time: 9:00PM - 3:00AM 🔞 Age Restriction: 18+',
        'image' => get_site_url() . '/adverts/Pride-in-London-Official-After-Party-01.webp',
        'image_alt' => 'Pride in London Official After Party 2025. The Ultimate Pride in London Celebration Continues! After marching through the streets of London, it’s time to dance the night away at the city’s most anticipated Pride after party. This isn’t just any party – it’s THE official celebration where the entire Pride community comes together.
        EVENT DETAILS: 📅 Date: Saturday, 5th July 2025 📍 Venue: One Ninetyfour - 194 Piccadilly, London W1J 9LN ⏰ Time: 9:00PM - 3:00AM 🔞 Age Restriction: 18+',
        'image_credit' => 'The Official Pride in London After Party (Venue: One Ninetyfour - 194 Piccadilly, London W1J 9LN)',
        'hyperlink' => array('text' => 'JOIN US AND GET YOUR TICKETS NOW!', 'url' => 'https://www.outsavvy.com/event/27742/pride-in-london-official-after-party-2025'),
    ]); ?>

    <?php /* 022 + 023 COPENHAGEN AD.pdf */ ?>
    <section class="advert">
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'Visit Copenhagen',
                'content' => '',
                'image' => get_site_url() . '/adverts/Visit-Copenhagen-01.webp',
                'image_alt' => 'Welcome to Copenhagen: The Gay Capital of Nothern Europe where it doesn’t matter who you love or how you identify. #YouAreIncluded',
                'image_credit' => '',
                'hyperlink' => array('text' => 'Learn more at VisitCopenhagen.dk', 'url' => 'https://www.visitcopenhagen.dk/'),
            ]); ?>
            <?php echo create_layout('advert', $args = [
                'title' => 'Welcome to Copenhagen #YouAreIncluded',
                'content' => '',
                'image' => get_site_url() . '/adverts/Visit-Copenhagen-02.webp',
                'image_alt' => 'Welcome to Copenhagen: The Gay Capital of Nothern Europe where it doesn’t matter who you love or how you identify. #YouAreIncluded',
                'image_credit' => '',
                'hyperlink' => array('text' => 'Learn more at VisitCopenhagen.dk', 'url' => 'https://www.visitcopenhagen.dk/'),
            ]); ?>
        </div>
    </section>

    <?php /* 024-027 Billy Porter.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-orange); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'THE BITTER AND THE SWEET',
                'content' => 'FRESH FROM HIS APPEARANCE IN CABARET, <strong>BILLY PORTER</strong> IS DIRECTING A MAJOR NEW DRAMA ABOUT A QUEER INTERRACIAL COUPLE SET DURING YEARS OF CIVIL UNREST.
                HE TALKS TO <strong>CARY GEE</strong> ABOUT RACE, BALLROOM CULTURE, PRIDE, AND CHOOSING JOY.',
                'image' => get_site_url() . '/articles/billy-porter/cover.webp',
                'image_alt' => 'PICTURE: BILLY PORTER BY MEREDITH TRUAX',
                'image_credit' => 'PICTURE: BILLY PORTER BY MEREDITH TRUAX',
            ], "accented"); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'The bitter and the sweet',
                'content' => 'When Billy Porter enters the room he doesn’t so much light it up as detonate it. After methodically “charging up all the things one must charge nowadays”, he’s ready to sit down for a chat. He clearly requires no charging himself. Or does he?
                #PORTER HAS BEEN LIVING IN LONDON SINCE THE START OF THE YEAR, PERFORMING NIGHTLY ON STAGE AS THE EMCEE IN CABARET. HOW IS HE ENJOYING LIFE IN THE CAPITAL?
                “I love London. I thought that I would be more social but eight shows a week at at 55! I’m tired!”
                #NOW THAT HIS RUN AT THE KIT KAT CLUB HAS ENDED PORTER IS DIRECTING A PLAY AT LONDON’S SOHO THEATRE. THIS BITTER EARTH BY HARRISON DAVID RIVERS IS A SEARINGLY HONEST DRAMA ABOUT AN INTERRACIAL GAY RELATIONSHIP BETWEEN JESSE, AN INTROSPECTIVE BLACK PLAYWRIGHT, AND HIS PARTNER, A WHITE BLACK LIVES MATTER ACTIVIST. WHY WAS BILLY DRAWN TO THIS PARTICULAR PLAY?
                “This play came to me because the producer found me. He wanted me to do it. I was in Soho House last year and an associate of his saw me, came over and talked to me. He said, ‘I know I’m not allowed to talk you here...They have RULES!’ says Billy, laughing.
                “He says he sent a script to my agent. Had I heard about it?
                “I had not but I took his number, asked him to send me the script. I read the play. It’s extraordinary.”',
                'image' => get_site_url() . '',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => 'The bitter and the sweet',
                'content' => '#PLAYING THE PART OF PLAYWRIGHT JESSE IS YOUNG BRITISH ACTOR OMARI DOUGLAS, PERHAPS BEST KNOWN HERE FOR PLAYING ROSCOE BABATUNDE IN THE AWARD-WINNING AIDS DRAMA IT’S A SIN. HE STARS OPPOSITE ALEXANDER LINCOLN (EVERYTHING I KNOW ABOUT LOVE).
                “They are wonderful, wonderful actors” Billy enthuses. “The play is a two-hander; they are in an interracial, queer, gay relationship during the civil unrest from 2012 -2016 in New York and Minneapolis. It asks the questions that many people in interracial relationships don’t ask. And don’t talk about. Race is a thing, and if you didn’t know it before you know it now.
                “When you are in an interracial relationship you have to have uncomfortable conversations. Sometimes those conversations aren’t pleasant.”
                #IS RACE AS BIG A THING IN LONDON AS IT IS IN AMERICA?
                “Yes. But you are all more polite about it. But it’s the same thing all over the world.”
                #WAS BILLY NOT TEMPTED BY THE PART HIMSELF?
                “No. I’m too old!”',
                'image' => get_site_url() . '/articles/billy-porter/Pose-01.webp',
                'image_alt' => 'PICTURE: BILLY PORTER IN POSE: FX STUDIOS',
                'image_credit' => 'PICTURE: BILLY PORTER IN POSE: FX STUDIOS',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => 'OMARI',
                'content' => '#OMARI DOUGLAS IS BLACK PLAYWRIGHT JESSE AND ALEXANDER LINCOLN PLAYS HIS PARTNER NEIL, A WHITE BLACK LIVES MATTER ACTIVIST. CARY GEE CAUGHT UP WITH THEM AT REHEARSALS FOR THIS BITTER EARTH AT THE SOHO THEATRE
                #What was it like to be cast in such a groundbreaking TV AIDS drama as It’s a Sin and what did you learn about the experiences of people who lived through such dark times?
                It was pretty life-changing! I had never stepped foot on a television set before, so I was pretty nervous initially but I was also thrilled to get an opportunity to immerse myself in a story that is deeply resonant and important. I was fortunate to already have people in my life who spoke to me about that time very openly, but my research also allowed me to make new connections with people, who I can now call friends. This show allowed me to have conversations across generations that I’m not sure I would have had otherwise. I witnessed some grief and rage that is still very raw, but I also learned so much about resilience and resistance through love, art and protest.
                #What are you most looking forward to about working with Billy Porter?
                His passion and his truth. I think we are really fortunate to be living in a time where artists like Billy are visible — he is taking up space in a way that is authentic, eloquent and vulnerable. His expression has always seemed very raw and heartfelt to me and so it makes total sense as to why he would want to be at the helm of a project like this. This is not your first “two-hander”. Does the fact there are only two actors on stage increase the pressure on you both?
                Totally, but having experienced it before I think it’s an opportunity to get into something very raw and intimate. It feels almost dangerous but exciting at the same time.
                #Will you have time to celebrate Pride this year and do you have a message for all those who will be?
                I hope so — I have no excuse really when our theatre is on Dean Street! I’m also hoping to get to Amsterdam Pride when we finish our run; I went a few years ago and it’s epic and beautiful. For anyone going to any Pride event this year - dance, dance, dance and hold onto your loved ones.',
                'image' => get_site_url() . '',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => 'ALEXANDER',
                'content' => '#You’ve come a long way from playing Jamie Tate in Emmerdale! How did you get to be cast as Black Lives Matter activist Neil?
                The casting process was actually quite a quick one. We had the initial rehearsed reading for the play and then a break before it was greenlit!
                I’m so thankful to the whole team, but in particular casting director Rob Kelly, who has pushed me forward in many ways, not to mention Billy and producer Tom Hopkins who I’ve felt so nurtured by during this whole process.
                #Was it a part you found easy to relate to?
                Neil is so different to what I’ve played before which is really exciting. Playing characters with backgrounds far different to myself is an joy; it’s why I began acting in the first place and it’s such an incredible honour to be a part of this story.
                #What are you most looking forward to about being directed by Billy Porter? Were you familiar with his work before you got the gig?
                Of course! Billy is a storm of an individual; his tenderness and tenacity for the work is absolute and it’s honestly such an honour to be working with him. I’m so excited for people to see his take on Harrison’s beautiful play!
                #Will you be celebrating Pride this year and do you have a message of support for our readers as they plan their own celebrations?
                Pride is such an important thing to be a part of and I think now more than ever we all — and I do mean all — need to band together to communicate and welcome each other with warmth and open arms.',
                'image' => get_site_url() . '',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'The bitter and the sweet',
                'content' => 'Already an established star of both the stage and screen in the US, Porter won a Tony award for originating the role of drag queen Lola in Cyndi Lauper and Harvey Feinstein’s musical Kinky Boots, along with a Grammy for the accompanying album.
                It was his role as Pray Tell in the groundbreaking TV series Pose that catapulted him into the stratosphere. He became the first gay Black man to win a primetime Emmy (for Outstanding Lead Actor in a Drama) and in 2020 was included in Time Magazine’s 100 most influential people in the world list.
                #POSE IS SET IN THE BALL SCENE OF LATE 1980S NEW YORK CITY. AN LGBTQ+ SUBCULTURE THAT INSPIRED, AMONG OTHER CRAZES, VOGUEING. WAS THIS A SCENE THAT BILLY WAS INVOLVED WITH HIMSELF?
                “I was adjacent to the Ball scene. I was blessed to come to New York to be in the original cast of Miss Saigon on Broadway. The Ball culture and the movie Paris is Burning came out right when I moved to New York. That’s my era. It was the first time I had seen anyone on screen that looked like me. A queer Black man. It changed everything for me. It was crazy. Wild.”',
                'image' => get_site_url() . '/articles/billy-porter/Pose-02.webp',
                'image_alt' => 'PICTURE: BILLY PORTER IN POSE: FX STUDIOS',
                'image_credit' => 'PICTURE: BILLY PORTER IN POSE: FX STUDIOS',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => 'The bitter and the sweet',
                'content' => '#IT WAS ALSO A VERY DARK TIME FOR THE LGBTQ+ COMMUNITY, SET AGAINST THE AIDS EPIDEMIC. WAS IT AT ALL DIFFICULT FOR BILLY TO REVISIT THOSE DAYS?
                “There was emotional trauma in playing the character. I had to do a lot of work outside of the show to make sure I could maintain some semblance of sanity. It was right at the beginning of the AIDS crisis. After the theatre ended we went straight to the front line to fight for our lives. I did live it. I was one of the only people on the [Pose] set who was old enough to have lived it. It was hard. It was not an easy show to do.”
                #DID HE ENTERTAIN ANY DOUBTS ABOUT TAKING THE ROLE ON?
                “Never. Never.”
                A lighter touch was definitely required for the sports comedy 80 for Brady, in which Billy played the part of Gugu, who accidentally befriends stars Jane Fonda, Lily Tomlin, Sally Field and Rita Moreno, before sneaking them into the Superbowl under the guise of being backing dancers for Lady Gaga’s halftime show.
                #WHAT WAS IT LIKE WALKING ONTO SET? DID HE MANAGE NOT TO TRIP OVER ANYONE’S OSCAR?
                “Oh, my God! They were so sweet to me. The night before my shoot I had been to the Grammys to present the best RnB album. And so they had seen me on television the night before. After the Grammys I drove the five hours to set. I walked on and they were all mothering me immediately. ‘OMG. You were out late last night. You look beautiful.’ I said, ‘I get to work with you! I’m fine. I’ll miss some sleep.’”',
                'image' => get_site_url() . '/articles/billy-porter/Caberet-01.webp',
                'image_alt' => 'BILLY PORTER IN CABARET. PICTURE: MARC BRENNER',
                'image_credit' => 'BILLY PORTER IN CABARET. PICTURE: MARC BRENNER',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'The bitter and the sweet',
                'content' => '#THE ONLY MAJOR ACCOLADE MISSING FROM BILLY’S MANTELPIECE IS HIS OWN OSCAR. BUT BILLY HAS BEEN WORKING ON A BIOPIC OF BLACK LGBT CIVIL RIGHTS ACTIVIST AND WRITER JAMES BALDWIN. MIGHT THIS BE THE ROLE THAT TURNS HIM INTO A BONA FIDE EGOT? (EMMY, GRAMMY, OSCAR AND TONY WINNER).
                “The business has shifted in the last couple of years with the [writers’] strikes and Trump. We don’t currently have the funding. I have many ways, many paths I can take to get the ‘O’ but that’s not the focus of my work.”
                #IS IT HIS WORK THAT BILLY IS MOST PROUD OF, OR THE FACT THAT HE IS AN OUT THERE BLACK, QUEER MAN?
                “I struggle sometimes. It’s not easy, actually, being a ‘first of something’ but I am proud of who I am, and how I take up space in the world. I was told my queerness would be my liability, and it was for a long time.”
                #AT WHAT POINT DID IT CEASE TO BE A LIABILITY?
                “It’s still a liability but you just push through it.”
                #DOES BILLY THINK LGBTQ+ RIGHTS HAVE SLIPPED BACKWARDS AT ALL WITH THE REELECTION OF TRUMP TO THE PRESIDENCY?
                “I think that in America we are in a season of ‘Yes’ or ‘No’. I choose Joy. I choose to believe in the human spirit. I choose to believe in humanity. It’s dark right now. We’ll see. We have to be present. We have to be strong. We have to be open and ready for whatever is coming.”',
                'image' => get_site_url() . '/articles/billy-porter/Caberet-02.webp',
                'image_alt' => 'BILLY PORTER IN CABARET. PICTURE: MARC BRENNER',
                'image_credit' => 'BILLY PORTER IN CABARET. PICTURE: MARC BRENNER',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => 'The bitter and the sweet',
                'content' => '#WHERE DOES BILLY DRAW HIS OWN STRENGTH FROM? WHO WAS HIS GREATEST INFLUENCE?
                “My mother. A Black woman, disabled [by medical malpractice], born in 1935. The life she lived and the choices she made, to choose joy and unconditional love, is my greatest gift’.
                #DOES BILLY HOPE TO PASS THAT SAME JOY ON THROUGH HIS PERFORMANCES?
                “Thank you for asking that. Yes, I do. My mother was a very religious woman. She had a really hard time with the gay thing for a long time. But she transformed, she grew. Her expansion, her love, was something that takes my breath away.”
                #EVEN IF YOU’VE NEVER WITNESSED BILLY AS PERFORMER, THERE’S A GOOD CHANCE YOU’VE MARVELLED AT THE NEVER-LESSTHAN-ASTONISHING OUTFITS HE IS KNOWN TO WEAR ON THE RED CARPET. HOW LONG DO THESE TAKE TO PUT TOGETHER?
                “Well, I have a stylist and I always ask, ‘What’s the assignment?’ Fashion is in my blood. I work with Ty Hunter, who is the stylist for Beyoncé and worked with Destiny’s Children, as I like to call them. When I show up it’s another way for me to express myself. It’s another way for me to create conversation.”',
                'image' => get_site_url() . '/articles/billy-porter/New-York-Pride-02.webp',
                'image_alt' => 'CC STEAM PIPE TRUNK DISTRIBUTION VENUE; AT NEW YORK PRIDE',
                'image_credit' => 'CC STEAM PIPE TRUNK DISTRIBUTION VENUE; AT NEW YORK PRIDE',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'The bitter and the sweet',
                'content' => '#WE ARE IN PRIDE SEASON. DOES BILLY REMEMBER HIS FIRST PRIDE?
                “Yes! It was in New York. I was 19. I was doing Joseph. All the gays in the show said, “Come meet us, we’re going to march in the parade.”’
                #BILLY PAUSES, THEN STRESSES THAT IT IS A MARCH. NOT A PARADE.
                “I didn’t know where I was going. I was a little late. My friend put a sign over my head: ‘Silence Equals Death’. We marched down the street chanting, ‘Act Up. Fight Back. Fight AIDS’. It was pretty magical and a defining moment for me. When I came out, Pride was about community, Pride was about organising. Pride was our civil rights movement.”
                #HAS PRIDE BECOME TOO MUCH OF A PARTY?
                “No. Because the party is the Healing. The Healing is inside the dance... is inside the party.
                That’s the Healing. That’s Gay Church.”
                This Bitter Earth, directed by Billy Porter, is at the Soho Theatre until 26 July
                Go to: www.sohotheatre.com',
                'image' => get_site_url() . '/articles/billy-porter/New-York-Pride-01.webp',
                'image_alt' => 'CC NEW YORK PRIDE 50',
                'image_credit' => 'CC NEW YORK PRIDE 50',
            ]); ?>
        </div>
    </section>

    <?php /* 028-029 Amsterdam World Pride.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'Amsterdam. A united Pride for the world',
                'content' => 'THE CITY OF AMSTERDAM IS CELEBRATING ITS 750TH ANNIVERSARY THIS YEAR AND WITH THE UPCOMING WORLDPRIDE IN 2026 HISTORY WILL BE WRITTEN AGAIN. NOW IS THE TIME TO SPEAK OUT AND SHOW THE WORLD UNITY',
                'image' => get_site_url() . '/articles/amsterdam-world-pride/cover.webp',
                'image_alt' => 'PICTURES: PRIDE AMSTERDAM',
                'image_credit' => 'PICTURES: PRIDE AMSTERDAM',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => 'As the capital of the Netherlands, Amsterdam has always been a cradle for LGBTQIA+ people. This is reflected in the rich history, nightlife, and art and culture on offer.
                With the theme Unity, WorldPride will be held in 2026 for the first time in the city that everyone knows from its own very special Pride.
                Every year, 80 boats sail down the Amsterdam canals during the Canal Parade. This colourful parade of participants symbolises the inclusive society with participants from the entire rainbow family.
                Amsterdam’s unique Pride has now been recognised as a piece of Intangible Cultural Heritage by Unesco. Pride Amsterdam has grown around this festive activism into a multiday festival that attracts many national and international visitors every year. Normally a must-visit for anyone who wants to experience the most special Pride, next year it will be the Pride for the entire world.
                #WorldPride will take place from 25 July to 8 August 2026 in Amsterdam and will also host EuroPride 2026.',
                'image' => get_site_url() . '/articles/amsterdam-world-pride/amsterdam-world-pride-01.webp',
                'image_alt' => 'PICTURES: PRIDE AMSTERDAM',
                'image_credit' => 'PICTURES: PRIDE AMSTERDAM',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '“Next year Amsterdam will be the Pride for the entire world”',
                'content' => '#RIGHTS AND NETWORKS
                During WorldPride, many thousands of residents, visitors and activists come together to reflect on the acquired rights of the LGBTQIA+ community. The first  same-sex marriage took place in Amsterdam 25 years ago: marriage equality. Since then, many countries have followed suit.
                However, at the same time, acquired rights are under pressure worldwide. It is therefore necessary to build new, strong networks so that we can continue to fight together. This will be visible during the WorldPride Conference on 5, 6 and 7 August 2026 in the Beurs van Berlage.
                #FESTIVE AND ACCESSIBLE ACTIVISM
                The world-famous Canal Parade is the epitome of festive activism. In Amsterdam, this goes hand in hand with a rich programme in the field of art and culture, sports, religious activities such as workshops and meetings of all kinds of target groups within the rainbow family.
                Of course, we will be celebrating diversity together with our allies. Because without allies we cannot change the world.',
                'image' => get_site_url() . '/articles/amsterdam-world-pride/amsterdam-world-pride-02.webp',
                'image_alt' => 'PICTURES: PRIDE AMSTERDAM',
                'image_credit' => 'PICTURES: PRIDE AMSTERDAM',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => 'During WorldPride we will start with a Pride Park where everyone can enjoy the Vondelpark, and there is the Canal Parade, an opening and closing concert, and we will conclude with a Pride march. In the tradition of the city of Amsterdam, (almost) all general activities are freely accessible.
                #PARTICIPANTS AND VISITORS
                After this year’s annual Pride Amsterdam, in 2025 (26 July to 3 August), everything will be focused on EuroPride/ WorldPride. This means that from 3 August all information will be available on www.worldpride.amsterdam. This site will be updated constantly with information for activists, participants and visitors. In addition, the many events in and around the city will also be found here. With the partners of the Pride, such as the hotels of Accor and KLM/ Delta, travellers will be able to travel and stay overnight safely and confidently.
                Check www.worldpride.amsterdam regularly for the latest news and book now for the Pride of 2026 WorldPride takes place in Amsterdam from 25 July to 8 August 2026
                #Go to: www.worldpride.amsterdam and www.pride.amsterdam',
                'image' => get_site_url() . '/articles/amsterdam-world-pride/amsterdam-world-pride-03.webp',
                'image_alt' => 'PICTURES: PRIDE AMSTERDAM',
                'image_credit' => 'PICTURES: PRIDE AMSTERDAM',
            ]); ?>
        </div>
    </section>
    
    <?php /* 030 Pride Life AD.pdf */ ?>
    <?php echo create_layout('advert', $args = [
        'title' => 'Win with Pride Life',
        'content' => 'To be in with a chance of winning some official Pride Life merchandise, simply tag us (@PrideLifeGlobal) on Instagram in your Pride in London photos.',
        'image' => get_site_url() . '/adverts/Win-with-Pride-Life-01.webp',
        'image_alt' => 'To be in with a chance of winning some official Pride Life merchandise, simply tag us (@PrideLifeGlobal) on Instagram in your Pride in London photos.',
        'image_credit' => '@PrideLifeGlobal on Instagram',
        'hyperlink' => array('text' => 'Tag @PrideLifeGlobal on Instagram', 'url' => 'https://www.instagram.com/pridelifeglobal/'),
    ]); ?>

    <?php /* 031-033 Lady Phyll.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-green); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => 'BLACK AND PROUD',
                'content' => 'UK BLACK PRIDE IS THE WORLD’S LARGEST FREE PRIDE EVENT FOR LGBTQIA+, BLACK AND POC PEOPLE AND THIS YEAR IS CELEBRATING ITS TWENTIETH ANNIVERSARY. <strong>NIGEL ROBINSON</strong> TALKS TO ITS CO-FOUNDER AND CHIEF EXECUTIVE, HUMAN RIGHTS ADVOCATE <strong>PHYLL OPOKU-GYIMAH</strong> (LADY PHYLL), ABOUT WHY BLACK PRIDE MATTERS, ESPECIALLY TODAY',
                'image' => get_site_url() . '/articles/lady-phyll/cover.webp',
                'image_alt' => 'PHYLL OPOKU-GYIMAH (LADY PHYLL), CO-FOUNDER AND CHIEF EXECUTIVE OF UK BLACK PRIDE',
                'image_credit' => 'PHYLL OPOKU-GYIMAH (LADY PHYLL), CO-FOUNDER AND CHIEF EXECUTIVE OF UK BLACK PRIDE',
            ], "accented"); ?>

            <?php echo create_layout('split-media', $args = [
                // 'title' => 'BLACK AND PROUD',
                'content' => '#LADY PHYLL WAS BORN IN LONDON OF GHANAIAN ANCESTRY. GROWING UP IN THE 70S AND 80S, SHE ALWAYS KNEW SHE WAS “VERY DIFFERENT” FROM THE OTHER GIRLS BUT COULDN’T QUITE EXPLAIN WHY.
                “I saw things like the first lesbian kiss on Brookside and I was always so fascinated,” she remembers with a smile. “Then I probably didn’t have the articulation to say what this was, especially being in a household which was very strict and very Christian. I came out properly when I had a child at the age of 19 because I knew I couldn’t lie to myself when she was 18 months old. That was quite a challenge but ever since then I haven’t looked back.
                “When people ask me what was it like coming out I think I’m still doing it. We have to make sure there is inclusion for us as marginalised and  underrepresented people. We have to talk and lead with why it’s so important around sexuality, sexual orientation, gender identity and expression. I guess we’re were constantly coming out.
                #LOOKING BACK, HOW DOES SHE COMPARE THE LGBTQIA+ “SCENE” TO TODAY’S?
                “People say there was a sense of community and camaraderie back then,” she says, “and, of course there was the HIV and AIDS epidemic. I remember seeing stuff on TV, and knowing that I had an uncle who was not very well but nobody spoke of it.
                “Then there were places which didn’t always look like they were for Black queer people. Today there are different spaces and places we can go to. And of course there’s UK Black Pride which centres Black and brown queer voices with our allies to support us.” ',
                'image' => get_site_url() . '/articles/lady-phyll/black-pride.webp',
                'image_alt' => 'LADY PHYLL AT UK BLACK PRIDE',
                'image_credit' => 'LADY PHYLL AT UK BLACK PRIDE',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“Black Pride serves thousands of people who call that space their home”',
                'content' => '#LADY PHYLL CO-FOUNDED UK BLACK PRIDE IN 2005 WHEN THREE COACHLOADS OF PARTICIPANTS HEADED OFF TO SHOEBURYNESS FOR A DAY OF COMMUNITY BY THE SEASIDE. THERE ARE LOTS OF PRIDE EVENTS AROUND THE COUNTRY. WHY WAS THERE A NEED FOR A BLACK PRIDE?
                “Why not?” is her answer. “Why do we have Prides in the first place? They’re to make sure that LGBTQIA+ people have a place where they can celebrate who they are. We are not a monolith. Different communities and groups face different challenges, based on their socio-economic background, or social mobility or whatever. 
                “There is a Black pride because Black people very often have to deal with multiple oppressions such as racism — even within our own LGBTQIA+ community — , sexism and transphobia. If you’ve been to UK Black Pride you would know why there’s a Black Pride – it serves thousands of people who call that space their home.”
                #UK BLACK PRIDE THIS YEAR IS ON 10 AUGUST. WHAT DOES UK BLACK PRIDE DO IN THE REMAINING 364 DAYS OF THE YEAR?
                “We are learning how to survive a system that is challenging us on a daily basis. We do a lot. We have partnerships, we put on well-being sessions. We try to understand how to spend money but sustain our organisation. We reinvest back into our communities through our community action plan. We also partner with organisations like Micro Rainbow which supports LGBTQIA+ refugee and asylum seekers, or Stonewall Housing, highlighting the inequity of our young people who are sofa-surfing or don’t have housing . The one-day celebration is like the cherry on the cake but the movement building that takes place is an everyday thing.”',
                // 'image' => get_site_url() . '/articles/lady-phyll/black-pride.webp',
                // 'image_alt' => 'LADY PHYLL AT UK BLACK PRIDE',
                // 'image_credit' => 'LADY PHYLL AT UK BLACK PRIDE',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'BLACK AND PROUD',
                'content' => '#WE’RE CURRENTLY SEEING THE RISE OF FAR RIGHT POPULISM NOT JUST IN THE UK BUT ACROSS THE GLOBE. WHAT NEEDS TO BE DONE?
                “It’s an easy question to ask but a hard one to answer,” she admits. “Because there are so may different facets as to what we have to do. Part of my background has been working in trade unions and I think there is something really important about collective action, collective leadership and collective bargaining. It’s looking at how well resourced we are in terms of skills and finding the ability and capacity in order to challenge things . If we can come together collectively to address some of the systemic issues that continue to rule over our bodies and our minds, then we’re making headroom. 
                “There are some great activists and advocates out there. And there are also some people who have never been an advocate or an activist who  can lend their skills to making sure we can challenge the right which happens to be on the rise right now. 
                “For people like myself this [the rise in far right populism] is not new: it has always been there. We just see it at different times just like now we’re seeing the ferocious attacks upon trans and non-binary people. It means we have to address different emergencies at different points. Everything is important but it’s about where we put our resources and lend our voice and give agency to the things which need to be addressed head on.”',
                'image' => get_site_url() . '/articles/lady-phyll/black-pride-team.webp',
                'image_alt' => 'LADY PHYLL AND THE UK BLACK PRIDE TEAM',
                'image_alt' => 'LADY PHYLL AND THE UK BLACK PRIDE TEAM',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“My work has always been about social justice and human rights”',
                'content' => '#LADY PHYLL HAS RECEIVED MANY AWARDS IN RECOGNITION OF HER HUMAN RIGHTS WORK. SHE HAS FEATURED IN MANY PINK AND PRIDE LISTS, AND ONLY RECENTLY WAS NAMED ONE OF THE 100 GREAT BLACK BRITONS. YET IN 2016 SHE REFUSED AN MBE IN THE NEW YEAR HONOURS LIST.
                #SHE LAUGHS, AND SAYS SHE KNEW I WAS GOING TO ASK THAT QUESTION.
                “Apart from being a trade unionist I also led an international human rights charity (the Kaleidoscope Trust). My work has always been about social justice and human rights and working with partners around a world where we know that 66 countries criminalise LGBTQIA+ people. The fact that the MBE has the word 
                ‘Empire’ in it is a bit toxic and has a legacy that has been very harmful. I couldn’t really accept anything that elevates itself over the people I set out to serve. There has been no real apology or acknowledgement or reimbursement or reparation for enslavement and slavery and the sodomy laws that were left there from the colonial era laws. I wouldn’t want to subscribe to something that doesn’t align with my values.” 
                #BACK TO BLACK PRIDE – WHAT CAN WE EXPECT? AND WHAT ADVICE WOULD SHE GIVE PEOPLE ATTENDING FOR THE FIRST TIME?
                “We’ve got a main stage with lots of acts and artists and DJs from our community. There’s a dance tent and a youth and family area. There’s also an interfaith chaplaincy and a space to talk about being queer and reconciling religion, faith and belief. There will be over 100 exhibitors from corporate to commercial brands and from NGOs to grass-roots organisations — and the greatest food you could possibly imagine! 
                “And, of course, safety. We need to make sure that everyone that comes to the free event in the park feels safe and is able to enjoy themself unapologetically .
                “For someone coming by themself for the first time they can always email and reach out to us. You might even want to volunteer because you’re by yourself and you can support UK Black Pride in that way . Or we can buddy people up with others. The moment you enter that space you are never alone because we all have this common purpose of celebrating our unique minds, spirits and bodies, and occupying our own space . 
                “Come. Enjoy. Feel free, feel liberated. Network, speak to people, volunteer if you want on the day. 
                “And just live your best life and see how you can continue to help UK Black Pride build not just for that one day but going forward.”
                #UK Black Pride is on 10 August at the Queen Elizabeth Park, London from noon to 8pm. Entry is free
                #Go to: www.ukblackpride.org.uk',
                // 'image' => get_site_url() . '/articles/lady-phyll/black-pride-team.webp',
                // 'image_alt' => 'LADY PHYLL AND THE UK BLACK PRIDE TEAM',
                // 'image_alt' => 'LADY PHYLL AND THE UK BLACK PRIDE TEAM',
            ]); ?>
        </div>
    </section>

    <?php /* 034-035 Out and Wild.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-green); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => 'PROUD AND WELL',
                'content' => 'LONDON IS ABOUT TO CELEBRATE ITS FIRST QUEER WELLNESS FESTIVAL.
                ORGANISER <strong>POLLY SHUTE</strong> OF OUT & WILD TELLS US WHAT TO EXPECT',
                'image' => get_site_url() . '/articles/out-and-wild/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                // 'title' => '',
                'content' => 'I never planned to be an event organiser, but my passion for creating new spaces for the queer community has led me to run events across the UK for the queer community. Not something I envisaged doing in my 50s!
                Back in 2021, as the nation struggled with COVID, I had an idea about creating more spaces focused on wellbeing, nature and outdoors. I wanted to create events that really supported and connected the queer community.
                I ran a pop-up event in 2022 with 40 people, and this led to me launching Out & Wild Festival, a wellness and experience festival designed by and for queer women and those who are non-binary. Our first festival in 2022 attracted over 200 attendees, and now, in a new home in Devon, we will have 1000 attendees in June 2025.
                There are so few spaces for queer women and non-binary people to really connect. This means we have attendees from across the UK and as far away as the USA, France, Belgium and Australia.
                Out & Wild has connected hundreds of people, and our festival and pop-up events have led to new friendships, relationships and even a wedding and a baby!',
                'image' => get_site_url() . '/articles/out-and-wild/out-and-wild-01.webp',
                'image_alt' => 'PICTURES: LAURA CUNLIFFE (BOIABOUTTOWN.COM), ELSIE MOORE PHOTOGRAPHY',
                'image_credit' => 'PICTURES: LAURA CUNLIFFE (BOIABOUTTOWN.COM), ELSIE MOORE PHOTOGRAPHY',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '“I felt such overwhelming joy and peace”',
                'content' => 'Out & Wild has dozens of experiences and acts over three days and nights. We cover wellness and workouts, spoken word, sports & hikes, interactive workshops as well as the usual music and comedy you expect at a festival.
                The feedback has been amazing.
                “Honestly, it was probably the best weekend of my life. I am so overcome with emotion when I think how incredible it was for me. I felt such overwhelming joy and peace,” is just one of the many compliments we have received from our attendees.
                As a result of Out & Wild, I have been asked numerous times when I can bring some wellbeing to London. And how I can extend my events to gay men. Whilst I love Prides and understand their importance (having been on the Board of Pride in London for five years), I saw people craving spaces that were not just about crowded streets and overdrinking.',
                'image' => get_site_url() . '/articles/out-and-wild/out-and-wild-02.webp',
                'image_alt' => 'PICTURES: LAURA CUNLIFFE (BOIABOUTTOWN.COM), ELSIE MOORE PHOTOGRAPHY',
                'image_credit' => 'PICTURES: LAURA CUNLIFFE (BOIABOUTTOWN.COM), ELSIE MOORE PHOTOGRAPHY',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '',
                'content' => 'So, this year, alongside partner, Proud Events, I am so excited to launch Pride in Wellness, London’s first queer wellness festival. It will take place in the urban oasis that is Canary Wharf in stunning locations. This includes one of the city’s biggest indoor gardens, at Crossrail Place Roof Garden and the beautiful Eden Dock.
                There will be over 30 mainly free activities at Pride in Wellness, including, yoga, Pilates, gong baths, breathwork and qigong. There will also be workshops led by therapists and charity leaders like Stonewall’s Simon Blake. We will have dance sessions, tasters of sport, a big community picnic and even a movie night under the stars!
                It’s such a busy world out there, and as an LGBTQIA+ community we are much more likely to struggle with our mental health, so finding time to try out new wellness experiences is so important. 
                #Pride in Wellness is at Canary Wharf  
                #26 – 29 June
                #Go to: www.prideinwellness.com and www.outandwild.co.uk',
                'image' => get_site_url() . '/articles/out-and-wild/out-and-wild-03.webp',
                'image_alt' => 'PICTURES: LAURA CUNLIFFE (BOIABOUTTOWN.COM), ELSIE MOORE PHOTOGRAPHY',
                'image_credit' => 'PICTURES: LAURA CUNLIFFE (BOIABOUTTOWN.COM), ELSIE MOORE PHOTOGRAPHY',
            ]); ?>
        </div>
    </section>

    <?php /* 036 LEIGH BOWERY.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'LEIGH GENIUS',
                'content' => '#AN IMPORTANT NEW EXHIBITION HIGHLIGHTS THE QUEER GENIUS OF LEIGH BOWERY
                An artist, performer, model, TV personality, club promoter, designer, musician, and force of queer nature, in his short career Leigh Bowery was one of the most dynamic breakers of 80s and 90s convention, constantly challenging the distinctions between art and life, sexualities and genders.',
                'image' => get_site_url() . '/articles/leigh-bowery/cover.webp',
                'image_alt' => 'LUCIAN FREUD, LEIGH BOWERY 1991 © THE LUCIAN FREUD ARCHIVE. ALL RIGHTS RESERVED 2024 NIGEL PARRY - PHOTOSHOOT AT HOME © NIGEL PARRY. NIGEL PARRY',
                'image_credit' => 'LUCIAN FREUD, LEIGH BOWERY 1991 © THE LUCIAN FREUD ARCHIVE. ALL RIGHTS RESERVED 2024 NIGEL PARRY - PHOTOSHOOT AT HOME © NIGEL PARRY. NIGEL PARRY',
            ]); ?>
            <?php echo create_layout('full-media', $args = [
                // 'title' => '',
                'content' => '',
                'image' => get_site_url() . '/articles/leigh-bowery/exhibition-preview.webp',
                'image_alt' => 'LUCIAN FREUD, LEIGH BOWERY 1991 © THE LUCIAN FREUD ARCHIVE. ALL RIGHTS RESERVED 2024 NIGEL PARRY - PHOTOSHOOT AT HOME © NIGEL PARRY. NIGEL PARRY

                CHARLES ATLAS, STILL FROM BECAUSE WE MUST 1989 © CHARLES ATLAS. COURTESY OF THE ARTIST AND LUHRING AUGUSTINE, NEW YORK

                CHARLES ATLAS, STILL FROM MRS PEANUT VISITS NEW YORK 1999 © CHARLES ATLAS. COURTESY OF THE ARTIST AND LUHRING AUGUSTINE, NEW YORK. DICK

                DICK JEWELL STILL FROM WHAT’S YOUR REACTION TO THE SHOW 1988 © DICK JEWELL. NIGEL PARRY - PHOTOSHOOT AT HOME © NIGEL PARRY.

                PETER DOIG TABOO C1985 © PETER DOIG. ALL RIGHTS RESERVED, DACS ARTIMAGE 2023. PHOTO THOMAS MÜLLER

                DICK JEWELL STILL FROM WHAT’S YOUR REACTION TO THE SHOW 1988 © DICK JEWELL',
                'image_credit' => 'LUCIAN FREUD, LEIGH BOWERY 1991 © THE LUCIAN FREUD ARCHIVE. ALL RIGHTS RESERVED 2024 NIGEL PARRY - PHOTOSHOOT AT HOME © NIGEL PARRY. NIGEL PARRY

                CHARLES ATLAS, STILL FROM BECAUSE WE MUST 1989 © CHARLES ATLAS. COURTESY OF THE ARTIST AND LUHRING AUGUSTINE, NEW YORK

                CHARLES ATLAS, STILL FROM MRS PEANUT VISITS NEW YORK 1999 © CHARLES ATLAS. COURTESY OF THE ARTIST AND LUHRING AUGUSTINE, NEW YORK. DICK

                DICK JEWELL STILL FROM WHAT’S YOUR REACTION TO THE SHOW 1988 © DICK JEWELL. NIGEL PARRY - PHOTOSHOOT AT HOME © NIGEL PARRY.

                PETER DOIG TABOO C1985 © PETER DOIG. ALL RIGHTS RESERVED, DACS ARTIMAGE 2023. PHOTO THOMAS MÜLLER

                DICK JEWELL STILL FROM WHAT’S YOUR REACTION TO THE SHOW 1988 © DICK JEWELL',
            ], "accented"); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'LEIGH GENIUS',
                'content' => 'With roots in queerness, performance, art, and fashion, this crucial exhibition celebrates Bowery’s inspiring and continuing influence on the work of trailblazers like Alexander McQueen, Anonhi and Lady Gaga, as well shooting a fresh insight into the creative scenes in the iconoclastic club cultures of London and New York, featuring icons like Princess Julia, Andrew Logan, Trojan, Lady Bunny and Boy George.
                #Leigh Bowery! is at the Tate Modern until 31 August
                #Go to: www.tate.org.uk
                The exhibition is organised by Tate Modern in collaboration with Nicola Rainbird, Director and Owner of the Estate of Leigh Bowery',
                // 'image' => get_site_url() . '/articles/leigh-bowery/full-media.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
        </div>
    </section>


    <?php /* 037-038 Voting.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-red); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => 'Fight at the Ballot Box',
                'content' => '#How LGBTQIA+ voters are reshaping UK politics
                AS TRANS RIGHTS BECOME A POLITICAL FLASHPOINT, LGBTQIA+ VOTERS ARE SHIFTING ALLIANCES, AND MORE THAN RAINBOW RHETORIC IS REQUIRED, ARGUES <strong>RAE JOAN ELKINGTON</strong>',
                'image' => get_site_url() . '/articles/fight-at-the-ballot-box/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'In the long and fraught history of British politics, LGBTQIA+ rights have never been a side issue. They have been a barometer and often a battleground. From Section 28 to today’s debates over trans lives, queer communities have not just reflected shifts in public opinion; they’ve driven them. And now, LGBTQIA+ voters are reshaping electoral politics itself.
                #From Resistance to Reform:The Early Struggles
                The 1988 introduction of Section 28, legislation that banned the promotion of homosexuality in schools and local authorities, galvanised a generation. Grassroots resistance from groups like OutRage! and Stonewall helped to turn political apathy into mobilisation, awakening queer communities to the ballot box.
                In many ways, Section 28 catalysed the alignment of LGBTQIA+ voters with Labour throughout the 1990s and early 2000s. When the Blair government repealed Section 28, it also introduced other progressive reforms: lowering the age of consent, allowing same-sex adoption, introducing civil partnerships, and paving the way for equal marriage. These victories were won not just in parliament but on the streets, in unions, and by student bodies.
                However, the Labour-queer alliance was never absolute and is becoming increasingly fragmented today.
                #A Fragmented Political Landscape
                In the 2010s, with the Conservative-Liberal Democrat coalition, David Cameron famously championed equal marriage. Some saw this as genuine progress, others saw it as no more than pink-washing. The LGBTQIA+ vote, once considered a Labour stronghold, began to shift.
                Polling data from online social network Romeo (2024) reveals that Labour still leads, particularly among gay and bisexual men, who make up 45% of the vote. However, the Green Party is gaining traction, especially among LGBTQIA+ students. The SNP also continues to attract Scottish LGBTQIA+ voters, drawn by its progressive stance on trans rights.',
                'image' => get_site_url() . '/articles/fight-at-the-ballot-box/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '“Legal equality has not translated into lived equality for many in the LGBTQIA+ community”',
                'content' => '#Trans Rights: The New Flashpoint
                Legal equality has not translated into lived equality for many in the LGBTQIA+ community, especially trans and non-binary individuals, queer migrants, and working-class groups. The stalled reform of the Gender Recognition Act, rising hate crime, and the rollback of inclusive education have created a new wave of activism.
                A 2024 study by the University of Birmingham found that only 26% of trans and non-binary voters felt comfortable presenting photo IDs at polling stations due to fears of being misgendered or outed. As a result, many have turned to postal voting, while others have chosen not to vote at all. A quarter of trans respondents reported being less likely to vote in future elections due to voter ID barriers.',
                'image' => get_site_url() . '/articles/fight-at-the-ballot-box/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#Disenfranchisement by Design?
                The Elections Act 2022, which mandates photo ID at polling stations, disproportionately affects trans and non-binary individuals whose identification does not match their gender identity. Non-binary voters face additional hurdles because the UK does not recognise non-binary as a legal gender marker. Meanwhile, Stonewall reports that 24% of trans individuals and 19% of non-binary individuals do not have a usable ID, compared to just 3% of non-trans voters.
                The government’s Voter Authority Certificate (VAC), a free alternative ID, remains underused and poorly publicised, exacerbating the issue of disenfranchisement (University of Birmingham, 2024; Stonewall, 2023).
                #Intersectional Struggles
                For Black, Asian, and Minority Ethnic (BAME) LGBTQIA+ people, the intersectional struggle for equality means individuals face discrimination within both their racial and LGBTQIA+ communities, creating a unique set of challenges not always reflected in mainstream political discourse. According to the 2023 Stonewall report, 28% of BAME LGBTQIA+ people have experienced hate crimes or discrimination based on both their sexuality and race (Stonewall, 2023).
                Similarly, disabled queer people navigate barriers that often go unaddressed in broader LGBTQIA+ advocacy. They face significant challenges when accessing healthcare, including mental health services tailored to their needs, as well as physical accessibility issues at LGBTQIA+ events and protests. A 2022 report by the LGBTQ+ Disability Network highlighted that 41% of disabled queer people felt they had their needs excluded from mainstream LGBTQIA+ politics. This gap has only deepened with the rise of digital activism, which is not always accessible (LGBTQ+ Disability Network, 2022).
                The intersectionality of race, disability, and LGBTQIA+ identity has brought forward new activism, with BAME and disabled queer people calling for more nuanced representation and inclusive policies. From healthcare to employment to policing, there is a growing demand for policies that acknowledge and address these heightened inequalities (LGBTQ+ Disability Network, 2022).',
                'image' => get_site_url() . '/articles/fight-at-the-ballot-box/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '“Many LGBTQIA+ voters are more politically engaged than ever”',
                'content' => '#Beyond the Ballot Box
                Despite these challenges, many LGBTQIA+ voters are more politically engaged than ever; particularly younger voters. For them, intersectionality matters. They may vote based on LGBTQIA+ rights, but they are also considering factors like class, race, housing, and climate justice. This generation demands tangible commitments: bans on conversion therapy, trans-inclusive healthcare, and protections for asylum seekers, among other priorities.
                Politicians, we are sending you a clear message: performative ally-ship isn’t enough. 
                Queer politics doesn’t begin or end with elections, but the ballot box remains a site  
                of resistance. Every victory, from decriminalisation to equal marriage, was  hard-won.
                For further info go to:
                #www.stonewall.org.uk (LGBTQ+ Equality and Race: The Intersectional Struggle)
                #www.birmingham.ac.uk (Voter ID and Trans Rights: Survey Results)
                #www.lgbtqdisabilitynetwork.org (Access to Rights: The Struggles of Disabled Queer People) ',
                'image' => get_site_url() . '/articles/fight-at-the-ballot-box/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
        </div>
    </section>

    <?php /* 039-041 Populism.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => 'A STEP TO THE RIGHT',
                'content' => 'AS A YOUNG GAY MAN <strong>CARY GEE</strong> SPENT IDYLLIC SUMMERS IN EUROPE. NOW, WITH THE RISE OF FAR-RIGHT POPULIST PARTIES, HE THINKS THAT SUMMER IS OVER',
                'image' => get_site_url() . '/articles/step-to-the-right/reichstag-berlin.webp',
                'image_alt' => 'THE REICHSTAG IN BERLIN. FAR-RIGHT POPULIST GROUP ALTERNATIVE FOR GERMANY (AfD) IS THE SECOND LARGEST PARTY IN GERMANY’S BUNDESRAT.',
                'image_credit' => 'THE REICHSTAG IN BERLIN. FAR-RIGHT POPULIST GROUP ALTERNATIVE FOR GERMANY (AfD) IS THE SECOND LARGEST PARTY IN GERMANY’S BUNDESRAT.',
            ]); ?>

            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'As a young man I spent several summers studying and working in Europe. Having grown up in a tiny community in beautiful but suffocating rural England under the cloud of Section 28 it was a thrill to be able to walk hand-in-hand with my then boyfriend along a Dutch canal, to party in the clubs of Berlin, or to cavort on the nudist beaches of south-western France without fear of rebuke, or worse, physical attack. That induced in me a sense of freedom I will never forget, nor probably experience again. At least not in Europe. 
                Thirty years on from those heady summers of eternal sunshine, Europe has become a much darker place with the election of far-right populist politicians, not only in the countries I had visited but also in Austria, Finland, Slovakia, the Czech Republic, Hungary and Poland.
                And for some nothing is more threatening than the LGBTQ+ community. We’re also seen as an easy target, because, numerically, we will always exist in a minority, and there is little space for minorities in the populist world view. Without the leadership of strong “gay-friendly” politicians we simply don’t have the numbers to ensure the delivery and protection of equality legislation by ourselves.',
                // 'image' => get_site_url() . '/articles/step-to-the-right/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“Across Europe recent hard-won LGBTQ+ victories are under threat”',
                'content' => 'Across Europe recent hard-won LGBTQ+ victories are under threat. In February the AfD (Alternative for Germany) party won more than a fifth of the vote in the German federal (general) elections, making it the second largest party overall with 151 seats in the Bundestag.
                Not just an anti-immigration party, the AfD is implacably opposed to same-sex marriage and has previously filed a law suit against it. This is despite the fact that its leader, Alice Weidel, has adopted two children with her (Sri Lankan-born) female partner. In fact, Weidel is almost a living definition of a populist politician: someone who proscribes any form of “alternative” lifestyle for other people  while enjoying a highly “alternative” lifestyle  of her own.
                Populist opposition to LGBTQ+ rights is not always obvious. Perhaps realising that voters in many countries across Europe have reached something approaching a consensus on LGBTQ+ equality, opportunistic populists — including those in France, Sweden and, in particular, the Netherlands — have even sought to use gay rights in order to attack immigration, by claiming that immigration threatens the lifestyle of their LGBTQ+ communities at home.',
                // 'image' => get_site_url() . '/articles/step-to-the-right/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'Don’t be fooled for a minute into thinking that these politicians care about our rights. They are simply seeking to sow division between different minorities in the hope that we will do their dirty work for them.
                More than two decades since Tony Blair’s government repealed the hated Section 28, similar legislation banning the perceived promotion of homosexuality has been passed not only in Russia, but in EU member states including Hungary, Poland and Bulgaria.
                Don’t think it couldn’t happen here. Reform enjoyed a startling success in May’s local elections held across the UK. The party has added to their tally of MPs after winning a by-election, and seized control of a number of local councils. Those councils will be banned from displaying the LGBTQ+ rainbow flag on council buildings, and Reform’s leader, Nigel Farage, has already said that any diversity and inclusion officers working in those councils should start looking for another job Prior to the 2015 general election I interviewed Nigel Farage, then in charge of UKIP, and asked him just how inclusive his party was. This is what he told me.
                “We don’t believe in discrimination at all. For this reason we don’t deliberately cater towards anyone in society. We believe everyone is equal and, as such, treat all voters the same.” 
                Yet, if successive governments in the UK, beginning with Blair’s government in 1997, had not “catered” towards their LGBTQ+ constituencies we would have achieved none of the victories we had worked so hard to win. Civil partnerships and same-sex marriage, an equal age of consent, the abolition of Section 28, the right to adopt children, and protection from hate crimes would not be in place today. I’ve little doubt they could cease to exist at all if the UK followed the same path as many of our European neighbours.
                Almost without exception the electoral success of right-wing populist parties leads to an almost immediate dismantling of legislation designed to protect the LGBTQ+ community and, by extension, a sharp decline in the safety of the local LGBTQ+ population. ',
                // 'image' => get_site_url() . '/articles/step-to-the-right/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '“Populists believe they have licence to attack LBGTQ+ people in the belief they are acting in the interests of the popular majority”',
                'content' => 'Emboldened by carefully constructed and targeted comments made by politicians, populists believe they have licence to attack LBGTQ people in the belief that they’re acting in the interests of the popular majority, despite overwhelming evidence that in most countries this is simply not true.
                Take the case of a homophobic attack that took place in Paris following the success of Marine Le Pen’s far-right National Rally (RN) party in the European elections last June. Three Le Pen supporters and a member of the violent far-right student Groupe Union Défense came across a 19-year-old gay man, whom they brutally attacked while shouting homophobic and transphobic abuse. The men were arrested, only to claim that: “Things would be different once Jordan Bardella [president of the RN] is in power and Hitler is back.” Another of the gang reportedly added that “In three weeks’ time we’ll be able to smash up fa*gs as much as we like.”',
                'image' => get_site_url() . '/articles/step-to-the-right/pride-flag.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'Meanwhile in Italy, Prime Minister Giorgia Meloni’s Brothers of Italy party has wasted no time since being elected in 2022 in tearing up protections for gay people. In defence of “God, Fatherland and Family”, Meloni (a close confidante of both Nigel Farage and Donald Trump) is vehemently opposed to same-sex unions and adoptions, and has even cancelled the birth certificates of children born to same-sex couples, believing child -rearing to be an exclusively heterosexual right.
                Perhaps unsurprisingly, in the US an exit poll by NBC following Trump’s re-election found that only 12% of LGBTQ+ voters voted for Trump, down from 27% in 2020. That’s a clear reflection of the fact that Trump’s first administration enacted more anti LGBTQ+ policies than any previous administration, often with devastating consequences in areas including healthcare, housing, social services, education, employment and access to basic government services. Despite this, Melania Trump appeared at an election fundraiser at the president’s Mar-a- Lago estate organised by LGBTQ+ campaign group Log Cabin Republicans. It was later revealed that Mrs Trump was paid $237,500 for her appearance.
                Meanwhile since the start of Trump’s second presidency no fewer than 575 anti- LGBTQ+ bills have been filed in US law courts. 
                As we prepare to celebrate our own Pride this summer, we should never be anything less than vigilant, and remember that the rights we have fought so hard for can be erased with the simple stroke of a pen.',
                // 'image' => get_site_url() . '/articles/step-to-the-right/cover.webp',
                // 'image_alt' => '',
                // 'image_credit' => '',
            ]); ?>
        </div>
    </section>

    <?php /* 042-043 World Rights.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'RIGHTS AROUND THE WORLD',
                'content' => '',
                'image' => get_site_url() . '/adverts/World-Rights-01.webp',
                'image_alt' => 'ALT',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'TITLE',
                // 'content' => 'CONTENT',
                'image' => get_site_url() . '/adverts/World-Rights-02.webp',
                'image_alt' => 'ALT',
            ]); ?>
        </div>
    </section>

    <?php /* 044 LOVE THING.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-red); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'Love, actually',
                'content' => 'In the 90s, the LGBTQIA+ experience was defined, in no small part, by the many campaigns and grassroots movements which aimed to counter the inequality experienced by LGBTQIA+ people at that time. This was particularly vital when it came to matters of sexual health, and the promotion of safer sex practices free from shame, as well as HIV and AIDS awareness, and combating transphobic and homophobic hate crimes.
                Spectra is a London-based sexual health and wellbeing association which started life in 1996 as the West London Gay Men’s Project offering community-based services to prevent HIV transmission amongst local high-risk populations. ',
                'image' => get_site_url() . '/articles/love-thing/love-actually-01.webp',
                'image_alt' => 'PICTURE: PARMINDER SEKHON FOR THE NAZ PROJECT; 
                PICTURE: CAROLINE DUCOBU 1998; 
                PICTURE: TVS HEALTH EDUCATION COUNCIL',
                'image_credit' => 'PICTURE: PARMINDER SEKHON FOR THE NAZ PROJECT; 
                PICTURE: CAROLINE DUCOBU 1998; 
                PICTURE: TVS HEALTH EDUCATION COUNCIL',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'Together with Studio Voltaire, Spectra is presenting It’s A Love Thing, an exhibition of ground-breaking sexual healthcare posters from their collection of over 100 campaign posters advocating safer sex alongside newly commissioned artworks
                The posters on display invite visitors to “F**k safely, love safely”, “Take pride in who you are”, “Get set for safer sex” and “Care for our lovers, families, friends and ourselves.”
                This exhibition is part of Tender Living – Studio Voltaire’s national four-year programme of collaborative projects of trans, non-binary and gender-questioning artists, participants, partners and audiences.
                A celebration of LGBTQIA+ relationships in their many forms, It’s a Love Thing is a fascinating snapshot of a period in LGBTQIA+ history that’s still relevant today',
                // 'image' => get_site_url() . '/articles/love-thing/love-actually-01.webp',
                // 'image_alt' => 'PICTURE: JAMES BELLORIN',
                // 'image_credit' => 'PICTURE: PARMINDER SEKHON FOR THE NAZ PROJECT; 
                // PICTURE: CAROLINE DUCOBU 1998; 
                // PICTURE: TVS HEALTH EDUCATION COUNCIL',
            ], "accented"); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => '#It’s A Love Thing: 30 Years of LGBTQIA+ Health Advocacy
                Project Studio is at Studio Voltaire, 1A Nelsons Row, London SW4 7JR until 17 August
                Go to: www.studiovoltaire.org
                www.spectra-london.org.uk',
                'image' => get_site_url() . '/articles/love-thing/love-actually-02.webp',
                'image_alt' => 'PICTURE: DANIEL ALLEN. PRODUCED BY CITY+HACKNEY AND TOWER HAMLETS HEALTH AUTHORITIES AND THE LONDON BOROUGH OF HACKNEY; 
                PICTURE: GUPTA; DESIGN: EUGENIE DODD; TRANSLATION AND TYPE-SETTING NEWCOMS; PUBLISHED BY BLACK HIV AND AIDS NETWORK; 
                PICTURE: THE NAZ PROJECT 1994',
                'image_credit' => 'PICTURE: DANIEL ALLEN. PRODUCED BY CITY+HACKNEY AND TOWER HAMLETS HEALTH AUTHORITIES AND THE LONDON BOROUGH OF HACKNEY; 
                PICTURE: GUPTA; DESIGN: EUGENIE DODD; TRANSLATION AND TYPE-SETTING NEWCOMS; PUBLISHED BY BLACK HIV AND AIDS NETWORK; 
                PICTURE: THE NAZ PROJECT 1994',
            ]); ?>
        </div>
    </section>

    <?php /* 045-047 Cooper.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => 'PROUD AT LAST',
                'content' => 'FOR YEARS ACCLAIMED ACTOR, DIRECTOR AND DANCER <strong>EMRHYS COOPER</strong> STRUGGLED WITH HIS SEXUALITY. HE TALKS TO <strong>NIGEL ROBINSON</strong> ABOUT BULLIES AND BALLET, VAMPIRES AND CORONATION STREET AND BEING GAY IN HOLLYWOOD',
                'image' => get_site_url() . '/articles/emrhys-cooper/cover.webp',
                'image_alt' => 'PICTURE: DAN COLLINS',
                'image_credit' => 'PICTURE: DAN COLLINS',
            ], "accented"); ?>

            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#EMRHYS COOPER GREW UP IN DEVON, THE SON OF A TEACHER AND A DANCER. HOW DID HE GET INTO THE THEATRE IN THE FIRST PLACE?
                “I was exposed to a lot of theatre and pantomime from about six years old,” he says. “My dad was doing amateur dramatics, including a lot of Shakespeare and my mum was a dancer. I just started tagging along with my parents and started going to dance classes.” 
                #AS A YOUNG GAY MAN IN DEVON IN THE EARLY 90S, HE DIDN’T HAVE THE HAPPIEST OF TIMES AT SCHOOL.
                “School was very challenging for me,” he admits. “I struggled with ADHD and dyslexia which was undiagnosed at the time. Performing was my outlet and boosted my morale. Thank God, if not for that it would have been a very challenging life. 
                “I started performing when I was quite young and I think the teacher – I don’t want to name her – resented me. I went away to London and whilst I was away she had a class discussion about me. She said I was gay and had feminine qualities. So when I came back to school I was told I was gay — even before I knew myself! 
                “One thing I loved so much was ballet and the boys at school all said that only girls did ballet and if you were a boy then you were gay and a sissy. They even called me by a nickname, which was ‘Femrhys’ because of my feminine qualities. I can laugh at it now but for so many years if I heard the word ‘Femrhys’ I’d just tense up. ',
                // 'image' => get_site_url() . '/articles/emrhys-cooper/cover.webp',
                // 'image_alt' => 'PICTURE: DAN COLLINS',
                // 'image_credit' => 'PICTURE: DAN COLLINS',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“I created a persona that wasn’t me to survive and to protect myself”',
                'content' => '“I was getting bullied, sometimes physically, so I created a persona that wasn’t me to survive and to protect myself. For many years I lived a lie. I believed I could pull it off being straight. I had girlfriends and was doing pretty well as a dancer professionally but I was just miserable. 
                “So at the age of 23 I decided to go to LA. I told everyone it was for my career but it was really to explore my sexuality. It was so I could be free. 
                “But in LA the cracks started to appear more and more. I couldn’t live the lie any more. So I came out to one friend and then another and started therapy. It’s been a long journey and it’s only in the last few years I’m finally feeling comfortable and proud with who I am. For so many years it was a dirty horrible secret of shame and guilt and judgment. I grew up hearing about people dying of AIDS and being lonely. On television gay characters were being depicted as either the clown or the drug addict which just reinforced what I was being told by my peers at school.',
                // 'image' => get_site_url() . '/articles/emrhys-cooper/cover.webp',
                // 'image_alt' => 'PICTURE: DAN COLLINS',
                // 'image_credit' => 'PICTURE: DAN COLLINS',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => '#IN LA HE WAS CAST AS THE LEAD IN THE GAY VAMPIRE SERIES THE LAIR: ONLYFANGS. HOW DID THAT COME ABOUT? 
                “It was a lot of fun. At the end of 2019 I lost my best friend to an accidental overdose and then another friend took his life. And then my mum had a stroke, so grief hit me like a ton of bricks. A horrible darkness took over and I had to step away from acting: my instrument was just not working, it was out of tune. In 2020 I couldn’t even show up for an audition and I thought that this is it for now. 
                “Then in 2023 I ran into director Billy Clift who said he was working on reviving [cult gay vampire TV series] The Lair. At the time I was in the play, The Boys in the Band, playing the hooker cowboy – typecast again! – and I thought this was just another LA conversation. Then he called me to say it had all worked out and I was being cast as the lead in The Lair: OnlyFangs. It reconfirmed to me that I have the goods and that this career is worth sticking to. It’s a hard life being an actor and it gave me confidence to realise that I can play a lead role.
                “Filming the show was very intense. There wasn’t a huge budget and we were filming a tremendous number of scenes every day. I went on this very hard-core diet and got into great shape. There’s no such thing as a fat vampire – especially on a gay vampire series! 
                “And getting to be with lots of sexy boys and be part of an orgy scene wasn’t bad!”',
                'image' => get_site_url() . '/articles/emrhys-cooper/only-fangs.webp',
                'image_alt' => 'PICTURE: ONLY FANGS (HERE TV)',
                'image_credit' => 'PICTURE: ONLY FANGS (HERE TV)',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHEN HE MOVED TO LA IN 2007 DID HE ENCOUNTER ANY HOSTILITY TOWARDS BEING A GAY ACTOR?
                “My manager at the time told me l couldn’t be [openly] gay. He said that if any Hollywood casting director sniffed out that I was gay they wouldn’t cast me (and most casting directors in Hollywood are gay!). I had come to LA to be free and I was being told that I still had to be straight!
                “The original Lair was a hit at the time and I remember seeing an episode and absolutely loving it but at that point in my life I didn’t think it was possible to do something like that because I thought it could potentially harm my career. Now fast-forward 15 years I get cast as the lead in OnlyFangs. It just shows you have got 
                to stick to the course and learn to love yourself.” 
                #IN 2023 EMRHYS STARRED IN NOSFERATU, A REMAKE OF THE CLASSIC VAMPIRE FILM. WHAT DID HIS ROLE INVOLVE?
                “I play Thomas Hutter who has this over-the-top bravado and contrived charisma as a ploy to hide his naiveté. “Examining the little clues the script gave me and from watching the original, I realised Thomas Hutter was very camp and flamboyant. He’s been married a year to his wife and still hasn’t consummated the marriage; he’s gay and doesn’t know it and he needs success to feel strong and masculine. That was something which personally ignited the wheels for me because I knew what it’s like to feel lack of success and all those feelings. He is on this quest for money and goes on a roller coaster until he realises he has everything he needs right in front of him. The Thomas Hutter journey in Nosferatu is one I think many people will relate to. I’m really proud of the work on that film; I had to be very vulnerable, something I kinda struggled with. 
                “In the original 1922 movie he is so over the top – it’s obviously a silent movie so it has to be – but it’s so blatantly obvious he’s gay. There’s something quite queer about vampire movies anyway – being bitten by a man.”',
                // 'image' => get_site_url() . '/articles/emrhys-cooper/cover.webp',
                // 'image_alt' => 'PICTURE: ONLY FANGS (HERE TV)',
                // 'image_credit' => 'PICTURE: ONLY FANGS (HERE TV)',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“There’s something quite queer about vampire movies”',
                'content' => '#THERE’S A GROWING FEELING THAT GAY ROLES SHOULD ONLY BE PLAYED BY GAY ACTORS. AS AN ACTOR AND DIRECTOR HOW DOES EMRHYS FEEL ABOUT THAT?
                “It’s a very nuanced conversation,” he agrees. 
                “There is a double standard. If a straight actor plays gay then it’s ‘Oh, my God, wow, they’re so brave!’ But if it’s a gay actor playing straight it’s ‘Can they pull it off?’ 
                “It’s been proven that once you come out as gay you lose out on the straight roles. For example, Matt Bomer came out and lost out on playing Fifty Shades of Grey, and Superman. There are less gay roles than straight roles and they often go to straight actors. In some of my experiences with a straight actor playing gay they’ve been uncomfortable and not necessarily feeling they’re committing to the role. That said, when I’m directing I’ll cast the best person for the role. I’m obviously going to try and cast a gay actor [in a gay role] as there are less opportunities. But if someone walks in and plays the role as I envisaged it and is the best person for the role I’ll go that way. It’s like you’re filling in a jigsaw puzzle. I really like that there’s now a push to cast gay actors in gay roles because we’re losing out on straight roles all the time.”
                #FROM ONE VAMPIRE TO ANOTHER SORT OF VAMPIRE, EMRHYS RECENTLY PLAYED THE PART OF MANIPULATIVE CULT LEADER ROWAN CUNLIFFE IN CORONATION STREET. HOW DID HE GET THE PART?
                “For the past 15 years I’ve been lucky and have been working consistently and busy enough to stay in America. I’m now American and have a beautiful life there. But I’d been yearning to come back to the UK to be closer to family so when the opportunity to do Coronation Street came up I just knew it was the right opportunity. The role really spoke to me as I have a personal connection to the subject: my parents were in a cult 22 years ago and I felt this could be a great opportunity to raise awareness. I had two weeks to pack up my suitcase and left my husband, two dogs and cat in California. I wasn’t sure how long I was going to do on the show. And now we’ve all relocated to the UK and I’m so grateful that Coronation Street literally brought me home.',
                // 'image' => get_site_url() . '/articles/emrhys-cooper/cover.webp',
                // 'image_alt' => 'PICTURE: ONLY FANGS (HERE TV)',
                // 'image_credit' => 'PICTURE: ONLY FANGS (HERE TV)',
            ]); ?>

            

            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '',
                'content' => '“I was struck by how warm and friendly everyone on Coronation Street was. It’s like a family and they welcomed me with open arms. There’s a lot of joy in Coronation Street.”
                #EMRHYS IS ALSO A CO-HOST AND EXECUTIVE PRODUCER OF THE LGBTQ+ HISTORICAL PODCAST SERIES “HISTORICAL HOMOS,” WHICH DESCRIBES ITSELF AS A “NO-F**KS-GIVEN” GUIDE TO LGBTQ+ HISTORY. 
                “My friend who passed away did a lot of scholarly books on the LGBTQ+ community and history and we wanted to continue his legacy. My husband decided to do a podcast, and [actor] Zachary Quinto came on board as executive producer.
                “LGBTQ+ history is so important. We have such a rich history and there are so many people who have been overlooked. We thought we should do it in a way that is easiest to digest with humour and with heart and for a mainstream audience; a lot of our audience are straight people . We want to educate people about these great LGBTQ+ people, — especially now with all our rights in jeopardy. 
                #WHAT ELSE IS EMRHYS WORKING ON AT THE MOMENT?
                “I did a short film back in 2018 called Trophy Boy about a kept boy/ sugar daddy relationship and the truth behind the lies of social media. 
                “It was a proof of concept for a Trophy Boy series I want to do, following four social media influencers and how they really make money from the oldest profession in the world through the lens of Only Fans and social media. I wanted to make a truthful, honest, irreverent salacious sexy show about real life. We’re hoping to go into production with that”.',
                'image' => get_site_url() . '/articles/emrhys-cooper/tony-duran.webp',
                'image_alt' => 'PICTURE: TONY DURAN',
                'image_alt' => 'PICTURE: TONY DURAN',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“It all comes down to passion in the story I’m telling”',
                'content' => '#ACTING, DIRECTING, DANCING – WHICH IS EMRHYS’ FAVOURITE?
                “The medium really doesn’t matter. To me it all comes down to passion in the story I’m telling and if it’s going to touch and inspire people. I’ve had amazing experiences on stage and on screen but I miss dancing. I haven’t danced for a while and once a dancer always a dancer. I spent 20 years of my life five days a week dancing: that’s part of who I am. Dancing gave me resilience and discipline and a good work ethic. People think you can just show up in Hollywood and wait on a corner to be discovered; that’s a myth: its hard work and you have to work harder than anyone else if you want to make headway in this industry.”',
                // 'image' => get_site_url() . '/articles/emrhys-cooper/tony-duran.webp',
                // 'image_alt' => 'PICTURE: TONY DURAN',
                // 'image_credit' => 'PICTURE: TONY DURAN',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHAT DOES EMRHYS CONSIDER IS ONE OF HIS BIGGEST ACHIEVEMENTS?
                “My sobriety. My journey with alcohol ended in 2023. I think a lot of my personal and career success is thanks to my sobriety. I was in denial and didn’t quite realise just how much it was getting in the way. My life has opened up in so many beautiful ways – I thought being sober would be boring but it’s not at all and my life has opened up in so many beautiful ways. I am just so aware of the things around me which I wasn’t necessarily before. I listen to the birds, I see the beauty of nature. I really do think I’ve been given a second chance. I was only operating on my 25% for a long time and I think a lot of my trauma was down to battling my sexuality and getting into drugs and alcohol at a very young age as a way to self-medicate.
                “Now, deciding to be sober, I’ve finally became comfortable and happy in who I am. The journey I’m now on is a much more beautiful one, less about my ego and more about how I can be of service to other. It’s really exciting to actually reshift my focus and perspective and reframe things, let go of resentment and now really be about helping others. It’s so much more rewarding when you can do something for someone else.
                “Life is about connecting. For a long time I was spiritually sick and I couldn’t connect because I felt so bad about myself – I now feel that I am building that connection with myself and I can be pleasant with others.”
                #AS WELL AS PLAYING A GAY VAMPIRE, EMRHYS HAS APPEARED IN DESPERATE HOUSEWIVES AND MAMMA MIA! AND WORKED WITH MADONNA AND THE PUSSYFOOT DOLLS AND FEATURED IN THE SUGABABES VIDEO FOR PUSH THE BUTTON. IS HE IN DANGER OF BECOMING A GAY ICON?
                “Oh, my God! Me becoming a gay icon that would be incredible!” 
                The Lair: OnlyFangs is available on Prime Video
                Nosferatu is available on Prime Video, Apple TV and FreeVee',
                // 'image' => get_site_url() . '/articles/emrhys-cooper/tony-duran.webp',
                // 'image_alt' => 'PICTURE: TONY DURAN',
                // 'image_credit' => 'PICTURE: TONY DURAN',
            ]); ?>

            
        </div>
    </section>

    <?php /* 048-049 APPAREL NEW.pdf */ ?>
    <section>
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'Pride Life Apparel',
                'content' => '',
                'image' => get_site_url() . '/adverts/Inclusive-Apparel-01.webp',
                'image_alt' => 'INCLUSIVE APPAREL. Made with love to wear with Pride. Shop with Pride. TO CELEBRATE OUR LAUNCH WE ARE OFFERING 20% OFF EXCLUSIVE PRIDE MERCHANDISE. USE CODE: LAUNCH20 AT CHECKOUT',
                'image_credit' => '',
                'hyperlink' => array('text' => 'USE CODE: LAUNCH20 AT CHECKOUT', 'url' => 'https://pridelifeapparel.com/'),
            ]); ?>
            <?php echo create_layout('advert', $args = [
                'title' => 'Pride Life Apparel',
                'content' => '',
                'image' => get_site_url() . '/adverts/Inclusive-Apparel-02.webp',
                'image_alt' => 'INCLUSIVE APPAREL. Made with love to wear with Pride. Shop with Pride. TO CELEBRATE OUR LAUNCH WE ARE OFFERING 20% OFF EXCLUSIVE PRIDE MERCHANDISE. USE CODE: LAUNCH20 AT CHECKOUT',
                'image_credit' => '',
                'hyperlink' => array('text' => 'USE CODE: LAUNCH20 AT CHECKOUT', 'url' => 'https://pridelifeapparel.com/'),
            ]); ?>
        </div>
    </section>

    <?php /* 050 Lifeboats AD.pdf */ ?>
    <?php echo create_layout('advert', $args = [
        'title' => 'RNLI Lifeboats',
        'content' => '',
        'image' => get_site_url() . '/adverts/RNLI-Pride-01.webp',
        'image_alt' => '',
        'image_credit' => '',
        'hyperlink' => array('text' => 'RNLI.org/pride', 'url' => 'https://RNLI.org/pride/'),
    ]); ?>

    <?php /* 051-053 Out in the Forces.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-green); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'OUT AND SERVING',
                'content' => 'A QUARTER OF A CENTURY SINCE IT WAS ILLEGAL TO BE HOMOSEXUAL IN THE ARMED FORCES, <strong>XAV JUDD</strong> LOOKS AT HOW THINGS HAVE CHANGED, AND WHY THIS IS NOW AN EXCELLENT ERA TO BE OUT WHILE SERVING',
                'image' => get_site_url() . '/articles/out-and-serving/cover.webp',
                'image_alt' => 'PICTURE: CROWN COPYRIGHT 2025',
                'image_credit' => 'PICTURE: CROWN COPYRIGHT 2025',
            ]); ?>

            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'On 12 January 2000, the ban on LGBTQ+ individuals serving in the British military was finally revoked.
                In essence, the government’s hand had been forced regarding such a policy shift: a 1999 legal battle and subsequent ruling by the European Court of Human Rights had determined that the so-called “gay ban” contravened human rights.
                Up until then, nonheterosexual men and women could be dismissed or imprisoned if their orientation came to light.
                This was obviously grossly unfair as they had sacrificed just as much as their straight counterparts to protect the nation’s interest. First, some background. Since the formation and political union of Great Britain in 1707, men having sex with men could be dismissed, jailed, or even executed (the latter up to 1861).
                However, it wasn’t until the 1950s that homosexuality was specifically outlawed in the three branches of the military. This was achieved by various pieces of legislation — the 1955 Army and Airforce Acts, and the 1957 Naval Discipline Act — that defined nonstraight carnal relations as “conduct of a cruel, indecent or unnatural kind”.
                Despite the fact that homosexual acts were decriminalised for males over 21 in England and Wales in the 1967 Sexual Offences Act (similar measures were extended to Scotland and Northern Ireland in the early 1980s), this statute explicitly exempted the armed forces: queer troops could still be discharged or incarcerated.
                Fighting With Pride (www.fightingwithpride.org), a military charity championing the health and well-being of LGBTQ+ vets and service persons, estimates that up to 15,000 men and women were negatively impacted by the gay ban. Unfortunately, it’s impossible to know the exact total as the Ministry of Defence (MoD) destroyed the relevant records.',
                'image' => get_site_url() . '/articles/out-and-serving/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => 'Nonetheless, whatever it is, it’s easy to forget that behind each number is a human being whose life was needlessly shattered and turned upside down simply because of their attraction to the same sex. Jean Macdonald was one such individual. A lance corporal in the Women’s Royal Army Corps until 1981, she was discharged in that year for being a lesbian.
                Thinking about how the decision affected her, in November 2022 she told the BBC: “All of a sudden you’ve lost your whole career, you’ve lost your friends, you’ve lost your accommodation, you know, your whole way of life — it’s just full of shame.” It’s not a surprise that over a decade of mental health struggles ensued, with the former soldier eventually being diagnosed with complex PTSD.
                Stephen Close also suffered tremendously. In 1983, the ex-Royal Fusilier lost his position in his regiment, was kicked out of the army and sent to military prison, because he was discovered smooching with a man in Berlin. He has stated that the record of his conviction later made it extremely difficult to secure work. (Tragically, similarly rocked by immense trauma, many other non-heterosexual service persons who were expelled committed suicide.)',
                'image' => get_site_url() . '/articles/out-and-serving/marching-london-01.webp',
                'image_alt' => 'PICTURE: MARCHING AT PRIDE IN LONDON',
                'image_credit' => 'PICTURE: MARCHING AT PRIDE IN LONDON',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '“The statute explicitly exempted the armed forces: queer troops could still be discharged or incarcerated”',
                'content' => 'As the ban had such devastating effects on so many innocent people’s lives, we need to ask why the MoD thought the policy was essential. Its main justification stemmed from the certitude that homosexuality adversely impacted morale and discipline, resulting in a decline in combat prowess and general effectiveness.
                There was also a dread of “contamination” in that there existed a sense that LGBTQ+ people were a “contagious entity”, who might “corrupt” other service personnel with their lifestyles. Additionally, officialdom contended queerness was inherently incompatible with the armed forces’ values and norms, especially concerning masculinity and the perceived male gender role.
                Lastly, members of the LGBTQ+ community were seen as an enhanced security threat and were considered to be more susceptible to coercion and blackmail.',
                'image' => get_site_url() . '/articles/out-and-serving/helicopter-troops.webp',
                'image_alt' => 'PICTURE: CROWN COPYRIGHT 2025',
                'image_credit' => 'PICTURE: CROWN COPYRIGHT 2025',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '',
                'content' => 'In June 2007, seven years after the prohibition on homosexual activity in the military was ended, the government began to recognise just how deleterious their previous strategy had been. Wing Commander Phil Sagar of the armed forces’ joint equality and diversity training centre communicated a formal apology on behalf of the MoD.
                And indeed, a spokesman for the organisation stated: “We deeply regret the treatment of LGBTQ+ serving personnel between 1967 and 2000, which was wholly wrong, completely unacceptable and does not reflect today’s armed forces.” Admitting abysmal conduct and issuing mea culpas is one thing, but if no steps are taken to redress the related injustices, such sentiments can ring hollow.
                It’s to be welcomed, then, that substantial other measures were enacted post- 2000 in an effort to atone. For instance, in February 2021 the government initiated The Return of Medal scheme, enabling individuals who’d been stripped of their awards and medals during the ban to have them restored. Twelve months later, the Tory administration commissioned the LGBTQ+ Veterans Independent Review. Chaired by the late Lord Etherton (Britain’s first openly gay senior judge), it examined the experiences of non-heterosexuals who’d served between 1967 and 2000 and produced 49 recommendations.
                And according to the MoD: “We are committed to delivering on all the recommendations from the LGBTQ+ Veterans Review, with 42 of the 49 recommendations already implemented.”',
                'image' => get_site_url() . '/articles/out-and-serving/marching-london-02.webp',
                'image_alt' => 'PICTURE: MARCHING AT PRIDE IN LONDON',
                'image_credit' => 'PICTURE: MARCHING AT PRIDE IN LONDON',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '“Members of the LGBTQ+ community were seen as an enhanced security threat”',
                'content' => 'Some of these recommendations include qualification of administrative discharge, reinstatement of rank, and the Financial Recognition Scheme. Launched in December 2024, it allows those impacted by the gay ban to benefit from a compensation package consisting of a fixed payment of £50,000, and possible extra remuneration up to £20,000 depending on the exact circumstances. And in the future, there’s also going to be a permanent commemoration at the National Memorial Arboretum in Staffordshire.
                By doing so much to fulfil Lord Etherton’s recommendations, the MoD has highlighted an ongoing steadfast commitment to its nonheterosexual workforce.',
                'image' => get_site_url() . '/articles/out-and-serving/marching-london-03.webp',
                'image_alt' => 'PICTURE: MARCHING AT PRIDE IN LONDON',
                'image_credit' => 'PICTURE: MARCHING AT PRIDE IN LONDON',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => 'Indeed, back in 2007, Wing Commander Sagar enthused: “It went from ‘You’re fired’ to ‘You’re a valued member of the team.’” Since the ban, the military establishment has greatly fostered equality: all service personnel, irrespective of sexuality or gender identity, have the same terms and conditions (requirements, responsibilities, and benefits – extending to same-sex spouses or civil partners), and are afforded equivalent legal protections.
                The armed forces have also tried to be more appealing to the LGBTQ+ community in recent years by incorporating various types of diversity, equity, and inclusion practices; setting up advocacy and support networks; actively recruiting LGBTQ+ people; and having represenwonder, then, that there are now countless tales of queer men and women feeling confident and relaxed in uniform, not experiencing any sort of homophobic bullying or harassment, saying it’s no problem bringing their other halves to official functions, and believing they’ve got as much chance of a promotion as their straight colleagues.
                In May 1940, in his maiden speech as wartime prime minister, worried by the Nazi menace, Winston Churchill announced that he had “nothing to offer but blood, toil, tears, and sweat.” For generations, LGBTQ+ troops have expressed the same sentiment and also given their all in defence of the realm. It’s marvellous, then, due to several changes since the gay ban, not only can nonheterosexuals now serve openly without prejudice, but a welcoming environment has also been created in which they can grow and prosper.',
                'image' => get_site_url() . '/articles/out-and-serving/cover.webp',
                'image_alt' => 'PICTURE: CROWN COPYRIGHT 2025',
                'image_credit' => 'PICTURE: CROWN COPYRIGHT 2025',
            ]); ?>
        </div>
    </section>

    <?php /* 054-055 (Goodbye Pinkwashing) ADVOCATES Certificate.pdf */ ?>
    <section>
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'GOODBYE PINKWASHING',
                'content' => 'THE PRIDE LIFE GLOBAL CERTIFICATE OF DIVERSITY PRACTICES',
                'image' => get_site_url() . '/adverts/Goodbye-Pinkwashing-01.webp',
                'image_alt' => 'THE PRIDE LIFE GLOBAL CERTIFICATE OF DIVERSITY PRACTICES',
                // 'image_credit' => '@PrideLifeGlobal on Instagram',
                'hyperlink' => array('text' => 'For more info: PrideLifeGlobal.com/CODP', 'url' => 'https://pridelifeglobal.com/codp'),
            ]); ?>
            <?php echo create_layout('advert', $args = [
                'title' => 'Count Me In',
                'content' => 'THE PRIDE LIFE GLOBAL CERTIFICATE OF DIVERSITY PRACTICES',
                'image' => get_site_url() . '/adverts/Goodbye-Pinkwashing-02.webp',
                'image_alt' => 'THE PRIDE LIFE GLOBAL CERTIFICATE OF DIVERSITY PRACTICES',
                // 'image_credit' => '@PrideLifeGlobal on Instagram',
                'hyperlink' => array('text' => 'For more info: PrideLifeGlobal.com/CODP', 'url' => 'https://pridelifeglobal.com/codp'),
            ]); ?>
        </div>
    </section>

    <?php /* 056-057 ADVOCATES Count Me In.pdf */ ?>
    <section>
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'Pride Life Global: Certificate of Diversity Practices',
                'content' => 'COUNT ME IN! In the eighth of Pride Life’s ongoing series, we talk to people who are committed to working every day for an inclusive and diverse society for LGBTQ+ people and their allies.',
                'image' => get_site_url() . '/adverts/Count-Me-In-01.webp',
                'image_alt' => 'COUNT ME IN! In the eighth of Pride Life’s ongoing series, we talk to people who are committed to working every day for an inclusive and diverse society for LGBTQ+ people and their allies.',
                // 'image_credit' => '@PrideLifeGlobal on Instagram',
                'hyperlink' => array('text' => 'Follow @PrideLifeGlobal on Instagram', 'url' => 'https://www.instagram.com/pridelifeglobal/'),
            ]); ?>
            <?php echo create_layout('advert', $args = [
                'title' => 'Count Me In',
                'content' => 'COUNT ME IN! In the eighth of Pride Life’s ongoing series, we talk to people who are committed to working every day for an inclusive and diverse society for LGBTQ+ people and their allies.',
                'image' => get_site_url() . '/adverts/Count-Me-In-02.webp',
                'image_alt' => 'COUNT ME IN! In the eighth of Pride Life’s ongoing series, we talk to people who are committed to working every day for an inclusive and diverse society for LGBTQ+ people and their allies.',
                // 'image_credit' => '@PrideLifeGlobal on Instagram',
                'hyperlink' => array('text' => 'Follow @PrideLifeGlobal on Instagram', 'url' => 'https://www.instagram.com/pridelifeglobal/'),
            ]); ?>
        </div>
    </section>

    <!-- Pride Life Global - Advocates Feature -->
    <section style="--background: var(--lightgrey); --accent: var(--pride-orange); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'Advocates',
                'content' => '',
                'image' => get_site_url() . '/articles/advocates/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'RAHUL UPADHYAY',
                'content' => '#RAHUL UPADHYAY IS A QUEER RIGHTS ACTIVIST, CO-PRESIDENT OF INTERPRIDE AND THE FOUNDER OF GANDHINAGAR QUEER PRIDE
                (They/Them)',
                'image' => get_site_url() . '/articles/advocates/rahul-upadhyay.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHO ARE YOU AND WHAT IS YOUR PROFESSIONAL BACKGROUND?
                I’m Rahul Upadhyay — a queer rights activist, community organiser, and one of the youngest leaders in the global Pride movement. I’ve been working on LGBTQIA+ issues since the age of 22, and over the years, my activism has taken many forms: rescuing queer individuals from unsafe households, organising city and national Pride events, conducting hundreds of gender-sensitisation workshops with schools, colleges, local authorities, and creating safe spaces for families of queer people — something still rare in India. 
                Professionally, I’ve had the privilege of working with some of India’s premier educational institutions, including Ashoka University and Indian Institute of Technology Gandhinagar, where I’ve led alumni engagement and community-building efforts. I’ve consistently integrated inclusion, storytelling, and empowerment into every role I’ve taken on. 
                On the international front, I currently serve as the Co-President of InterPride — the global network that supports Pride organisers worldwide — making me the youngest and the first Indian and South Asian to hold this role. I also lead the Gandhinagar Queer Pride Foundation, which I founded to push back against silence and stigma in Gujarat state. 
                Through all these roles, my focus has been clear: building inclusive ecosystems, whether within institutions, on the streets, or across borders — to make this world a little more just, a little more livable, and a lot more loving for LGBTQIA+ people.',
                'image' => get_site_url() . '/articles/advocates/rahul-upadhyay.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“WE MUST DEMAND POLICIES THAT PROTECT, EMPOWER, AND AFFIRM QUEER LIVES”',
                'content' => '#IN 2019, YOU FOUNDED GANDHINAGAR QUEER PRIDE. WHY DID YOU FEEL A NEED TO FOUND QUEER PRIDE? 
                Gandhinagar Queer Pride was born out of both frustration and hope. In 2018-2019, I was a young queer person navigating life in Gujarat — a state known for its deep-rooted conservatism and as the home of India’s current political leadership, which has often been openly hostile to LGBTQIA+ rights. There was no Pride parade, no visible queer community, and absolutely no safe public space where someone like me could exist authentically. The silence was suffocating.
                I started Gandhinagar Queer Pride because I couldn’t bear to see another queer person feel as invisible and unsupported as I once did. 
                Over time, it grew into much more than a march and a collective. The Foundation has become a year-round engine for change.',
                'image' => get_site_url() . '/articles/advocates/rahul-upadhyay.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#YOU ARE ALSO CO-PRESIDENT OF INTERPRIDE. WHAT DOES THAT ROLE INVOLVE? 
                Being elected as the Co-President of InterPride is one of the greatest honours of my life. To be chosen by the membership, with overwhelming support, as the youngest and the first South Asian to hold this role, is not just a personal milestone — it’s a powerful signal that the global Pride movement is ready to embrace new and young leadership, new geographies, and new ways of thinking. 
                It’s a big responsibility, and I carry it with deep humility. I know I’m still learning. But I also know that I bring something essential to the table: the lived experience of being a young, queer, brown organiser from a part of the world that is often overlooked in global LGBTQIA+ narratives. 
                #IT CAN BE ARGUED THAT WE HAVE COME A LONG WAY IN POSITIVE LGBTQIA+ REPRESENTATION IN THE PAST DECADES. WHAT MORE NEEDS TO BE DONE, BOTH GLOBALLY AND PARTICULARLY IN SOUTH ASIA? 
                Yes, we’ve come a long way — but we’re far from done. In fact, lately it feels like we’re going backwards. 
                Recent developments globally have shown us how fragile this progress is. In the United States — once seen as a leader in queer rights — trans communities are under brutal legislative attack. In Türkiye, Hungary, and several other nations, queer identities are being erased, criminalised, and vilified. These aren’t isolated incidents — they’re part of a wider global rollback that threatens to push us back 50 years.
                The movement, simply put, needs more momentum. More people standing up, more governments listening, and more communities demanding justice and equality. 
                India decriminalised homosexuality in 2018, a historic and long-overdue victory. Nepal and Thailand have recently taken bold steps by legalising same-sex marriage, offering inspiration to the region. Yet these wins cannot be mistaken for widespread liberation.
                In India, despite the decriminalisation, the judiciary last year denied same-sex marriage. Queer people still face discrimination, violence, and invisibility in homes, workplaces, and policies. Trans persons continue to be marginalised, denied healthcare, employment, and dignity. In rural areas, even conversations about queerness are a privilege not yet possible. 
                We must go beyond token visibility and demand policies that protect, empower, and affirm queer lives.',
                'image' => get_site_url() . '/articles/advocates/rahul-upadhyay.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“I STARTED GANDHINAGAR QUEER PRIDE BECAUSE I COULDN’T BEAR TO SEE ANOTHER QUEER PERSON FEEL AS INVISIBLE AND UNSUPPORTED AS I ONCE DID”',
                'content' => '#WHAT DO YOU CONSIDER TO BE YOUR GREATEST ACHIEVEMENT? 
                My greatest achievement isn’t a single event or accolade — it’s the lives I’ve touched and the spaces I’ve helped create for queer people to be seen, heard, and celebrated. 
                On a personal level, being entrusted with the leadership of InterPride was a humbling moment. 
                But ultimately, what I consider my greatest achievement is the sense of belonging I’ve been able to create — both for myself and for others. Whether through support networks, Pride events, or one-on-one conversations, I am working to ensure that no queer person feels like they have to hide who they are, or that they are alone in their journey.
                #PRIDE – PARTY OR POLITICS? 
                Protest!',
                'image' => get_site_url() . '/articles/advocates/rahul-upadhyay.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'PEDRO IVO OLIVEIRA',
                'content' => '#PEDRO IVO OLIVEIRA IS A MASTER’S STUDENT IN INTERNATIONAL AND DEVELOPMENT STUDIES SPECIALISING IN GENDER, RACE, AND DIVERSITY
                (He/Him – “However, I fully support everyone’s right to use the pronouns they feel most comfortable with”)',
                'image' => get_site_url() . '/articles/advocates/pedro-ivo-oliveira.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHO ARE YOU, AND WHAT IS YOUR PROFESSIONAL BACKGROUND?
                My name is Pedro Ivo Oliveira, and I am a Master’s Student in International and Development Studies specialising in Gender, Race, and Diversity at the Graduate Institute of International and Development Studies in Geneva, Switzerland. Originally from Brazil, I come from a low-middle-income background and am the first person in my family to pursue a graduate program.
                I have extensive experience in LGBTQI+ human rights, social inclusion, and development, having worked in international organisations and international NGOs such as the Organisation of American States (OAS), ILGA World, and currently, Outright International. I am also a Salzburg Global Fellow under the New Voices for Public Policy in Europe’s cohort.',
                'image' => get_site_url() . '/articles/advocates/pedro-ivo-oliveira.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“I WOULD ASK FOR A WORLD IN WHICH ALL FORMS OF EXISTENCE ARE CELEBRATED”',
                'content' => '#YOUR RESEARCH FOCUSES ON THE RELATIONSHIPS BETWEEN PUBLIC AND GLOBAL HEALTH, GENDER, AND SEXUALITY. WHAT HEALTH CHALLENGES MIGHT LGBTQI+ PEOPLE FACE THAT THEIR HETEROSEXUAL FRIENDS MAY NOT?
                From intersex genital mutilation (IGM) to the denial of HIV-related treatment, LGBTQI+ individuals face unique and disproportionate health challenges due to stigma and discrimination in all phases of their lives. With that in mind, my research focuses on the intersections of gender, sexuality, and health.
                During my undergraduate degree, I researched the global HIV response and the specific needs of the key populations of men who have sex with men (MSM) and transgender persons. Currently, I am investigating the realities of drug policy and harm reduction and the challenges that disproportionately affect our communities, such as chemsex, drug use, integral health issues, and sexually transmitted infections.
                Secondly, I am also interested in researching the realities of sex workers in contexts of criminalisation and neglect by the traditional forms of power and understanding their movement’s resistance and organization as a pathway for meaningful collective and community care.',
                'image' => get_site_url() . '/articles/advocates/pedro-ivo-oliveira.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#WE’VE ARGUABLY COME A LONG WAY IN LGBTQI+ RIGHTS IN THE PAST DECADES, OR AT LEAST IN SOME PARTS OF THE PLANET. WHAT MORE NEEDS TO BE DONE?
                I believe that we still have a long road ahead. Many countries continue to criminalize same-sex relationships and LGBTQI+ existences more broadly, and even in countries without these harmful criminal laws, discrimination, and violence targeting LGBTQI+ communities reach alarming numbers every year.Besides that, we are currently following the passing of a massive wave of anti-LGBTQI+ laws that are an enormous danger to our communities worldwide and are creating harmful consequences related to health care access and education, for example. Therefore, more than ever, we must reorganise, rearticulate, and reconvene to redesign and recreate our globalized strategies to respond effectively to these movements’ rise.
                #WHAT DO YOU CONSIDER TO BE THE BIGGEST CHALLENGES FACING THE GLOBAL LGBTQI+ COMMUNITY IN THE NEXT DECADE?
                I believe that the rise of the anti-gender, anti-rights, and anti-LGBTQI+ movements worldwide, aligned with the rise of anti-democratic and authoritarian governments and administrations, is the biggest threat of the next decade. These reactionary movements are trying to (and successfully) conquer massive attention and support to undermine our communities’ civil, political, economic, social, and cultural human rights. However, every moment of crisis such as this one must be understood as an opportunity for collective mobilisation toward meaningful change. Paraphrasing one of my favorite intellectuals–the Brazilian drag queen Rita von Hunty - all human power can be resisted by other humans, and history teaches us that all tyrants will always find their way into the trash can. Therefore, we continue to work.',
                'image' => get_site_url() . '/articles/advocates/pedro-ivo-oliveira.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“WE ARE CURRENTLY FOLLOWING THE PASSING OF A MASSIVE WAVE OF ANTI-LGBTQI+ LAWS THAT ARE AN ENORMOUS DANGER TO OUR COMMUNITIES WORLDWIDE”',
                'content' => '#YOU ARE GIVEN THREE WISHES. WHAT WOULD THEY BE?
                That’s a tricky question! I would ask for a world in which all forms of existence are celebrated; in which all human beings are entitled to competent, inclusive, and equal health care access that addresses their specific needs; and a future where we are capable of overcoming the multidimensional crises that are currently affecting us and designing a new way of living, working, and existing.
                #PRIDE – POLITICS OR PARTY?
                LGBTQI+ historical movements teach us that there is no separation between these two: Stonewall’s legacy, for example, became both  
                a political act and a celebration march.  
                Our communities do not face the same struggles because we are not inserted in the same contexts. Therefore, to meaningfully foster transformation and change, we must enhance our sense of transnational solidarity, and there is no better phrase to sum up it than Marsha P. Johnson’s “no pride for some of us without liberation for  all of us.”',
                'image' => get_site_url() . '/articles/advocates/pedro-ivo-oliveira.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'ADELLE BARKER',
                'content' => '#ADELLE BARKER IS THE TRANS AND NON-BINARY NETWORK ASSOCIATE FOR THE LGBTQ+ NETWORK AT SKY
                (She/Her – “Proudly, openly, and said with true authenticity”)',
                'image' => get_site_url() . '/articles/advocates/adelle-barker.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#WHO ARE YOU AND WHAT IS YOUR PROFESSIONAL BACKGROUND?
                I’m Adelle Barker – parent, team leader for Home Service at Sky, LGBTQ+ Network Associate for Trans and Non-Binary inclusion, and someone who accidentally turned “I don’t know how to be trans” into a bit of a life motto.
                Professionally, I’ve been with Sky for 10 years now, mostly in field-based and leadership roles. I love the people side of things – supporting others, coaching, helping teams grow – and I’ve always found myself drawn to making things better for those around me, whether that’s in Home Service or diversity and inclusion work.
                #YOU ARE THE TRANS AND NON-BINARY NETWORK ASSOCIATE FOR THE LGBTQ+ NETWORK AT SKY. WHAT DOES THIS PARTICULAR ROLE INVOLVE AND HOW SUPPORTIVE IS SKY OF ITS LGBTQ+ EMPLOYEES?
                The role is part-visibility, part-voice, and part-vulnerable overshare – which aligns with all my values.
                It means I get to represent our trans and non-binary employees, push for better education and awareness, and create safe spaces to talk about real-life experiences – the awkward, the joyful, the challenging. I’ve run panels, events, supported campaigns, and I help shape policies and practices so they reflect lived realities, not just buzzwords. This is all volunteer-based, like many employee networks.
                Sky has honestly been incredible. I’ve been supported in ways I never expected – from leadership standing beside me, to the LGBTQ+ Network becoming a lifeline during my transition. I’ve cried in meetings, laughed my way through nerves on panels, and felt truly seen here. It’s been life-affirming.',
                'image' => get_site_url() . '/articles/advocates/adelle-barker.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“WE NEED MORE TRANS VOICES IN THE ROOMS, NOT JUST ON THE FRONT PAGES”',
                'content' => '#TRANS ISSUES ARE BEING REPORTED MORE THAN THEY HAVE EVER BEEN BEFORE. HOW FAIR AND ACCURATE DO YOU FEEL THAT REPORTING HAS BEEN, AND WHAT CAN BE DONE TO IMPROVE IT?
                Let’s be real – it’s a mixed bag.
                Trans people are suddenly a headline, but we’re not a new phenomenon. A lot of the reporting swings between sensationalism, fear-mongering and simplified “inspiration-porn”, when most of us are just trying to live, work, and exist with a bit of dignity, whilst doing our weekly shop!
                We need more trans voices in the rooms, not just on the front pages. Journalism that involves us and doesn’t just talk about us. And frankly, some compassion wouldn’t go amiss either.',
                'image' => get_site_url() . '/articles/advocates/adelle-barker.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>

            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHAT ISSUES AND CHALLENGES DO TRANS PEOPLE FACE WHICH OTHERS IN THE LGBTQ+ FLAG MAY NOT?
                Transition can be messy, expensive, and deeply misunderstood. For many trans people, 
                even existing in public is seen as a statement. We navigate everything from legal identity struggles, medical gate-keeping, to the emotional labour of coming out over and over again.
                It’s a very visible thing, even if we sometimes wish we could simply “blend in”!
                There’s also the added fun of things like “voice anxiety” on phone calls or fearing a passport check at the airport. It’s often the micro stuff that gets to you – the stuff people don’t see but chips away at your safety or confidence. We know we are seen. Sometimes being seen is amazing but other times it feels really scary and overwhelming.
                While we share some common ground with the wider LGBTQ+ community, the trans experience is often its own tangled ball of yarn – full of gendered expectations, physical shifts, and a fight just to be believed.',
                'image' => get_site_url() . '/articles/advocates/adelle-barker.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“LET US DANCE AND CELEBRATE WHO WE ARE. LET US WAVE FLAGS AND FEEL JOY”',
                'content' => '#ON A PERSONAL OR PROFESSIONAL LEVEL, WHAT IS THE ONE THING YOU’VE BEEN PROUDEST OF?
                Living.
                I don’t say that flippantly. There was a time when I didn’t think a future like this – one where I’m out, open, happy, and working in a leadership role – was possible. Transitioning while parenting, leading a team, and showing up authentically is terrifying, but it’s also transformed everything.
                And being able to stand up and say, “I don’t know how to be trans, but I’m learning out loud” – and having people listen? That’s magical, it really is.
                #PRIDE – PARTY OR POLITICS?
                Both. It starts as politics, turns into a party, and then cycles back again.
                We owe our Pride to protests – and those who fought when being LGBTQ+ meant risking everything. So I think it’s vital we honour that, stay loud, and protect our rights.
                But also? Let us dance and celebrate who we are. Let us wave flags and feel joy. For many of us, Pride is the one place we can exist fully, without apology.',
                'image' => get_site_url() . '/articles/advocates/adelle-barker.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'DIOGO VIEIRA DA SILVA',
                'content' => '#DIOGO VIEIRA DA SILVA IS IMPACT CENTERS OFFICER @ INNOVATION X HUB AT THE PORTO BUSINESS SCHOOL IN PORTUGAL AND A CONSULTANT IN LGBTI+ TOURISM, BUSINESS, MARKETING AND LEADERSHIP
                (He/Him)',
                'image' => get_site_url() . '/articles/advocates/diogo-vieira-da-silva.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHO ARE YOU AND WHAT IS YOUR PROFESSIONAL BACKGROUND?
                I’m Diogo Vieira da Silva. Professionally, my journey has spanned multiple areas such as international commerce, hospitality and tourism management, and digital marketing, supported by an International MBA and executive education.
                Throughout my career, I’ve taken on various roles that allowed me to drive innovation, strategic communication, and foster environments committed to diversity, equity, and inclusion.
                Alongside my “day job”, I have dedicated much of my life to activism - what I affectionately call my “gay job”.
                I started early, at 16, by initiating a student-led movement aimed at integrating comprehensive sexual education into Portuguese schools. By the age of 18, I had founded my first NGO, establishing Porto’s first physical space specifically designed for marginalised communities, including the LGBTI+ community, sex workers, and individuals living with HIV. My professional trajectory has always been deeply intertwined with my commitment to social impact, consistently combining clear objectives with meaningful outcomes and social empowerment.
                #YOU ARE IMPACT CENTERS OFFICER AT THE INNOVATION X HUB OF PORTO BUSINESS SCHOOL. WHAT DOES THAT ROLE INVOLVE?
                As Impact Centers Officer, my role involves coordinating strategic initiatives across several specialised centres at the Innovation X Hub, including sustainability, entrepreneurship, tourism, real estate, Africa, and AI. I facilitate collaborations between academia, industry leaders, and policymakers, focusing on driving innovation, applied research, educational programs, community engagement, and attracting investment to create meaningful societal and economic impacts.',
                'image' => get_site_url() . '/articles/advocates/diogo-vieira-da-silva.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“FOSTERING AN ENVIRONMENT WHERE QUEER INDIVIDUALS FEEL EMPOWERED TO BECOME ENTREPRENEURS AND CREATE THEIR OWN MEANS OF LIVELIHOOD IS INCREDIBLY IMPORTANT”',
                'content' => '#YOU ARE ALSO CO-FOUNDER OF VARIAÇÕES. WHAT IS VARIAÇÕES AND WHAT DOES IT DO?
                Variações is actually the third NGO I’ve founded. My journey in activism started with CASA – Centro Avançado de Sexualidade e Afectos, which served as Porto’s first community centre dedicated to supporting vulnerable and marginalised communities. The second was It Gets Better Portugal, the official Portuguese affiliate of the global It Gets Better Project, which I introduced to Portugal in 2012. Later, as European Coordinator of It Gets Better from 2017 to 2018, I amplified the positive impact of storytelling within the LGBTI+ community across Europe.
                Variações, Portugal’s LGBTI+ Commerce and Tourism Association, came about while I was working at a gay hotel in Lisbon. It struck me deeply how disconnected LGBTI+ businesses were despite their significant potential. Motivated by this, I established Variações in 2018 to organise and strategically support the sector nationally. This led to the groundbreaking “Proudly Portugal” campaign in 2019, Portugal’s first-ever promotional campaign highlighting the country as an inclusive LGBTI+ destination. Our efforts culminated in Lisbon being chosen to host EuroPride 2025, a candidacy I led in 2022.
                Most recently, as Coordinator General of Porto Pride, I facilitated its transition into an independent organisation. ',
                'image' => get_site_url() . '/articles/advocates/diogo-vieira-da-silva.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#HOW IMPORTANT DO YOU THINK A CLIMATE OF DIVERSITY AND INCLUSION IS, BOTH IN THE CORPORATE WORKSPACE AND IN THE WIDER WORLD
                Creating a climate of diversity and inclusion is essential, especially when we look at the challenges faced by the LGBTI+ community in terms of employment. Historically, queer individuals have encountered significant barriers to accessing stable employment, making it crucial to support and encourage LGBTI+ businesses that actively hire queer people. Additionally, fostering an environment where queer individuals feel empowered to become entrepreneurs and create their own means of livelihood is incredibly important. This autonomy helps break down systemic barriers, promotes economic independence, and ultimately contributes to building a more inclusive and equitable society for everyone.
                #AND HOW DO WE CREATE THAT POSITIVE CLIMATE?
                Creating a positive climate starts with genuine leadership commitment, inclusive policies, ongoing education, and active listening. It involves transparent hiring practices, training on unconscious bias, and clear accountability measures. Additionally, it’s vital to support Pride events actively. In a world where countries, including the USA, are increasingly pushing back against Diversity, Equity, and Inclusion, companies and brands that choose to support Pride events in the current climate demonstrate a sincere commitment - not just marketing strategies - to fostering inclusivity and standing with marginalised communities. Ultimately, a culture that genuinely celebrates diversity and embeds inclusion into every action is key.',
                'image' => get_site_url() . '/articles/advocates/diogo-vieira-da-silva.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“PRIDE IS UNDENIABLY POLITICAL — IT WAS BORN OUT OF PROTEST… BUT IT’S ALSO A CELEBRATION OF HOW FAR WE’VE COME, OF RESILIENCE, OF LOVE, AND OF THE JOY IN BEING WHO WE ARE”',
                'content' => '#PRIDE – PARTY OR POLITICS?
                Both. Pride is undeniably political — it was born out of protest and continues to advocate for visibility and rights. But it’s also a celebration of how far we’ve come, of resilience, of love, and of the joy in being who we are.
                And beyond the flags and glitter, Pride is also a vital space to uplift and give a platform to queer artists who rarely get the visibility they deserve. It’s about showcasing our talent, our culture, and our voices.
                As someone who helps organise a Pride, I’ve come to understand that we are not the owners of the movement — we are simply its temporary guardians, with the responsibility to protect it, honour its legacy, and pass it on stronger than we found it.',
                'image' => get_site_url() . '/articles/advocates/diogo-vieira-da-silva.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'DREW HUBBARD',
                'content' => '#DREW HUBBARD IS A WRITER AND TV SCRIPT WRITER AND EDITOR AND EXPERIENCED SENSIVITY READER
                (He/They)',
                'image' => get_site_url() . '/articles/advocates/drew-hubbard.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => '',
                'content' => '#YOU DESCRIBE YOURSELF AS A “SENSITIVITY READER”. WHAT DOES THAT MEAN AND WHAT DOES THAT WORK INVOLVE?
                A sensitivity reader helps writers bring out more authenticity in their story and characters, especially when writing people unlike themselves. 
                Sometimes it involves highlighting a moment that could come across as problematic or leans into a harmful stereotype or trope, though I always explain my reasoning, and offer alternatives. Mostly, I find myself encouraging the writer to dig deeper and go bigger, to make the characters leap off the page because they feel so real.
                #WHY DO YOU THINK THERE IS A NEED FOR A SENSITIVITY READER? CAN YOU PROVIDE AN EXAMPLE?
                Because writers’ research is often just a quick Google, or they rely on what they remember from TV, film or books, the same outdated clichés and stereotypes keep getting recycled. 
                Even with the best intentions, if a writer isn’t queer, they often don’t know what they don’t know.
                I’m always talking to the LGBTQ+ community, and staying up to date with  current issues, so I can help my clients deepen their characters, and bring the nuances of their story up to date. Readers can be ruthless, and aren’t afraid to share their grievances online. Several authors have been called out for problematic characters, which would’ve been picked up by a sensitivity reader had they used one.',
                'image' => get_site_url() . '/articles/advocates/drew-hubbard.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“EVEN WITH THE BEST INTENTIONS, IF A WRITER ISN’T QUEER, THEY OFTEN DON’T KNOW WHAT THEY DON’T KNOW”',
                'content' => '#YOU’VE WRITTEN FOR TV. TODAY WE’RE SEEN MORE LGBTQ+ REPRESENTATION ON TV AND IN OTHER MEDIA THAN EVER BEFORE. HOW TRUE TO LIFE DO YOU THINK THESE REPRESENTATIONS ARE, AND WHAT ROOM IS THERE FOR IMPROVEMENT?
                We are seeing more LGBTQ+ rep, but we are getting fewer LGBTQ+ characters than we were a few years ago, which is disappointing. However, we are seeing more diversity and intersectionality. Writers are learning that there’s a spectrum when it comes to queerness, and are creating characters who are flawed, messy and have questionable morals — a nice change from the perfect gay best friend stereotype we’ve seen too often. But many TV shows still feature just a single LGBTQ+ character, with zero queer community and only cis/het friends. We flock together!
                I’d love to see more queer characters surrounded by other queers, even if they’re not central to the plot.',
                'image' => get_site_url() . '/articles/advocates/drew-hubbard.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“POWERFUL FORCES ARE STILL TRYING TO ROLL BACK HARD-WON LGBTQ+ RIGHTS, AND UNFORTUNATELY THEIR INFLUENCES SNEAK INTO MEDIA”',
                'content' => '#IS THE MEDIA AND/ OR THE CREATIVE INDUSTRIES AS LGBTQ+-FRIENDLY AS MANY MIGHT SUPPOSE? OR ARE THEY CHALLENGES AND OBSTACLES EVEN IN THAT ENVIRONMENT THAT HAVE TO BE FACED AND OVERCOME?
                There are lots of LGBTQ+ people in all creative sectors, but often those holding the power and the purse strings are not, and that’s where authenticity can get lost. Powerful forces are still trying to roll back hard-won LGBTQ+ rights, and unfortunately their influences sneak into media. This is why, more than ever, we need our cis/het allies to step up, speak out, and help empower queer voices.
                I love encouraging all writers to include queer characters, because stories have the power to change hearts and minds, and we need that now more than ever.',
                'image' => get_site_url() . '/articles/advocates/drew-hubbard.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#YOU’RE GIVEN THREE WISHES. WHAT WOULD THEY BE?
                That I could communicate with animals; that holo-decks were a real thing; and that I could travel to parallel universes.
                #PRIDE – PARTY OR POLITICS?
                It’s gotta be both. It’s frustrating that we still need to fight, but we must remember the joy too. We deserve to party in spaces that are inclusive, safe and full of our community, and Pride is one of the few places where that’s possible.',
                'image' => get_site_url() . '/articles/advocates/drew-hubbard.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'NAZ MIR',
                'content' => '#NAZ MIR IS THE DIVERSITY & INCLUSION LEAD AT MONZO BANK
                (He/They)',
                'image' => get_site_url() . '/articles/advocates/naz-mir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHO ARE YOU AND WHAT IS YOUR PROFESSIONAL BACKGROUND?
                My name is Naz Mir, I’m a second-generation Bangladeshi immigrant (mixed with Welsh heritage) from London. Throughout my professional career I’ve had the privilege to rotate around different specialisms in People functions including Organisational Development, HR Systems and People Partnering, but for the last 10 years I have found my professional (and personal) home in Diversity & Inclusion (D&I). 
                #YOU ARE DIVERSITY & INCLUSION LEAD AT MONZO BANK. WHAT DOES THAT ROLE INVOLVE?
                On paper, ultimately I’m responsible for ensuring Monzo has a Diversity & Inclusion strategy that supports all our people thriving at work regardless of their background — but my role is so much more than that! It’s extremely varied and requires many different disciplines and skills including D&I knowledge (of course!), change management, coaching, data analytics, facilitator, connector and listener, to name a few. Whilst D&I can feel like a big responsibility, it’s one that is shared by many at Monzo: it truly is a team effort. When I joined the business, I was amazed to see how many people have taken personal responsibility to incorporate D&I into their day jobs. So a truer representation of my role is to help scale that passion for D&I in all of Monzo. If I can unlock 2% D&I leadership in everyone’s role then we continue to build D&I as an authentic part of who we are, not just what we do. 
                #HOW IMPORTANT DO YOU THINK A CLIMATE OF DIVERSITY AND INCLUSION IS, BOTH IN THE CORPORATE WORKSPACE AND IN THE WIDER WORLD?
                It’s critical. I say this because, no matter who we are, we live our lives in it every day.
                In the wider world, we can’t ignore there’s a spotlight on Diversity & Inclusion at the moment. It’s really important we remember that a lot of the freedoms we have today are afforded to us from past struggles for a better tomorrow. This is what D&I at its heart is about. In the corporate workspace, I think people are looking for more human connections. In a post-Covid, AI-driven world, it’s easy for working relationships to feel slightly transactional.
                We all seem busier, and with more priorities in and outside of work, so inclusion seeks to help build those moments of magic into each interaction, reminding ourselves that behind the colleague is an entire person with ambitions, hopes and lives seeking enrichment.',
                'image' => get_site_url() . '/articles/advocates/naz-mir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“INCLUSION SEEKS TO HELP BUILD MOMENTS OF MAGIC”',
                'content' => '#AND HOW DO WE CREATE THAT POSITIVE CLIMATE?
                We can’t give back until we are looking after ourselves, so, particularly for people from our LGBTQ+ community, I’ve been encouraging everyone to breathe and take a minute, because there is a lot going on. It’s easy for us to feel powerless when there are some macro changes at play. I always come back to being guided by your purpose, the values you hold dear and letting those move you to action. I think about the question, “What do I actually have control over, what can I influence and what is beyond my control?” (helpful model from [author and businessman] Stephen Covey).
                I then take personal responsibility  to show up with empathy and understanding for those around me. Sometimes, all it takes  is to listen. I think if all we can do is give  each other that space and respect, we will be creating a more positive climate. Being  your most inclusive self is so personal to each person, so others may be wanting to get more involved in causes important to them. In the workplace, speak with your diversity and inclusion team or employee networks about how to take part, or externally, you  can look to your favourite charities to see  what causes they are supporting at the moment.  ',
                'image' => get_site_url() . '/articles/advocates/naz-mir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#WE’VE COME A LONG WAY IN LGBTQ+ RIGHTS. WHAT MORE NEEDS TO BE DONE?
                I think the most important thing to remember is that even though we’ve come a long way, those things aren’t permanent. And this really is relevant to all communities that have made progress in recent times: there is a lot more to be done. We’re in a position as a community where both things can be true, we have made progress, but our rights are also currently being voted away.
                As a member of the LGBTQ+ community, my personal priority recently has been to support the most marginalised within our community. I can’t speak for all, but currently my trans and non-binary friends are sharing with me how afraid they are given recent developments. It’s not a new thing ؅— there have always been members of our community who have been silenced and more vulnerable — and I take personal responsibility to support them. It’s important to remember that the power of oppression doesn’t really differentiate when it comes to “different”.
                Taking someone else’s rights away makes it all that much easier to take yours away next. ',
                'image' => get_site_url() . '/articles/advocates/naz-mir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“A LOT OF THE FREEDOMS WE HAVE TODAY ARE AFFORDED TO US FROM PAST STRUGGLES FOR A BETTER TOMORROW”',
                'content' => '#WHAT IS THE ONE THING YOU’VE BEEN PROUDEST OF?
                It’s always amazing and career-affirming when you hear about the positive experiences people have had because of the work you’ve put out there, but it’s never you working in isolation! 
                So the thing I’m proudest of is the network of people I’ve encountered in my career who do not necessarily get paid to work on diversity and inclusion and yet they show up every day to make a difference, not for themselves, but for those around them. It’s been the greatest joy of my career to be surrounded by people who know there’s a better future out there and are happy to work towards it. So many of them are still in my life as a trusted network and group that I can turn to for ideas, laughter and moments of much needed decompression.
                #YOU HAVE THREE WISHES. WHAT WOULD THEY BE?
                That everyone listens to understand instead of listening to respond; that everyone has a safe and happy Pride; and that Rihanna would just drop that album already.',
                'image' => get_site_url() . '/articles/advocates/naz-mir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'LEXIE SHAIBU-LENOIR',
                'content' => '#LEXIE SHAIBU-LENOIR IS A HOSPITALITY & EVENT PROFESSIONAL, HEAD OF COMMERCIAL OPERATIONS OF UK BLACK PRIDE AND THE FOUNDER OF QUEER WEDDINGS
                (She/Her)',
                'image' => get_site_url() . '/articles/advocates/lexie-shaibu-lenoir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHO ARE YOU AND WHAT IS YOUR PROFESSIONAL BACKGROUND?
                My name is Lexie Shaibu-Lenoir, and I have spent the last 20 years working as a hospitality and event professional. I’m proud to have founded the first wedding planning company dedicated exclusively to LGBTQ+ couples. I also sit on the LGBTQIA+ Advisory Board for Belmond, and I’m the Head of Commercial Operations at UK Black Pride.
                #YOU ARE AN HOSPITALITY & EVENT PROFESSIONAL. WHAT DOES THAT ROLE INVOLVE?
                Throughout my professional career, I’ve primarily worked in luxury hotels and event venues. This industry has truly shaped me, and I’ve gained invaluable experience over the years.
                Working in hotels involves comprehensive training programs covering a wide range of topics, from wine knowledge and customer service to regular food tastings for product understanding and effective complaint resolution. My experience with catering companies has further broadened my understanding of operations across various venues.
                #WE’VE ARGUABLY COME A LONG WAY IN LGBTQ+ RIGHTS IN THE PAST DECADES. SHOULD WE JUST REST ON OUR LAURELS – OR IS THERE MORE TO BE DONE?
                We have definitely made a lot of progress in advancing LGBTQ+ rights, however there is always more to be done in the community. The LGBTQ+ community are the most marginalised people, and being a queer black woman adds another layer to it. We’re witnessing trans rights being taken away, and the trans community being constantly under attack. Racism is rife across multiple sectors and our peers feel unsafe on a daily basis in their own home, at work, and outside. For this reason, we must continue to stand up for our community.',
                'image' => get_site_url() . '/articles/advocates/lexie-shaibu-lenoir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“WHEN PEOPLE CREATE SPACES THAT ARE NOT INCLUSIVE AND WHERE YOU DON’T FEEL WELCOME, YOU CREATE YOUR OWN”',
                'content' => '#ON A PERSONAL OR PROFESSIONAL LEVEL WHAT IS THE ONE THING YOU’VE BEEN PROUDEST OF? 
                I’m proud to have married a woman (Aisha Shaibu-Lenoir) who shares the same values as me and is doing a wonderful job for the community. She’s the Director of The Common Press which is a queer intersectional bookshop in Brick Lane and she’s put on some amazing events and done a lot to raise funds to keep the place open. It’s a safe space with a lot of great resources, where you can have a tea and a natter and connect with others. I’m inspired by her and she keeps pushing me to break boundaries every day and be the best version of myself. ',
                'image' => get_site_url() . '/articles/advocates/lexie-shaibu-lenoir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#YOU ARE ALSO HEAD OF COMMERCIAL OPERATIONS OF UK BLACK PRIDE. WHY DO YOU THINK THERE IS A NEED FOR A BLACK PRIDE? 
                When people create spaces that are not inclusive and where you don’t feel welcome, you create your own. This is the reason why I created Queer Weddings in the first place. UK Black Pride has been born out of the sheer desire to welcome those who have felt excluded elsewhere. We have had up to 25,000 people attend and it is a privilege for our team to put on this event every year. We welcome around 250 volunteers who dedicate hours of their time to help us make this event a success. Lady Phyll is an absolute inspiration, a great leader, and has dedicated her life to the cause to ensure black and POC people are never forgotten.
                #WHAT’S A TYPICAL DAY FOR LEXIE SHAIBU-LENOIR? 
                There is never a typical day in my life! I could be planning a wedding one day, travelling the next day (I’m writing this piece from a beautiful hotel in Cape Town!), being part of a panel to discuss inclusivity, helping my wife with her business, running an event, or planning a group trip. My purpose is to serve the community in whatever capacity I can with all the skills I have gained over the years.',
                'image' => get_site_url() . '/articles/advocates/lexie-shaibu-lenoir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“THERE IS ALWAYS MORE TO BE DONE IN THE COMMUNITY”',
                'content' => '#YOU’RE GIVEN THREE WISHES – WHAT WOULD THEY BE? 
                This is a hard one because I have a long list of wishes I would love to make happen. But liberation, equal rights, and equity for all. We need to have a more balanced system that will benefit everyone, not just the super rich.
                #PRIDE – PARTY OR POLITICS? 
                Absolutely both! Having said that, politics comes before the party. We need to keep fighting for our rights and ensure that everyone is included in the fight. We can celebrate ourselves whilst ensuring that we are also part of the political discourse.',
                'image' => get_site_url() . '/articles/advocates/lexie-shaibu-lenoir.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'ZAC THOMPSON-HUNT',
                'content' => '#ZAC THOMPSON-HUNT IS A SENIOR LEGAL COUNSEL AND  CHAIR OF PRIDE@REVOLUT
                (He/Him)',
                'image' => get_site_url() . '/articles/advocates/zac-thompson-hunt.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHO ARE YOU AND WHAT IS YOUR PROFESSIONAL BACKGROUND?
                I’m Zac, born and raised in Sydney, Australia, but my husband, dog and I swapped the harbour for the Thames about four years ago and are now proud Londoners. I’ve always had a deep interest in history, especially the history of social change and discovering the often decisive role queer personalities played in those key turning points in time. Professionally, I am a dispute resolution lawyer, which, I think, is a natural extension of this interest. The law is, in some respects, applied history. Lawmakers weigh up different factual accounts of the past to determine the way the law should shape our rights, obligations, and the way we live together going forward. It is a deeply rewarding profession. 
                #YOU ARE A SENIOR LEGAL COUNSEL AND CHAIR OF PRIDE@REVOLUT. WHO ARE REVOLUT AND WHAT DOES YOUR ROLE INVOLVE?
                Revolut is unlike any other company; it’s a true unicorn. We are a global fintech, based in London, on a mission to simplify all things money, and empower our customers to achieve their financial goals through innovative and effortless banking solutions. We have a dream team of over 10,000 Revoluters who are building a seamless, intuitive platform and designing best-in-class products that our customers love. From multi-currency wallets, to investing, borrowing, and lifestyle benefits like travel insurance, data, airport lounges, and more. It’s a fast-paced, exciting place to work. 
                As for my role, I sit in the Legal Team where I provide legal advice on all sorts of contentious and strategic matters, paving the way for Revolut’s continued success. I am also the Chair of Revolut’s Pride network - a community of over 500 fiercely proud LGBTQ+ and Allied Revoluters. Our mission is to empower our colleagues old and new to bring their truest and best selves to work, to unlock their full professional potential, and to ensure Revolut’s products are authentic and appropriate for LGBTQ+ customers. ',
                'image' => get_site_url() . '/articles/advocates/zac-thompson-hunt.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“DIVERSITY IS EQUALLY IMPORTANT BEYOND THE WORKPLACE. IT ENRICHES OUR DAY-TO-DAY LIVES”',
                'content' => '#HOW IMPORTANT IS A CLIMATE OF DIVERSITY AND INCLUSION?
                It is absolutely essential. A diversity of ideas and experiences is vital for developing innovative, relevant products in the financial services market. Revolut has experienced tremendous growth in recent years that would not have been possible without fostering a diverse and inclusive workforce.
                We recognise that without genuine diversity and inclusion, there is a risk of becoming an echo chamber where ideas go unchallenged and opportunities are missed. 
                Diversity is equally important beyond the workplace. It enriches our day-to-day lives, and, speaking for myself, I’d probably get quite bored living in a community where everyone looked, thought and believed the same thing.
                Perhaps it is the lawyer in me, but I like being challenged, am naturally curious, and genuinely think people flourish when they dare to be different. ',
                'image' => get_site_url() . '/articles/advocates/zac-thompson-hunt.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#AND HOW DO WE CREATE THAT KIND OF INCLUSIVE ENVIRONMENT?
                I am a big advocate for strategies that empower and challenge people to be the best versions of themselves, which I think are highly effective when couched in positivity and optimism. I like this approach because it is inherently ambitious; and bold, ambitious plans driven by enthusiastic individuals tend to succeed at Revolut. 
                #WE’VE MADE PROGRESS IN LGBTQ+ RIGHTS. IS THE FIGHT WON – OR IS THERE MORE TO DO?
                There’s still important work to be done. I worry that, as time passes, we risk forgetting the pivotal struggles that have shaped our rights — the Holocaust, the Stonewall riots, the AIDS crisis, and many others. These events carry hard-earned lessons, and forgetting them opens the door to complacency. Progress is not permanent. Any student of history will tell you that freedoms, once won, can be quietly eroded. Our responsibility is to protect the gains we’ve made and continue pushing forward, so the next generation inherits a world more just, inclusive, and aware than the one our predecessors were born into.',
                'image' => get_site_url() . '/articles/advocates/zac-thompson-hunt.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“PROGRESS IS NOT PERMANENT… FREEDOMS, ONCE WON, CAN BE QUIETLY ERODED”',
                'content' => '#WHAT DO YOU CONSIDER YOUR PROUDEST ACHIEVEMENT?
                My proudest personal achievement would certainly be my marriage here in London  
                last August. I grew up in a time when being openly gay at school was a fate worse than death, and marriage between two men was inconceivable. So to marry the love of my life before so many friends and family on a beautiful English summer’s day was a surreal, powerfully moving experience I’ll cherish for the rest of my days.
                Professionally, I am most proud of the role I played in advancing Revolut’s application for a UK banking licence last year. It was a privilege to be part of a tight-knit team making the case for Revolut to be the UK’s freshest bank. 
                #PRIDE – PARTY OR POLITICS?
                For me, Pride is a celebration. Of course, the rights and freedoms of LGBTQ+ people are derived from legal and political change, but  
                I take Pride month as a moment to celebrate. LGBTQ+ parties in particular, have been  hugely formative spaces for me, where I’ve come into my own and felt truly comfortable  in my identity. I’ve met people like me, and wildly different people, and through that experience witnessed how brilliant and special the LGBTQ+ community is. It was on the dance floor at an LGBTQ+ party at university that I met my now husband, so I know first-hand of the joy that the “party” side of Pride can bring. ',
                'image' => get_site_url() . '/articles/advocates/zac-thompson-hunt.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>


            <?php echo create_layout('split-media', $args = [
                'title' => 'DAN PORTER',
                'content' => '#DAN PORTER IS THE HEAD OF CONTENT AND SOCIAL MEDIA, TESCO AND CO-CHAIR OF ITS LGBTQ+ NETWORK
                (He/Him/His)',
                'image' => get_site_url() . '/articles/advocates/dan-porter.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '',
                'content' => '#WHO ARE YOU WHAT AND IS YOUR PROFESSIONAL BACKGROUND? 
                For more than 25 years I’ve worked in retail marketing roles for high street retailers including Boots and Tesco and creative agencies and spent three years in Germany at the International School of Hamburg. My multi award-winning work and experiences span all aspects of the advertising and marketing mix and I’ve covered all communication disciplines.
                #YOU’RE HEAD OF CONTENT, SOCIAL MEDIA & INFLUENCERS AT TESCO. WHAT DOES THAT ROLE INVOLVE? 
                I lead social media, content marketing and influencer activations which includes the biggest free UK magazine, the number three food recipe content website reaching millions of customers with billions of views per year. I love being part of a dynamic, fun, fast-paced, creative and inclusive environment where I am able to deliver exciting, bold, innovative results driven work that our customers love. 
                #YOU’RE ALSO THE CO-CHAIR OF THE LGBTQ+ NETWORK AT TESCO. WHAT DOES TESCO DO TO SUPPORT ITS LGBTQ+ WORKERS AND COLLEAGUES? 
                The LGBTQ+ network has more than 2,500 members and aims to provide psychologically safe spaces for our colleagues, to help them feel like they belong and can thrive. We celebrate the wonderful, diverse and vibrant members of our communities, amplifying LGBTQ+ voices and support colleagues to enable them to bring their authentic selves to work each and every day. We also help educate our colleagues to understand different identities, how to be fully inclusive and a great ally.',
                'image' => get_site_url() . '/articles/advocates/dan-porter.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“DIVERSITY BRINGS BETTER THINKING, OUTCOMES AND WORKPLACES. IT’S INCLUSION THAT BRINGS IT TO LIFE”',
                'content' => '#HOW IMPORTANT DO YOU THINK IT IS FOR A PERSON TO BE OUT AT WORK? 
                Personally, I think it’s incredibly important. Everyone should feel empowered to be their true selves without fear of judgment. To feel seen, heard, valued and respected, to be able to freely express differing perspectives, ideas and opinions brings so much richness to any situation. For me, hiding my true self for years was exhausting, stifling and not the best use of my energies. Being out has allowed me to really thrive and progress, I hope my visibility gives others the confidence to do the same in their own time and way.',
                'image' => get_site_url() . '/articles/advocates/dan-porter.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'Name Surname',
                'content' => '#DO YOU THINK AN ENVIRONMENT OF DIVERSITY AND INCLUSION IS IMPORTANT IN THE WORKPLACE AND THE WIDER COMMUNITY? WHAT BENEFITS DOES IT BRING? AND HOW DO WE BRING ABOUT THAT ENVIRONMENT? 
                Absolutely. Diversity brings better thinking, outcomes and workplaces. But it’s inclusion that brings it to life. When people feel safe and celebrated, they flourish. Creating psychological safety through developing spaces where people can be their true, authentic selves is where the magic happens. We achieve this by active listening, representation, education, and real allyship – not just in moments of celebration, but in the quieter, everyday actions too.
                #DESCRIBE A TYPICAL DAY IN THE LIFE OF DAN PORTER. 
                No day is ever typical — which I love.  
                I could be presenting on stage to hundreds of people, being on set at a shoot, reviewing creative for our next big campaign or working with our LGBTQ+ Network in stores. I try  to lead with kindness, clarity, and curiosity.  
                I believe in celebrating the small wins, lifting others up, and making time to check in.  People matter and are at the heart of everything we do. Working in retail can be  
                a very busy and reactive environment; it’s the people that keep me going, make me want to strive to be a better all round person. Outside  of work, I’m a big fashion, music and theatre fan, I love to read and find my peace in the garden up to my elbows in soil! I have just rejoined the gym so I’m looking forward to getting more active.',
                'image' => get_site_url() . '/articles/advocates/dan-porter.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“EVERYONE SHOULD FEEL EMPOWERED  TO BE THEIR TRUE SELVES WITHOUT FEAR OF JUDGMENT”',
                'content' => '#ON A PERSONAL OR A PROFESSIONAL LEVEL WHAT DO YOU THINK HAS BEEN YOUR GREATEST ACHIEVEMENT? 
                Professionally, there are lots of things I am really proud of. One of my best achievements is The Voice of The Checkout campaign. We created a talking checkout on TikTok inspired by the popular face filter app and using the duet feature to give customers the chance to become the voice of a Tesco checkout. We got the nation talking, with more than 48m views, trending for 10 days, global press pick up, seven prestigious industry award wins and more than 3K entries. Personally, co-chairing the network is a huge honour; through the work I do my ambition is always to play it forward and to be the role model I needed growing up.',
                'image' => get_site_url() . '/articles/advocates/dan-porter.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
    </section>


    <?php /* 067-069 Kitty.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-pink); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'Kitty Power!',
                'content' => '<strong>KITTY SCOTT-CLAUS</strong> IS A DRAG ICON AND SHE TALKS TO <strong>NIGEL ROBINSON</strong> ABOUT SISTERHOOD, RACING FOR RUPAUL AND LOSING SEVEN STONES IN ONE YEAR',
                'image' => get_site_url() . '/articles/kitty-scott-claus/cover.webp',
                'image_alt' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
                'image_credit' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                // 'title' => 'Kitty Power!',
                'content' => '#WHAT MADE A BOY FROM BIRMINGHAM TURN HIMSELF INTO KITTY SCOTT-CLAUS?
                Attention-seeking! I’m from a big family so I had to go and stick out somehow, hadn’t I? Put on a wig and a frock and then you can do it all!
                Then you get all the attention.
                #HOW DID YOU START OUT AS KITTY?
                I went to drama school and studied musical theatre so I was a musical theatre actor. My best friend is a drag queen and they were doing a Girls Aloud tribute night and they said they needed somebody to be Kimberley Walsh. I was, like, I could do that. I also saw that here were my free drinks and attention! That’s literally how I started in 2017 and look here we are now.',
                'image' => get_site_url() . '/articles/kitty-scott-claus/cover-full.webp',
                'image_alt' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
                'image_credit' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'Kitty Power!',
                'content' => '#WHERE DOES YOUR DRAG NAME COME FROM?
                I was at a party and I said something sassy and I went: “Ooh, meow-meow, saucer of milk!” And my friend said, “Yes, that kitty’s got claws!” As soon as I heard it I decided that if ever I were to become a drag queen then Kitty Scott-Claus would be my drag name. So when the opportunity arose with the Girls Aloud tribute my drag name was already sorted.
                #YOU APPLIED FOR SEASON TWO FOR RUPAUL’S DRAG RACE UK AND WERE ACCEPTED FOR SEASON THREE. WHAT WAS THE SELECTION PROCESS LIKE?
                It was crazy! It was during lock down and Covid when I got cast. I auditioned for season two and at the time I was doing panto in Hastings. So I only had a day or two to film the audition tape. You have to put such a lot of time and effort filming and editing the tape to make a really decent one. When it was season three casting the world had shut down. And I remember thinking I’m never going have this time again so I need to make this the most incredible tape possible. I really enjoyed making it. I remember by the end of making the tape and editing it myself I thought that it was still making me laugh and I was enjoying the tape. I think that was a good sign. And it worked and I got cast!',
                'image' => get_site_url() . '/articles/kitty-scott-claus/kitty-gold-pink.webp',
                'image_alt' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
                'image_credit' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
            ], "accented"); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '“The bond that you share with your sisters is very special”',
                'content' => '#WHAT WAS IT LIKE MEETING RUPAUL?
                Totally nerve-wracking! She’s literally just like you see her on TV – it’s insane! She’s so tall and she’s so lovely. But it’s so intimidating: every time you see her it feels like you’re seeing the head teacher and you’ve got to be on your best behaviour.
                #DID YOU GET ON WELL WITH ALL THE OTHER QUEENS BACKSTAGE?
                It’s a competition at the end of the day and everyone wants to be the best - everyone’s there for that reason. But when it boils down to it we’re all just human beings having a fun time making a reality show. At the end of the day we’re all friends. We all get on, we all know the job and it’s also so much fun to film. It’s people having the same set of crazy experiences. The bond that you share with your sisters is very special.',
                'image' => get_site_url() . '/articles/kitty-scott-claus/kitty-gold-pink.webp',
                'image_alt' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
                'image_credit' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'Kitty Power!',
                'content' => '#WHAT DO YOU THINK DISTINGUISHES BRITISH DRAG FROM INTERNATIONAL DRAG?
                The humour is the biggest thing. The British sense of humour is so unique and so specific to the UK. You can go watch Drag Race across the world as drag is universal and it’s been around for hundreds and hundreds of years. But I think what makes British drag so special and unique is the sense of humour that comes with it. I think its because we’ve grown up having it in pantomime. It’s been broadcast to the mainstream for as long as I can remember. It comes from a place of “whey-hey, how’s your father?” It’s the double entendre and the shadiness that I love.
                #HOW DO YOU FEEL ABOUT WHAT YOU MIGHT CALL “OLD SCHOOL” DRAG LIKE LILY SAVAGE?
                I have nothing but respect. I remember being little and seeing Lily Savage on TV and thinking this is crazy but amazing. I look back now - and this is what I think makes British drag so special - and I remember seeing clips as a child and thinking she was hilarious. And I see clips of Lily now and I’m, like, I had no idea that was what she was talking and joking about and that was what she was meaning. It’s the same as with pantomime dames: there’s something there for everyone.',
                'image' => get_site_url() . '/articles/kitty-scott-claus/kitty-gold-pink.webp',
                'image_alt' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
                'image_credit' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => '“It’s the double entendre and the shadiness that I love”',
                'content' => '#YOU’RE LOOKING FANTASTIC. YOU LOST SEVEN STONES IN A YEAR... HOW DID YOU DO IT?
                I started with a personal trainer [Monty Simmons @MoveWithMonty] because my friend [drag queen] Ella Vaday had this personal trainer and she said she thought I’d really get on with him and I’d really do well. So, I said, sure, I’d go for a session with him. I put it off for ages and ages and then I met him at a party and I really got on with him and thought, OK, I’m going to do it.
                I remember going to my first session with him and he asked what I wanted and I said I’d like to be just a little more healthy. He made it so easy and achievable. I started seeing results so quickly and it spurred me on. I said to myself I could do it and I was finding it fun. That’s the biggest thing: if you find it fun. He said I should just go to the gym once a week by myself as well as coming to see him twice a week. But I was, like, I can do it every day, not just once a week. So it really became a snowball effect.',
                'image' => get_site_url() . '/articles/kitty-scott-claus/kitty-red-silver-blue.webp',
                'image_alt' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
                'image_credit' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'Kitty Power!',
                'content' => 'Then I stopped drinking in February 2024 and have been alcohol-free since then. It has been a big thing for me because obviously I’d be drinking at the gig and getting people to drink: I’m a drag queen and that’s essentially your job to get people to go to bar and buy drinks. For me, I would have a drink and then get home and order a McDonalds or whatever and eat all those calories at 3am which is not the most healthy thing. So cutting out drinking has been a really big thing for me and I’ve done the London marathon “this year and raised money for charities Sahir House, Antidote London Friend, Switchboard LGBTQIA+, and Pancreatic Cancer UK. After that, I completed a performance at the Pride Mile!”
                #WHAT’S NEXT FOR KITTY SCOTT-CLAUS?
                World domination! It can only get bigger and better from here.
                #WHAT WORDS OF ADVICE WOULD YOU GIVE TO AN ASPIRING DRAG QUEEN?
                You’ve got to find what makes you you and then do that to the n’th degree because that what makes you special. There’s no point trying to become a second-rate version of someone else when you can become a first-class version of yourself.
                There’s only one you and that what makes you incredible. That’s your super power.
                <strong>Kitty Scott-Claus will be appearing in The Diana Mixtape at HERE at Outernet London (28 July – 10 August; www.hereldn.com) and the Lowry, Salford (19 – 24 August; www.thelowry.com)</strong>',
                'image' => get_site_url() . '/articles/kitty-scott-claus/kitty-red-silver-blue.webp',
                'image_alt' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
                'image_credit' => 'PICTURES: CORINNE CUMMING. RETOUCHED BY HERR THE QUEEN',
            ]); ?>
            
        </div>
    </section>

    <?php /* 070-071 Podcasts.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-green); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => 'Mic\'ed Up and Proud',
                'content' => 'THE PODCASTING WORLD HAS EMBRACED A PASSIONATE SURGE OF VOICES FROM THE LGBTQIA+ COMMUNITY, ESPECIALLY THOSE OF TRANS, NON-BINARY, AND BIPOC (BLACK, INDIGENOUS, AND PEOPLE OF COLOUR) CREATORS, WRITES <strong>RAE JOAN ELKINGTON</strong>.',
                'image' => get_site_url() . '/articles/mic-ed-up-and-proud/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => 'PIONEERING PODCASTERS',
                'content' => '#Jake Shears: Queer The Music
                The Scissor Sisters frontman explores the narratives behind queer anthems and features iconic guests like (Pride Life cover star) Billy Porter, serving as an archive of queer music history.
                #The Read by Kid Fury and Crissle
                Known for its mix of humour and cultural commentary, this podcast offers insights into Black and queer life through engaging discussions on current events to hip-hop.
                #Suzi Ruffell’s Podcasting Hat-Trick
                Ruffell co-hosts Like-Minded Friends with Tom Allen, co-presents Big Kick Energy with Maisie Adam, and hosts I, which explores life, love, and LGBTQIA+ culture with humour and warmth.
                #Bravehearts Rising by Lisa Pascoe
                Life coach Lisa brings an extra gentle touch when approaching complex topics. Dedicated to diversity and intersectionality, you can look forward to a smorgasbord of guests on Bravehearts Rising, including drag performers, authors and mental health professionals.
                #A Field Guide to Gay Animals
                Owen Ever and Laine Kaplan-Levenson celebrate same-sex behaviour in the animal kingdom in this podcast, selected for the 2024 Tribeca Audio Festival.
                #What the Trans
                Responding to cis-normative media narratives, this UK-based podcast offers news commentary and interviews for transgender and non-binary individuals.',
                'image' => get_site_url() . '/articles/mic-ed-up-and-proud/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>
        </div>
    </section>

    <?php /* 072-073 Pods ad.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'Pride Life Podcast',
                'content' => '',
                'image' => get_site_url() . '/adverts/Pride-Life-Podcast-01.webp',
                'image_alt' => 'Pride Life Presents... a lesbian, gay, bisexual, transgender and queer podcast. An extension of the leading LGBTQ+ digital magazine and website, ‘Pride Life Presents...’ podcast is an opportunity for us to speak to some of the most interesting and influential people about LGBTQ+ related issues. Created by the LGBTQ+ community, for the LGBTQ+ community, the Pride Life podcast will tell some of the most captivating stories, with real, raw and honest conversations that, until now, have been reserved for gay bars. The short form series will hear from truly inspirational people who make a tangible change to our community and hopefully inspire the next generation. From culture to music and fashion to activism, ‘Pride Life Presents...’ is made with pride at heart. AVAILABLE ON ALL MAJOR PLATFORMS OR WHEREVER YOU GET YOUR PODCASTS',
                'image_credit' => '',
                'hyperlink' => array('text' => 'Discover more at: pridelifeglobal.com/podcast', 'url' => 'https://pridelifeglobal.com/podcast'),
            ]); ?>
            <?php echo create_layout('advert', $args = [
                'title' => 'Pride Life Podcast',
                'content' => '',
                'image' => get_site_url() . '/adverts/Pride-Life-Podcast-02.webp',
                'image_alt' => 'Pride Life Presents... a lesbian, gay, bisexual, transgender and queer podcast. An extension of the leading LGBTQ+ digital magazine and website, ‘Pride Life Presents...’ podcast is an opportunity for us to speak to some of the most interesting and influential people about LGBTQ+ related issues. Created by the LGBTQ+ community, for the LGBTQ+ community, the Pride Life podcast will tell some of the most captivating stories, with real, raw and honest conversations that, until now, have been reserved for gay bars. The short form series will hear from truly inspirational people who make a tangible change to our community and hopefully inspire the next generation. From culture to music and fashion to activism, ‘Pride Life Presents...’ is made with pride at heart. AVAILABLE ON ALL MAJOR PLATFORMS OR WHEREVER YOU GET YOUR PODCASTS',
                'image_credit' => '',
                'hyperlink' => array('text' => 'Discover more at: pridelifeglobal.com/podcast', 'url' => 'https://pridelifeglobal.com/podcast'),
            ]); ?>
        </div>
    </section>

    <?php /* 074-075 Gays on TV.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'Still Queer as Telly Folk',
                'content' => 'SAME-SEX NARRATIVES SEEM TO BE ALL OVER THE TV SCHEDULES. <strong>PAUL FISHER COCKBURN</strong> WONDERS WHY',
                'image' => get_site_url() . '/articles/gays-on-tv/cover.webp',
                'image_alt' => 'PICTURE: SEX EDUCATION (NETFLIX)',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => '',
                'content' => 'Back in 2014, Pride Life reported on how many LGBTQ+ viewers had long since found a ‘safe place’ in television science fiction and fantasy—even though such ‘representation’ was neither overt nor necessarily obvious. A decade later, and it seems LGBTQ+ narratives are everywhere on our TV screens, with What it Feels like for a Girl, the BBC’s adaptation of Paris Lees’ coming-of-age memoir, being one of the finest examples.
                Even Doctor Who has enjoyed some same-sex romances… So, what’s going on? Since Doctor Who returned to our television screens back in 2005, there has arguably been one consistent criticism levelled against it: that those making the show – and specifically its lead writers Russell T Davies, Steven Moffat and Chris Chibnall – have pushed a “gay agenda” on viewers. Most recently, the “gay agenda” has been widened to encompass “woke storylines” more generally.
                The show runners have always denied it, though it would hardly be a surprise if they hadn’t. Davies has, on more than one occasion, explained how he writes about the world as he sees it, and that’s one in which LGBTQ+ people not only exist but also deserve to have their stories told and shared.',
                'image' => get_site_url() . '/articles/gays-on-tv/ncuti-gatwa-doctor-who.webp',
                'image_alt' => 'PICTURE: DOCTOR WHO (BBC)',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => '',
                'content' => 'That may well explain why, during an interview back in 2021, Davies dismissed Tom Hiddleston’s Loki momentarily coming out as bisexual as “a ridiculous, craven, feeble gesture towards the vital politics and the stories that should be told”. Kate Herron, the British writer who had directed and executive-produced the first season of Loki – and is herself bisexual – understandably thought differently, even while recognising it was “a small step” with “obviously more road to travel”.
                Davies later apologised to Herron, with their subsequent professional friendship leading Davies to invite her and regular writing partner Briony Redman to contribute an episode to his first full season back on Doctor Who. Curiously enough, in writing 2024’s Bridgerton-styled romance between Ncuti Gatwa’s Doctor and Jonathan Groff’s bounty hunter Rogue, they clearly felt able to make a bit more of a “fanfare” about the Time Lord’s current orientation than they had with Loki—despite both shows now being streamed internationally on Disney+.',
                'image' => get_site_url() . '/articles/gays-on-tv/ncuti-gatwa-doctor-who.webp',
                'image_alt' => 'PICTURE: DOCTOR WHO (BBC)',
                'image_credit' => 'PICTURE: DOCTOR WHO (BBC)',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => '',
                'content' => 'Gatwa had started on his debut season of Doctor Who literally off the back of working on the fourth and final series of British teen
                comedy drama Sex Education, in which he had played Eric Effiong, the openly gay best friend of the show’s central character Otis Milburn (Asa Butterfield). Unlike in the past, where the “gay best friend” would be likely doomed to unhappiness (if no longer a lonely death), Gatwa was given as much of an ongoing story arc as the rest of the show’s increasingly diverse ensemble cast, focused particularly on Eric’s maturing relationships with school bully-turned lover Adam, and his own conservative family.
                And then there was Heartstopper—a coming-of-age romantic comedy drama adapted from Alice Osman’s graphic novels of the same name. Focused on the blossoming  relationship between two teenage boys, the show successfully included all the drama, antics and tension you might expect from such a situation, especially when one of the boys – Kit Connor as Nick Nelson – is coming to terms with being bisexual. The show has also won plaudits for including a genuinely diverse group of LGBTQ+ teens in prominent roles, not least Yasmin Finney (who would go on to play Rose Noble in Davies’ return to Doctor Who) as Black trans girl Elle.
                #“In the past, the ‘gay best friend’ would be likely doomed to unhappiness”',
                'image' => get_site_url() . '/articles/gays-on-tv/xo-kitty.webp',
                'image_alt' => 'PICTURE: XO, Kitty (NETFLIX)',
                'image_credit' => 'PICTURE: XO, Kitty (NETFLIX)',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                // 'title' => '',
                'content' => 'What Sex Education and Heartstopper have in common, beyond a focus on diversity and inclusion, is funding from – and distribution
                through – the US-based streaming service Netflix. Even Doctor Who – although still broadcast on BBC One in the UK – is increasingly now a streamed proposition—be that on the BBC iPlayer in the UK and Ireland or Disney+ elsewhere in the world. Has this shift from traditional “terrestrial” broadcasters with their rigid television schedules to more bespoke “on demand” providers contributed to an increase in LGBTQ+ representation on screen? Yes and no.
                US media monitoring organisation GLAAD has published annual reports on the representation of LGBTQ+ characters on television for nearly three decades, with its latest Where We Are on TV report, covering 2023-24, offering stark evidence of the loss of LGBTQ+ characters across “primetime scripted broadcast programming”.',
                'image' => get_site_url() . '/articles/gays-on-tv/xo-kitty.webp',
                'image_alt' => 'PICTURE: XO, Kitty (NETFLIX)',
                'image_credit' => 'PICTURE: XO, Kitty (NETFLIX)',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => '',
                'content' => 'Interestingly, 93% of LGBTQ+ 18-24 yearolds, and 85% of their non-LGBTQ+ peers, reported that they actively sought out “queerinclusive” media, and yet just 38% (less than two in five) were satisfied by what they found. As GLAAD’s President and CEO, Sarah Kate Ellis, suggested: “This tremendous gap provides an opportunity for networks and streaming companies to win audiences and subscribers who are hungry for more inclusive programming and fresh new perspectives.”
                Worryingly, Netflix appears to be the only streamer at the moment taking this opportunity seriously, with almost half (47%) of all LGBTQ+ characters counted on streaming services last year appearing in Netflix shows.
                But even that number was down on the previous year, due to the ending of popular productions including Stranger Things, The Umbrella Academy and XO, Kitty. And unless something changes, this decline is likely to continue: “Sex Education ending is a huge loss for LGBTQ+ young adult inclusion,” the report argued, “specifically on a show that talked so openly and positively about sex and identity.”
                Perhaps the Doctor should’ve teamed up with Netflix rather than “The Mouse”?',
                'image' => get_site_url() . '/articles/gays-on-tv/what-it-feels-like-for-a-girl.webp',
                'image_alt' => 'PICTURE: WHAT IT FEELS LIKE FOR A GIRL (BBC)',
                'image_credit' => 'PICTURE: WHAT IT FEELS LIKE FOR A GIRL (BBC)',
            ]); ?>

        </div>
    </section>

    <?php /* 076 Blue Cross AD.pdf */ ?>
    <?php echo create_layout('advert', $args = [
        'title' => 'BLUE CROSS FOR PETS',
        'content' => '',
        'image' => get_site_url() . '/adverts/Blue-Cross-01.webp',
        'image_alt' => 'Blue Cross for Pets. Proud supPAWter of Pride. For more information please visit bluecross.org.uk. Registered charity no. 224392 (England and Wales), SC040154 (Scotland) bluecross.org.uk',
        'image_credit' => '',
        'hyperlink' => array('text' => 'Visit bluecross.org.uk for more information', 'url' => 'https://bluecross.org.uk/'),
    ]); ?>

    <?php /* 077-079 Pets.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-orange); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'FOUR PAWS AT A TIME',
                'content' => 'LGBTQIA+ DOG PARENTS ARE REDEFINING FAMILY LIFE, DISCOVERS <strong>RAE JOAN ELKINGTON</strong> AS SHE MEETS UP WITH FOUR MUMS AND DADS AND THEIR FURRY FRIENDS',
                'image' => get_site_url() . '/articles/pets/cover.webp',
                'image_alt' => 'PICTURE: INSTAGRAM @BETTYTHESTAFFORD',
                'image_credit' => 'PICTURE: INSTAGRAM @BETTYTHESTAFFORD',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'FOUR PAWS AT A TIME',
                'content' => '#UNCONDITIONAL ACCEPTANCE
                Dogs offer an embrace of unconditional love and acceptance, qualities that resonate deeply with many in the LGBTQIA+ community.
                Especially for those who have faced judgment, this bond becomes a lifeline. So, perhaps it’s no surprise that, as our queer family dynamics evolve, we see a rise of “fur gaybies”.
                Our dogs, far from being mere pets, are beloved family members who provide companionship, love, and a profound sense of belonging. They transform a house into a home, creating a new family tapestry (that may have a few hairs on it.)
                As Mrs Doubtfire wisely stated, “But if there’s love, dear… those are the ties that bind, and you’ll have a family in your heart, forever.” This sentiment captures the essence of many queer people’s experiences, for those of us whose children may boast four paws, a wet nose, and a wagging tail, filling our lives with immeasurable love and connection.
                #RISE OF THE FUR GAYBIES
                Through the lens of social media, LGBTQIA+ families unveil their lives, with their canine “children” often stealing the spotlight. Stars like Tikka the Iggy, an Italian Greyhound with two dads and 1.5 million Instagram followers, parades in adorable dog fashion whilst watching over two little human siblings. Pampered Pitties Reign and Snoh captivate millions on TikTok with their ASMR grooming and healthcare routines and love for their two Mums. Over in Norway, handsome Einstein the English Staffordshire Bull Terrier also has two mums who share his rehab journey and heartwarming bromance with his human Uncle Hans on Instagram, showing how fur babies forge deep bonds with extended members of queer families too.',
                'image' => get_site_url() . '/articles/pets/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'FOUR PAWS AT A TIME',
                'content' => '#REDEFINING FAMILY WITH LOVE AND ACCEPTANCE
                For LGBTQIA+ pet parents, dogs are not just companions; they are beloved family members, redefining traditions. In a world often rigid in relationship definitions, these families exemplify how love, acceptance, and connection transcend conventional boundaries. As these stories show, dogs play a pivotal role in the fabric of queer life, offering unconditional love and support.
                As Jodie aptly puts it, “It’s about love, acceptance, connection, and support as well as creating memories.” Whether through social media fame or intimate family moments, these fur families are paving the way for a new understanding of what it means to be family.
                After all, the love of a dog is unwavering and non-discriminatory, providing a haven of affection and companionship regardless of your identity or circumstances. Perhaps all family members should aspire to be a little more dog?',
                'image' => get_site_url() . '/articles/pets/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                'title' => 'JP, FRED, HUGO AND COOPER',
                'content' => 'JP, a Creative Director in London, and Fred, an Engineering Manager, share their lives with their cherished sausage dogs, Hugo and Cooper. “Our dogs are our little family,” JP muses. “We decided children weren’t for us, but our dogs fill that space.” Adopted as puppies from families unable to care for them, Hugo, once shy and introverted, found a perfect companion in the outgoing Cooper. Hugo and Cooper bring joy and companionship to their human Dads, especially on cherished trips to Cornwall.',
                'image' => get_site_url() . '/articles/pets/fred-hugo-and-cooper.webp',
                'image_alt' => 'HUGO AND COOPER',
                'image_credit' => 'HUGO AND COOPER',
            ], "accented"); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '“Who doesn’t love a gay man with a sausage dog?”',
                'content' => 'The couple’s adaptable work-fromhome schedules enable them to take care of their dogs each day, sharing responsibilities. However, they often find themselves in disagreements about whose turn it is to clean the dogs’ teeth!
                When asked if Hugo and Cooper help the couple to express their identity or connect with others in the community, JP explains that people recognise the dogs before they do them, exclaiming “Who doesn’t love a gay man and a sausage dog?”
                Fred and JP are proudly part of the LGBTQIA+ community, supporting professional networks and initiatives, with Hugo and Cooper often by their sides. They urge prospective pet parents to thoroughly research breeds to guarantee a good match with their lifestyle. Well said!',
                'image' => get_site_url() . '/articles/pets/jp-fred-hugo-and-cooper.webp',
                'image_alt' => 'JP, FRED, HUGO AND COOPER',
                'image_credit' => 'JP, FRED, HUGO AND COOPER',
            ], "accented"); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => 'LISA, BEKKY AND HENRY',
                'content' => 'In Stirlingshire, Scotland, Lisa and Bekky have crafted their unique family with Henry, their mini wire-haired sausage dog. Lisa, a life coach, writer, and podcaster, and Bekky, a digital consultant and whisky enthusiast, revel in time in their garden with Henry.
                In 2013, Lisa got Beatrice, a sausage dog, with her then-girlfriend. Both later formed new relationships with friends who also knew each other. A day trip discussion about puppies led to Henry’s arrival six months later along with his three siblings. Close ties have been maintained with Henry’s littermates, especially his brother Freddie, (who lives with Lisa’s parents) maintaining an extended sausage dog family bond.',
                'image' => get_site_url() . '/articles/pets/henry.webp',
                'image_alt' => '',
                'image_credit' => 'LISA, BEKKY AND HENRY',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“Family can look like so many things, and I love that we are redefining it”',
                'content' => '“Family can look like so many things, and I love that we are redefining it,” Lisa reflects, “the idea of being a ‘fur parent’ and having ‘fur grandchildren’ has become much more normal than it was in the 90s and 00s. You only have to look at Etsy and you’ll find lots of dog grandma gifts.”
                She emphasises how dogs like Henry offer comfort and support during tough times and believes moving beyond traditional family structures is crucial, allowing individuals to form meaningful connections based on love, acceptance, and shared memories.',
                'image' => get_site_url() . '/articles/pets/henry.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => 'CONNIE AND OATTIE',
                'content' => 'Connie shares a touching narrative about her special connection with Oattie, her French Bulldog, who came into her life after the passing of her older dog, Pepi, and helped her heal. “Whether we’re walking or lounging at home, he’s always there, offering love and companionship,”
                Connie expresses gratefully. “Oattie is not just a pet; he’s a part of the family.”
                As the social media manager for her business, The Social Evolution, Connie values how Oattie serves as her unofficial personal assistant, bringing needed structure and balance to Connie’s life, especially when working from home. Oattie insists on regular breaks and walks, which contribute positively to her daily routine and keep her grounded. “He expects breakfast at the same time every morning and is always ready for his walk,” she says. Oattie ensures Connie doesn’t forget about self-care.',
                'image' => get_site_url() . '/articles/pets/oattie.webp',
                'image_alt' => 'CONNIE AND OATTIE',
                'image_credit' => 'CONNIE AND OATTIE',
            ], "accented"); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“Oattie’s birthday is a big deal around here”',
                'content' => 'Oattie’s sociable nature brings joy to everyone they meet, whether at a coffee shop or the seafront. “Oattie’s birthday is a big deal around here,” Connie explains, sharing that she recently made her furry son a special tuna cake with his face on it “which he loved!” Connie also prepared party bags with treats inside for his dog walker to share with his pup pals — how cute!
                Oattie’s presence has enriched Connie’s life, making it more fulfilling; what more could you ask from a chosen family member?',
                'image' => get_site_url() . '/articles/pets/oattie.webp',
                'image_alt' => '',
                'image_credit' => '',
            ], "accented"); ?>

            <?php echo create_layout('split-media', $args = [
                'title' => 'JODIE AND MARLEY',
                'content' => 'Jodie is a successful entrepreneur and proud mum of Marley, a Cavapoo. Marley joined Jodie’s family on 23 May 2014 and “she’s been part of every chapter since,” Jodie recalls.
                Despite Jodie’s separation from Marley’s other human mum in 2019, Marley remains the heart of their chosen family, dividing her time between both homes. “She was our constant — still full of love, still needing her walks,”
                Jodie reflects on how Marley helped them through the transition. Marley’s presence is a source of healing and companionship.',
                'image' => get_site_url() . '/articles/pets/marley.webp',
                'image_alt' => 'JODIE AND MARLEY',
                'image_credit' => 'JODIE AND MARLEY',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“Watching her grow over the years has been such a joy. She’s just the best girl”',
                'content' => 'For her family, Marley is a symbol of love and belonging, included in family festivities with her own little Christmas dinner and spoiled on her birthday with chicken, cuddles, and new toys. Last year, Marley sported a rainbow neck bandana at Portsmouth Pride with her other mummy, bringing smiles and sparking conversations. “Marley’s a real little connector, without even trying,” Jodie beams.
                Outside of her role as Marley’s mum, Jodie runs a multi-award-winning online community which helps businesses use the free version of LinkedIn to become visible without spending a penny on marketing. To find her on LinkedIn, search for Jodie Goodchild.',
                'image' => get_site_url() . '/articles/pets/marley.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
        </div>
    </section>

    <?php /* 080 Washington Pride.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-red); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'CAPITAL PRIDE',
                'content' => 'THIS YEAR MARKED THE 50TH ANNIVERSARY OF PRIDE CELEBRATIONS IN WASHINGTON DC. IT WAS ALSO THE HOST CITY FOR THIS YEAR’S WORLDPRIDE AND THE AMERICAN CAPITAL WELCOMED EVERYONE FROM ACROSS THE WORLD WITH OPEN ARMS IN ITS ONGOING FIGHT FOR EQUALITY, VISIBILITY AND JUSTICE FOR US ALL',
                'image' => get_site_url() . '/articles/washington-pride/cover.webp',
                'image_alt' => 'PICTURES: WASHINGTON.COM',
                'image_credit' => 'PICTURES: WASHINGTON.COM',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => '',
                'content' => '#Almost a million people came out for this year’s WorldPride in Washington DC.
                It was both a celebration of the LGBTQ+ community and a gesture of defiance towards the present incumbent in the White House up the road, whose policies are posing a frightening challenge to our human rights.
                Highlights from the two weeks of cultural and political events included a Human Rights Conference, sporting tournaments, a six-hour parade, with over 300 floats, and a 1000-foot long rainbow flag, and ended with a concert headlined by Wicked star Cynthia Erivo.
                Go to: www.worldpridedc.org',
                'image' => get_site_url() . '/articles/washington-pride/Cynthia-Erivo.webp',
                'image_alt' => 'Concert headlined by Wicked star Cynthia Erivo',
                'image_credit' => 'PICTURES: WASHINGTON.COM',
            ]); ?>
            <?php /* echo create_layout('image-collage', $args = [
                'collection' => [
                    [
                        'image' => get_site_url() . '/articles/washington-pride/cover.webp',
                        'image_alt' => 'PICTURES: WASHINGTON.COM',
                        'image_credit' => 'PICTURES: WASHINGTON.COM',
                    ],
                    [
                        'image' => get_site_url() . '/articles/washington-pride/World-Pride-Bus.webp',
                        'image_alt' => 'PICTURES: WASHINGTON.COM',
                        'image_credit' => 'PICTURES: WASHINGTON.COM',
                    ],
                    [
                        'image' => get_site_url() . '/articles/washington-pride/World-Pride-Carnival.webp',
                        'image_alt' => 'PICTURES: WASHINGTON.COM',
                        'image_credit' => 'PICTURES: WASHINGTON.COM',
                    ],
                    [
                        'image' => get_site_url() . '/articles/washington-pride/World-Pride-Speech.webp',
                        'image_alt' => 'PICTURES: WASHINGTON.COM',
                        'image_credit' => 'PICTURES: WASHINGTON.COM',
                    ],
                    [
                        'image' => get_site_url() . '/articles/washington-pride/Cynthia-Erivo.webp',
                        'image_alt' => 'Concert headlined by Wicked star Cynthia Erivo',
                        'image_credit' => 'PICTURES: WASHINGTON.COM',
                    ],
                ],
                
            ]); */ ?>
        </div>
    </section>

    <?php /* 081-083 Lonely Amsterdam.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'WORLD PRIDE GOES DUTCH',
                'content' => 'NEXT YEAR AMSTERDAM WILL BE HOSTING WORLD PRIDE. IN AN EXTRACT FROM THE LGBTQ+ TRAVEL GUIDE, BY ALICIA VALENSKI AND PUBLISHED BY LONELY PLANET, WE TAKE A LOOK AT WHAT THE CAPITAL OF THE NETHERLANDS HAS TO OFFER THE LGBTQ+ TRAVELLER',
                'image' => get_site_url() . '/articles/lonely-amsterdam/cover.webp',
                'image_alt' => 'PICTURE: © FRANK WIJN/ GETTY IMAGES',
                'image_credit' => 'PICTURE: © FRANK WIJN/ GETTY IMAGES',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => '',
                'content' => 'In case the world-famous Red Light District and the litany of coffee shops (ICYMI, coffee shops are for cannabis, while cafés are actually for coffee) didn’t tip you off, Amsterdam is a notably liberal city. So, it should come as no surprise that the Netherlands’ capital city is something of a safe haven for queer travelers.
                For Daan Colijn (he/him), a born-andraised Amsterdammer, this didn’t seem particularly notable when he was growing up in the Dutch capital. “I remember, as a teenager, my father would have Amsterdam Pride on the TV because it was broadcast on our local TV network. It was a big deal seeing this representation on TV, and it was so cool that my dad would have it on,” Daan said.
                But things were different for his husband, Karl Krause (he/him). “I’m from a small village in the mountains of eastern Germany, and I came from an area that was not LGBTQ+-friendly at all,” Karl said. After he came out, Karl moved to Dresden and then Berlin. “My eyes were opened then. It was like, ‘This is a community! This is how life could be!’ It was unbelievable for me to live in an environment where I had a choice of how I wanted to live, who I wanted to be, and how my life could all of a sudden be.”',
                // 'image' => get_site_url() . '/articles/lonely-amsterdam/building-pride-flags.webp',
                // 'image_alt' => 'PICTURE: ANATOLIY CHERKAS/ SHUTTERSTOCK',
                // 'image_credit' => 'PICTURE: ANATOLIY CHERKAS/ SHUTTERSTOCK',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => '',
                'content' => 'After meeting in Berlin in 2013, Karl moved a half-year later to Daan’s home city, Amsterdam. It was there that they launched their gay travel website Couple of Men (coupleofmen.com or @coupleofmen on social media). In the decade since, Daan and Karl have had the opportunity to visit more than 50 countries and five continents together—but to them, there’s still no place like home. “We’ve learned after traveling to so many places in the world that Amsterdam really is one of the most beautiful places ever,”
                Karl said. “It’s so distinct, so different, and has its own vibe that you just don’t have anywhere else.”',
                'image' => get_site_url() . '/articles/lonely-amsterdam/building-pride-flags.webp',
                'image_alt' => 'PICTURE: ANATOLIY CHERKAS/ SHUTTERSTOCK',
                'image_credit' => 'PICTURE: ANATOLIY CHERKAS/ SHUTTERSTOCK',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => '',
                'content' => '#WHERE TO BEGIN
                “You can go to Reguliersdwarsstraat, the queer street, for the nightlife. Soho is a great place to
                start the night on this street. I used to go there as a teenager when I was growing up in Amsterdam. It’s very easy to walk in, very open, with two floors. You can have nice cocktails, it’s a very chill place, and it’s a good starting point for your night before you figure out where else you might want to go after.
                “The other place nearby that our friends always like to go to is Taboo Bar, which is a great place to meet people, have a drink, and dance. Another club in that area, which maybe we are starting to feel like we’re a little too old for, is Club NYX. It is incredibly popular with the young crowd and the ideal spot for
                newcomers to queer life.
                “One of our favorite places is Spijkerbar, right near Leidseplein. It feels like an old ’70s gay bar. You come in and it’s dark and you have to walk down some stairs. There’s a pool table. They have Naked Tuesdays, which is always a big success. They play porn and animated movies on two TV screens next to each other—if you watch for a couple of minutes, sometimes the cartoon characters will look really happy or bewildered in the direction of the porn, and it’s hilarious. It’s a good icebreaker if you want to start a conversation with someone. People there are very friendly, and it’s pretty cozy.”',
                'image' => get_site_url() . '/articles/lonely-amsterdam/amsterdarm-street-parade.webp',
                'image_alt' => 'PICTURE: YASONYA',
                'image_credit' => 'PICTURE: YASONYA',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => '',
                'content' => '#WINING & DINING
                “For cafés that are queer-owned, inclusive, and welcoming for both alcoholic and nonalcoholic drinks: Bar Bario, Café Saarein, Prik, Bar Buka, Amstel 54, and the Queen’s Head. Café ’t Mandje—the oldest queer establishment in Amsterdam, originally opened in the 1920s—is a must-visit, too, whether you go in the day or at night. And many more queer bars around the city!
                “For good traditional Dutch cuisine and a very old-school atmosphere, we really like Café Sonneveld. The café celebrates one of our Dutch stars, Wim Sonneveld, a singer, actor, and comedian in the 50s and 60s who was gay but went through most of his life in the closet. A gay-owned restaurant with very Dutch cuisine would be Pannenkoekenhuis Upstairs, the smallest pannenkoekenhuis (pancake restaurant) in Europe!”',
                'image' => get_site_url() . '/articles/lonely-amsterdam/amsterdam-canal.webp',
                'image_alt' => 'PICTURE: TAIGA/ SHUTTERSTOCK',
                'image_credit' => 'PICTURE: TAIGA/ SHUTTERSTOCK',
            ]); ?>

            <?php echo create_layout('split-editorial', $args = [
                // 'title' => '',
                'content' => '#GETTING OUTSIDE
                “One of our favorite things to do with friends who are coming over from out of town is to rent a boat. It’s just the most beautiful way to see the city. It’s about three hours, and you can bring your own snacks and drinks. There are also sightseeing boats of course, but bringing your own food is the advantage of doing it yourself.
                And you don’t need a boat driver’s license!
                You’re literally seeing all sides, all the canals and the houses, just floating by. And there are some beautiful lunch places where you could, say, stop your boat and order pizzas, then take them away to eat on the boat and continue your route. We recommend Mokumboot for renting your own electric sloepje (little sloop boat), but there are also other companies who do the same thing. A good place to pick up pizza from your boat is De Pizzabakkers Leliegracht.
                “A second place we also like to go is the beach at Zandvoort, which is one of the closest beaches to Amsterdam. It’s a very popular area for families and people of all ages to go to spend time in the sun. But a lot of people don’t know that there is also a nude beach where the gay community like to hang out, between the Poles
                68 and 71, that’s really nice in the summertime. You can use Restaurant Fosfor for directions if you have any trouble. Although some cruising does happen, make sure to be respectful towards each other and the other beach visitors who might just be there to enjoy the sun; and also to respect nature, because the sand dunes here are a protected area.
                “Along the same lines, and a little closer to the city, there is the official gay cruising area called the Nieuwe Meer. Yes, this is an official cruising area, recognized by the government.
                It’s a nice swath of nature behind the bike path where (mostly) men go to cruise but also sunbathe and hang out with each other.
                Especially during summer there is a group of men who go almost every day, keeping the area clean but also making it feel more safe. On the other side of the bike path there is a big lake which is great for swimming, and the crowds that go here are a bit more mixed.”',
                // 'image' => get_site_url() . '/articles/lonely-amsterdam/amsterdam-canal.webp',
                // 'image_alt' => 'PICTURE: ANATOLIY CHERKAS/ SHUTTERSTOCK',
                // 'image_credit' => 'PICTURE: ANATOLIY CHERKAS/ SHUTTERSTOCK',
            ]); ?>

            <?php echo create_layout('split-media', $args = [
                // 'title' => '',
                'content' => '#QUEER RESOURCES
                “If you seek support, community, or further information, then the COC is a great place to start. If you require help because you became a victim of discrimination, violence, or a hate crime, make use of the Pink in Blue specialized police network, who are dedicated to supporting the LGBTQI+ community is these kind of cases. You can reach them by email at rozeinblauw@politie.nl or by phone at +31(0)88-1691234.”',
                'image' => get_site_url() . '/articles/lonely-amsterdam/amsterdam-bridge.webp',
                'image_alt' => 'PICTURE: © ALEXANDER SPATARI/ GETTY IMAGES',
                'image_credit' => 'PICTURE: © ALEXANDER SPATARI/ GETTY IMAGES',
            ]); ?>

            <?php echo create_layout('split-editorial', $args = [
                // 'title' => '',
                'content' => '#QUEER HISTORY
                “Definitely go to the Homomonument. It’s such an important place for our queer community.
                It’s the outdoor space where we celebrate Pride or Kingsday but also come together on May 4 to remember the LGBTQ+ victims of war and hate. What’s especially beautiful to us is that although the monument dates back to 1987, it still has so much power, and our community keeps it alive with these kinds of events. The
                monument is built out of three pink granite triangles, creating one big triangle covering a big piece of the Westermarkt, making it part of the city’s DNA.
                “When at the Homomonument, also check out Pink Point, the official LGBTQ+ tourist information point of Amsterdam. Here you can get the queer version of those famous Delftstyle figurines of a boy and a girl kissing. But they also have all the up-to-date flyers about events and love to give you information on anything queer.”
                #GETTING AROUND
                “The trams, metros, and buses could not be easier. Walk—don’t bike in the city center, if you’re a tourist — and then when you are exhausted, take the tram. Go out, explore, and try to see more of Amsterdam than just the city center.”',
                // 'image' => get_site_url() . '/articles/lonely-amsterdam/amsterdam-bridge.webp',
                // 'image_alt' => 'PICTURE: © ALEXANDER SPATARI/ GETTY IMAGES',
                // 'image_credit' => 'PICTURE: © ALEXANDER SPATARI/ GETTY IMAGES',
            ]); ?>
        </div>
    </section>

    <?php /* 084-085 Vienna and Prague.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-blue); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'DYNAMIC DUO: VIENNA AND PRAGUE',
                'content' => 'SIMON GAGE HAS THE BEST OF TIMES CHECKING OUT TWO OF EUROPE’S MOST BEAUTIFUL AND LGBTQ+-FRIENDLY CITIES – AND STILL HAS CHANGE FROM 20 EUROS',
                'image' => get_site_url() . '/articles/vienna-and-prague/cover.webp',
                'image_alt' => 'PICTURE: WENCESLAS SQUARE, AMPAJANO ANIZZA / SHUTTERSTOCK',
                'image_credit' => 'PICTURE: WENCESLAS SQUARE, AMPAJANO ANIZZA / SHUTTERSTOCK',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => '',
                'content' => 'Let’s see if we can get through this without saying “a tale of two cities”.
                Even though it is. A tale, that is, with two cities in it. The cities in question are both beautiful but in totally different ways and are linked, not only by a train journey through countryside that will cost you way shy of 20 euros, but by sister hotels currently dazzling in those respective cities.
                The cities are Prague and Vienna while the hotels are by Almanac, a fairly newish, independent group that puts loveliness back where loveliness belongs in heritage buildings that had suffered neglect until they got their hands on them. In Prague, it’s the Almanac X Alcron Prague, just off the famous Wenceslas Square, while in Vienna it’s the Almanac Palais Vienna, right on the Parkring, one of Europe’s premier addresses, just across from the park with that famous golden Strauss statue and within walking distance of, well, everything.
                Let’s start in Prague, which we did, and the Alcron, a totally face-lifted and fully bodyworked 1930s classic that has had everyone from Chaplin to Churchill across that lobby, not that it was as chic and minimal then as it is now, and no doubt they sank some martinis in the still-retro-looking jewel of a bar just off reception.',
                // 'image' => get_site_url() . '/articles/vienna-and-prague/hotel-alcron-almanac-x.webp',
                // 'image_alt' => 'PICTURE: ALMANAC X ALCRON, PRAGUE',
                // 'image_alt' => 'PICTURE: ALMANAC PALAIS, VIENNA',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => '',
                'content' => 'With the Old Town and its medieval spires, fairytale atmosphere and big fat Unesco World Heritage order a short walk away, you are pretty much in the heart of the action (no need to clamber on one of those rickety trams of theirs on your way back from several of those worldfamous beers). Even the funky new waterside scene, with little bars and restaurants and, in the case of Manifesto Market (manifestomarket.com), foodie destinations, is only a short stroll or minuscule Uber ride away.
                And it is an amazingly – famously! – LGBTQ+-friendly destination, with the Czech Republic being the first post-communist country to decriminalise homosexuality (in 1962, while still under communism — and before the UK!). It has a huge and amazing Pride in August (when the Almanac X Alcron becomes the centre of festivities meaning that their new rooftop gets a workout), a Queer Film Festival Mezipatra (mezipatra.cz) and a “gay village” called Vinohrady, which is well worth a sniff.
                #“PRAGUE HAS A HUGE AND AMAZING PRIDE IN AUGUST”',
                'image' => get_site_url() . '/articles/vienna-and-prague/hotel-alcron-almanac-x.webp',
                'image_alt' => 'PICTURE: ALMANAC PALAIS, VIENNA',
                'image_alt' => 'PICTURE: ALMANAC PALAIS, VIENNA',
            ]); ?>

            <?php echo create_layout('split-editorial', $args = [
                // 'title' => '',
                'content' => '#“AND OF COURSE THERE’S EUROVISION NEXT YEAR SO GET YOUR RESERVATIONS IN NOW, SWEETIE”
                As for the rest of town, it’s beautiful and romantic with parks and a river and a great food scene, not least back at the hotel where the Alcron restaurant, which takes over the whole of the back of the ground floor and spills out onto the terrace, is one of the best in town.
                And when you’ve done Prague (obviously, you never fully do Prague), you head to the station — we walked, that’s how close it is — and take your 14-euro train to Vienna (please reserve a seat: it can be a scrum). You can even have your lunch – proper eastern European stews with rice not sandwiches in triangle boxes! – in the little restaurant car.
                Vienna, obviously, is another proposition altogether. Grander than you can possibly imagine – how did a country have it all and then lose it to this extent? – Vienna is perhaps the most grown-up, most sophisticated and most cultural spot in Europe by headcount. And the Almanac Palais Vienna is in the thick of it all.
                Having taken over a grand old palace, there are public spaces in this hotel that need to be seen to be believed, from the ultra-modern reception with ceilings so high they never end dotted with contemporary art (the place is famous for its art), to the newly opened rooms on the first floor. Not forgetting the Donnersmarkt Restaurant, which stretches the whole front of the building and serves up clean modernism and a menu that is up-to-the-minute with some lovely nods to Viennese past glories.
                Set foot outside and, apart from that park, you are a short stroll from everything you need to see whether it’s St. Stephen’s Cathedral (stephanskirche.at) and the shopping and Sachertorte-eating opportunities that surround it, the extensive Museum Quarter (mqw.at), the gilded neo-classical parliament buildings, the Vienna State Opera (wiener-staatsoper.at), the Imperial Palace, the Secession building with its golden filigree dome (secession.at) and the Rathaus, or Town Hall. And it’s not far from the exquisite Belvedere (belvedere.at), a palace crammed with all the Klimt and Schiele you can run your eyes over or the futuristic (if you’ve had enough of old-school) Zaha Hadiddesigned Library and Learning Centre (wu.ac.at/bibliothek).',
                // 'image' => get_site_url() . '/articles/vienna-and-prague/cover.webp',
                // 'image_alt' => 'PICTURE: WENCESLAS SQUARE, AMPAJANO ANIZZA / SHUTTERSTOCK',
                // 'image_credit' => 'PICTURE: WENCESLAS SQUARE, AMPAJANO ANIZZA / SHUTTERSTOCK',
            ]); ?>

            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => '',
                'content' => 'And you are in exactly the right area for the famous Viennese coffee houses, grand affairs where newspapers (remember them?) are still
                hung on poles for you to borrow and read while spending a whole morning over a single coffee and pastry.
                As for what to do as an LGBTQ+ — and remember it’s such a safe city, so you should have no trouble (they even have same-sex pedestrian crossing lights, so you know they’re down) — well, gay men should not miss the most sumptuous gay bathhouse in the world, Kaiserbründl (kaiserbruendl.at), with its exquisite full-frontal artworks and palatial facilities. For a quick restorative, Café Berg (www.dasberg.at) is the original gay café and still gorgeous and fresh and airy with the main
                LGBTQ+ bookshop, Löwenherz (www.loewenherz.at), right next door. And then of course there’s Eurovision next year so get your reservations in at Almanac like now, sweetie, now.',
                'image' => get_site_url() . '/articles/vienna-and-prague/hotel-almanac-palais.webp',
                'image_alt' => 'PICTURE: PICTURE: ALMANAC PALAIS, VIENNA',
                'image_credit' => 'PICTURE: ALMANAC PALAIS, VIENNA',
            ]); ?>

            <?php echo create_layout('split-editorial', $args = [
                // 'title' => '',
                'content' => 'But whatever you do, you must not miss the Rosa Wiener Wiesen-Fest, a gay Oktoberfest kind of situation, which is all lederhosen and dirndl madness. And then, if you can’t bear to go to the airport, you could always go back to the railway station and head back to Prague. It is only 14 euros away, after all.
                For both Almanac hotels Go to: www.almanachotels.com.
                There is also a special All Aboard package, where you can get a sleeper train from other cities in Europe to Prague.
                #Go to: www.allaboard.eu
                #Tourist info: www.prague.eu
                #Tourist info: www.wien.info',
                // 'image' => get_site_url() . '/articles/vienna-and-prague/hotel-almanac-palais.webp',
                // 'image_alt' => 'PICTURE: PICTURE: ALMANAC PALAIS, VIENNA',
                // 'image_credit' => 'PICTURE: ALMANAC PALAIS, VIENNA',
            ]); ?>
        </div>
    </section>

    <?php /* 086-087 UK Prides.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-purple); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('split-media', $args = [
                'title' => 'UKPRIDE Organisers Network: PRIDE ON!',
                'content' => 'PRIDE IN LONDON IS GOING TO BE FANTASTIC. BUT THE PARTY DOESN’T STOP THERE. THERE ARE LOTS MORE PRIDES AROUND THE COUNTRY, CELEBRATING OUR FABULOUSLY DIVERSE RAINBOW COMMUNITY AND STANDING UP FOR OUR RIGHTS, ESPECIALLY IN THESE UNCERTAIN TIMES. FROM HUGE STAR-STUDDED EVENTS TO MORE INTIMATE AND FAMILY-FRIENDLY AFFAIRS, THERE’S SOMETHING THERE FOR EVERYONE. MAKE A DATE IN YOUR DIARY AND CHECK OUT SOME OF THE BEST PRIDE CELEBRATIONS HAPPENING IN THE UK',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/pride-cymru-02.webp',
                'image_alt' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
                'image_credit' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#MID AND EAST ANTRIM PRIDE
                28 JUNE
                Go to: www.facebook.com/p/Mid-East-Antrim-Pride

                #HARWORTH AND BIRCOTES PRIDE
                28 JUNE
                Go to: www.hbpride.uk

                #PRIDE IN SUNDERLAND
                28 JUNE
                Go to: www.wearproud.org

                #WORTHING PRIDE
                4 - 5 JULY
                Go to: www.worthingpride.com

                #NUNEATON PRIDE
                5 JULY
                Go to: www.warwickshirepride.co.uk

                #PRIDE IN LONDON
                5 JULY
                Go to: www.prideinlondon.org

                #CORBY PRIDE
                7 JULY
                Go to: www.facebook.com/corbypride

                #BRISTOL PRIDE
                12 JULY
                Go to: www.bristolpride.co.uk',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/oxford-pride.webp',
                'image_alt' => 'PICTURES OF OXFORD PRIDE: MAZZ IMAGES',
                'image_credit' => 'PICTURES OF OXFORD PRIDE: MAZZ IMAGES',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#WORKSOP PRIDE
                12 JULY
                Go to: www.worksoppride.co.uk
                
                #SOUTHEND PRIDE
                12 JULY
                Go to: www.southendpride.org.uk

                #STRATFORD-UPON-AVON PRIDE
                12 JULY
                Go to: www.warwickshirepride.co.uk

                #NEWBURY PRIDE
                12 JULY
                Go to: www.newburypride.org.uk

                #BELFAST PRIDE
                18 – 27 JULY 
                Go to: www.belfastpride.com

                #CHESTERFIELD PRIDE
                19 JULY
                Go to: www.chesterfieldpride.co.uk

                #GLASGOW’S PRIDE
                19 JULY
                Go to: www.prideglasgow.com

                #ISLE OF WIGHT PRIDE
                19 JULY
                Go to: www.iwpride.org

                #NORTHERN PRIDE (NEWCASTLE)
                19 - 20 JULY
                Go to: www.northern-pride.com

                #PRIDE IN GATESHEAD
                19 - 20 JULY
                Go to: www.outnortheast.org.uk',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/oxford-pride.webp',
                'image_alt' => 'PICTURES OF OXFORD PRIDE: MAZZ IMAGES',
                'image_credit' => 'PICTURES OF OXFORD PRIDE: MAZZ IMAGES',
            ]); ?>
            <?php echo create_layout('split-media-reverse', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#HAPPY VALLEY PRIDE (HEBDEN BRIDGE)
                19 – 27 JULY
                Go to: www.happyvalleypride.co.uk

                #PRIDE IN CINDERFORD (FOREST OF DEAN)
                20 JULY
                Go to: www.prideinglos.org

                #PRIDE IN SOUTH TYNESIDE
                20 JULY
                Go to: www.outnortheast.org.uk

                #PRIDE IN TETBURY
                20 JULY
                Go to: www.prideinglos.org

                #WINDSOR AND ETON
                26 JULY
                Go to: www.windsorpride.co.uk

                #LICHFIELD PRIDE
                26 - 27 JULY
                Go to: www.facebook.com/lichfieldpride

                #PRIDE IN HULL
                26 JULY
                Go to: www.prideinhull.co.uk

                #TRANS PRIDE (LANGHAM PLACE, LONDON)
                26 JULY
                Go to: www.londontranspride.org',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/pride-cymru.webp',
                'image_alt' => 'PICTURES OF PRIDE CYMRU: MAZZ IMAGES',
                'image_alt' => 'PICTURES OF PRIDE CYMRU: MAZZ IMAGES',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => 'WEST LOTHIAN PRIDE
                26 JULY
                Go to: www.westlothianpride.org.uk

                #WALSALL PRIDE PICNIC
                27 JULY
                Go to: www.walsallpride.co.uk

                #CAUSEWAY PRIDE
                2 AUGUST
                Go to: www.facebook.com/causeway.pride

                #BRIGHTON & HOVE PRIDE
                2 - 3 AUGUST
                Go to: www.brighton-pride.org

                #WAKEFIELD PRIDE
                3 AUGUST
                Go to: www.wakefieldpride.co.uk

                #SKIPTON PRIDE
                3 AUGUST
                Go to: www.facebook.com/skiptonpride

                #MID-ULSTER PRIDE
                9 AUGUST
                Go to: www.midulsterpride.com

                #DONCASTER
                9 AUGUST
                Go to: www.doncasterpride.co.uk 

                #ELY PRIDE
                9 AUGUST
                Go to: www.prideinely.co.uk

                #SWINDON & WILTSHIRE PRIDE
                9 AUGUST
                Go to: www.swindonwiltshirepride.org.uk',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/pride-cymru.webp',
                'image_alt' => 'PICTURES OF PRIDE CYMRU: MAZZ IMAGES',
                'image_alt' => 'PICTURES OF PRIDE CYMRU: MAZZ IMAGES',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#BLACK PRIDE 20TH ANNIVERSARY (LONDON) 
                10 AUGUST
                Go to: www.ukblackpride.org.uk

                #CHESTER PRIDE 16 AUGUST
                Go to: www.chesterpride.co.uk

                #CRAWLEY PRIDE 16 AUGUST
                Go to: www.crawleylgbt.com

                #LINCOLN PRIDE 16 AUGUST
                Go to: www.lincolnpride.co.uk

                #WARWICKSHIRE PRIDE 16 AUGUST
                Go to: www.warwickshirepride.co.uk

                #NEW FOREST PRIDE 17 AUGUST
                Go to: www.facebook.com/newforestprideuk

                #MANCHESTER PRIDE 23 - 24 AUGUST
                Go to: www.manchesterpride.com

                #WALSALL PRIDE FESTIVAL 23 AUGUST
                Go to: www.walsallpride.co.uk

                #SOUTHAMPTON PRIDE 23 - 24 AUGUST
                Go to: www.southamptonpride.org

                #OBAN PRIDE 29 - 31 AUGUST
                Go to: www.obanpride.com

                #READING PRIDE 30 AUGUST
                Go to: www.readingpride.co.uk

                #BI PRIDE (KINGS PLACE, LONDON)
                31 AUGUST 
                Go to: www.bipride.org',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/cover.webp',
                'image_alt' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
                'image_credit' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#BASILDON PRIDE
                6 SEPTEMBER
                Go to: basildonpride.co.uk 

                #BICESTER PRIDE
                6 SEPTEMBER
                Go to: www.bicesterpride.co.uk

                #PRIDE IN SURREY
                6 SEPTEMBER
                Go to: www.prideinsurrey.org

                #GLOUCESTER PRIDE
                13 SEPTEMBER
                Go to: www.prideinglos.org.uk

                #TRANS PRIDE SURREY
                13 SEPTEMBER
                Go to: www.transpridesurrey.org

                CUMBRIA PRIDE (CARLISLE)
                21 SEPTEMBER
                Go to: www.cumbriapride.org

                #PRESTON PRIDE
                27 SEPTEMBER
                Go to: www.prestonpride.com

                #PRIDE IN TEWKESBURY
                4 OCTOBER
                Go to: www.prideinglos.org.uk

                #All these dates are subject to change, so do check the relevant websites for up-to-date information. Happy Pride!',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/trans-pride.webp',
                'image_alt' => 'TRANS RIGHTS NOW',
                'image_credit' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
            ]); ?>


            <?php echo create_layout('split-media-reverse', $args = [
                'title' => '',
                'content' => '#FOR MANY, PRIDE IS A DAY - OR MAYBE  A WEEKEND - OF CELEBRATION. IT’S THE COLOUR, THE MUSIC, THE PEOPLE DANCING IN THE STREETS…
                But behind the scenes, it’s a year-round labour of love led by a passionate network of organisers working tirelessly to make those moments possible. And at the heart of that network right now is Dee Llewellyn.
                Dee is the current Chair of the UK Pride Organisers Network (UKPON)—a voluntary role that they balance alongside their full-time job as Director of Partnerships & Growth at Pride in London, one of the UK’s largest LGBTQ+ events. It’s a dual commitment that speaks volumes about Dee’s passion for visibility, solidarity, and community-led change.
                “Pride doesn’t just happen,” Dee says. “It’s powered by volunteers, communities, and a huge amount of unseen work. My role at UKPON is to make sure the people behind that work are supported, heard, and set up to succeed—wherever they are in the UK.”
                UKPON is exactly what it sounds like: a network of Pride organisers from across the country, ranging from large-scale city events to small-town and rural Prides that often operate with little more than a handful of volunteers and a lot of heart. The goal? To share knowledge, build solidarity, and strengthen the Pride movement as a whole.',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/pride-children.webp',
                'image_alt' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
                'image_credit' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
            ], "accnted"); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'UK PRIDES',
                'content' => 'In their day job at Pride in London, Dee leads on partnership strategy and growth—building relationships with sponsors, aligning brands with LGBTQ+ values, and ensuring the event continues to reflect the community it serves. But for Dee, it’s never just been about scale. It’s about impact.
                “What matters isn’t how big your stage is. It’s whether you’re creating space for people to feel seen, safe and celebrated.”
                As Chair of UKPON, Dee is now focusing on three core priorities for the network: community resilience, resource sharing, and advocacy. That includes everything from helping smaller Prides access funding and insurance support, to facilitating conversations around safety, accessibility and inclusion.
                “We’ve got over 100 Pride events across the UK, all doing brilliant things—often in very different contexts. My job is to help connect those dots, so that no organiser ever feels like they’re doing it alone.”
                But Dee is also quick to point out that Pride is about more than logistics. In an era of growing political hostility toward LGBTQ+ communities—particularly trans people and queer youth—UKPON is stepping up its role as a collective voice.
                “Pride is still a protest,” Dee says. “We have to remember that. We’re here to celebrate, yes—but we’re also here to push back, speak up, and protect each other.”',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/pride-children.webp',
                'image_alt' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
                'image_credit' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
            ], "accnted"); ?>
            <?php echo create_layout('split-editorial', $args = [
                'title' => '“WHAT MATTERS IS WHETHER YOU’RE CREATING SPACE FOR PEOPLE TO FEEL SEEN, SAFE AND CELEBRATED”',
                'content' => 'Part of that means making sure every Pride, no matter its size, reflects the full diversity of the LGBTQ+ community. “Representation matters—on stage, on the streets, and behind the scenes,” they note. “That includes Black and Brown queer voices, disabled LGBTQ+ people, trans organisers, and those in rural or working-class communities.”
                For Dee, leading UKPON is both a strategic and deeply personal mission. “Like many people in this movement, I came to Pride because of my own family, my own experiences. I’ve seen firsthand what visibility and community can do. I want everyone to have access to that—not just once a year, but all year round.”
                With Dee at the helm, UKPON isn’t just holding space—it’s building it. ',
                'image' => get_site_url() . '/articles/ukpride-organisers-network/pride-children.webp',
                'image_alt' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
                'image_credit' => 'PICTURES OF OXFORD PRIDE AND PRIDE CYMRU: MAZZ IMAGES',
            ], "accnted"); ?>
        </div>
    </section>

    <?php /* 088-89 World Prides.pdf */ ?>
    <section style="--background: var(--lightgrey); --accent: var(--pride-pink); --color: var(--black);">
        <div class="scroll-snap-x">
            <?php echo create_layout('background-media', $args = [
                'title' => 'PRIDES AROUND THE WORLD',
                'content' => 'WE’RE PROUD. WE’RE HERE. AND WE’RE EVERYWHERE. WE PICK OUT SOME OF OUR FAVOURITE UPCOMING PRIDES FROM AROUND THE GLOBE',
                'image' => get_site_url() . '/articles/prides-around-the-world/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#BERMUDA
                29 June - 6 July
                Go to: www.outbermuda.org/pride

                #IBIZA, SPAIN
                7 - 14 June
                Go to: www.ibizagaypride.eu

                #MUNICH, GERMANY
                14 - 29 June
                Go to: www.csdmuenchen.de

                #ROME, ITALY
                14 June
                Go to: www.romapride.it

                #SÃO PAULO, BRAZIL
                20 - 22 June
                Go to: www.paradasp.org.br

                #COLOGNE. GERMANY
                21 June - 6 July
                Go to: www.colognepride.de

                #BARCELONA, SPAIN
                28 June - 19 July
                Go to: www.pridebarcelona.org

                #BERLIN, GERMANY
                28 June - 26 July
                Go to: www.csd-berlin.de',
                'image' => get_site_url() . '/articles/prides-around-the-world/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-media', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#MADRID, SPAIN
                27 June - 6 July
                Go to: www.madridorgullo.com

                #NEW YORK, USA
                29 June
                Go to: www.nycpride.org/event

                #STUTTGART, GERMANY
                11 - 27 July
                Go to: www.stuttgart-pride.de

                #LUXEMBOURG
                5 - 13 July
                Go to: www.luxembourgpride.lu

                #LIMERICK, IRELAND
                12 July
                Go to: www.limerickpride.ie

                #SAN DIEGO, USA
                12 - 20 July
                Go to: www.sdpride.org

                #FRANKFURT, GERMANY
                17 - 20 July
                Go to: www.csd-frankfurt.de
                
                #AMSTERDAM, NETHERLANDS
                24 July - 3 August
                Go to: www.pride.amsterdam/en',
                'image' => get_site_url() . '/articles/prides-around-the-world/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
            <?php echo create_layout('split-editorial', $args = [
                // 'title' => 'PRIDES AROUND THE WORLD',
                'content' => '#CORK, IRELAND
                26 July
                Go to: www.corkpride.com
                #HAMBURG, GERMANY
                26 July - 3 August
                Go to: www.hamburg-pride.de
                #PRAGUE, CZECH REPUBLIC
                28 July - 3 August
                Go to: festival.praguepride.com
                #STOCKHOLM, SWEDEN
                28 July - 2 August
                Go to: www.stockholmpride.org
                #MONTREAL, CANADA
                31 July - 10 August
                Go to: www.fiertemontreal.com
                #VANCOUVER, CANADA
                3 August
                Go to: www.vancouverpride.ca
                #REYKJAVIK, ICELAND
                6 - 11 August
                Go to: www.hinsegindagar.is/en
                #ANTWERP, BELGIUM
                6 - 10 August
                Go to: www.antwerppride.comen
                #DORTMUND, GERMANY
                16 August
                Go to: www.csd-dortmund.de
                #BELGRADE, SERBIA
                1 - 7 September
                Go to: www.prajd.rs/en
                #BENIDORM, SPAIN
                1 - 7 September
                Go to: www.benidormpride.com
                #VALETTA, MALTA
                5 - 14 September
                Go to: www.maltapride.com
                #CURACAO
                26 September - 5 October
                Go to: www.curacaopride.org
                #ATLANTA, USA
                11 - 12 October
                Go to: www.atlantapride.org
                #TAIWAN
                24 - 29 October
                Go to: www.taiwanpride.lgbt
                #ORLANDO, USA
                18 October
                Go to: www.comeoutwithpride.org
                #JOHANNESBURG, SOUTH AFRICA
                25 October
                Go to: www.prideofafrica.org
                #PALM SPRINGS, USA
                6 to 9 November
                Go to: www.pspride.org
                #BUENOS ARIES, ARGENTINA,
                11 November
                Go to: www.marchadelorgullo.org.ar
                #MASAPALOMAS, SPAIN
                10 - 16 November
                Go to: www.maspalomaspride.com
                #All these dates are subject to change. Please check the relevant website for any updates.',
                'image' => get_site_url() . '/articles/prides-around-the-world/cover.webp',
                'image_alt' => '',
                'image_credit' => '',
            ]); ?>
        </div>
    </section>

    <?php /* 090-091 Apparel AD 5mm NEW.pdf */ ?>
    <section class="advert">
        <div class="scroll-snap-x">
            <?php echo create_layout('advert', $args = [
                'title' => 'Pride Life Apparel',
                'content' => '',
                'image' => get_site_url() . '/adverts/Pride-Life-Apparel-01.webp',
                'image_alt' => 'INCLUSIVE APPAREL. Made with love to wear with Pride. Win with Pride. TO CELEBRATE OUR LAUNCH WE ARE GIVING AWAY A BUNDLE OF EXCLUSIVE PRIDE MERCHANDISE TO BE IN WITH A CHANCE TO WIN VISIT: SHOP.PRIDELIFEGLOBAL.COM',
                'image_credit' => 'MODELLED BY OUR COVER STAR: MICHAEL GUNNING',
                'hyperlink' => array('text' => 'shop.pridelifeglobal.com', 'url' => 'https://shop.pridelifeglobal.com/'),
            ]); ?>
            <?php echo create_layout('advert', $args = [
                'title' => 'Pride Life Apparel',
                'content' => '',
                'image' => get_site_url() . '/adverts/Pride-Life-Apparel-02.webp',
                'image_alt' => 'Introducing the Pride Life Inclusive Apparel Collection. Made with love to wear with Pride. Win with Pride. To celebrate our launch we are giving away a bundle of exclusive Pride merchandise to be in with a chance to win visit: shop.pridelifeglobal.com',
                'image_credit' => 'IMAGE CREDIT: CHRISTINA JANSEN',
                'hyperlink' => array('text' => 'shop.pridelifeglobal.com', 'url' => 'https://shop.pridelifeglobal.com/'),
            ]); ?>
        </div>
    </section>

    <?php /* 092 OBC Apparel AD.pdf */ ?>
    <?php echo create_layout('advert', $args = [
        'title' => 'Pride Life Apparel: LAUNCH20 Discount',
        'content' => '',
        'image' => get_site_url() . '/adverts/OBC-Apparel-01.webp',
        'image_alt' => 'INCLUSIVE APPAREL. Made with love to wear with Pride. Shop with Pride. TO CELEBRATE OUR LAUNCH WE ARE OFFERING 20% OFF EXCLUSIVE PRIDE MERCHANDISE USE CODE: LAUNCH20 AT CHECKOUT. Visit pridelifeapparel.com',
        'image_credit' => '',
        'hyperlink' => array('text' => 'USE CODE: LAUNCH20 AT CHECKOUT', 'url' => 'https://pridelifeapparel.com/'),
    ]); ?>

    <?php //include __DIR__.'/includes/@template-markup.php'; ?>

<!-- </main> -->


<?php require __DIR__.'/includes/footer.php'; ?>