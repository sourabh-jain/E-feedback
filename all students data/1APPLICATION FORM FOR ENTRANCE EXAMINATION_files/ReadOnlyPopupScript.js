function PrintThisPage1()    //1
{
	 PrintElementWithCSS1('PrintContent','');
}

function PrintElementWithCSS1(EId,css)   //1.1
{
       // alert(EId);
	   var sWinHTML ='';var sHeadingHTML = '';
	   if(document.getElementById(EId)!=null)
	  {
		    sWinHTML = document.getElementById(EId).innerHTML;	
	  }
      if(document.getElementById('headingContent')!=null)
	  {
		    sHeadingHTML = document.getElementById('headingContent').innerHTML;
	  }
	     
	  var CSSPath= new Array();
	  CSSPath[0]='/Portal/Headers/OldPortalStyles.css';
	  CSSPath[1]='/Portal/Headers/NewPortalStyles.css';
	  if(css!='')
	  {
	    CSSPath[2]=css;
	  }
	  PrintContent1(sHeadingHTML,sWinHTML,CSSPath);
	    
}

function PrintContent1(sHeadingHTML,sWinHTML,CSSPath) //1.1.1
{
        //Modified for XHTML-Compatibility
        
         var sOption="toolbar=no, location=no,directories=No,menubar=no,scrollbars=yes,width=1024,height=900,left=100,top=25";
	     var winprint=window.open("","",sOption);
	     //var ww = Components.classes["@mozilla.org/embedcomp/window-watcher;1"].getService(Components.interfaces.nsIWindowWatcher);
	     //winprint = ww.openWindow(null, '', null, sOption, null);
    	 
	 
        //winprint = winWrapper.open('', '', sOption);
	
	    var CSSContent='';
	            
//                  for (var tempI = 0; tempI < CSSPath.length; tempI++)
//                      {
//                         CSSContent=CSSContent+'<link href="'+CSSPath[tempI]+'" rel="Stylesheet" />\n';
//                    }	 	
                
              
       
	 	           // winprint.document.write('<link href="/Portal/Headers/OldPortalStyles.css" rel="Stylesheet" /><link href="/Portal/Headers/NewPortalStyles.css" rel="Stylesheet" /><body>');
	            var Content='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\n<html  xmlns="http://www.w3.org/1999/xhtml" >\n';
	            Content =Content+'\n<head >\n'+CSSContent+'<script type="text/javascript" language="javascript">function loadKeyboardLayouts(){var a;a="";}</script></head>\n';
	            Content =Content+'<body>'+'<table align=center>'+'<tr><td>' + sHeadingHTML + '</td></tr>';
	            Content =Content+'<tr><td>' + sWinHTML + '</td></tr>';
	            Content =Content+'</table>';
	            Content =Content+'</body>';
	            Content =Content+'</html>';
	            Content =Content+'<script type="text/javascript" language="javascript">var x=document.getElementsByTagName("input");var i=0; for(i=0;i<x.length;i++){x[i].disabled=true; } var y=document.getElementsByTagName("select");var j=0; for(j=0;j<y.length;j++){y[j].disabled=true; }</script>';

	           //var str1="<script type='text/javascript' language='javascript'>var x=document.getElementsByTagName(\"input\");alert(x);x.disabled=disabled;</script>";
	             
                // alert(Content);
                
                
                winprint.document.open();
                winprint.document.write(Content);
                winprint.document.close();
                         
               // winprint.focus();
                     
	                       // winprint.print();
	                       // winprint.close();
                            //	      var winWrapper = new XPCNativeWrapper(window, 'open()');   
                            //	      winprint = winWrapper.open(winprint, '', sOption);    
                    	            
	                        //    winprint.document.open();
	                        //   winprint.document.write(Content);
	                        //  winprint.document.close();
	     
	}

    