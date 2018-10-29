var seconds = 5;
var timeLimit = seconds;

function validate(myForm)
{
	myForm.send.disabled = true;
	setValue(myForm);
}
function setValue(myForm)
{
	myForm.send.value = "Please wait "+timeLimit +" seconds to submit";
	timeLimit --;
	if(timeLimit >= 0)
		 setTimeout("setValue(myForm)",1000)
	else
		 enableIt(myForm)

}
function enableIt(myForm){
	myForm.send.style.display = 'none';
//	myForm.send.disabled = false;
//	timeLimit = seconds;
	//document.getElementById("send1").style.display='block';

}
