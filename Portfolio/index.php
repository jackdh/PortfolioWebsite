<?php

/**
 *
 * Portfolio FILE
 *
 **/

include '../header.php';
?>


    <div class="container">
        <h1 id="portfolio-page" class="header">Portfolio</h1>

        <div class="row">
            <main class="col-8-lg">
                <!--    Using Jquery this will be auto populated from the JSON database.    -->
                <div class="row content-wrapper">

                </div>
                <div class="clear-fix">
                    <button class="button" id="portfolio-load-next">Next</button>
                </div>
            </main>

            <aside class="col-4-lg">
                <div class="aside-inner">
                    <h2>About</h2>
                    <p>Welcome to my portfolio page!.</p>
                    <p>This is the page that I will occasionally update with project that I have worked on and
                        released.</p>
                    <form class="search-form">
                        <label for="portfolio-search">Search</label>
                        <input name="searchRequest" id="portfolio-search" class="search" type="search"/>
                        <button type="submit" class="button" id="search-button">Search!</button>
                    </form>
                </div>
            </aside>
        </div>

    </div>

    <!--    Template JQuery will clone and populate -->
    <div id="portfolio-template">
        <div class="col-6 portfolio-template">
            <div class="card card-shadow">
                <div class="image-wrapper">
                    <img alt="This the template image cover for portfolio posts and will be replaced." class="cover-img" src="placehold.it/300x300">
                </div>
                <div class="text-wrapper">
                    <h2 class="title">Template</h2>
                    <div class="meta">Template</div>
                    <blockquote class="excerpt">Template</blockquote>
                    <button class="button read">Read</button>
                </div>
            </div>
        </div>
    </div>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="row">
                <div class="col-4-lg featured-media">
                    <div class="img-controls">
                        <img alt="Template cover image, this will be replaced." class="single-cover-img responsive-img" src="placehold.it/300x300">
                        <div class="portfolio-controls">
                            <button data-target="" class="button previous move">Previous</button>
                            <button data-target="" class="button next move">Next</button>
                        </div>
                    </div>


                </div>
                <div class="col-8-lg">
                    <article class="">
                        <h2 class="single-title">Title</h2>
                        <div class="meta single-meta">Meta</div>
                        <div class="single-article"></div>
                    </article>
                </div>
            </div>
        </div>
    </div>

<?php

include '../footer.php';

?>