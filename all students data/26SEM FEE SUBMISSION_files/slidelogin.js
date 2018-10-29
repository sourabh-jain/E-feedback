 
 $(document).ready(function() 
    {
    $('.panel').animate({ marginTop: '-' + $('.panel').outerHeight() + 'px' });
        $('.panel').hide();
    }); 

$(function () {
$( '#Login' ).click(function ()
{
var user = document.getElementById('mydiv');
user.style.visibility = 'visible';
if ($('.panel').is(':hidden'))
 {
$('.panel').show();
$('.panel').animate({ marginTop: '0px' });
return false;
}
else 
{
$('.panel').animate({ marginTop: '-' + $('.panel').outerHeight() + 'px' },
 function ()
  {
$('.panel').hide();
});
}
});
});





$(function () {
$(document ).click(function ()
{
    var user = document.getElementById('mydiv');
    user.style.visibility = 'visible';
    if ($('.panel').is(':hidden'))
    {
        /*$('.panel').show();
        $('.panel').animate({ marginTop: '0px' });*/
    }
    else 
    {
        $('.panel').animate({ marginTop: '-' + $('.panel').outerHeight() + 'px' },
        function ()
        {
            $('.panel').hide();
        });
    }

});
});







$(function () {
$( '#btnclose' ).click(function ()
{
var user = document.getElementById('mydiv');
user.style.visibility = 'visible';
if ($('.panel').is(':hidden'))
 {
$('.panel').show();
$('.panel').animate({ marginTop: '0px' });
}
else 
{
$('.panel').animate({ marginTop: '-' + $('.panel').outerHeight() + 'px' },
 function ()
  {
$('.panel').hide();
});
}
});
});



 function badBrowser()
 {
    //IE ab ver. 6.0
    if($.browser.msie && parseInt($.browser.version) <= 6)
    {
    window.location.href("/Portal/frmBrowser.aspx"); 
    return true;
    }                  
    //Opera ab ver. 9.5
    if($.browser.opera && ($.browser.version *10) <= 95) 
    { 
    window.location.href("/Portal/frmBrowser.aspx"); 
    return true;
    }              

  if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)){
    var ffversion=new Number(RegExp.$1)
     //Firefox ab ver. 2.0
    if (ffversion<=2) 
    {
       window.location.href("/Portal/frmBrowser.aspx"); 
     return true;
     }
     }                                                  
 if($.browser.chrome && ($.browser.version) <= 20) 
    { 
    window.location.href("/Portal/frmBrowser.aspx"); 
    return true;
    }  

    if ($.browser.safari && (navigator.appVersion.indexOf("1.") != -1) ){window.location.href("/Portal/frmBrowser.aspx"); return true;}    //Safari ver. 1.0

    if ($.browser.safari && (navigator.appVersion.indexOf("3.") != -1) ){window.location.href("/Portal/frmBrowser.aspx"); return true;}    //Safari ver. 3.0

    return false;
}
