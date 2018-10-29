// JScript File
// JavaScript Document
  
  var ImageName;
  var ImageNameNew=new Image();
if(ImageName!=null)ImageNameNew.src='/Quick Links/'+ImageName;
  var KioskID=(kioskid == "kioskID")? "":kioskid;
 var UserName=(userName == "Guest")? "":userName.substr(0,15)+' '+'<img id="Kimg" class="Kiosk_image"  src="/Quick Links/kiosk/Applicant_Photo/'+KioskID+'_Photo.jpg"  onerror="ImgComError(this);"/>'+' '+'<img  src="/Quick Links/PortalImages/MenuImages/BOTARR.png" width="7px" height="7px"/>';

  var KioskDate=(kioskDate == "Date")? "":kioskDate;
  var Logindt=(logindt == "Date")? "":logindt;
  var Logoff=(lblLogoff=="Logoff")? "Sign Out":lblLogoff;
  var WelcomeNote=(userName == "Guest")? "":"Welcome";
  var Subheader=subheader;
  var Balnce='<img  src="/Quick Links/PortalImages/Rupee.png" width="10px" height="10px"/>'+number_format(balnce,2);
var Headers=
'<div id="DivContainerTop">'+
'       <div id="DivContainerTopInner">'+
'                <div id="DivLogo">'+
'                   <a href="/portal/index.aspx"><img src="/Quick Links/PortalImages/MenuImages/tran.png" width="100%" height="100%"></a>'+
'                </div>'+
'            <div id="DivContainerTopTxt">'+
'<ul class="framework_menu_127072" id="framework_menu_127072" style="font-size:10px;">'+
'<li><a href="/Portal/index.aspx" class="framework_menulink_127072">HOME</a>'+
	'</li>'+
	//Himanshu
	'<li><a href="#" class="framework_menulink_127072">ABOUT US</a>'+
		'<ul>'+
			'<li><a href="/Portal/Content/mpprofile.aspx" class="framework_menucolor_127072"><img src="/Quick Links/Portalimages/MenuImages/map-icon.png" alt="" align="absmiddle"> MP Profile</a></li>'+
			'<li>'+
				'<a href="/Portal/MPOnlineSurvey.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/survey_icon.png" alt="" align="absmiddle"> MPOnline Survey</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/frmOpenings.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/career.png" alt="" align="absmiddle"> Career</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/ContactHome.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/folder-iphone-icon.png" alt="" align="absmiddle"> Contact with us</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/frmPictureGallery.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/Pictures-icon.png" alt="" align="absmiddle"> Picture Gallery</a>'+
			'</li>'+
			'<li>'+
				'<a href="/portal/FAQ/FAQSCREEN.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/faq.png" alt="" align="absmiddle"> FAQ</a>'+
			'</li>'+			
		'</ul>'+
	'</li>'+
//Himanshu
	'<li><a href="#" class="framework_menulink_127072">KIOSK LIST</a>'+
		'<ul>'+
            '<li><a href="/Portal/UserInterface/KIOSK/AuthKIOSKList.aspx?type=MPOnline" class="framework_menucolor_127072"><img src="/Quick Links/Portalimages/MenuImages/mponlinekiosk.png" alt="" align="absmiddle"> MPOnline KIOSK</a></li>'+
			'<li>'+
				'<a href="/Portal/UserInterface/KIOSK/AuthKIOSKList.aspx?type=CSC" class="framework_menucolor_127072"><img src="/Quick Links/Portalimages/MenuImages/csc.png" alt="" align="absmiddle"> CSC<span>(AISECT,NICT....)</span></a>'+
			'</li>'+
//			'<li >'+
//				'<a href="/Portal/UserInterface/KIOSK/AuthorizedKioskListCGEn.aspx" class="framework_menucolor_127072"><img src="/Quick Links/Portalimages/MenuImages/csc.png" alt="" align="absmiddle"> CGPSC Centres</a>'+
//			'</li>'+
			'<li>'+
		     '<a href="http://www.mponline.gov.in/Portal/UserInterface/KIOSK/AuthKIOSKList_CG.aspx" class="framework_menucolor_127072"><img src="/Quick Links/Portalimages/MenuImages/facilitation.png" alt="" align="absmiddle"> CG Facilitation Centre</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/UserInterface/KIOSK/AuthKIOSKList.aspx?type=OTHERKIOSK" class="framework_menucolor_127072"><img src="/Quick Links/Portalimages/MenuImages/facilitation.png" alt="" align="absmiddle"> Other KIOSK</a>'+
			'</li>'+
		'</ul>'+
	'</li>'+
'<li><a href="#" class="framework_menulink_127072">UTILITIES</a>'+
		'<ul>'+
//			'<li>'+
//				'<a href="/portal/Services/DoubleVerification/frmProcessNetBankTransaction.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/visa-icon.png" alt="" align="absmiddle"> Process NetBanking Failed Trans</a>'+
//			'</li>'+
			'<li>'+
				'<a href="/portal/verifyPaymentDtls.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/secure-payment-icon.png" alt="" align="absmiddle"> Verify Payment</a>'+
			'</li>'+
		'</ul>'+
	'</li>'+
	'<li><a href="#" class="framework_menulink_127072">KIOSK SPACE</a>'+
		'<ul>'+
			'<li>'+
				'<a href="/Portal/UserInterface/KIOSK/frmKioskApplication-Step1.aspx?langid=en-us" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/Register-icon.png" alt="" align="absmiddle"> KIOSK Registration</a>'+
			'</li>'+
					'<li>'+
				'<a href="/Portal/UserInterface/KIOSK/frmDuplicateKioskGeneration.aspx?langid=en-us" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/print.png" alt="" align="absmiddle">Re-Print Registration</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/UserInterface/KIOSK/KioskAppStatus.aspx?langid=en-us" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/Status-mail-task-icon.png" alt="" align="absmiddle"> KIOSK Status</a>'+
			'</li>'+
		'</ul>'+
	'</li>'+      
	'<li><a href="#" class="framework_menulink_127072">CITIZEN SERVICES</a>'+
	'<ul>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=2" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/Apps-icon.png" alt="" align="absmiddle">Application</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=3" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/BillPayicon.png" alt="" align="absmiddle">Bill Payment</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=4" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/counselling.png" alt="" align="absmiddle">Counseling</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=5" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/MC.png" alt="" align="absmiddle">Municipal Corp.</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=6" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/OnlineAs.png" alt="" align="absmiddle">Online Assessment</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=7" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/religious.png" alt="" align="absmiddle"> Religious</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=8" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/Reservation.png" alt="" align="absmiddle">Reservation</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/CitizenHome.aspx?servtypeid=9" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/university.png" alt="" align="absmiddle">University</a>'+
			'</li>'+
		'</ul>'+
		'</li>'+    
	'<li id="DivContainerUserLogin"><a href="#" class="framework_menulink_127072" style="background-color:#f3f3f3; color:#000; margin-left:10px;">Login</a>'+
		'<ul>'+
			'<li>'+
				'<a href="/Portal/frmCitizenLogin.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/user-icon.png" alt="" align="absmiddle"> Citizen Login</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/frmKIOSKLogin.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/Apps-preferences-system-login-icon.png" alt="" align="absmiddle"> KIOSK Login</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/frmG2GLogin.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/login-icon.png" alt="" align="absmiddle"> G2G Login</a>'+
			'</li>'+
			'<li>'+
				'<a href="/Portal/frmEmployeeLogin.aspx" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/App-login-manager-icon.png" alt="" align="absmiddle"> Employee Login</a>'+
			'</li>'+
		'</ul>'+
	'</li>'+
//	'<li><a href="index.aspx" class="framework_menulink_127072" style="margin-left:10px;"><img src="/Quick Links/Portalimages/MenuImages/share.png" alt="Share"></a>'+
//	'<ul>'+
//			'<li>'+
//				'<a href="#" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/youtube.png" alt="" align="absmiddle"> YouTube</a>'+
//			'</li>'+
//			'<li>'+
//				'<a href="#" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/facebook.png" alt="" align="absmiddle"> FaceBook</a>'+
//			'</li>'+
//			'<li>'+
//				'<a href="#" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/twitter.png" alt="" align="absmiddle"> Twitter</a>'+
//			'</li>'+
//			'<li>'+
//				'<a href="#" class="framework_menucolor_127072" ><img src="/Quick Links/Portalimages/MenuImages/linkedin.png" alt="" align="absmiddle"> LinkedIn</a>'+
//			'</li>'+
//		'</ul>'+
//		'</li>'+
'</ul>'+
'            </div>'+

'        </div>'+
'        </div>'+
'<div class="outerpanel">'+
' <div class="dispensor">'+
' <p><a id="Login" href="#">'+UserName+'</a> </p>'+
'   </div>'+
'    <div style="overflow: hidden">'+
'        <div class="panel" id="mydiv">'+
'           <div class="PanelCont">'+
'                     <div style=" float:left; width:100%;">'+
'                        <div class="Image" style="height: 100%; width: 76px; float: left;">'+
'                    <img id="KioskImage" src="/Quick Links/KIOSK/Applicant_Photo/'+KioskID+'_Photo.jpg" width="76px" height="100px" onerror="ImgComError(this);"/>'+
'</div>'+
'                        <div style="float:right; width:255px;line-height:23px; color:#666;"><strong>'+KioskID+'</strong><br />'+
'                           <strong>Registration Date:</strong>'+KioskDate+'<br /> '+
'                            <strong>Last Login Details:</strong>'+Logindt+'<br /> '+
'                            <div id="BL"><strong>Available Balance :</strong>'+Balnce+'</div></div>'+
'                    </div>'+
'</div>'+
'                <div class="KIOSKHome">'+
'                           <a href="/Portal/UserAction.ashx?langid=' + langid + '&Action=ShowHome">Home</a>'+
'</div>'+
'                <div class="KIOSKProf">'+
'                           <a href="/Portal/UserAction.ashx?langid=' + langid + '&Action=ShowHome">'+Subheader+'</a>'+
' </div>'+
'                <div class="logout">'+
'                           <a href="/Portal/UserAction.ashx?langid='+langid+'&Action=LogOut">'+Logoff+'</a>'+
'                </div>'+
'        </div>'+
'    </div>'+
'   </div>'+
'<div id="DivContainerMain">'+
'         <div id="DivBanner">'+
'                <div id="PlaceHolder">'+
'                     <img src="'+ImageNameNew.src+'"></div>'+
'            </div>'+
'            </div>'+
'                <div id="AdminHome" style="visibility:hidden;">'+
'                           <a href="/Portal/UserAction.ashx?langid=' + langid + '&Action=ShowHome"><img src="/Quick Links/PortalImages/home-icon.png" width="32" height="32" alt="" /><br>Home</a>'+
'            </div>';
document.write(Headers);

    function ImgComError(source)
    {     
   source.src = "/Quick Links/KIOSK/Applicant_Photo/photo.jpg";  
   return true; 
     } 
     
     function number_format (number, decimals, dec_point, thousands_sep)
         { 
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),        
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
        var k = Math.pow(10, prec);            
        return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
     if (s[0].length > 9) {        
    s[0] = s[0].replace(/\B(?=(?:\d{9})+(?!\d))/g, sep);
    }
     if (s[0].length > 7) {        
    s[0] = s[0].replace(/\B(?=(?:\d{7})+(?!\d))/g, sep);
    }
    if (s[0].length > 5) {        
    s[0] = s[0].replace(/\B(?=(?:\d{5})+(?!\d))/g, sep);
    }
    if (s[0].length > 3) {        
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');    }
       return  s.join(dec); 
} 

 
