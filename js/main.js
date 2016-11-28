
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
            $template.find('.cover-img').attr("alt", item.imgSrc);
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
            $template.find('.cover-img').attr("alt", item.imgSrc);
            $('.content-wrapper').append($template);
        });
    });

    $(document).on('click', '.read', function () {
        var button = $(this);
        var id = button.attr('data-post');
        var expanded = button.attr('data-expanded');
        var item = $("#blog-" + id);

        var itemJson = portfolioPosts[id];
        $('.modal').show();

    });

    $(document).on('click', '.close', function() {
        $('.modal').hide();
    });

    /** Start Model */


    var btn = $('#myBtn');


    window.onclick = function(event) {
        var modal = $('.modal');
        if (event.target == modal[0]) {
            $('.modal').hide();
        }
    };

    /** End Model */


}
















