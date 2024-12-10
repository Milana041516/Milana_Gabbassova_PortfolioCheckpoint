<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/connect.php');

$query1 = 'SELECT * FROM projects, media WHERE media.projects_id = projects.id AND projects.categories_id = 2 AND projects.id ='.$_GET['id'];
$result1 = mysqli_query($connect, $query1);
$row1 = mysqli_fetch_assoc($result1);

$query2 = 'SELECT projects.id AS project, title, tools_used, project_url, url, alt_text, image_main, overview, categories_id FROM projects, media, categories WHERE media.projects_id = projects.id AND projects.categories_id = categories.id';
$result2 = mysqli_query($connect, $query2);

$projects = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
    $projects[] = $row2; 
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Case Study Motion Design</title>
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

                    <li class="contact-mobile nav-item">
                        <a href="index.php" class="nav-link">CONTACT ME</a>
                    </li>

                   
                </ul>
                </div>

                <div class="contact-tablet">
                    <a href="index.html" class="nav-link">CONTACT ME</a>
                </div>
        </nav>

        
        <div class="logo-mobile col-start-2 col-end-4">
            <img src="images/logo-mobile.svg" alt="fanshawe-logo">
        </div>
    </header>

    <main>
        <section class="projects-section-intro">
            <h2 class="hidden">Landing Page</h2>
            <video id="video" class="player" controls preload="metadata" poster="images/<?php echo $row1['image_main']; ?>">
                <source src="videos/<?php echo $row1['url']; ?>" type="video/mp4">
                <p>Ooops, something went wrong. You may be using an outdated browser or have javascript disabled.</p>
            </video>
        </div>
        </section>

        <section class="grid-con casestudy-section-motion-overview-text">
            <h2 class="hidden">Text Description</h2>
            <div class="text-info-cs col-span-full">
                <p class="title-text-cs">&lt;<?php echo $row1['title']; ?>&gt;</p>
                <p class="overview-cs text-cs"><span class="purple-text">Project Overview:</span> <?php echo $row1['overview']; ?></p>
                <p class="role-cs text-cs"><span class="purple-text">Role & Contribution:</span> <?php echo $row1['role']; ?></p>
                <p class="process-cs text-cs"><span class="purple-text">Process:</span><?php echo $row1['process']; ?></p>
                <p class="challenge-cs text-cs"><span class="purple-text">Challenge:</span><?php echo $row1['challenges']; ?></p>
                <p class="tools-cs text-cs"><span class="purple-text">Tools used:</span><?php echo $row1['tools_used']; ?></p>
                <p class="result-cs text-cs"><span class="purple-text">Final Result:</span> <?php echo $row1['result']; ?></p>
            </div>
        </section>

        <section class="grid-con casestudy-section-scroll">
            <h2 class="hidden">Slider with more projects</h2>
            <div class="col-span-full container-projects">
                <div class="scroll">
                    <div class="right-to-left">
                        <p>MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS MORE INTERESTING PROJECTS</p>
                    </div>
                </div>
            </div>


        </section>

        <section class="grid-con casestudy-section-slider">
            <h2 class="hidden">Slider with project cards</h2>
            <div class="slider-wrapper col-span-full">
                <div id="carousel-container" class="relative">
                    <button class="slider-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                      </button>

                      <?php
                      foreach ($projects as $row2) {
                     if($row2['categories_id'] == 1) {

                        echo '<div class="project-card">
                        <div class="project-card-image"><img src="images/'.$row2['image_main'].'" alt="'.$row2['alt_text'].'"></div>
                        <div class="project-card-tools">
                            <p class="tool">HTML</p>
                            <p class="tool">CSS</p>
                            <p class="tool">JavaScript</p>
                        </div>
                        <div class="project-card-name">'.$row2['title'].'</div>
                        <div class="project-card-buttons">
                            <div class="white-button"><a href="'.$row2['project_url'].'">VIEW PROJECT</a></div>
                            <div class="black-button"><a href="href="cs-webdev.php?id='.$row2['project'].'">VIEW DETAILS</a></div>
                        </div>
                    </div>';
                    } elseif ($row2['categories_id'] == 2) {
                        echo '<div class="project-card">
                            <div class="project-card-image"><img src="images/'.$row2['image_main'].'" alt="'.$row2['alt_text'].'"></div>
                            <div class="project-card-tools">
                              <p class="tool">After Effects</p>
                              <p class="tool">Cinema 4D</p>
                              <p class="tool">Blender</p>
                            </div>
                            <h2 class="project-card-name">'.$row2['title'].'</h2>
                            <div class="project-card-buttons">
                              <div class="black-button"><a href="cs-motion.php?id='.$row2['project'].'">VIEW DETAILS</a></div>
                            </div>
                      </div>';
                      }
                      }
                      ?>

                    <button class="slider-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                      </button>
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

            <div class="button-footer black-button"><a href="index.php">CONTACT ME</a></div>


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