jQuery(document).ready(function() {

    var textArray = ["foo","bar","blah1","blah2"];
    var index = 0;
    setInterval(function(){        
    $("#changeText").animate({
    opacity:0
    },function()
    {
        if(textArray.length > index) {
        $(this).text(textArray[index]).animate({opacity:1})
        index++; 
        }
        else
        index = 0;
    });
    },2000);
});
