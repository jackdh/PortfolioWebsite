<?php

/**
 *
 * BLOG FILE
 *
 **/

include '../header.php';
?>


    <div class="container">
        <h1 id="blog-title" class="header">Blog</h1>

        <main class="content-wrapper">

        </main>

        <div class="clear-fix">
            <button class="button" id="blog-load-next">Next</button>
        </div>


    </div>

    <div id="blog-template">
        <div id="" class="row item card card-shadow">
            <div class="col-2 cover-photo">
                <img class="cover-img responsive-img" src="" alt="">
            </div>
            <div class="col-10">
                <div class="info">
                    <h2 class="title"></h2>
                    <div class="meta"></div>
                    <blockquote class="excerpt"></blockquote>
                    <article class="article" style="display: none">
                        <div class="article-inner">

                        </div>
                        <div class="comments-wrapper">
                            <a class="comments-button">Click to expand comments. (5)</a></div>
                    </article>
                    <a class="read-more" data-post="" data-expanded="false">Click to read more.</a>
                </div>
            </div>
        </div>
    </div>


<?php

include '../footer.php';

?>