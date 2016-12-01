<?php

/**
 *
 * RESUME FILE
 *
 **/

include '../header.php';
?>


    <div id="resume-page" class="container">
        <h1 class="header">Resume</h1>

        <div class="row">
            <main class="col-12 top-section">
                <div class="col-6-lg">
                    <div class="row card card-shadow">
                        <div class="col-4-sm image">
                            <img alt="Image of the Author, Jack DH" class="responsive-img" src="../images/me.jpg" / >
                        </div>
                        <div class="col-8-sm details">
                            <div class="content">
                                <h2 class="title">JACK DALRYMPLE HAMILTON</h2>
                                <p class="sub-title">Computer Scientist in training</p>
                                <p class="info">Welcome! If you would like any other information please do not hesitate
                                    to <a href="<?php echo BASE_URL ?>Contact">contact me!</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6-lg">
                    <div class="row card card-shadow">
                        <div class="col-4-sm">
                            <img alt="Image of a download arrow icon" class="responsive-img" src="../images/download.png" / >
                        </div>
                        <div class="col-8-sm details">
                            <div class="content">
                                <h2 class="title">DOWNLOAD</h2>
                                <p class="sub-title">Please feel free to download a copy of my resume as a PDF.</p>
                                <form method="get" action="Resume.pdf">
                                    <button class="button">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <div class="row bottom-section">
            <div class="col-4">
                <div class="card card-shadow">
                    <div class="card-inner">
                        <h2 class="title">Education</h2>
                        <div class="body">
                            <h3>GCSE</h3>
                            <div class="clear-fix">
                                <p class="align-left">Cheltenham College</p>
                                <p class="align-right">2007-2010</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left italic">8 GCSE's</p>
                            </div>

                            <h3>A-Level</h3>
                            <div class="clear-fix">
                                <p class="align-left">Cirencester College</p>
                                <p class="align-right">2010-2012</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left italic">Maths, History, Business Studies</p>
                            </div>
                            <h3>Bachelor Degree</h3>
                            <div class="clear-fix">
                                <p class="align-left">Oxford Brookes </p>
                                <p class="align-right">2012-2017</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left italic">Computer Science</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div class="card card-shadow">
                    <div class="card-inner">
                        <h2 class="title">Work Education</h2>
                        <div class="body">
                            <h3>Accenture</h3>
                            <div class="clear-fix">
                                <p class="align-left">Associate Software</p>
                                <p class="align-right">2015-2016</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left">Developer</p>
                            </div>

                            <div class="clear-fix">
                                <p class="align-left">Technical Architecture</p>
                                <p class="align-right">2017-2019</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-shadow">
                    <div class="card-inner">
                        <h2 class="title">Skills</h2>
                        <div class="body">
                            <h3>Web Development</h3>
                            <div class="clear-fix">
                                <p class="align-left">HTML/CSS</p>
                                <p class="align-right">5 Years</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left">Javascript</p>
                                <p class="align-right">5 Years</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left">PHP</p>
                                <p class="align-right">3 Years</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left">Ruby</p>
                                <p class="align-right">1 Years</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left">AngularJS</p>
                                <p class="align-right">1 Years</p>
                            </div>
                            <h3>Backend Development</h3>
                            <div class="clear-fix">
                                <p class="align-left">Java</p>
                                <p class="align-right">6 Years</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left">Python</p>
                                <p class="align-right">4 Years</p>
                            </div>
                            <div class="clear-fix">
                                <p class="align-left">SQL</p>
                                <p class="align-right">4 Years</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

include '../footer.php';

?>