let requestURL = 'countries.json'; 
let request = new XMLHttpRequest(); 
request.onreadystatechange = function () { 
    if (request.readyState == 4 && request.status == 200) {             
        dataReportStatus(JSON.parse(request.responseText));            
    } }; 
request.open("GET", requestURL, true); 
request.send(); 
function dataReportStatus(data) {
    for (let i = 0; i < data.length; i++) {    
        var toInner = document.createElement("div");
        var border = '';
        for(var j=0; j<data[i].borders.length; j++){
            border += data[i].borders[j]+' ';
        }toInner.innerHTML = '<div class="container m-5"><div class="row"><div class="col-4 m-auto">Name : <b>'+data[i].name+'</b><br>Capital : '+data[i].capital+'<br>Population : '+data[i].population+'<br>Region : '+data[i].region+'<br>Location : '+data[i].latlng[0]+', '+data[i].latlng[1]+'<br>Borders : '+border+'</div><div class="col-1"></div><div class="col-7 m-auto"><img src="'+data[i].flag+'"></div></div></div>';
        document.body.appendChild(toInner);
    }
}