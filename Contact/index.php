<?php

/**
 *
 * Portfolio FILE
 *
 **/

include '../header.php';
?>


    <div class="container">
        <h1 id="contact-page" class="header it">Contact</h1>
        <div class="row">
            <div class="col-12">
                <div class="card card-shadow">
                    <h2>Tell Me What You Think</h2>
                    <p>Feel free to send me a message and I'll try and get back to you ASAP</p>
                    <div class="">
                        <form>
                            <div class="row">
                                <div class="col-1-sm">
                                    <label>Name</label>
                                </div>
                                <div class="col-11-sm">
                                    <input class="search" type="text" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-sm">
                                    <label>Email</label>
                                </div>
                                <div class="col-11-sm">
                                    <input class="search" type="text" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-sm">
                                    <label>Email</label>
                                </div>
                                <div class="col-11-sm">
                                    <textarea class="search" type="text" ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1-sm"></div>
                                <div class="col-11-sm">
                                <button type="submit" class="button" id="sendEmail">Send</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

include '../footer.php';

?>