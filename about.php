<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>About Me</title>
    <link rel="icon" href="images/logo-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
    <script defer src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script defer src="js/main.js"></script>
</head>

<body>
    <h1 class="hidden">Portfolio</h1>
    <header class="grid-con">
        <nav class="m-col-span-full navbar">
            <h2 class="hidden">Header</h2>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <a href="index.html"><img class="logo-tablet" src="images/logo-mobile.svg" alt="logo"></a>
            

                <div class="nav-menu">
                <ul>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                        <a href="projects.php" class="nav-link">PROJECTS</a>
                    </li>

                    <li class="contact-mobile nav-item contact-scroll">
                        <a href="#contact" class="nav-link">CONTACT ME</a>
                    </li>

                   
                </ul>
                </div>

                <div class="contact-tablet contact-scroll">
                    <a href="#contact" class="nav-link">CONTACT ME</a>
                </div>
        </nav>

        
        <div class="logo-mobile col-start-2 col-end-4">
            <img src="images/logo-mobile.svg" alt="fanshawe-logo">
        </div>
    </header>

    <main>
        <section class="grid-con about-section-intro">
            <h2 class="hidden">Landing Page</h2>
            <div class="col-span-full m-col-span-full text-intro-main">
                <p>Hi, I am <span class="purple-text">Milana</span>,<br>
                Want to learn more about me?<br>
                Let's explore together!</p>
                <p class="basic-text t-intro">Let me introduce myself! Here, you'll get to know about my skills, education, experiences, and the journey that shaped me as a frontend developer. Let's take a closer look!</p>
            </div>
        </section>

        <section class="grid-con about-section-info">

            <div class="info-about col-span-full m-col-start-1 m-col-end-8 m-row-start-1 m-row-end-4">
                <p class="big-text-about">&lt;About Me&gt;</p>
                <p class="basic-text">I'm a <span class="purple-text">front-end enthusiast passionate</span> about building responsive, user-friendly websites with modern technologies, and I love incorporating <span class="purple-text">3D elements</span> into web projects to create visually dynamic experiences. As a recent graduate of the <span class="purple-text">Interactive Media Design program</span> at Fanshawe College, I honed my skills in web development and 3D design. When I'm not coding, I enjoy experimenting with digital art and exploring the latest design trends. I'm <span class="purple-text">always learning</span> and diving into new tools and technologies to keep my work <span class="purple-text">fresh and innovative.</span></p>
            </div>

            <div class="info-picture col-span-full m-col-start-8 m-col-end-13 m-row-start-1 m-row-end-2">
                <p class="big-text-about">&lt;My Picture&gt;</p>
                <img src="images/my-picture.png" alt="my picture">
            </div>

            <div class="info-socials col-span-full m-col-start-8 m-col-end-13 m-row-start-2 m-row-end-3">
                <p class="big-text-about">&lt;Social Medias&gt;</p>
                <div class="social-medias">
                    <img src="images/instagram.svg" alt="instagram">
                    <img src="images/github.svg" alt="github">
                    <img src="images/linkedin.svg" alt="linkedin">
                    <img src="images/behance.svg" alt="behance">
                </div>
            </div>

            <div class="info-education col-span-full m-col-start-1 m-col-end-6 m-row-start-4 m-row-end-5">
                <p class="big-text-about">&lt;Education&gt;</p>
                <p class="basic-text">Fanshawe College</p>
            </div>

            <div class="info-location col-span-full m-col-start-6 m-col-end-13 m-row-start-4 m-row-end-5">
                <p class="big-text-about">&lt;Location&gt;</p>
                <p class="basic-text">Currently based in London, ON, Canada</p>
            </div>

            <div class="info-why-frontend col-span-full">
                <p class="big-text-about">&lt;Why Front-End Development?&gt;</p>
                <p class="basic-text">I've always been fascinated by how things work, and <span class="purple-text">front-end development</span> lets me bring my ideas to life in a way that feels both creative and practical. I genuinely <span class="purple-text">enjoy</span> the process of building websites—watching a concept evolve into something <span class="purple-text">interactive</span> and <span class="purple-text">user-friendly</span> is incredibly rewarding. What really excites me is the constant challenge and the opportunity to keep <span class="purple-text">learning</span> and <span class="purple-text">improving</span> with every project.</p>
            </div>

            <div class="info-skills col-span-full">
                <p class="big-text-about">&lt;Skills/Tools&gt;</p>
                <img class="skills-mobile" src="images/skills-tools-mobile.svg" alt="skills">
                <img class="skills-tablet-desktop" src="images/skills-tools-tablet-desktop.png" alt="skills">
            </div>

        </section>

        


        <section id="contact" class="grid-con section-contact">
            <h2 class="hidden">Contact me</h2>
            <div class="col-span-full heading"><p>CONTACT ME</p></div>

            <div class="text-contact col-span-full l-col-start-1 l-col-end-6">
                <p class="purple-text-contact">&lt;Let's Collaborate&gt;</p>
                <p class="basic-text-contact">As a <span class="highlighted-text">front-end developer</span> with a passion for integrating <span class="highlighted-text">3D design</span>, I'm always excited to take on new challenges. Whether you're looking to bring your ideas to life on the web or enhance your digital experience, <span class="highlighted-text">feel free to reach out</span>—let's create something <span class="highlighted-text">innovative</span> together.</p>
           </div>

            <div class="col-span-full phone-email-contact">
                <div class="phone">
                    <img src="images/phone-icon.svg" alt="phone-icon">
                    <p class="purple-text-pe">&lt;+1 (548) 881 4541&gt;</p>
                </div>

                <div class="email">
                    <img src="images/mail-icon.svg" alt="mail-icon">
                    <p class="purple-text-pe">&lt;milana15.10.05@gmail.com&gt;</p>
                </div>
            </div>

            <div class="form-contact col-span-full l-col-start-6 l-col-end-13">
            <form method="post" action="sendmail.php" class="col-span-full order-form-inputs">
                <input type="text" name="fname" placeholder="First name" id="fname">
                <input type="text" name="lname" placeholder="Last name" id="lname">
                <input type="text" name="email" placeholder="Email" id="email">
                <textarea name="message" placeholder="Message" id="message"></textarea>
                <button type="submit" class="submit-button" id="submit-action">SUBMIT</button>
            </form>

            <div class="col-span-full button-social">

                <div class="social-medias">
                    <img src="images/instagram.svg" alt="instagram">
                    <img src="images/github.svg" alt="github">
                    <img src="images/linkedin.svg" alt="linkedin">
                    <img src="images/behance.svg" alt="behance">
                </div>
            </div>
        </div>
           
        </section>

        <div class="ball-blur"></div>

    </main>

    
    
    <footer class="grid-con section-footer">
        <h2 class="hidden">Footer</h2>
        <div class="col-span-full logo-footer"><img src="images/logo-mobile.svg" alt="logo-footer"></div>
        <div class="col-span-full nav-menu-footer">
            <ul>
                <li class="nav-item-footer">
                    <a href="index.php" class="nav-link-footer">HOME</a>
                </li>
                <li class="nav-item-footer">
                    <a href="about.php" class="nav-link-footer">ABOUT ME</a>
                </li>
                <li class="nav-item-footer">
                    <a href="projects.php" class="nav-link-footer">PROJECTS</a>
                </li>
            </ul>
        </div>

        <div class="col-span-full contact-social-footer">

            <div class="contact-scroll button-footer black-button"><a href="#contact">CONTACT ME</a></div>

            <div class="social-medias-footer">
                <img src="images/instagram.svg" alt="instagram">
                <img src="images/github.svg" alt="github">
                <img src="images/linkedin.svg" alt="linkedin">
                <img src="images/behance.svg" alt="behance">
            </div>

        </div>

            <div class="col-span-full"><p class="copyright-text">© 2024 Milana Gabbassova</p></div>
     </footer>
</body>

</html>