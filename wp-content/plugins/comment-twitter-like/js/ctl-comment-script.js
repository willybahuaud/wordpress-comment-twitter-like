jQuery(document).ready(function($){
    //ADD AUTOSUGGEST
    var customItemTemplate = "<div><span />&nbsp;<small /></div>";

    function elementFactory(element, e) {
        var template = $(customItemTemplate).find('span')
                                            .text('@' + e.val).end()
                                            .find('small')
                                            .text("(" + (e.meta || e.val) + ")").end();
        element.append(template);
    };

    $comment = $('#comment');
    $comment.sew({values: ctlAuthors, elementFactory: elementFactory});

    //SCROLL TO LAST COMMS
    $('.ctl-button').on('click',function(){
        var $prev = $('.author[data-name="' + $(this).attr('data-cible') +'"]:eq(0)');

        $('body,html').animate({scrollTop:$prev.offset().top}, 200);
    });
});