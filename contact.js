// JavaScript Document

function fieldempty(formid, picid)
{
//first checks to see if the form is filled out or left empty
textfield = document.getElementById(formid).value
if (textfield != '') {
		document.getElementById(picid).src="green.gif"
	}
else if (textfield == '') {
		document.getElementById(picid).src="red.gif"
	}
}

//email validation
function check_email(obj) {
email = obj.value

	if (email.indexOf('@',2)==-1 || email.indexOf('.',email.indexOf('@',2)+2)==-1)
		{
		document.getElementById('error').style.display = 'block';
		document.getElementById('red3').src='red.gif'
		obj.focus()
		}
	else
		{
		document.getElementById('error').style.display = 'none';
		document.getElementById('red3').src='green.gif';
		}
}

//this routine checks to see if all fields have a green image source next to it. if so, the form is completed correctly. if not, the user needs to modify before submission
function checkfields () {
if(document.getElementById('red1').src.indexOf('red.gif')!=-1 || document.getElementById('red3').src.indexOf('red.gif')!=-1 || document.getElementById('red4').src.indexOf('red.gif')!=-1 || document.getElementById('red5').src.indexOf('red.gif')!=-1){
		document.getElementById('SendEmail').disabled=true
}
else {
	document.getElementById('SendEmail').disabled=false
}
}

function erase_message()
{
if(document.getElementById('message1').value=='Type your message here.')
document.getElementById('message1').value=''
}

function ajax_email() {
var xmlHttp;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
  
xmlHttp.onreadystatechange=function()
  {
    if(xmlHttp.readyState==4) {
      document.getElementById('pages').innerHTML=xmlHttp.responseText;
      }
  }


email = document.getElementById('email').value;
name = document.getElementById('name').value;
subject = document.getElementById('subject1').value;
message = document.getElementById('message1').value;

url = "contact_process.php?Email="+email+"&Subject="+subject+"&Name="+name+"&Message="+message;

  
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}
	