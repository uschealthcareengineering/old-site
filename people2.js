// js for people2.html

function changeBorder(id,num) {
	if(num == 1) {
		document.getElementById(id).style.borderColor = 'gold';
	}
	else {
		document.getElementById(id).style.borderColor = '#990000';
	}
}

function ajax_ppl(Info) {
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
      document.getElementById('ppl_info').innerHTML=xmlHttp.responseText;
      }
  }


url = "people2.php?person="+Info;

  
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}
	
