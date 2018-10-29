// JScript File

    window.onerror = function (sMessage, sUrl, sLine) 
    {


    try
        {
           
           
           
           //alert(sMessage+'--'+sLine+'--'+sUrl);
               
               // var Elem=document.createElement("span")
//                    Elem.style.color="#FF0101";
//                    Elem.innerHTML="<br/> Error:<b>" + sMessage +"</b> on line <i>" + sLine+ "</i> ";
//                    Elem.style.textAlign="center";
//                    Elem.style.width="100%";
                   //Not Working   all  time    failing  on  
                   //error occured  before the  formation of body (Ofcourse it's obviouly document.body is null)
                   //document.body.appendChild(Elem);

              //Alternative Solution
             //Temp Fix..
                     //document.write(Elem.outerHTML);
           
         
            
           
      }
      catch(err)
      {
                  //alert(err.name+"-"+err.message);
                  //Later we may use this place to Log  
                  //the client side errors through XMLHttp(i.e. AJAX) 
      }
      
      return true;
      
  }

