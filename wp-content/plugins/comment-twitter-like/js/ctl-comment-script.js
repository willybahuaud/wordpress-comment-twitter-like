jQuery(document).ready(function($){
    //ARRAY OF AUTHORS
    var ctlAuthors = new Array;
    $('.ctl-author').each(function(){
        ctlAuthors[$(this).attr('data-name')] = $(this).attr('data-real-name');
    });

    //ADD AUTOSUGGEST
    var autosuggest = false;
    var autosuggestContent = '';

    var authorsList = '<ul id="ctl-authors-list" style="position:absolute;">';
    for(ctlAuthor in ctlAuthors)
        authorsList += '<li data-key="' + ctlAuthor + '">' + ctlAuthors[ctlAuthor] + '</li>';
    authorsList += '</ul>';
    $(authorsList).appendTo($('body'));

    $('#comment').on('keypress',function(e){
        if(autosuggest == false){
            var code = (e.keyCode ? e.keyCode : e.which);
            if(code == 64) {
                autosuggest = true;
            }
        }
        if(autosuggest == true){
            var code = (e.keyCode ? e.keyCode : e.which);
            autosuggestContent += String.fromCharCode(code);
            console.log(autosuggestContent);
            if(code == 32) {
                autosuggest = false;
            }
        }
    });
});