// JScript File

function Validate()
        {        
        var Form=document.frmDAVVApp;
        var Name="^[a-zA-Z ]*[a-zA-Z]{1}[a-zA-Z ]*$";//Mandatory with  Space 
        var NMName="^[a-zA-Z]*$";//Non Mandatory.with Space and Dot
        var Address="^[a-zA-Z0-9.;:,/-]{1}[a-zA-Z0-9.;: ,/-]*$";
        var PincOde="^[0-9]{6}$";
        var Std="^[0-9]{3}[0-9]*$";      
        var Phone= "^[0-9]{6}[0-9]*$" ;
        var Integer="^[0-9]*$"; //check this RgExp
        var email="^[a-z][a-z|0-9|]*([_][a-z|0-9]+)*([.][a-z|" + "0-9]+([_][a-z|0-9]+)*)?@[a-z][a-z|0-9|]*\\.([a-z]" + "[a-z|0-9]*(\\.[a-z][a-z|0-9]*)?)$";
        //var temp='0';
        //if(Form.ddlCourseTypes.id!=undefined)
       // {
       //  if(!ValidateDropDown(Form.ddlCourseTypes,'Please select course Type')){return false;}
       // }
        
        //if(flag=='1'){temp='course group'; } else {temp='course';}
       //if(!ValidateDropDown(Form.DdlCourseGroups,'Please select '+ temp)){return false;}
 
        //if(!validateCheckBoxList('ChkBxLstCourses','Please Selected atleast one course.')){return false;};
        //if(!validateCheckBoxList('ChkBxLstCourseList','Please Selected atleast one course.')){return false;};
        //if(!validateRadioButtonList('rdbCourseList','Please Selected the Course.')){return false;};
        if(!ValidateInput(Form.txtApplicantFName,Name,"first name.(Only (a-z,A-Z,Space) characters allowed)",true)){return false;}
        if(!ValidateInput(Form.txtApplicantLName,Name,"last name.",true)){return false;}
        var msgValidateDate=validateDate(document.frmDAVVApp.txtDOB,"Date Of Birth","LESS");
            if (msgValidateDate!="")
                       {
                          alert(msgValidateDate);
                           return false;
                       }
        
        
        if(!fnValidateRadio(Form.gender,"your gender (M/F) ?)")){return false;}
        
        if(!ValidateInput(Form.txtFathersName,Name,"father's or husband's name.(Only (a-z,A-Z,Space) characters allowed)",true)){return false;}
        
        if(!ValidateInput(Form.txtMothersName,Name,"mother's name.(Only (a-z,A-Z,Space) characters allowed)",true)){return false;}
         
        if(!fnValidateRadio(Form.RdbtnDomicile,"Are you a domicile of Madhya Pradesh?")){return false;}   
        
        if(!ValidateInput(Form.txtPermanentAdd1,Address," permanent address.",true)){return false;}
        
        if(!ValidateDropDown(Form.ddlState,'Please select State')){return false;}
        
        if(!ValidateInput(Form.txtPinCode,PincOde , "Pincode",true )){return false;} 
        
        if(!ValidateInput(Form.txtSTDPermanent,Std , "STD code",true )){return false;}
        
        if(!ValidateInput(Form.txtPhoneNo2,Phone , "Phone No",true )){return false;}
        
        if(!ValidateInput(Form.txtEmailId,email," email address.",false)){return false;}
        
        if(!ValidateDropDown(Form.DdlCategory,'Please select category')){return false;}
        
        if(!ValidateEnclousers()){return false;} 
       
        if(document.getElementById('rdbYesGrpC'))
        {
            if(document.getElementById('rdbYesGrpC').checked==true && (document.getElementById('rdbMaths').checked==false && document.getElementById('rdbBio').checked==false))
            {
                alert('Please Choose any of the optional subjects.');
                 return false;
            }
        }
        
        if(document.getElementById('rdbYesGrpB'))
        {
            if(document.getElementById('rdbYesGrpB').checked==false && document.getElementById('rdbYesGrpC').checked==false)
            {
                alert('Please Choose any of the Group \'B\' or \'C\'.');
                 return false;
            }
        }
       //DdlCentrePreference1  //DdlCentrePreference2  //DdlCentrePreference3
       if(document.getElementById('DdlCentrePreference1'))
        {
            if(document.getElementById('DdlCentrePreference1').value=='-1')
            {
                alert('Please Choose your first preference for test centre.');
                return false;
            }
        }
        
        if(document.getElementById('DdlCentrePreference2'))
        {
            if(document.getElementById('DdlCentrePreference2').value=='-1')
            {
                alert('Please Choose your second preference for test centre.');
                return false;
            }
        }
        
        if(document.getElementById('DdlCentrePreference3'))
        {
            if(document.getElementById('DdlCentrePreference3').value=='-1')
            {
                alert('Please Choose your third preference for test centre.');
                return false;
            }
        }
        
        if(document.getElementById('DdlCentrePreference1'))
        {
          var ctr1=document.getElementById('DdlCentrePreference1');
          var ctr2="";//document.getElementById('DdlCentrePreference2');
          var ctr3="";//document.getElementById('DdlCentrePreference3');
          
          if(document.getElementById('DdlCentrePreference2'))
          {
            ctr2=document.getElementById('DdlCentrePreference2');
          }
          if(document.getElementById('DdlCentrePreference3'))
          {
            ctr3=document.getElementById('DdlCentrePreference3');
          }
          
          if(ctr2!="" && ctr3!="")
          {
              if((ctr1.value==ctr2.value)||(ctr1.value==ctr3.value)||(ctr2.value==ctr3.value))
              {
                 alert('All test centre preferences must be unique.');
                 return false;
              }
          }
          else if(ctr2!="" && ctr3=="")
          {
              if((ctr1.value==ctr2.value))
              {
                 alert('All test centre preferences must be unique.');
                 return false;
              }
          }
        }
        
        if(document.getElementById('txtIstYrPerctMrk1'))
            {
                if(document.getElementById('txtIstYrPerctMrk1').value=='')
                {
                    alert('Please enter your percentage marks. For Ist yr.');
                    return false;
                }
               
               if(document.getElementById('txtIstYrPerctMrk1').value=='00')
                {
                    alert('Please enter valid percentage marks. For Ist yr.');
                    return false;
                }
               
               if(document.getElementById('txtIIstYrPerctMrk1').value=='')
                {
                    alert('Please enter your percentage marks. For IInd yr.');
                    return false;
                }
                
                if(document.getElementById('txtIIstYrPerctMrk1').value=='00')
                {
                    alert('Please enter valid percentage marks. For IInd yr.');
                    return false;
                }
            }
            
         
         if(document.getElementById('txtXIIPerctMrk1'))
            {
                if(document.getElementById('txtXIIPerctMrk1').value=='')
                {
                    alert('Please enter your percentage marks for class XII (10+2).');
                    return false;
                }
                
                if(document.getElementById('txtXIIPerctMrk1').value=='00')
                {
                    alert('Please enter valid percentage marks for class XII (10+2).');
                    return false;
                }
            }
      /*  if(!fnValidateRadio(Form.Gender,"Gender !.")){return false;}  	
        if(!fnValidateRadio(Form.RdoHandicapped, "Are you physically handicapped?")){return false;}             
        if(!fnValidateRadio(Form.RdoJKMMET, "Are you a J&K migrant/resident?")){return false;}
        if(!fnValidateRadio(Form.RdoJKMMCA, "Are you a J&K migrant/resident?")){return false;}

        if(!ValidateInput(Form.txtHouse,Address,"house no.",true)){return false;}
        if(!ValidateInput(Form.txtStreet,Address,"street.",true)){return false;}
        if(!ValidateInput(Form.txtColony,Address,"colony.",true)){return false;}
        if(!ValidateInput(Form.txtCity,Address,"city.",true)){return false;}

	    
         
         */
	             
	              	             	             	                              
                //      return true;               
           //return false;
        }
          

  
        function fnValidateRadio(theField,fieldName)
        {                       
               if(theField==null){  return true; }
	           var flag= IsSelected(theField);
              
                if (!flag)
                {
                    alert("Kindly determine,"+fieldName +"");
                    return false;
                }
                return true;

        }  
        
        function IsSelected(theField)
        {
               if(theField==null){  return true; }
               var DisbCount=0;
	           var flag= false;
                for (i = 0;  i < theField.length;  i++)
                {   
                   if(!theField[i].disabled)
                   {
                     if (theField[i].checked)
                     {                      
                         flag= true;
                     }
                                          
                   }                                                     
                   else
                   {
                     //flag=true;  
                     DisbCount++;
                   }
                                              
                }
                 if(theField.length==DisbCount &&  DisbCount!=0){return true;}
                return flag;

        }
        
        function SelectedValue(theField)
        {                              
               if(theField==null){  return true; }
               
	            for (i = 0;  i < theField.length;  i++)
                {   
                   if(!theField[i].disabled)
                   {
                     if (theField[i].checked)
                     {                                            
                        return theField[i].value;
                     }                                          
                   }                                                                                                                      
                }                 
                 return null;              
        }

     

        function CalendarControl(txtDate1)
		        {
        		
			        var cal1 = new calendar1(txtDate1);
			        javascript:cal1.popup();
			        cal1.year_scroll = true;
			        cal1.time_comp = false;
		}
//Enclousers  Validations

  function ValidateEnclousers()
    {
        var FileFormats=new Array(".jpg",".gif");
        var Form= document.frmDAVVApp; // Enclousers                   
        if(!ValidateFile_Formats(Form.FUpAppImg,false,FileFormats,"Photo and Signature")){return false;}   
//        if(!ValidateFile_Formats(Form.Caste$File,false,FileFormats,"caste")){return false;}
//        if(!ValidateFile_Formats(Form.GOLDMEDAL$File,false,FileFormats,"GOLD MEDAL AT NATIONAL LEVEL SPORTS")){return false;}
        return true;
    }
    
    function ValidateDropDown(ddlId,msg)
    {
        if(ddlId.value=='-1')
        {
            alert(msg + '.');
            return false;
        }
        else
        {
            return true;
        }
    }
    
    function validateRadioButtonList(radioButtonListId,msgToDisplay)
    {
        if(document.getElementById(radioButtonListId))
        {
            var listItemArray = document.getElementsByName(radioButtonListId);
             var isItemChecked = false;

             for (var i=0; i<listItemArray.length; i++)
             {
                  var listItem = listItemArray[i];

                  if ( listItem.checked )
                  {
                       //alert(listItem.value);
                       isItemChecked = true;
                  }
             }

             if ( isItemChecked == false )
             {
                  alert('Please Selected the Course first.');
                   return false;
             }
            return true;
        }
         return true; 
       }
    
    function validateCheckBoxList(checkBoxListId,msgToDisplay)
    {
        if(document.getElementById(checkBoxListId))
        {
            var chkObjs=document.getElementById(checkBoxListId).getElementsByTagName('input');
            var count=0;
                        var i=0;
	            for(i=0;i<chkObjs.length;i++)
	            { 
	                if(chkObjs[i].type=='checkbox')
	                {
	                    if(chkObjs[i].checked==true)
	                    {
	                        count=count+1;
	                    }
	                }
	            }
	            if(count==0)
	            {
	                alert(msgToDisplay);
	                return false;
	            }
	            else
	            {
	                return true;
	            }
        }
        return true;
    }
    
    function disableBtn()
    {
        document.getElementById('BtnSubmit').style.display='none';
    }