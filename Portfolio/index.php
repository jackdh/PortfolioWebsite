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
                    <h3>Search</h3>
                    <input type="search"/>
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
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">×</span>
                <h2>Modal Header</h2>
            </div>
            <div class="modal-body">
                <p>Some text in the Modal Body</p>
                <p>Some other text...</p>
            </div>
            <div class="modal-footer">
                <h3>Modal Footer</h3>
            </div>
        </div>
    </div>

<?php

include '../footer.php';

?>