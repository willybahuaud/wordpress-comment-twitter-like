jQuery(document).ready(function($){
    //ARRAY OF AUTHORS
    var ctlAuthors = new Array;
    $('.ctl-author').each(function(){
        ctlAuthors.push('@' + $(this).attr('data-name'));
    });

    //ADD AUTOSUGGEST
    $('#comment').on('keypress',function(e){
        console.log(e);
    });
});