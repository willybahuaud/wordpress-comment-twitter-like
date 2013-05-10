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
        $('.fired').removeClass('fired');
        $('.prevent-elem').removeClass('prevent-elem');

        var cible = $(this).attr('data-cible');
        var $elems = $('.ctl-author');

        var $clui = null;

        $(this).parent('.ctl-author').addClass('fired');

        $elems.each(function(index){
            if($(this).hasClass('fired') || index == $elems.length-1){
                $clui.addClass('prevent-elem');
                $('body,html').animate({scrollTop:$clui.offset().top-200}, 200);
                return false;
            }
            if($(this).attr('data-name') == cible)
                $clui = $(this);
        });
    });
});