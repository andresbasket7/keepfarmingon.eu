// ajax code by webdream.ie

var ua = navigator.userAgent.toLowerCase();

if (document.getElementById || document.all) 
 {document.write('<div id="wd_div1" name="wd_div1"></div>');}
	
function verify()
	{
	    var number = '';var code_id = '';
	    if(document.getElementById('numbercode'))
	     {number = document.getElementById('numbercode').value;code_id = document.getElementById('code_id').value;}
		
	    requestAJAX('http://'+window.location.hostname+'/ajax/ajax.php?check='+number+'&code_id='+code_id);
	 return false;
	}	

 function requestAJAX(query)
	{ 
	var elid = 'wd_div1';
	var result = '-1';
	var req = null; 
	if (window.XMLHttpRequest){req = new XMLHttpRequest();} 
	else if (window.ActiveXObject) {try {req = new ActiveXObject("Msxml2.XMLHTTP");}catch (e){try {req = new ActiveXObject("Microsoft.XMLHTTP");}catch (e) {}}}
	req.onreadystatechange = function()
		{ 
			if(req.readyState == 4)
				{
						if(req.status == 200)
							{
							  document.getElementById(elid).innerHTML = req.responseText;
							//  
							      
							     if(document.getElementById('numbercode'))
								  {
							
	                                   result = document.getElementById('numbercode').value;
							          // alert (result);
	                                   if(result!=''){document.forms['form1'].submit();return true;}
								  }
							}	
						else	
							{
							document.getElementById(elid).innerHTML = "Error";
							}	
				} 
		}; 
	req.open("GET", query, true); 
	req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	req.send(null); 
	} 
	
	verify();