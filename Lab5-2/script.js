let requestURL = 'person.json'; 
let request = new XMLHttpRequest(); 
request.onreadystatechange = function () { 
    if (request.readyState == 4 && request.status == 200) {             
        dataReportStatus(JSON.parse(request.responseText));            
    } }; 
request.open("GET", requestURL, true); 
request.send(); 
function dataReportStatus(data) {
    var toInner = document.createElement("div");
    toInner.innerHTML = data[0].firstName+" "+data[0].lastName+", "+data[0].gender.type+" ";
    toInner.innerHTML += data[0].age+" years old.<br>"+data[0].address.streetAddress+" "+data[0].address.city+" "+data[0].address.state+"<br>";
    toInner.innerHTML += data[0].address.postalCode+"<br>";
    for(let j=0; j<data[0].phoneNumber.length; j++){
        toInner.innerHTML += data[0].phoneNumber[j].type+" : "+data[0].phoneNumber[j].number+"<br>";
    }
    document.body.appendChild(toInner);
}