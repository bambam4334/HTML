let requestURL = 'superheroes.json'; 
let request = new XMLHttpRequest(); 
request.onreadystatechange = function () { 
    if (request.readyState == 4 && request.status == 200) {             
        dataReportStatus(JSON.parse(request.responseText));            
    } }; 
request.open("GET", requestURL, true); 
request.send(); 
function dataReportStatus(data) {
    for (let i = 0; i < data.team.length; i++) {    
        var toInner = document.createElement("div");
        toInner.innerHTML = data.team[i].ID+" <b>"+data.team[i].Firstname+" "+data.team[i].Lastname+"</b> ("+data.team[i].Gender+") is a "+data.team[i].Position+", "+data.team[i].Address+" <br>";
        document.body.appendChild(toInner);
    } 
}