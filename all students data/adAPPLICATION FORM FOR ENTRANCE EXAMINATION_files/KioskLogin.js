
      if(userName!='Guest')      
      {
       obj = document.getElementById('DivContainerUserLogin');
       obj.style.visibility = 'hidden';
       }
       else
       {
       obj = document.getElementById('DivContainerUserLogin');
       obj.style.visibility = 'visible';
       }
       
       if(Header=='orguser' || Header=='portaluser' || Header=='citizenservices')
       {
        obj = document.getElementById('BL');
        obj.style.visibility = 'hidden';
       }
       
 if(Header=='orguser' || Header=='DCOperator' || Header=='citizenservices')
       {
        obj = document.getElementById('AdminHome');
        obj.style.visibility = 'hidden';
       }
       if(Header=='portaluser')
       {
        obj = document.getElementById('AdminHome');
        obj.style.visibility = 'visible';
       }
       
       
       badBrowser();
 
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
    if (ffversion<=13) 
    {
      window.location.href("/Portal/frmBrowser.aspx"); 
     return true;
     }
     }    
     //Crome
     if ($.browser.chrome && ($.browser.version) <= 20) 
     {
      window.location.href("/Portal/frmBrowser.aspx"); 
     return true;
     }
      if ($.browser.safari && (navigator.appVersion.indexOf("1.") != -1) ){window.location.href("/Portal/frmBrowser.aspx"); return true;}    //Safari ver. 1.0
      if ($.browser.safari && (navigator.appVersion.indexOf("3.") != -1) ){window.location.href("/Portal/frmBrowser.aspx"); return true;}    //Safari ver. 3.0
      
   
    return false;
}
 if(kioskid!='kioskID')
  {
  UpdateImage();
  }
   
function UpdateImage()
{
if(kioskid=='K0799990054')
  {
   var imageElm   = document.getElementById('Kimg');
    imageElm.src = '/Quick Links/kiosk/Applicant_Photo/photo.jpg'; 
    var imageElm1   = document.getElementById('KioskImage');
    imageElm1.src = '/Quick Links/kiosk/Applicant_Photo/photo.jpg';
  }
  else if(document.getElementById('Kimg')!=null)
    {
    var imageElm   = document.getElementById('Kimg');
    imageElm.src = '/Quick Links/Kiosk/Applicant_Photo/'+KioskID+'_Photo.jpg?' + new Date().getTime(); 
    var imageElm1   = document.getElementById('KioskImage');
    imageElm1.src = '/Quick Links/Kiosk/Applicant_Photo/'+KioskID+'_Photo.jpg?' + new Date().getTime(); 
    }
}
 