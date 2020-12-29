function submit_Form_Ajax() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        document.getElementById('output').innerHTML = '<center><h1>Äang láº¥y dá»¯ liá»‡u trang...Vui lĂ²ng Ä‘á»£i...</h1></center><br>';
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
           if(xmlhttp.status == 200){
               document.getElementById("output").innerHTML = xmlhttp.responseText;
           }
        }
    }
    
    var filename = document.getElementById('domain').value;
    
    xmlhttp.open("GET", "check.php?domain=" + filename, true);
    xmlhttp.send();
}  