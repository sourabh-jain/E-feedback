// JScript File

 var Footer=
'<div id="DivBottom">'+
//'                   <strong>'+lblPortalDataVerification+' </strong>'+
//'                   <br />'+
//'                   <strong>'+lblDisclaimer+':</strong>'+
//'                           '+lblDisclaimerData+''+
'                  &nbsp;&nbsp;&nbsp;Copyright © 2013 MPOnline Limited | <a href="/Portal/policy.aspx">Privacy Policy</a> | <a href="/Portal/disclaimer.aspx">Disclaimer</a>'+'<div id="DivBottomIP"><a>IP Address: '+IPAddress+'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a >Server: '+ServerName+'</a></div>'+'<div id="DivBottomImg"><a style="margin-right:0px;"  href="https://trustsealinfo.verisign.com/splash?form_file=fdf/splash.fdf&dn=www.mponline.gov.in&lang=en" target="_blank"><img  height="25px" src="/Quick Links/PortalImages/MenuImages/VerisignIcon.png" alt="" align="absmiddle" border="0"></a></div>'+
//'. , JV between '+
//'                           <a href="http://www.mpsedc.com" target="_blank" class="ftrLnk"> MPSEDC of GoMP</a>'+
//'                            &'+
//'                           <a href="http://www.tcs.com" target="_blank" class="ftrLnk">TATA CONSULTANCY SERVICES </a>'+
//'                           <br/>'+
//'                          '+lblAllRightsReserved+'.'+ 
//'                    <a href="/Portal/Content/feedback/Feedback.aspx?langid="'+langid+'" class="ftrLnk">'+lblFeedback+
//'                   '+'|'+
//'                    <a href="/Portal/FAQ/FAQSCREEN.aspx?langid="'+langid+'" class="ftrLnk">'+lblFaq+
//'                   '+'|'+
//'                   <a href="/Portal/FAQ/FAQSCREEN.aspx" class="ftrLnk">FAQ&acute;s </a> |' +
//'                   <a href="/Portal/ContactHome.aspx" class="ftrLnk"> Contact us </a> |' +
//'                   <a href="/Portal/Content/Terms of Service.htm" class="ftrLnk">'+ lblTermsOfService +'.</a>' +
//'                   Site Best Viewed in IE7.0+ at Resolution 1024 X 768.'+
'           </div>';
//alert(Footer);
document.write(Footer);
var h= screen.height;
var w=screen.Width;



try
{
// var MyForm=document.forms[0];
//               
//               if(MyForm)
//               {
//                  
//                   if(MyForm.className!="Ignore")
//                   {
//                        MyForm.style.width=964;
//                        MyForm.style.margin=(w-964-22)/2;
//                        MyForm.style.marginTop=10;
//                        MyForm.style.marginBottom=10;
//                        MyForm.className="Container";
//                     
//                   }
//                   
//                } 
// 
 
}
catch(err)
{

}

try
{
    
   
       var   Elem= GEI("Msg")?GEI("Msg"):(GEI("lblMsg")?GEI("lblMsg"):GEI("lblException")) ;
      
       
        if(Elem!=null)
	    {
	           
        	       WriteMessage(Elem.innerHTML);
	               Elem.style.display="none";
	    }
	       
	   
            

}   
 catch(err)
{
    alert(err.message);

}    


	    
function WriteMessage(Content)
{
    var w= 500;
    var h= 470;
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    if(Content!="")
        {
                  
                      var  Content= "<div id='TransScreen'  style='z-index:500;background-color:#333;position:fixed;top:0px;left:0px;width:100%;height:100%;opacity: 0.3;filter:alpha(opacity=30);'></div>"+
	                            "<div id='divMsg' style='top:"+top+"px;left:0px;position:fixed;width:100%;z-index:10001; padding:20px 20px 0px; font-size:15px; text-align:center;color:#fff; '>"+	                                               
                                "<table style='background-position: center; width: 492px; height: 265px;' background='/Quick Links/error.png' align='center'>"+
                                "<tr>"+
                                "<td valign='top'>"+
                                "<table align='center' width='85%' border='0' style='margin-top: 55px; line-height: 20px;'>"+
                                "<tr>"+
                                "<td style='color: black; text-align: center; height: 130px; font-size: 12px;'>"+
                                Content+
                                "</td>"+
                                "</tr>"+
                                "<tr>"+
                               "<td align='center'>"+
                               "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id='btnOK' type='button' value='ok'  style='width:70px'onclick='javascript:try{GEI(\"TransScreen\").style.display=\"none\";GEI(\"divMsg\").style.display=\"none\";var   Elem= GEI(\"Msg\")?GEI(\"Msg\"):(GEI(\"lblMsg\")?GEI(\"lblMsg\"):GEI(\"lblException\"));Elem.style.display=\"none\";}catch(err){};'>" +                                                           
                               "</td>"+
                               "</tr>"+
                               "</table>"+
                               "</td>"+
                               "</tr>"+
                               "</table>"+
                               "</div>" ;                                                              
	                               document.write(Content); 
	                                 
	                                 
                	               
        }

}
function WriteClientMessage(Content)
{    var w= 500;
    var h= 470;
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/3);
   
    if(Content!="")
        {
                 
                      var  Content= "<div id='TransScreen'  style='z-index:500;background-color:#333;position:fixed;top:0px;left:0px;width:100%;height:100%;opacity: 0.3;filter:alpha(opacity=30);'></div>"+
	                            "<div id='divMsg' style='top:"+top+"px;left:0px;position:fixed;width:100%;z-index:10001; padding:20px 20px 0px; font-size:15px; text-align:center;color:#fff; '>"+	                                               
                                "<table style='background-position: center; width: 492px; height: 265px;' background='/Quick Links/error.png' align='center'>"+
                                "<tr>"+
                                "<td valign='top'>"+
                                "<table align='center' width='85%' border='0' style='margin-top: 55px; line-height: 20px;'>"+
                                "<tr>"+
                                "<td style='color: black; text-align: center; height: 130px; font-size: 12px;'>"+
                                Content+
                                "</td>"+
                                "</tr>"+
                                "<tr>"+
                               "<td align='center'>"+
                               "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id='btnOK' type='button' value='ok'  style='width:70px'onclick='javascript:try{GEI(\"TransScreen\").style.display=\"none\";GEI(\"divMsg\").style.display=\"none\";var   Elem= GEI(\"Msg\")?GEI(\"Msg\"):(GEI(\"lblMsg\")?GEI(\"lblMsg\"):GEI(\"lblException\"));Elem.style.display=\"none\";}catch(err){};'>" +                                                           
                               "</td>"+
                               "</tr>"+
                               "</table>"+
                               "</td>"+
                               "</tr>"+
                               "</table>"+
                               "</div>";
                	                      
	                             
	                              document.getElementById('divclMsg').innerHTML= Content;

                	               
        }

}
               
 function GEI(X){ return document.getElementById(X);}
         








