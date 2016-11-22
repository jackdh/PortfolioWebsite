<?php


?>

<footer id="footer">
    <div class="footer-inner">
        <h1 class="footer-brand brand">
            <a class="" href="/index.php">Jackdh</a>
        </h1>
        <div class="row">
            <div class="col-6 footer-info">
                Welcome to my test portfolio website. I hope you enjoy browsing my previous projects. If you have any
                questions please contact me!
            </div>
            <div class="col-6">
                <nav role="navigation" class="footer-nav">
                    <ul>
                        <li class="#"><a href="/">Login</a></li>
                        <li><a href="https://github.com/jackdh">Github</a></li>
                        <li><a href="Contact">Contact</a></li>
                        <li><a href="https://www.facebook.com/Jack.DalrympleHamilton?">Facebook</a></li>
                        <li><a href="#">Google Plus</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <div class="copywrite">
        <div class="copywrite-inner">
            <div>
                Disclaimer: This site has been constructed as coursework for module U08054 Web Technology, at Oxford Brookes University.  It is not a working website and is not connected with any site or individual referenced.
                The views and opinions expressed within these pages are personal and should not be construed as reflecting the views and opinions of Oxford Brookes University.
            </div>
        </div>
    </div>
</footer>


<!-- Tries to use the CDN as this is more efficient due to being able to use a possible cached version.-->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- If the CDN does not work then load Jquery locally.-->
<script>window.jQuery || document.write('<script src="<?php echo BASE_URL ?>js/jquery-3.1.1.min.js"><\/script>')</script>
<script src="<?php echo BASE_URL ?>js/main.js"></script>
</body>
</html>
