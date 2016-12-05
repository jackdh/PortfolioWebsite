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
        <div class="row item card card-shadow">
            <div class="col-2 cover-photo">
                <img class="cover-img responsive-img" src="https://placehold.it/150x150" alt="Template image">
            </div>
            <div class="col-10">
                <div class="info">
                    <h2 class="title">Template Heading</h2>
                    <div class="meta">Template Meta</div>
                    <blockquote class="excerpt">Template Meta</blockquote>
<!--                    I've used display non as a style tag due to the manipulation of this by JQuery. This makes sure it starts hidden with or without JQuery loading. Headings within will be added from the JSON database.-->
                    <article class="article" style="display: none">
                        <div class="article-inner">
                            <h2>Article</h2>
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