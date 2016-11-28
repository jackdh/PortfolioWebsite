<?php

/**
 *
 * Portfolio FILE
 *
 **/

include '../header.php';
?>


    <div class="wrapper">
        <h1 id="portfolio-page" class="header">Portfolio</h1>

        <div class="row">
            <main class="col-8">
                <!--    Using Jquery this will be auto populated from the JSON database.    -->
                <div class="row content-wrapper">

                </div>
                <div class="clear-fix">
                    <button class="button" id="portfolio-load-next">Next</button>
                </div>
            </main>

            <aside class="col-4">
                <div class="aside-inner">
                    <h2>About</h2>
                    <p>Welcome to my portfolio page!.</p>
                    <p>This is the page that I will occasionally update with project that I have worked on and
                        released.</p>
                    <label for="search">Search</label>
                    <input id="search" type="search"/>
                </div>
            </aside>
        </div>

    </div>

    <!--    Template JQuery will clone and populate -->
    <div id="portfolio-template">
        <div class="col-6 portfolio-template">
            <div class="card ">
                <div class="image-wrapper">
                    <img class="cover-img" src="">
                </div>
                <div class="text-wrapper">
                    <h2 class="title"></h2>
                    <div class="meta"></div>
                    <blockquote class="excerpt"></blockquote>
                    <button class="button read">Read</button>
                </div>
            </div>
        </div>
    </div>

    <button id="myBtn">Open Modal</button>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="row">
                <div class="col-6 featured-media">
                    <div>
                        <img class="cover-img" src="https://placehold.it/400x247">
                    </div>
                    <div class="portfolio-controls">
                        <button class="button previous">Previous</button>
                        <button class="button next">Next</button>
                    </div>

                </div>
                <div class="col-6">
                    <h2>Angel Hack</h2>
                    <div class="meta">20th Oct 2016</div>
                    <article>THis is an artcile this is just random information that I have typed out while not paying attention to Rachel in SPM as guess what I too can just read from the slide, where is the value added for the money taht I am paying for this.</article>
                </div>
            </div>
        </div>
    </div>

<?php

include '../footer.php';

?>