let requestURL = 'movies.json'; 
let request = new XMLHttpRequest(); 
request.onreadystatechange = function () { 
    if (request.readyState == 4 && request.status == 200) {
        dataReportStatus(JSON.parse(request.responseText));
    } };
request.open("GET", requestURL, true); 
request.send(); 
function dataReportStatus(data) {
    var toGo = document.getElementById("in");
    var toInnerShowing = document.createElement("div");
    var toInnerSoon = document.createElement("div");
    var temp = '<div class="row"><div class="col-12"><h2 class="ml-3 mb-4">Showing</h2></div></div><div class="row mb-5">';
    for (let i = 0; i < data.movies.showing.length; i++) {
        if(i%4 == 0 && i != 0){
            temp += '</div><div class="row mb-5">';
        }temp += '<div class="col-3"><div class="card"><div class="card-body"><img class="mb-3" src="'+data.movies.showing[i].poster+'"><h5 class="card-title align"><b>'+data.movies.showing[i].title_th+'</b></h5><p class="card-text align">Release Date : '+data.movies.showing[i].releasedate+'</p><button class="btn btn-primary w100">เช็ครอบโรงหนัง</button></div></div></div>';
    }toInnerShowing.innerHTML = temp;
    toGo.appendChild(toInnerShowing);
    temp = '<div class="row"><div class="col-12"><h2 class="ml-3 mb-4">Coming Soon</h2></div></div><div class="row mb-5">';
    for (let i = 0; i < data.movies.comingsoon.length; i++) {
        if(i%4 == 0 && i != 0){
            temp += '</div><div class="row mb-5">';
        }temp += '<div class="col-3"><div class="card"><div class="card-body"><img class="mb-3" src="'+data.movies.comingsoon[i].poster+'"><h5 class="card-title align"><b>'+data.movies.comingsoon[i].title_th+'</b></h5><p class="card-text align">Release Date : '+data.movies.showing[i].releasedate+'</p><button class="btn btn-primary w100">เช็ครอบโรงหนัง</button></div></div></div>';
    }toInnerSoon.innerHTML = temp;
    toGo.appendChild(toInnerSoon);
}