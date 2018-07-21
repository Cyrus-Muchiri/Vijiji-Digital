//Create and AJAX object
var xhttp;
if (window.XMLHttpRequest) {
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xhttp.onreadystatechange = function (){
    if (xhttp.readyState == 4 && xhttp.status == 200){
        document.getElementById('id ya hiyo part').innerHTML = xhttp.responseText;
    }
}
xhttp.open('POST', '../chats.php' ,true);
xhttp.send();
//This is the response from the server
//Insert it into the html element to display it
document.getElelmentById("demo").innerHTML = xhttp.responseText;