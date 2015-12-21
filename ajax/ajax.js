function showResult(){
var request;
if (window.XMLHttpRequest) {
	request=new XMLHttpRequest;
}
else{
	request=new ActiveXObject("Microsoft.XMLHTTP"); 
}
request.onreadystatechange=function(){
	if (request.readyState==4 && request.status==200) {
		//document.getElementById('identity').innerHTML=request.responseText;
		var modify=document.getElementsByTagName('li');
		for (var i = 0; i < modify.length; i++) {
			modify[i].innerHTML=request.responseText;
		};
}
}
request.open('GET','ajax.xml');
request.send();
}