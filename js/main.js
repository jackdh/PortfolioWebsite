
/***
 *
 * Blog
 *
 * */



var allPosts;
$.getJSON("../Blog/blogPosts.json", function(json) {
    var test = $(".item");
    allPosts = json;
    $.each(json, function(i, item) {
        var $template = test.clone();
        $template.attr("id", "blog-"+i);
        $template.find('.read-more').attr("data-post", i);
        $template.find('.excerpt').html(generateExcerpt(item.post));
        $template.find('.meta').html(item.meta);
        $template.find('.title').html(item.title);
        $template.find('.cover-img').attr("src", "https://placehold.it/351x351");

        $('.content-wrapper').append($template);
    });

});

function generateExcerpt(post) {
    if (post.length > 200) {
        return post.substr(0,200).replace(/\<br\>/g," ") + "...";
    } else {
        return post;
    }
}

$("#blog-load-next").click(function() {
    // TODO implement next page.
});

$(document).on('click', '.read-more', function() {
    var button = $(this);
    var id = button.attr('data-post');
    var expanded = button.attr('data-expanded');
    var item = $("#blog-"+ id);

    if (expanded == 'false') {
        // Blog post is not expanded.
        var itemJson = allPosts[id];
        item.find('.excerpt').hide();
        item.find('.article').show();
        item.find('.article').html(itemJson.post);


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


