/***
 *
 * Footer
 *
 * */
$(document).on('click', '.footer-nav li a', function() {
    alert("Meta Links not activated");
});

/***
 *
 * Blog
 *
 * */
// Check to make sure we are on the blog page.
if ($('#blog-title').length) {

    var allPosts;
    $.getJSON("../Blog/blogPosts.json", function (json) {
        var blogTemplate = $(".item");
        allPosts = json;
        $.each(json, function (i, item) {
            var $template = blogTemplate.clone();
            $template.attr("id", "blog-" + i);
            $template.find('.read-more').attr("data-post", i);
            $template.find('.excerpt').html(generateExcerpt(item.post));
            $template.find('.meta').html(item.meta);
            $template.find('.title').html(item.title);
            $template.find('.cover-img').attr("src", item.imgLink);
            $template.find('.cover-img').attr("alt", item.imgAlt);
            $('.content-wrapper').append($template);
        });
    });

    function generateExcerpt(post) {
        if (post.length > 200) {
            return post.substr(0, 200).replace(/\<br\>/g, " ") + "...";
        } else {
            return post;
        }
    }

    $("#blog-load-next").click(function () {
        // TODO implement next page.
    });

    $(document).on('click', '.read-more', function () {
        var button = $(this);
        var id = button.attr('data-post');
        var expanded = button.attr('data-expanded');
        var item = $("#blog-" + id);

        if (expanded == 'false') {
            // Blog post is not expanded.
            var itemJson = allPosts[id];
            item.find('.excerpt').hide();
            item.find('.article').show(200, function() {

            });
            item.find('.article-inner').html(itemJson.post);


            button.attr('data-expanded', 'true');
            button.html("Click to close article");
        } else {
            // Blog post is expanded.
            item.find('.article').hide();
            item.find('.excerpt').show();


            button.attr('data-expanded', 'false');
            button.html("Click to read more");

        }
    });

    $(document).on('click', '.comments-button', function () {
        alert("Comments not implemented due to no use of backend code")
    });

    $(document).on('click', '#blog-load-next', function() {
        alert("Search not implemented");
    });

    $(document).on('click', '.cover-img', function() {
        alert("Image expansion not implemented");
    });
}

/***
 *
 * Portfolio
 *
 * */
//Check if we are on Portfolio
if ($('#portfolio-page').length) {

    var portfolioPosts;
    $.getJSON("../Portfolio/portfolioPosts.json", function (json) {
        var portfolioTemplate = $(".portfolio-template");
        portfolioPosts = json;
        $.each(json, function (i, item) {
            var $template = portfolioTemplate.clone();
            $template.attr("id", "portfolio-" + i);
            $template.find('.read').attr("data-post", i);
            $template.find('.excerpt').html(item.except);
            $template.find('.meta').html(item.meta);
            $template.find('.title').html(item.title);
            $template.find('.cover-img').attr("src", item.imgLink);
            $template.find('.cover-img').attr("alt", item.imgAlt);
            $('.content-wrapper').append($template);
            /** If id is set from home page */
            if (getParam("id") != null) {
                // If ID was set.
                console.log(getParam("id"));
                populateModal(parseInt(getParam("id")));
                $('.modal').show();

            }
        });
    });

    // When clicking Read on the project item
    $(document).on('click', '.read', function () {
        var button = $(this);
        var id = button.attr('data-post');
        var expanded = button.attr('data-expanded');
        populateModal(id);
        $('.modal').show();
    });

    // On the Next / Previous click within the model.
    $(document).on('click', ".move", function() {
        var button = $(this);
        var id = button.attr('data-target');
        populateModal(id);
    });


    // Populate the fields in the model
    function populateModal(id) {
        var itemJson = portfolioPosts[id];

        var $cover = $('.single-cover-img');
        $cover.attr('src', itemJson.imgLink);
        $cover.attr('alt', itemJson.imgAlt);
        $('.single-title').html(itemJson.title);
        $('.single-meta').html(itemJson.meta);
        $('.single-article').html(itemJson.post);

        /** Next Previous */
        // Reset
        $('.previous').show();
        $('.next').show();
        // Hide buttons if out of range.
        var idMinusOne = parseInt(id)-1;
        var idPlusOne = parseInt(id)+1;
        if (idMinusOne < 0) {
            $('.previous').hide();
        }
        if (idPlusOne >= portfolioPosts.length) {
            $('.next').hide();
        }


        $('.previous').attr('data-target', idMinusOne);
        $('.next').attr('data-target', idPlusOne);

    }


    /** Start Model */

    // Close the model by clicking off it.
    window.onclick = function(event) {
        var modal = $('.modal');
        if (event.target == modal[0]) {
            $('.modal').hide();
        }
    };

    // Close the model by clicking the X
    $(document).on('click', '.close', function() {
        $('.modal').hide();
    });

    /** End Model */

    /** given GET key will return it's value */
    function getParam(string) {
        var $_GET = {};
        document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
            function decode(s) {
                return decodeURIComponent(s.split("+").join(" "));
            }

            $_GET[decode(arguments[1])] = decode(arguments[2]);
        });
        return $_GET[string]
    }

    $(document).on('click', '#portfolio-load-next', function() {
        alert("Next page not implemented");
    });

    $(document).on('click', '#search-button', function() {
        alert("Search not implemented");
    });





}
/***
 *
 * Contact
 *
 * */
if ($('#contact-page').length) {

    $(document).on('click', '#sendEmail', function(){
        alert("Server mailing requires backend server so has not been implemented. I am aware of Mail To but decided against it.");
    });

}















