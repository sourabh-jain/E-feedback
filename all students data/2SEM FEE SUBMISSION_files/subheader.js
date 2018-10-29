
   
var  item=Header;
var subheader=null;
subheader='';
switch(item)
	{
	  
	    case "contactgov":
            subheader=subheader + "<tr >" + 
                          "<td height='30' valign='middle' align='center' class='mainbg-header' nowrap='true'><a href=/Portal/Content/contact/cont_details.aspx?langid="+langid+"&CLASSIFICATION_ID=02  class='mainbg-header'>"+"  "+lblGovernor+"  "+"</a>"+  
                          "<img src='/portal/Images/square.jpg' width='4' height='4'><a href=/Portal/Content/contact/cont_details.aspx?langid="+langid+"&CLASSIFICATION_ID=01 class='mainbg-header'>"+"  "+lblChiefMinister+"  "+"</a>"+  
                          "<img src='/portal/Images/square.jpg' width='4' height='4'><a href=/Portal/Content/contact/cont_details.aspx?langid="+langid+"&CLASSIFICATION_ID=21 class='mainbg-header'>"+"  "+lblChiefSecraitry+"  "+"</a>"+  
                          "<img src='/portal/Images/square.jpg' width='4' height='4'><a href='/Portal/Content/contact/MLA_Contacts.aspx?langid="+langid+"' class='mainbg-header'>"+"  "+lblVidhanSabha+"  "+"</a>"+  
                          "<img src='/portal/Images/square.jpg' width='4' height='4'><a href='/Portal/Content/contact/listofcontacts.aspx?langid="+langid+"&id=01' class='mainbg-header'>"+"  "+lblCabinet+"  "+"</a>"+  
                           "<img src='/portal/Images/square.jpg' width='4' height='4'><a href=/Portal/Content/contact/secselect.aspx?langid="+langid+" class='mainbg-header'>"+"  "+lblSecretariestoGov+"  "+"</a>"+  
                           "<img src='/portal/Images/square.jpg' width='4' height='4'><a href=/Portal/Content/contact/hodselect.aspx?langid="+langid+" class='mainbg-header'>"+"  "+lblHOD+"  "+"</a>"+  
                           "<img src='/portal/Images/square.jpg' width='4' height='4'><a href=/Portal/Content/contact/dist.aspx?langid="+langid+" class='mainbg-header'>"+"  "+lblDistOfficials+"  "+"</a>"+  
                           "<img src='/portal/Images/square.jpg' width='4' height='4'><a href=/Portal/Content/contact/sec_officer_select.aspx?langid="+langid+" class='mainbg-header'>"+"  "+lblSecretraitStaff+"  "+"</a>"+  
                           "</td> </tr>"; break;

        case "webdir":
            subheader=subheader + "<tr>" + 
                          "<td  height='30' valign='middle' align='center' nowrap='true' class='mainbg-header'><a href='webDirectory.aspx?langid="+langid+"&#"+lblStateGovtDepts+"'> "+"  "+lblStateGovtDepts+"  "+"</a>"+ 
                          "<img src='/portal/Images/square.jpg' width='4' height='4'>"+
                          "<a href='webDirectory_State.aspx?langid="+langid+"&#"+lblStateGovt+"'> "+"  "+lblStateGovt+"  "+"</a>"+  
                          "<img src='/portal/Images/square.jpg' width='4' height='4'><a href='new.aspx?langid="+langid+"&#"+lblCentralGovt+"'>"+"  "+lblCentralGovt+"  "+"</a>"+ 
                            "<img src='/portal/Images/square.jpg' width='4' height='4'><a href='new.aspx?langid="+langid+"&#"+lblOtherGovt+"'>"+"  "+lblOtherGovt+"  "+"</a>"+  
                           " <img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                            "<a href='WebDirectory_2.aspx?langid="+langid+"&#"+lblOthers+"'>"+"  "+lblOthers+"  "+"</a>"+
                            
                     " </tr>"; break;
        case "MPMLADetails":
            subheader=subheader + "<tr>" + 
                          "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header'><a href='/Portal/Content/contact/MLA_Contacts.aspx?langid="+langid+"' class='mainbg-header'>"+  
                           " MLA Contacts </a> <img src='/portal/Images/square.jpg' width='4' height='4'><a href='/Portal/Content/contact/MP_LokSabha.aspx?langid="+langid+"' class='mainbg-header'>"+  
                            " MP LokSabha </a> <img src='/portal/Images/square.jpg' width='4' height='4'><a href='/Portal/Content/contact/MP_RajyaSabha.aspx?langid="+langid+"' class='mainbg-header'>"+  
                           " MP RajyaSabha</a> "+  
                           
                           " </tr>"; break;


         

        case "dept":
            subheader=subheader + 
                                  "<a href='/Portal/Content/departments/listofOrgsbyDepts.aspx?langid="+langid+"' class='mainbg-header'>  "+lblDeptOrg+"</a>"+  
                                  "<a href='/Portal/Content/departments/gosbydepts.aspx?langid="+langid+"' class='mainbg-header'> "+lblGoAct+"</a>";
                                   break;


        case "citizenservices":
            subheader=subheader + 
                          "<a href='/portal/UserInterface/Citizen/RegistrationDispatcher.aspx?langid="+langid+"&Action=ChangeRegistrationDetails' class='mainbg-header'>Update Profile</a>";
                           break;
        case "orguser":
        subheader=subheader + 
		                "<a href='/portal/UserInterface/Organization/OrganizationDispatcher.aspx?langid="+langid+"&Action=ShowOrgUserProfile' class='mainbg-header'>"+lblUpDateProfile+"</a>";
		                break;
                        
                         
        case "portaluser":
        subheader=subheader +          
//                    "<a href='/portal/UserInterface/Portal/PortalUserDispatcher.aspx?langid="+langid+"&Action=ShowUpdateProfilePage' class='mainbg-/////header'>Update Profile</a>";
                    
                     "<a href='#' class='mainbg-header'>Update Profile</a>";
                    break;

        case "DCOperator":
            subheader=subheader + 
                       "<a href='/Portal/UserInterface/DeliveryChannel/UpdateProfile.aspx?langid="+langid+" class='mainbg-header'> "+lblUpDateProfile+"</a>";
                       break;


        case "SchoolEducation":
            subheader=subheader + "<tr>" +
			                "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header'><a href='/SchoolEducation/DistrictWiseReport.aspx' class='mainbg-header'>District Wise Report</a>&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                           "<a href='/SchoolEducation/MandalWiseReport.aspx' class='mainbg-header'>Tehsil Wise Report</a>&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> <a href='/SchoolEducation/ChildrenList.aspx' class='mainbg-header'>Habitation Wise Children Data</a></td> </tr>"; break;

        case "gallery":
            subheader=subheader + "<tr>" +
			                "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header'><a href='/Portal/SiteMaintainence.aspx?langid=en-US&Service=' class='mainbg-header'>Celebrations</a>&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                           " <a href='/Portal/SiteMaintainence.aspx?langid=en-US&Service=' class='mainbg-header'>Tourism</a>&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> <a href='/Portal/SiteMaintainence.aspx?langid=en-US&Service=' class='mainbg-header'>Government Schemes</a></td> </tr>"; break;
                           
        case "Vyapam":
            subheader=subheader + "<tr>" +
			                "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header'><a href='/Portal/Examinations/vyapam/examsList.aspx?langid="+langid+"' class='mainbg-header'>Exams List</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> <a href='/Portal/Examinations/vyapam/ViewApplictaion.aspx?langid="+langid+"' class='mainbg-header'>View Application</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                           " <a href='http://vyapam.nic.in/e_default.htm'  class='mainbg-header'>Download AdmitCard</a> &nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> <a href='/Portal/Examinations/vyapam/Results.aspx?langid="+langid+"' class='mainbg-header'>Results</a></td> </tr>"; break;
         case "Nutan":
            subheader=subheader + "<tr>" +
			                "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header1'><a href='/Portal/Examinations/Nutan/examsList.aspx?langid="+langid+"' class='mainbg-header1'>Exams List</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> <a href='/Portal/Examinations/Nutan/ViewApplictaion.aspx?langid="+langid+"' class='mainbg-header1'>View Application Status</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                           " Download Hallticket <img src='/portal/Images/square.jpg' width='4' height='4'> Results</td> </tr>"; break;
         
         case "OpenSchool":
            subheader=subheader + "<tr>" +
		                "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header1'><a href='#' class='mainbg-header1'>Exams List</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> <a href='#' class='mainbg-header1'>View Application Status</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                        " Download Hallticket <img src='/portal/Images/square.jpg' width='4' height='4'> Results</td> </tr>"; break;
                                                                                        
         case "MPPSC":
            subheader=subheader + "<tr>" +
		                "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header'><a href='/Portal/Examinations/MPPSC/NotificationApplyonline.aspx?langid="+langid+"' class='mainbg-header'>Exams List</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'><a  href='/Portal/Examinations/MPPSC/Forms/PreExam/FormStatus.aspx?langid="+langid+"' class='mainbg-header'> View Application&nbsp;&nbsp;</a><img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                        " <a href='/Portal/Examinations/MPPSC/AdmitCard/ViewHallTicket.aspx?langid="+langid+"' class='mainbg-header'> View Hallticket </a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> Results&nbsp;&nbsp; <img src='/portal/Images/square.jpg' width='4' height='4'><a href='/Portal/UserInterface/DeliveryChannel/DCServicesList.aspx?"+langid+"' class='mainbg-header'> Services </a></td> </tr>"; break;
                        
         case "PropertyTax":
            subheader=subheader + "<tr>" +
		                "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header'><a href='/Portal/UserInterface/Citizen/Municipality/PropertyTax/propertyTaxMain.aspx?langid="+langid+"' class='mainbg-header'>PropertyTax Home Page</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'><a  href='/Portal/UserInterface/Citizen/Municipality/PropertyTax/frmSearchSelfAss.aspx?langid="+langid+"' class='mainbg-header'> Search self-assessment &nbsp;</a><img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                        " </td> </tr>"; break;  

        case "Narmada": //added for Narmada...<<himanshu>>...Change options later
            subheader=subheader + "<tr>" +
            "<td width='964' height='30' valign='middle' align='center' nowrap='true' class='mainbg-header1'><a href='#' class='mainbg-header1'>Option1</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'> <a href='#' class='mainbg-header1'>Option2</a>&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
            " Option3 <img src='/portal/Images/square.jpg' width='4' height='4'> Results</td> </tr>"; break;
            
        case "HigherEducation":
                 subheader=subheader + "<tr>" +
			                "<td width='964' height='30' valign='middle' align='center' nowrap='true' ><a  href='/Portal/UserInterface/Organization/HigherEducation/FileManagement/CommanDispatcher.aspx?langid="+langid+"&Action=ShowHomePage'>Home</a>&nbsp&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                           "&nbsp;&nbsp;<a  href='/Portal/UserInterface/Organization/HigherEducation/FileManagement/CommanDispatcher.aspx?langid="+langid+"&Action=LogOut'>Log Out</a> </td> </tr>"; break;

        case "HigherEducationProf":
         subheader=subheader + "<tr>" +
	                "<td width='964' height='30' valign='middle' align='center' nowrap='true' ><a  href='/Portal/UserInterface/Organization/HigherEducation/Employee/CommanDispatcher.aspx?langid="+langid+"&Action=ShowHomePage'>Home</a>&nbsp&nbsp;&nbsp;<img src='/portal/Images/square.jpg' width='4' height='4'>"+  
                   "&nbsp;&nbsp;<a  href='/Portal/UserInterface/Organization/HigherEducation/Employee/CommanDispatcher.aspx?langid="+langid+"&Action=LogOut'>Log Out</a> </td> </tr>"; break;
              
	default:subheader='';break;
	}