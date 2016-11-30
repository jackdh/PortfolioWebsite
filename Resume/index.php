<?php

/**
 *
 * RESUME FILE
 *
 **/

include '../header.php';
?>


    <div id="resume-page" class="container">
        <h1  class="header">Resume</h1>

        <div class="row">
            <main class="col-12 top-section">
                <div class="col-6">
                    <div class="row card">
                        <div class="col-4 image">
                            <img class="responsive-img" src="https://placehold.it/150x150" / >
                        </div>
                        <div class="col-8 details">
                            <div class="content">
                            <h2 class="title">JACK DALRYMPLE HAMILTON</h2>
                            <p class="sub-title">Computer Scientist in training</p>
                            <p class="info">Welcome! If you would like any other information please do not hesitate to <a href="<?php echo BASE_URL ?>Contact">contact me!</a></p>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row card">
                        <div class="col-4">
                            <img class="responsive-img" src="https://placehold.it/150x150" / >
                        </div>
                        <div class="col-8 details">
                            <div class="content">
                            <h2 class="title">DOWNLOAD</h2>
                            <p class="sub-title">Please feel free to download a copy of my resume as a PDF.</p>
                                <form method="get" action="Resume.pdf">
                                    <button class="button" >Download</button>
                                </form>
                        </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>

    </div>


<?php

include '../footer.php';

?>