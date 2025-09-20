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

    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
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
                    </a>
                </li>
                <li class="header-navigation-list-item">
                    <a class="header-navigation-list-link" href="#skills">
                        <span class="header-navigation-list-text">Skills</span>
                        <i class="header-navigation-list-arrow fa-solid fa-arrow-right"></i>
                    </a>
                </li>
                <li class="header-navigation-list-item">
                    <a class="header-navigation-list-link" href="#projects">
                        <span class="header-navigation-list-text">Projects</span>
                        <i class="header-navigation-list-arrow fa-solid fa-arrow-right"></i>
                    </a>
                </li>
                <li class="header-navigation-list-item">
                    <a class="header-navigation-list-link" href="#experience">
                        <span class="header-navigation-list-text">Experience</span>
                        <i class="header-navigation-list-arrow fa-solid fa-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="main-section-group">
            <section id="about" class="main-section">
                <h2 class="main-section-heading">About Me</h2>

                <article id="about-content">
                    <p class="about-paragraph">
                        I am a computer science graduate who specialises in
                        software engineering. I build web applications that
                        assist users carrying out tasks quickly and hassle-free.
                        <!-- How do these apps assist users in their daily life? -->
                    </p>

                    <p class="about-paragraph">
                        <!-- What kind of applications to you make? -->
                        In my free time, I like creating small apps, solving
                        problems on Hackerrank and Leetcode, and learning about
                        different programming concepts, frameworks and
                        libraries.
                    </p>

                    <p class="about-paragraph">
                        Outside of programming, I enjoy reading, playing the
                        piano, and drawing. I also use Java and C++ for game
                        development.
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
                            <li class="skills-category-list-item skills-languages">Bash</li>
                        </ul>
                    </article>
                    <article class="skills-category">
                        <h3 class="skills-category-heading">
                            <i class="fa-solid fa-book skills-category-icon"></i>
                            Frameworks and Libraries
                        </h3>
                        
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
                    <a href="https://github.com/lyndonpanton/portfolio" target="_blank" class="project-link">
                        <h3 class="project-heading">Portfolio</h3>
                        <img class="project-image" src="./img/project-screenshot-portfolio-3.png" alt="A screenshot of one of my projects" />
                        <ul class="project-technology-list">
                            <li class="project-technology-list-item">PHP</li>
                            <li class="project-technology-list-item">CSS</li>
                            <li class="project-technology-list-item">JavaScript</li>
                        </ul>
                    </a>
                </article>

                <article class="project">
                    <a href="https://github.com/lyndonpanton/task-list" target="_blank" class="project-link">
                        <h3 class="project-heading">Task List</h3>
                        <img class="project-image" src="./img/task-list-screenshot.png" alt="A screenshot of one of my projects" />
                        <ul class="project-technology-list">
                            <li class="project-technology-list-item">PHP</li>
                            <li class="project-technology-list-item">MySQL</li>
                            <li class="project-technology-list-item">JavaScript</li>
                        </ul>
                    </a>
                </article>

                <article class="project">
                    <a href="https://github.com/lyndonpanton/word-counter" target="_blank" class="project-link">
                        <h3 class="project-heading">Word Counter</h3>
                        <img class="project-image" src="./img/word-counter-screenshot.png" alt="A screenshot of one of my projects" />
                        <ul class="project-technology-list">
                            <li class="project-technology-list-item">PHP</li>
                            <li class="project-technology-list-item">CSS</li>
                            <li class="project-technology-list-item">JavaScript</li>
                        </ul>
                    </a>
                </article>

                <article class="project">
                    <a href="https://github.com/lyndonpanton/currency-converter" target="_blank" class="project-link">
                        <h3 class="project-heading">Currency Converter</h3>
                        <img class="project-image" src="./img/currency-converter-screenshot.png" alt="A screenshot of one of my projects" />
                        <ul class="project-technology-list">
                            <li class="project-technology-list-item">PHP</li>
                            <li class="project-technology-list-item">CSS</li>
                            <li class="project-technology-list-item">JavaScript</li>
                        </ul>
                    </a>
                </article>

                <article class="project">
                    <a href="https://github.com/lyndonpanton/pixel-art-editor" target="_blank" class="project-link">
                        <h3 class="project-heading">Pixel Art Editor</h3>
                        <img class="project-image" src="./img/pixel-art-editor-screenshot.png" alt="A screenshot of one of my projects" />
                        <ul class="project-technology-list">
                            <li class="project-technology-list-item">HTML</li>
                            <li class="project-technology-list-item">CSS</li>
                            <li class="project-technology-list-item">JavaScript</li>
                        </ul>
                    </a>
                </article>

                <article class="project">
                    <a href="https://github.com/lyndonpanton/weather-app" target="_blank" class="project-link">
                        <h3 class="project-heading">Weather App</h3>
                        <img class="project-image" src="./img/weather-app-screenshot.png" alt="A screenshot of one of my projects" />
                        <ul class="project-technology-list">
                            <li class="project-technology-list-item">CSS</li>
                            <li class="project-technology-list-item">JavaScript</li>
                            <li class="project-technology-list-item">Webpack</li>
                        </ul>
                    </a>
                </article>

                <article class="project">
                    <a href="https://github.com/lyndonpanton/recursion" target="_blank" class="project-link">
                        <h3 class="project-heading">Recursion</h3>
                        <img class="project-image" src="./img/recursion-screenshot.png" alt="A screenshot of one of my projects" />
                        <ul class="project-technology-list">
                            <li class="project-technology-list-item">CSS</li>
                            <li class="project-technology-list-item">JavaScript</li>
                            <li class="project-technology-list-item">Webpack</li>
                        </ul>
                    </a>
                </article>
            </section>
        </section>

        <section id="experience" class="main-section">
            <h2 class="main-section-heading">Experience</h2>
            
            <section id="experience-list">
                <article class="experience-item">
                    <section class="experience-item-section experience-item-left">
                        <img class="experience-logo" src="./img/university-of-essex.svg" alt="Logo of organisation I gained experience at" />
                    </section>

                    <section class="experience-item-section experience-item-right">
                        <h3 class="experience-role">BSc Computer Science</h3>
                        <h4 class="experience-company">University of Essex</h4>
                        <p class="experience-date">Oct '20 - July '24</p>
                    </section>
                </article>

                <article class="experience-item">
                    <section class="experience-item-section experience-item-left">
                        <!-- Credits: https://unsplash.com/photos/a-white-pot-with-a-black-handle-hwNVu64mgiE -->
                        <img class="experience-logo" src="./img/vr-headset.jpg" alt="Logo of organisation I gained experience at" title="Credits: https://unsplash.com/@mediamodifier" />
                    </section>

                    <section class="experience-item-section experience-item-right">
                        <h3 class="experience-role">VR Intern</h3>
                        <h4 class="experience-company">Future Health Tech</h4>
                        <p class="experience-date">Jan '24 - March '24</p>
                    </section>
                </article>
            </section>
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
