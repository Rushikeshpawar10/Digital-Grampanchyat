function checkForm(){
	if(document.getElementById('formtypeselect').value=='death')
	{
		document.getElementById('deathage').value='';
		document.getElementById('deathage').disabled=false;
		document.getElementById('deathreason').value='';
		document.getElementById('deathreason').disabled=false;
	}
	else
	{
		document.getElementById('deathage').value='NA';
		document.getElementById('deathage').disabled=true;
		document.getElementById('deathreason').value='NA';
		document.getElementById('deathreason').disabled=true;
	}	
}

window.onload=function(){
	document.getElementById('deathage').value='NA';
	document.getElementById('deathage').disabled=true;
	document.getElementById('deathreason').value='NA';
	document.getElementById('deathreason').disabled=true;
}