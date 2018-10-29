// JScript File
  var ImageName;
  ToggleURL;
  var ImageURL = ToggleURL.split("/");
  var Service=ImageURL[2];
  var Application=ImageURL[3];
  var URL=ImageURL[4];
//  var URL1=ImageURL[5];
//    var URL2=ImageURL[6];
    
  var URL1=''; 
  var URL2= '';
  var sanchi='';
  
  try { 
     URL1=ImageURL[5];
     if (URL1 == undefined)
     {
        URL1 ='';
     }
   } 
  catch(err)
  {
    URL1='';
  }
  try { 
     URL2=ImageURL[6];
     if (URL2 == undefined)
     {
        URL2 ='';
     }
   } 
  catch(err)
  {
    URL2='';
  } 
    
  try { 
      sanchi=URL1.split("?")[1].toString(); 
   } 
  catch(err)
  {
    sanchi='';
  }

    
//    try
//    {
//  var sanchi=URL1.split("?");
//  }
//  catch()
//  {
//  
//  }
    //https://www.mponline.gov.in/Portal/Services/mpeb/citizen/billpay/frmHome.aspx?langid=en-US
  if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="HRC")
  {ImageName="PortalImages/ServLogo/HumanRights.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="JIWAJI")
  {ImageName="PortalImages/ServLogo/JiwajiLogo.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="FOREST")
  {ImageName="PortalImages/ServLogo/forest.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="KISSAN")
  {ImageName="PortalImages/ServLogo/wheat.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MANIT")
  {ImageName="PortalImages/ServLogo/manit.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="GEOLOGYMINING")
  {ImageName="PortalImages/ServLogo/geology.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="PHQ")
  {ImageName="PortalImages/ServLogo/PHQ.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="IRCTC")
  {ImageName="PortalImages/ServLogo/irctc.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="UEC")
  {ImageName="PortalImages/ServLogo/UEC.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RECRUIT_MPKVV" && URL.toUpperCase()=="COMMANPAGE.ASPX")
  {ImageName="PortalImages/ServLogo/Recruitment.png";}
     else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RECRUIT_MPKVV" && URL.toUpperCase()=="MPKVVINDORE")
  {ImageName="PortalImages/Recruitment_Paschim.png";}
      else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RECRUIT_MPKVV" && URL.toUpperCase()=="MPEBEXAMFORM")
  {ImageName="PortalImages/ServLogo/Recruitment_Paschim.png";}
        else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RECRUIT_MPKVV" && URL.toUpperCase()=="INDOREAEJE.ASPX")
  {ImageName="PortalImages/Recruitment_Paschim.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RECRUIT_MPKVV") 
  {ImageName="PortalImages/ServLogo/Recruitment.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="AIRTEL")
  {ImageName="PortalImages/ServLogo/airtel.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="DAVV")
  {ImageName="PortalImages/ServLogo/DAVV.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="VIKRAM")
  {ImageName="PortalImages/ServLogo/VIKRAM.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="IGNOU")
  {ImageName="PortalImages/ServLogo/IGNOU.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="ONLINECOUNSELLING")
  {ImageName="PortalImages/ServLogo/Counselling.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="BSNL")
  {ImageName="PortalImages/ServLogo/BSNL.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="TATAINDICOM" && URL.toUpperCase()=="FRMLOGINDOCOMO.ASPX?LANGID=HI-IN")
  {ImageName="PortalImages/ServLogo/DOCOMO.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="TATAINDICOM")
  {ImageName="PortalImages/ServLogo/Indicom.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="AKVN")
  {ImageName="PortalImages/ServLogo/akvn.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="BHOJ" && URL.toUpperCase()=="ORGUSER")
  {ImageName="PortalImages/ServLogo/bhoj.png";}
     else if(Service.toUpperCase()=="USERINTERFACE" && Application.toUpperCase()=="CITIZEN" && URL.toUpperCase()=="MUNICIPALITY")
  {ImageName="PortalImages/ServLogo/Municipal.png";}
   else if(Service.toUpperCase()=="CONTENT" && Application.toUpperCase()=="CITIZENFORGOTPWD" && URL.toUpperCase()=="FRM_CITIZENFORGOTPWD.ASPX?LANGID=EN-US")
  {ImageName="PortalImages/ServLogo/CitizenFP.png";}
   else if(Service.toUpperCase()=="USERINTERFACE" && Application.toUpperCase()=="CITIZEN" && URL.toUpperCase()=="TATAINDICOM" && URL1.toUpperCase()=="FRMLOGINDOCOMO.ASPX?LANGID=HI-IN")
  {ImageName="PortalImages/ServLogo/DOCOMO.png";}
   else if(Service.toUpperCase()=="USERINTERFACE" && Application.toUpperCase()=="CITIZEN" && URL.toUpperCase()=="BHOJ")
  {ImageName="PortalImages/ServLogo/bhoj.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="BHOJ")
  {ImageName="PortalImages/ServLogo/bhoj.png";}
  else if(Service.toUpperCase()=="USERINTERFACE" && Application.toUpperCase()=="CITIZEN" && URL.toUpperCase()=="TATAINDICOM")
  {ImageName="PortalImages/ServLogo/Indicom.png";}
  else if(Service.toUpperCase()=="USERINTERFACE" && Application.toUpperCase()=="CITIZEN")
  {ImageName="PortalImages/ServLogo/trans.gif";}
   else if(Service.toUpperCase()=="EXAMINATIONS" && Application.toUpperCase()=="VYAPAM")
  {ImageName="PortalImages/ServLogo/vyapam.png";}
  else if(Service.toUpperCase()=="EXAMINATIONS" && Application.toUpperCase()=="OPENSCHOOL")
  {ImageName="PortalImages/ServLogo/OpenSchool.png";}
  else if(Service.toUpperCase()=="EXAMINATIONS" && Application.toUpperCase()=="MPPSC")
  {ImageName="PortalImages/ServLogo/MPPSC.png";}
  else if(Service.toUpperCase()=="EXAMINATIONS" && Application.toUpperCase()=="MPBSE")
  {ImageName="PortalImages/ServLogo/mpbse.png";}
  else if(Service.toUpperCase()=="EXAMINATIONS" && Application.toUpperCase()=="BU")
  {ImageName="PortalImages/ServLogo/BEd.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MAKHANLAAL")
  {ImageName="PortalImages/ServLogo/mcu.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="TOWNANDCOUNTRYPLANNING")
  {ImageName="PortalImages/ServLogo/tacp.png";}
   else if(Service.toUpperCase()=="EXAMINATIONS" && Application.toUpperCase()=="NUTAN")
  {ImageName="PortalImages/ServLogo/snpg.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPEB" && (URL2.toUpperCase()=="FRMBPLHOME.ASPX?LANGID=EN-US" || URL2.toUpperCase()=="FRMBPLHOME.ASPX?LANGID=HI-IN"))
  {ImageName="PortalImages/ServLogo/mpmkvv.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPEB" && (URL2.toUpperCase()=="FRMHOME.ASPX?LANGID=EN-US" || URL2.toUpperCase()=="FRMHOME.ASPX?LANGID=HI-IN"))
  {ImageName="PortalImages/ServLogo/mppkvv.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPEB" )
  {ImageName="PortalImages/ServLogo/mpev.png";}
//  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="CMRF")
//  {ImageName="PortalImages/CMRF.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPIAS")
  {ImageName="PortalImages/ServLogo/MPIAS.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="PWD")
  {ImageName="PortalImages/ServLogo/PWD_Header.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="HG") //patwari logo
  {ImageName="PortalImages/ServLogo/PATWARI2012.png";}       //patwari logo
  
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MAHAKOSHAL") 
  {ImageName="PortalImages/ServLogo/MHA.png";} //Mahakoshal logo
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="VODAFONE")
  {ImageName="PortalImages/ServLogo/vodafoneServicesLogo_03.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPTIFC")
  {ImageName="PortalImages/ServLogo/trifac.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RSEPSS") 
  {ImageName="PortalImages/ServLogo/RSEPSS_LOGO.png";} //RSEPSS logo
//    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="SANCHI" && sanchi[1]=="Cid=dP5PHerQuB9m")
//  {ImageName="PortalImages/ServLogo/SanchiBhopal.png";}
//   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="SANCHI" && sanchi[1]=="Cid=6qO0MWR6Zd462NfNWBG5mA==")
//  {ImageName="PortalImages/ServLogo/SanchiIndore.png";}
//   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="SANCHI" && sanchi[1]=="Cid=TAy3F61dOXayeaA0zL3n7A==")
//  {ImageName="PortalImages/ServLogo/SanchiGwalior.png";}

  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="SANCHI" )
  {
    if(sanchi !='' || sanchi !=undefined)
        {
            if(sanchi=="CID=dP5PHerQuB9m")
            { ImageName="PortalImages/ServLogo/SanchiBhopal.png"; }
            else if (sanchi=="CID=6qO0MWR6Zd462NfNWBG5mA==")
            { ImageName="PortalImages/ServLogo/SanchiIndore.png"; }
            else if (sanchi=="CID=TAy3F61dOXayeaA0zL3n7A==")
            { ImageName="PortalImages/ServLogo/SanchiGwalior.png";}
            else if (sanchi=="CID=D4BVUSz4ZG7bPgeIWDAGDA==")
            { ImageName="PortalImages/ServLogo/SanchiJabalpur.png";}
            else
            { ImageName="PortalImages/ServLogo/Sanchi.png";}
        }
        else
        { ImageName="PortalImages/ServLogo/Sanchi.png";}
    }
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="SANCHI")
  {ImageName="PortalImages/ServLogo/Sanchi.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="DISHNET")
  {ImageName="PortalImages/ServLogo/DishTVLogo.png";}
     else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPLUN")
  {ImageName="PortalImages/ServLogo/mplunlogo.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="ONLINEASS")
  {ImageName="PortalImages/ServLogo/Online-Assessment.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPPGCL")
  {ImageName="PortalImages/ServLogo/mppgcl.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="WAREHOUSING")
  {ImageName="PortalImages/ServLogo/mpwlc.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="HORTICULTURE")
  {ImageName="PortalImages/ServLogo/hoticulture.png";}
  else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RSEPSS")
 {ImageName="PortalImages/ServLogo/RSEPSS_LOGO.png";}
 else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="ELECTIONCOMMISSION") {ImageName="PortalImages/ServLogo/ECS_Logo.png";} //ECS logo
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="CYBERPLAT")
  {ImageName="PortalImages/ServLogo/cyberplat.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="APS")
  {ImageName="PortalImages/ServLogo/APS.png";} 
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="NRHM") 
   {ImageName="PortalImages/ServLogo/nrhm.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="FDA" )
  { ImageName="PortalImages/FDA.png"; }
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="RURALINDUSTRY")
  {ImageName="PortalImages/ServLogo/RuralIndustry.png";}
   else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="IIFM")
  {ImageName="PortalImages/ServLogo/IIFM.png";}
     else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MP Agro")
  {ImageName="PortalImages/ServIcon/MPGovt-Logo.png";}
    else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="NTSE")
  {ImageName="PortalImages/ServLogo/RSK Dept.png";}
     else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MPMC")
  {ImageName="PortalImages/ServLogo/MPMC.png";}
  
       else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="MADARSABOARD")
  {ImageName="PortalImages/ServLogo/Madarsa.png";}
  
  
     else if(Service.toUpperCase()=="SERVICES" && Application.toUpperCase()=="FIRMSANDSOCIETY")
  {ImageName="PortalImages/ServLogo/FirmsNSocieties.png";}
  else
  {ImageName="PortalImages/trans.gif";}

