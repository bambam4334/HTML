let requestURL = 'music.json'; 
let request = new XMLHttpRequest(); 
request.onreadystatechange = function () { 
    if (request.readyState == 4 && request.status == 200) {             
        dataReportStatus(JSON.parse(request.responseText));            
    } }; 
request.open("GET", requestURL, true); 
request.send(); 
function dataReportStatus(data) {
    var toGo = document.getElementById("in");
    var toInner = document.createElement("div");
    var temp = '<h2 class="mb-4">Recently Played<h2><div class="row">';
    for (let i = 0; i < data.length; i++) {
        temp += '<div class="col-2 mb-4"><div class="card"><div class="card-body"><img src="'+data[i].image+'"><div class="card-title mt-3"><h5><b>'+data[i].song+'</b></h5><div class="card-text"><p>'+data[i].artist+'</p></div></div></div></div></div>';
    }toInner.innerHTML = temp;
    toGo.appendChild(toInner);
}