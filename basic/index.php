<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="application-name" content="Portfolio" />
    <meta name="author" content="Lyndon Mykal Panton" />
    <meta name="description" content="A software engineering portfolio
        containing developer information, work experience, projects, and more" />
        <meta name="keywords" content="computer science, software,
        software engineer, software developer, software engineering, software
        development, web development, frontend, backend, fullstack, client-side,
        server-side, database" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0
            user-scalable=true, minimum-scale=0.25, maximum-scale=4.0" />

    <title>Lyndon Mykal Panton | Software Engineer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3556eab2e4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/mobile.css" />
    <link rel="stylesheet" href="./css/laptop.css" />
    <link rel="stylesheet" href="./css/desktop.css" />
    <script src="./js/script.js"></script>
</head>
<body>
    <aside>
        <ul id="profile-list">
            <li id="profile-list-github" class="profile-list-item">
                <a href="https://github.com/lyndonpanton" target="_blank">
                    <i id="profile-list-github-icon" class="profile-list-icon fa-brands fa-github-alt"></i>
                </a>
            </li>
            <li id="profile-list-linkedin" class="profile-list-item">
                <a href="https://www.linkedin.com/in/lyndonpanton/" target="_blank">
                    <i id="profile-list-linkedin-icon"class="profile-list-icon fa-brands fa-linkedin-in"></i>
                </a>
            </li>
            <li id="profile-list-email" class="profile-list-item">
                <a href="mailto:lyndonpanton@gmail.com" target="_blank">
                    <i id="profile-list-email-icon"class="profile-list-icon fa-solid fa-envelope"></i>
                </a>
            </li>
        </ul>
    </aside>

    <header>
        <h1 id="header-author">Lyndon Mykal Panton</h1>
        <h2 id="header-role">Software Engineer</h2>

        <p id="header-introduction">
            <!-- I am a computer science graduate with experience in frontend,
            backend, and server-side development. -->
            I am a computer science graduate with experience in
            <span class="header-expertise">frontend</span>,
            <span class="header-expertise">server-side</span>, and
            <span class="header-expertise">database development</span>.
        </p>

        <nav id="header-navigation">
            <ul id="header-navigation-list">
                <li class="header-navigation-list-item">
                    <a class="header-navigation-list-link" href="#about">
                        <span class="header-navigation-list-text">About Me</span>
                        <i class="header-navigation-list-arrow fa-solid fa-arrow-right"></i>
                        <!-- <svg class="header-navigation-list-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg> -->
                    </a>
                </li>
                <li class="header-navigation-list-item">
                    <a class="header-navigation-list-link" href="#skills">
                        <span class="header-navigation-list-text">Skills</span>
                        <i class="header-navigation-list-arrow fa-solid fa-arrow-right"></i>
                        <!-- <svg class="header-navigation-list-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg> -->
                    </a>
                </li>
                <li class="header-navigation-list-item">
                    <a class="header-navigation-list-link" href="#projects">
                        <span class="header-navigation-list-text">Projects</span>
                        <i class="header-navigation-list-arrow fa-solid fa-arrow-right"></i>
                        <!-- <svg class="header-navigation-list-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg> -->
                    </a>
                </li>
                <li class="header-navigation-list-item">
                    <a class="header-navigation-list-link" href="#experience">
                        <!-- <span class="header-navigation-list-text">Qualifications and Work Experience</span> -->
                        <span class="header-navigation-list-text">Experience</span>
                        <i class="header-navigation-list-arrow fa-solid fa-arrow-right"></i>
                        <!-- <svg class="header-navigation-list-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.<path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg> -->
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!--
        - Desktop: 1500+
        - Laptop: 1000 - 1500
        - Tablet: 500 - 1000
        - Mobile: < 500
    -->

    <main>
        <section class="main-section-group">
            <section id="about" class="main-section">
                <h2 class="main-section-heading">About Me</h2>

                <article id="about-content">
                    <p class="about-paragraph">
                        <!-- Pokem ipsum dolor sit amet Elite Four Arbok Grotle
                        Mandibuzz Cleffa Drowzee. Dark Tepig Rare Candy Ekans
                        Woobat gym Landorus. Dark Crobat Aipom Kanto Zubat Zorua
                        Tentacruel. Duis aute irure dolor in reprehenderit in
                        voluptate Roselia Croconaw Cacturne Keldeo Vulpix
                        Bonsly. Lavender Town Growlithe Bubble Body Slam Voltorb
                        Lugia Swellow -->
                        I am a computer science graduate who specialises in
                        software engineering. I build web applications that {
                        assist users in carrying out their daily life?
                        }.
                    </p>

                    <p class="about-paragraph">
                        { What kind of applications to you make? }
                    </p>

                    <p class="about-paragraph">
                        <!-- Steel Bonsly Misty Simipour Psychic Cobalion Seviper.
                        Hydro Pump Unown Carnivine Snover Raticate Mewtwo
                        Strikes Back Sandshrew. Silver Togepi Stoutland
                        Marshtomp Watchog Chikorita Octillery. Vine Whip
                        Ludicolo Samurott Zorua Tail Whip the enemy Pokemon
                        fainted Rotom. Cascade Badge Farfetch'd Sableye
                        Combusken Zephyr Badge Lillipup Zekrom.  -->
                        Outside of programming, I enjoy reading, playing the
                        piano, and ???. { One more sentence. Online community? }
                    </p>
                </article>
            </section>
            <section id="skills" class="main-section">
                <h2 class="main-section-heading">Skills</h2>

                <section id="skills-categories">
                    <article class="skills-category">
                        <h3 class="skills-category-heading">
                            <i class="fa-solid fa-code skills-category-icon"></i>
                            Languages
                        </h3>
                        
                        <ul class="skills-category-list">
                            <li class="skills-category-list-item skills-languages">HTML</li>
                            <li class="skills-category-list-item skills-languages">CSS</li>
                            <li class="skills-category-list-item skills-languages">JavaScript</li>
                            <li class="skills-category-list-item skills-languages">PHP</li>
                            <li class="skills-category-list-item skills-languages">MySQL</li>
                            <li class="skills-category-list-item skills-languages">Java</li>
                            <li class="skills-category-list-item skills-languages">Python</li>
                            <li class="skills-category-list-item skills-languages">C++</li>
                            <li class="skills-category-list-item skills-languages">Linux</li>
                        </ul>
                    </article>
                    <article class="skills-category">
                        <h3 class="skills-category-heading">
                            <i class="fa-solid fa-book skills-category-icon"></i>
                            Frameworks and Libraries
                        </h3>
                        <!-- Packages? -->
                        
                        <ul class="skills-category-list">
                            <li class="skills-category-list-item skills-frameworks">React</li>
                            <li class="skills-category-list-item skills-frameworks">NodeJS</li>
                            <li class="skills-category-list-item skills-frameworks">ExpressJS</li>
                            <li class="skills-category-list-item skills-frameworks">Spring Boot</li>
                            <li class="skills-category-list-item skills-frameworks">Tailwind</li>
                        </ul>
                    </article>
                    <article class="skills-category">
                        <h3 class="skills-category-heading">
                            <i class="fa-solid fa-wrench skills-category-icon"></i>
                            Tools
                        </h3>

                        <ul class="skills-category-list">
                            <li class="skills-category-list-item skills-tools">Visual Studio Code</li>
                            <li class="skills-category-list-item skills-tools">Intellij</li>
                            <li class="skills-category-list-item skills-tools">Terminal</li>
                            <li class="skills-category-list-item skills-tools">Git</li>
                            <li class="skills-category-list-item skills-tools">GitHub</li>
                            <li class="skills-category-list-item skills-tools">Jira</li>
                        </ul>
                    </article>
                </section>
            </section>
        </section>

        <section id="projects" class="main-section">
            <h2 class="main-section-heading">Projects</h2>

            <section id="project-list">
                <article class="project">

                </article>

                <article class="project">

                </article>

                <article class="project">

                </article>

                <article class="project">

                </article>

                <article class="project">

                </article>

                <article class="project">

                </article>
            </section>
        </section>

        <section id="experience" class="main-section">
            <h2 class="main-section-heading">Experience</h2>
        </section>
    </main>

    <footer>
        <section id="external-technologies">
            <!-- <ul class="external-technologies-list">
                <li class="external-technologies-list-heading external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
            </ul>
            <ul class="external-technologies-list">
                <li class="external-technologies-list-heading external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
                <li class="external-technologies-list-item"></li>
            </ul> -->
            <ul class="external-technologies-list">
                <li class="external-technologies-list-heading external-technologies-list-item">Languages and Frameworks</li>
                <li class="external-technologies-list-item">
                    <a class="footer-link" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">
                        HTML
                    </a>
                </li>
                <li class="external-technologies-list-item">
                    <a class="footer-link" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">
                        CSS
                    </a>
                </li>
                <li class="external-technologies-list-item">
                    <a class="footer-link" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
                        JavaScript
                    </a>
                </li>
                <li class="external-technologies-list-item">
                    <a class="footer-link" href="https://www.php.net/" target="_blank">
                        PHP
                    </a>
                </li>
            </ul>
            <ul class="external-technologies-list">
                <li class="external-technologies-list-heading external-technologies-list-item">Libraries and APIs</li>
                <li class="external-technologies-list-item">
                    <a class="footer-link" href="https://fontawesome.com/" target="_blank">
                        Fontawesome
                    </a>
                </li>
                <li class="external-technologies-list-item">
                    <a class="footer-link" href="https://fonts.google.com/" target="_blank">
                        Google Fonts
                    </a>
                </li>
            </ul>
        </section>

        <section id="external-links">
            <section id="external-links-left" class="external-links-section">
                <p>Privacy Policy</p>
                <p>Terms and Conditions</p>
                <p>Cookies</p>
            </section>

            <section id="external-links-right" class="external-links-section">
                <i class="external-links-icon fa-brands fa-twitter"></i>
                <i class="external-links-icon fa-brands fa-facebook"></i>
                <i class="external-links-icon fa-brands fa-instagram"></i>
            </section>
        </section>

        <p id="copyright">
            &copy; <?php echo date("Y") ?> Lyndon Mykal Panton | All Rights Reserved
        </p>
    </footer>
</body>
</html>
