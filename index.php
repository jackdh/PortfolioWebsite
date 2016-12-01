<?php

include 'header.php';

?>

    <div class="container">
        <div class="hero">
            <div class="hero-inner">
                Welcome to my portfolio website. Use the links at the top to navigate or check out some of my featured
                posts
                below
            </div>
        </div>

        <div class="featured-items">
            <div class="row">
                <div class="col-4">
                    <div class="image-wrapper">
                        <img alt="featured image of portfolio post 1" src="images/java-square.jpg"/>
                        <div class="image-overlay">
                            <a href="<?php echo BASE_URL ?>Portfolio?id=1" class="button">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-wrapper">
                        <img alt="featured image of portfolio post 3" src="images/be.png"/>
                        <div class="image-overlay">
                            <a href="<?php echo BASE_URL ?>Portfolio?id=3" class="button">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-wrapper">
                        <img alt="featured image of portfolio post 0" src="images/code-square.jpg"/>
                        <div class="image-overlay">
                            <a href="<?php echo BASE_URL ?>Portfolio?id=0" class="button">Read</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

include 'footer.php';

?>