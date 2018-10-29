function validateIntField(theField,paraName,isMandatory,minValue,maxValue,minDigitCount,maxDigitCount)
{	
	var ErrMsg ="";
	trimField(theField);
	var fieldValue = theField.value;
	if(fieldValue=="" && isMandatory)
	{
		ErrMsg = "Enter " + paraName + ".\n"
	}
	else if(fieldValue=="")
	{
		ErrMsg = "";
	}
	else if(isNaN(fieldValue)) 
	{			
		ErrMsg = "The " + paraName + " you entered should be a numeric value.\n";	
	}		
	else if(fieldValue.indexOf(".") != -1)
	{	
		ErrMsg = "Entered value for " + paraName + " should not be a decimal value.\n";			
	}
	else if(GetInt(fieldValue) < 0)
	{
		ErrMsg = "Entered value for "+ paraName + "  should be a positive value.\n";
	} 
	else if(minDigitCount != "" && !isNaN(minDigitCount) && fieldValue.length < minDigitCount)
	{
		ErrMsg = "The "+ paraName +" you enter should be a minimum of "+minDigitCount+" digits.";
	}
	else if(maxDigitCount != "" && !isNaN(maxDigitCount) && fieldValue.length > maxDigitCount)
	{
		ErrMsg = "The "+ paraName +" you entered should be less than or equal to "+maxDigitCount+" digits.";
	}	
	else if( minValue != "" && !isNaN(minValue) && GetInt(fieldValue) < minValue )
	{
		ErrMsg = "The " + paraName + " you entered should be greater than or equal to "+minValue+".";
	}	
	else if( maxValue != "" && !isNaN(maxValue) && GetInt(fieldValue) > maxValue )
	{
		ErrMsg = "The " + paraName + " you entered should be less than or equal to "+maxValue+".";
	}   
	return ErrMsg;
}

function validateFloatField(theField,paraName,isMandatory,minValue,maxValue,precision)
{
	var ErrMsg ="";
	trimField(theField);
	var fieldValue = theField.value;
	var portion = "";
	if(fieldValue.indexOf(".") > 0)
	{
		portion =fieldValue.split('.')[1];
	}	
	if(fieldValue=="" && isMandatory)
	{
		ErrMsg = "Enter "+paraName+".\n"
	}
	else if(fieldValue=="")
	{
		ErrMsg = "";
	}
	else if(isNaN(fieldValue)) 
	{			
		ErrMsg = "The " + paraName + " you entered should be a numeric value.\n";	
	}			
	else if(GetFloat(fieldValue) < 0)
	{
		ErrMsg = "The "+ paraName + " you entered should be a positive value.\n";
	} 
	else if( precision != "" && !isNaN(precision) &&  portion.length > precision )
	{
		ErrMsg = "The " + paraName + " you entered should have only "+precision+" digits after decimal point.";
	}	

	else if( minValue != "" && !isNaN(minValue) && GetFloat(fieldValue) < minValue )
	{
		ErrMsg = "The " + paraName + " you entered should be greater than or equal to "+minValue+".";
	}	
	else if( maxValue != "" && !isNaN(maxValue) && GetFloat(fieldValue) > maxValue )
	{
		ErrMsg = "The " + paraName + " you entered should be less than or equal to "+maxValue+".";
	}   
	return ErrMsg;	
}

function validateField(theField,checkType,minLimit,maxLimit,paraName,splCharString) 
{
   
	var ErrMsg="";	
	trimField(theField);
	var fieldValue = theField.value;
	//validation for not to be null
	if(fieldValue=="")
	{
	 	state=false;	
		ErrMsg = "Enter "+paraName+".\n";
		return ErrMsg;
	}
	
	
	//check for the type of value in the field
	if(checkType == "INT") 
	{
		if(isNaN(fieldValue)) 
		{			
			ErrMsg = "Entered data in " + paraName + " field is not a numeric value.\n";		
		}
		
		if(fieldValue.indexOf(".") != -1)
		{	
			ErrMsg = "Entered data for " + paraName + " should not be a decimal value.\n";			
		}
		
		if(GetInt(fieldValue) <= 0)
		{
			ErrMsg = paraName + " should be greater than 0";
		}		
	}
	else if(checkType == "FLOAT")
	{		
		 if(isNaN(fieldValue))
		{			
			ErrMsg = "The " + paraName + " you entered is not a numeric value.\n";		
		}
		
		if(GetFloat(fieldValue) <= 0)
		{
			ErrMsg = paraName + " should be greater than 0";
		}		
	}
	else if(checkType == "STRING")
	{
		for(var i=0; i <= (fieldValue.length - 1); i++)
				{	
					var theChar = fieldValue.substring(i,i+1);
					if( !( (theChar >= 'a' && theChar <= 'z') || (theChar >= "A" && theChar <= "Z") )&& theChar!=' ' && theChar!='.')
					{
					  ErrMsg=paraName + "  should not contain any numeric values.";
					}
			    }
					
	}
	else if((checkType == "STRING-ONLY") && (!isNaN(fieldValue)) )
	{
		ErrMsg = paraName  +  "  should not be a number.";
	}
	else if(checkType == "NAME")
	{
		if(!isNaN(fieldValue))
		{
			ErrMsg = paraName + " should not be a number.";
		}
		else
		{
			var firstchar = fieldValue.substring(0,1);
			if(!((firstchar >= 'a' && firstchar <= 'z') || (firstchar >= 'A' && firstchar <= 'Z')))
			{
				ErrMsg="The first character in the "+paraName+" should be an alphabet.";
			}
		}
	}
	else if(checkType == "EMAIL")
	{
		//alert("enter the EMAIL zone ");
		if(! isEmailId(fieldValue))
		{
			ErrMsg = "Enter a valid E-Mail address\n";
			//ErrMsg +="	ex: \" prasad@hydbad.tcs.co.in \" ";
		}
	}
	else if(checkType == "IPADDRESS")
	{
		if(! isIpAddress(fieldValue))
		{
			ErrMsg ="Enter valid IP address.\n";
		}
	}
	else if(checkType == "WEBADDRESS")
	{		
		if(fieldValue.indexOf(".") < 0)
		{
			ErrMsg ="Enter valid Web address.";
		}
		else
		{
			var arr = fieldValue.split('.');					
		
			if(arr.length < 3)
				ErrMsg ="Enter valid Web address.";	
					
			for(i=0;i<arr.length;i++)
			{
				if(arr[i].length == 0)
				{
					ErrMsg ="Enter valid Web address.";	
					break;
				}			
			}
		}
	}
	
	
	if(ErrMsg != '')
		return ErrMsg;
			
	//validation forthe length if given the length	
	if((maxLimit != "") && (!isNaN(maxLimit) ) )
		if(fieldValue.length > maxLimit )
		{
		
			ErrMsg = "The " + paraName + " you entered should not be longer than "+maxLimit+" characters.";
		
		}
		
		if(fieldValue.length <= minLimit )
		{
		
			ErrMsg = "The "+ paraName+" you entered must be longer than "+minLimit+" characters.";
		
		}
		

	 

	if(checkSplCharsExist(fieldValue,splCharString))
	{
		ErrMsg = "The " + paraName +" you entered should not have any special character.";
	}
	
	return ErrMsg;
}	




function trimField(TheField)
{
  if((TheField.type=='text') || (TheField.type=='textarea'))
  {
	var Strfldvalue=TheField.value;
	var Strtrmvalue="";
	var j=0;
    for(k=0; k<Strfldvalue.length; k++)
      {
       if(Strfldvalue.charAt(k)==" " )j++;
        else
         {
           if(j<Strfldvalue.length) Strtrmvalue=Strfldvalue.substring(j,Strfldvalue.length);
           break;
         }
       }    
     TheField.value=Strtrmvalue;
   }
}

function trimValue(Strfldvalue,trimChar,direction)
{
	var fieldValue = Strfldvalue;  	
	var j=0;
	if(direction =="LEFT" || direction=="BOTH")
	{
		j=0;
		for(var k=0; k<fieldValue.length;k++)
		{
			if(fieldValue.charAt(k)==" " || fieldValue.charAt(k)==trimChar) j++;
			else
			{
				if(j < fieldValue.length) 
				{
					fieldValue = fieldValue.substring(j,fieldValue.length);									
				}
				else
				{
					fieldValue="";
				}
				break;
		     }
		}        
	}	
	if(direction =="RIGHT" || direction=="BOTH")
	{
		j= fieldValue.length;
		for(var k=fieldValue.length-1;k>=0;k--)
		{
			if(fieldValue.charAt(k)==" " || fieldValue.charAt(k)==trimChar)
			{
				j--;
			}
			else
			{
				if(j > 0) 
				{
					fieldValue = fieldValue.substring(0,j);
				}
				else
				{
					fieldValue = "";
				}
		        break;
		     }
		}        	
	}	
	return fieldValue;
}



function checkSplCharsExist(fieldValue, splCharString)
{


 for(var i=0;i<splCharString.length;i++) 
 {
	
	if(fieldValue.indexOf(splCharString.charAt(i)) >= 0)
	{
		return true;
	}	
 }

 return false;
        
}


function GetInt(fieldValue)
{
	var intValue = ""+trimValue(fieldValue,'0','LEFT');	
	if(intValue.l=='')
	{
		intValue ='0';
	}
	return parseInt(intValue);
}

function GetFloat(fieldValue)
{
	var floatValue = trimValue(fieldValue,'0','LEFT');
	if(floatValue=='')
	{
		floatValue ='0';
	}
	return parseFloat(floatValue);
}


function isEmailId(parEmailId)
{
	var state=true;
	var count=0;
	var counta=0;
	var ErrMsg="";

	//no successive two dots
	for(var i=0; i<parEmailId.length-1; i++)
		if((parEmailId.charAt(i)==".")&&(parEmailId.charAt(i+1)=="."))
			state=false;                               
	//no successive two '@'
	for(var i=0; i<parEmailId.length-1; i++)
		if((parEmailId.charAt(i)=="@")&&(parEmailId.charAt(i+1)=="@"))
			state=false;                               


	//no successive '.'and'@'
	for(var i=0; i<parEmailId.length-1; i++)
		if((parEmailId.charAt(i)==".")&&(parEmailId.charAt(i+1)=="@"))
			state=false;

	//no successive'@' and '.'
	for(var i=0; i<parEmailId.length-1; i++)
		if((parEmailId.charAt(i)=="@")&&(parEmailId.charAt(i+1)=="."))
			state=false;

	//the number of "." should be atleast one
	for(i=0; i<parEmailId.length;i++)
	{
		if(parEmailId.charAt(i)==".")
			count=count+1;
	}
	
	if(count<1)
		state=false;

	//the first and last char cannot be "."
	var l= parEmailId.length;
		if((parEmailId.charAt(0)==".")||(parEmailId.charAt(l-1)=="."))
			state=false;
	
	//the first and last char cannot be "@"
	var l= parEmailId.length;
		if((parEmailId.charAt(0)=="@")||(parEmailId.charAt(l-1)=="@"))
			state=false;
	
	//aleast one "@"
	for(i=0; i<parEmailId.length;i++)
	{
		if(parEmailId.charAt(i)=="@")
			counta=counta+1;
	}
	if(counta<1)
		state=false;


	return state;

}

/*function GetDiffYears(dateValue)
{
	var date = new Date(dateValue);	
	var currentDate = new Date();
	var diff = parseInt(currentDate.getFullYear())-parseInt(date.getFullYear());
	var monthsDiff= parseInt(currentDate.getMonth())-parseInt(date.getMonth());
	if(monthsDiff >0) diff--;
	retrun diff;
}
*/
/*
This Function returns the Number of days in a month  
*/

function getDaysInMonth(Intmonth,Intyear) 
{
   var Intdays="";
   if (Intmonth==1 || Intmonth==3 || Intmonth==5 || Intmonth==7 ||      Intmonth==8 || Intmonth==10 || Intmonth==12) 
        Intdays=31;
   else if (Intmonth==4 || Intmonth==6 || Intmonth==9 || Intmonth==11)         Intdays=30;
   else if (Intmonth==2)  
   {
      if (IsLeapYear(Intyear))
         Intdays=29;
      else
         Intdays=28; 
   }
   return (Intdays);
}


/*
   Check for leap year         
*/

function IsLeapYear (IntYear) 
{
	if (((IntYear % 4)==0) && ((IntYear % 100)!=0) || ((IntYear % 400)==0)) 	{
  	   return (true);
	} 
	else 	
	{ 
 	   return (false); 
	}
}

/*
(1)
function to check whether the first date in the arguments is earlier // than second date      
*/
function compareDate(Intfrom_day,Intfrom_month,Intfrom_year,Intto_day,Intto_month,Intto_year)
{
	 compare_date(Intfrom_day,Intfrom_month,Intfrom_year,Intto_day,Intto_month,Intto_year)
}
   

/*(2)
function to check whether the first date in the arguments is earlier // than second date      
*/

function compare_date(xIntfrom_day,xIntfrom_month,xIntfrom_year,xIntto_day,xIntto_month,xIntto_year)
{
    var Isdate_earlier=true;
	var Intfrom_day = GetInt(xIntfrom_day);
	var Intfrom_month = GetInt(xIntfrom_month);
	var Intfrom_year = GetInt(xIntfrom_year);
	var Intto_day = GetInt(xIntto_day);
	var Intto_month = GetInt(xIntto_month);
	var Intto_year = GetInt(xIntto_year);

	 if(Intfrom_year<=Intto_year)
	 {
	    if(Intfrom_year==Intto_year)
	    {
			 if(Intfrom_month<=Intto_month)
			 {
			     if(Intfrom_month==Intto_month)
			     {
					 if(Intfrom_day<=Intto_day) ;
					 else Isdate_earlier=false;
			     }
			     else Isdate_earlier=true;
			 }                                    //if3
			 else Isdate_earlier=false;	  
    	 }                                     //if2
	    else Isdate_earlier=true;
	 }                                      //if1
	 else Isdate_earlier=false;
	 	return(Isdate_earlier);
}
function isEqualDate(xIntfrom_day,xIntfrom_month,xIntfrom_year,xIntto_day,xIntto_month,xIntto_year)
{
    var IsEqual = false;
	var Intfrom_day = GetInt(xIntfrom_day);
	var Intfrom_month = GetInt(xIntfrom_month);
	var Intfrom_year = GetInt(xIntfrom_year);
	var Intto_day = GetInt(xIntto_day);
	var Intto_month = GetInt(xIntto_month);
	var Intto_year = GetInt(xIntto_year);

	if(Intfrom_year==Intto_year && Intfrom_month == Intto_month && Intfrom_day == Intto_day)
	{
 		IsEqual = true;
	}                                      
	 return IsEqual;
}




/*
This function compares whether the given date is greater than 
  or equal to the current date.
  Return value : TRUE  -- if given date > current date
                 FALSE -- if given date < current date
*/

function isPastDate(Intfrom_day,Intfrom_month,Intfrom_year)
{
   today = new Date();
   var locDay = today.getDate();    
   var locMonth = today.getMonth();  
   var locYear = today.getYear();
  
  //check if the browser is netscape, add 1900 to year
   if(navigator.appName.indexOf("Netscape") != -1)
	locYear = locYear+1900;  

    if(locYear.toString().length<4) {locYear =locYear+1900;}
    
   locMonth++;

   locDay = GetInt(locDay,10);
	
   var isGreaterThan = compare_date(Intfrom_day,Intfrom_month,Intfrom_year,locDay,locMonth,locYear);
   if(isGreaterThan)
     return false;
   else
     return true;
}



/*(1-msg-compToCurrDate)
This function checks whether the required option is selected in dropdown menu or not
*/

function validateDate(field,paraName,compToCurrDate)
{
	var locDay="";
	var locMonth="";
	var locYear="";
	var ErrMsg="";
	
	var fieldValue = field.value;


	if(fieldValue=="")
	{
		ErrMsg = "Enter the " + paraName+".\n"
		return ErrMsg;
	}

	if(fieldValue.indexOf("/") < 0)
	{
		ErrMsg = "Enter valid " + paraName+"." ;
		return ErrMsg;
	}

	var arr = fieldValue.split("/");
	if(arr.length != 3)
	{
		ErrMsg = "Enter valid " + paraName+"." ;
		return ErrMsg;
	}

	locDay = arr[0];
	locMonth = arr[1];
	locYear = arr[2];
	

	for(i=0;i<arr.length;i++)
	{
	   
	   if(isNaN(arr[i]) || parseFloat(arr[i]) == 0)
	   {		
	
		ErrMsg = "Enter valid " + paraName+"." ;
		return ErrMsg;				
	   }

	   if(i <= 1)
	   {
  		if((arr[i].length == 0) || (arr[i].length > 2)  )
		{
	
			ErrMsg = "Enter valid " + paraName + ".";
			return ErrMsg;		
		}
	   }		   
	   else if(i == 2)
	   {
  		if((arr[i].length == 0) || (arr[i].length != 4)  )
		{
	
			ErrMsg = "Enter " + paraName + " in valid format. Year value should be in 'yyyy' format.";
			return ErrMsg;		
		}
		else if( GetInt(arr[i]) <1900)
		{
			ErrMsg = "Enter correct " + paraName + ".";
			return ErrMsg;		
		}
	   }
	}		

	if(!isDate(locDay, locMonth, locYear))		
	{
		ErrMsg = "Enter valid " + paraName+".";	
		return ErrMsg;
	}


	if(compToCurrDate == "LESS")
	{
		if(isPastDate(locDay, locMonth, locYear))
			 ErrMsg +=paraName+" should be a date prior to or equal to the current date.\n";
	}
	else if(compToCurrDate == "GREATER")								  
	{
		if(!isPastDate(locDay, locMonth, locYear))
			 ErrMsg +=paraName+" should be a date later than the current date.\n";		
	}
	
//Added By Dushyant jain on 26/july/2007 so as to compare that date should be equal to current date
	else if(compToCurrDate == "EQUAL")		 
	{
	   
	    if(isCurrentDate(locDay, locMonth, locYear))
	    ErrMsg +=paraName+" should be a date equal to current date.\n";	
		// to be added...isEqualDate
	}

	
	return ErrMsg;	

		
}

//Added By Dushyant jain on 26/july/2007 so as to compare that date should be equal to current date
function isCurrentDate(Intfrom_day,Intfrom_month,Intfrom_year)
{
   today = new Date();
   var locDay = today.getDate();    
   var locMonth = today.getMonth();  
   var locYear = today.getYear();
  
  //check if the browser is netscape, add 1900 to year
   if(navigator.appName.indexOf("Netscape") != -1)
	locYear = locYear+1900;  

   locMonth++;

   locDay = GetInt(locDay,10);
	
   var isEqual = isEqualDate(Intfrom_day,Intfrom_month,Intfrom_year,locDay,locMonth,locYear);
   if(isEqual)
     return false;
   else
     return true;
}




/* 
complete validation of a date field 
*/

function isDate(Theday, Themonth, Theyear){

	var stateday=false;
	var statemonth=false;
	var stateyear=false;
	var validDate=false;
	var daysgot="";

	daysgot=getDaysInMonth(Themonth,Theyear);

	if(Theday <= daysgot)
		validDate=true;

	return(validDate);
}




function splitDate(val,delim)
{
	var arr = val.split(delim);
	locDay = arr[0];
	locMonth = arr[1];
	locYear = arr[2];
	return arr;
}

function checkDates(field1,field2,fieldName1,fieldName2,constraint)
{
	var locDay1="";
	var locMonth1="";
	var locYear1="";
	var locDay2="";
	var locMonth2="";
	var locYear2="";
	
	var ErrMsg="";

	
	var arr1 = splitDate(field1.value,"/");
	var arr2 = splitDate(field2.value,"/");
	var isLessThan = compare_date(arr1[0],arr1[1],arr1[2],arr2[0],arr2[1],arr2[2]);
	var isEqual = isEqualDate(arr1[0],arr1[1],arr1[2],arr2[0],arr2[1],arr2[2]);
	if(constraint == 'EQUAL')
	{
		if(!isEqual)
		{
			ErrMsg = fieldName1 + " should be same as " + fieldName2+".";
		}
	}
	else if(constraint == 'LESS')
	{
		if(!isLessThan)
		{
			ErrMsg = fieldName1 + " should be prior to " + fieldName2+"." ;
		}
	}
	else if(constraint == 'GREATER')
	{
		if(isLessThan)
		{
			ErrMsg = fieldName1 + " should be later than " + fieldName2+".";
		}
	}
	else if(constraint == 'LESS&EQUAL')
	{
		if(!isLessThan && !isEqual)
		{
			ErrMsg = fieldName1 + " should be earlier than or same as " + fieldName2+"." ;
		}		
	}
	else if(constraint == 'GREATER&EQUAL')
	{
		if(isLessThan && !isEqual)
		{
			ErrMsg = fieldName1 + " should be later than or same as " + fieldName2+".";
		}
	}	
	return ErrMsg;
}
function checkEqual(field1, field2)
{	
	var arr1 = splitDate(field1.value,"/");
	var arr2 = splitDate(field2.value,"/");	
	return isEqualDate(arr1[0],arr1[1],arr1[2],arr2[0],arr2[1],arr2[2]);	
}
/*
function validatePhone(stdField,phoneField)
{
	var msg = "";
	if(stdField.value != '' || phoneField.value != '')
	{	
		msg = validateField(stdField,'INT','2','5','STD code','');
		if(msg.length > 0)
		{
			alert(msg);	
			stdField.focus();
			return false;
		}
		if(stdField.value == 0)
		{
			msg = "Enter valid STD code";
			alert(msg);	
			stdField.focus();
			return false;
		}
		if(stdField.value.charAt(0)=='0')
		{
			msg = "STD code should start with '0' ";
			alert(msg);	
			stdField.focus();
			return false;
		}	
				
		msg = validateField(phoneField,'INT','4','7','Telephone No.','');	 
		if(msg.length > 0)
		{
			alert(msg);	
			phoneField.focus();
			return false;
		}
		if(phoneField.value == 0)
		{
			msg  = "Enter valid phone no";
			alert(msg);	
			phoneField.focus();
			return false;		
		}		
		
		var length = stdField.value.length + phoneField.value.length;
		if(length < 10)
		{
			msg = "Complete phone no should not be less than 10 digits";
		}
		else if(length >10)
		{
			msg = "Complete phone no should not be more than 10 digits";
		}
		if(msg.length > 0)
		{
			alert(msg);	
			stdField.focus();
			return false;
		}
	}
	return true;
}
*/

function validatePincode(pincodeField,paraName,mandatory)
{
	var msg = "";
	if(mandatory == true || pincodeField.value.length>0)
	{
		msg = validateField(pincodeField,'INT','','',paraName,'');		
		if( msg =="" && pincodeField.value.length != 6)
		{
			msg = paraName + " should be six digits.";
		}
		var startDigit = pincodeField.value.substring(0,1);				
		if( msg=="" && startDigit!="4")
		{
			msg = "The " + paraName + " for Madhya Pradesh starts with 4.";			
		}
	}
	return msg;
}


/* To display progress bar while page load */

var _progressBar = new String("|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||");
var _progressEnd = 1000;
var _progressAt = 0;
var _progressWidth = 100;	// Display width of progress bar

// Create and display the progress dialog.
// end: The number of steps to completion
function ProgressCreate(end) 
{
	// Initialize state variables
	_progressEnd = end;
	_progressAt = 0;

	// Move layer to center of window to show
	if (document.all) 
	{	// Internet Explorer
		progress.className = 'show';
		progress.style.left = (document.body.clientWidth/2) - (progress.offsetWidth/2);
		progress.style.top = (document.body.clientHeight/2) - (progress.offsetHeight/2);
	} 
	else if (document.layers) 
	{	// Netscape
		document.progress.visibility = true;
		document.progress.left = (window.innerWidth/2) - 100;
		document.progress.top = (window.innerHeight/2) - 40;
	}

	ProgressUpdate();	// Initialize bar
}

// Hide the progress layer
function ProgressDestroy() 
{
	// Move off screen to hide
	if (document.all) 
	{	// Internet Explorer
		progress.className = 'hide';
	} 
	else if (document.layers) 
	{	// Netscape
		document.progress.visibility = false;
	}
}

// Increment the progress dialog one step
function ProgressStepIt() 
{
	_progressAt++;
	if(_progressAt > _progressEnd)
	{
		_progressAt = _progressAt % _progressEnd;
	}
	ProgressUpdate();
}

// Update the progress dialog with the current state
function ProgressUpdate() 
{
	var n = (_progressWidth / _progressEnd) * _progressAt;
	if (document.all) 
	{	// Internet Explorer
		var bar = dialog.bar;
 	} 
 	else if (document.layers) 
 	{	// Netscape
		var bar = document.layers["progress"].document.forms["dialog"].bar;
		n = n * 0.55;	// characters are larger
	}
	var temp = _progressBar.substring(0, n);
	bar.value = temp;
}

// Demonstrate a use of the progress dialog.
function Demo() 
{
	ProgressCreate(100);
	window.setTimeout("Click()", 100);
}

function Click() 
{
	if(_progressAt >= _progressEnd) 
	{
		ProgressDestroy();
		return;
	}
	ProgressStepIt();
	window.setTimeout("Click()", 500);
}

function CallLoadJS(jsStr) 
{ //v2.0
	return eval(jsStr)
}
	/*(1-msg-compToCurrDate)
This function checks whether the required option is selected in dropdown menu or not
*/
function validateDateField(field,paraName,compToCurrDate,isMandatory)
{

if(isMandatory)
{
   return  validateDate(field,paraName,compToCurrDate);
}
else{
           
            var fieldValue = field.value;
	        if(fieldValue=="")
	        {
        		
		        return true;
	        }
	        else
	        {
	        return  validateDate(field,paraName,compToCurrDate);
	        
	        }

}

}	
function PageLoadBody()
{
	document.write("<span id=\"progress\" class=\"hide\">");
	document.write("<FORM name=dialog>");
	document.write("<TABLE border=2   width=\"200\" class=\"tblheadbg\">");
	document.write("<TR><TD ALIGN=\"center\" class=\"tblheadtext\">");
	//document.write("<img src='/Portal/images/loading_icon.gif'><BR>");
	document.write("Loading, Please wait...<BR>");
	document.write("<input class = 'formbg1' type=text name=\"bar\" size=\"" + _progressWidth/2 + "\"");
	if(document.all) 	// Microsoft
	{
		document.write(" bar.style=\"color:white;\">");
	}
	else	// Netscape
	{
		document.write(">");
	}

	//document.write("<img src='/Portal/images/loading_icon.gif'>");
	document.write("</TD></TR>");
	document.write("</TABLE>");
	document.write("</FORM>");
	document.write("</span>");
	ProgressDestroy();
}

