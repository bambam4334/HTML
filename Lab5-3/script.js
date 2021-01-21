let requestURL = 'questionAnswerData.json'; 
let request = new XMLHttpRequest(); 
request.onreadystatechange = function () { 
    if (request.readyState == 4 && request.status == 200) {             
        dataReportStatus(JSON.parse(request.responseText));            
    } }; 
request.open("GET", requestURL, true); 
request.send();
function dataReportStatus(data) {
    for(var i=1; i<=data.length; i++){
        var toInner = document.createElement("div");
        toInner.innerHTML = "<br>"+i+") "+data[i-1].question+"<br>";
        toInner.innerHTML += '<input type="radio" name="select'+i+'"><label> '+data[i-1].answers.a+'</label><br><input type="radio" name="select'+i+'"><label> '+data[i-1].answers.b+'</label><br><input type="radio" name="select'+i+'"><label> '+data[i-1].answers.c+'</label>';
        document.body.appendChild(toInner);
    }var c = document.createElement("div");
    c.innerHTML = "<br>";
    document.body.appendChild(c);
}