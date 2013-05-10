jQuery(document).ready(function($){
    //ARRAY OF AUTHORS
    // var ctlAuthors = new Array;
    // $('.ctl-author').each(function(){
    //     ctlAuthors.push({val : $(this).attr('data-name'), meta : $(this).attr('data-real-name')});
    // });

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
});