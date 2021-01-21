function song01() {
    var playlist = document.getElementById("playlist");
    if(playlist != null){
        playlist.remove();
    }var toAdd = document.getElementById("songAdd");
    var cardOut = document.createElement("div");
    var cardBody = document.createElement("div");
    var cover = document.createElement("img");
    var song = document.createElement("p");
    var artist = document.createElement("p");
    cardOut.setAttribute("class", "card between");
    cardBody.setAttribute("class", "card-body");
    cover.setAttribute("class", "fcover");
    cover.setAttribute("src", "https://i.ibb.co/vDs4m92/dessertcover.jpg");
    song.setAttribute("class", "fsong");
    artist.setAttribute("class", "fartist");
    song.innerHTML = "Dessert";
    artist.innerHTML = "HYO, Loopy, SOYEON of (G)I-DLE";
    toAdd.appendChild(cardOut);
    cardOut.appendChild(cardBody);
    cardBody.appendChild(cover);
    cardBody.appendChild(song);
    cardBody.appendChild(artist);
}

function song02() {
    var playlist = document.getElementById("playlist");
    if(playlist != null){
        playlist.remove();
    }var toAdd = document.getElementById("songAdd");
    var cardOut = document.createElement("div");
    var cardBody = document.createElement("div");
    var cover = document.createElement("img");
    var song = document.createElement("p");
    var artist = document.createElement("p");
    cardOut.setAttribute("class", "card between");
    cardBody.setAttribute("class", "card-body");
    cover.setAttribute("class", "fcover");
    cover.setAttribute("src", "https://i.ibb.co/820NfKK/monstercover.jpg");
    song.setAttribute("class", "fsong");
    artist.setAttribute("class", "fartist");
    song.innerHTML = "Monster";
    artist.innerHTML = "Red Velvet - IRENE & SEULGI";
    toAdd.appendChild(cardOut);
    cardOut.appendChild(cardBody);
    cardBody.appendChild(cover);
    cardBody.appendChild(song);
    cardBody.appendChild(artist);
}

function song03() {
    var playlist = document.getElementById("playlist");
    if(playlist != null){
        playlist.remove();
    }var toAdd = document.getElementById("songAdd");
    var cardOut = document.createElement("div");
    var cardBody = document.createElement("div");
    var cover = document.createElement("img");
    var song = document.createElement("p");
    var artist = document.createElement("p");
    cardOut.setAttribute("class", "card between");
    cardBody.setAttribute("class", "card-body");
    cover.setAttribute("class", "fcover");
    cover.setAttribute("src", "https://i.ibb.co/f0VNfrZ/bdcover.jpg");
    song.setAttribute("class", "fsong");
    artist.setAttribute("class", "fartist");
    song.innerHTML = "The Baddest";
    artist.innerHTML = "K/DA, (G)I-DLE, Wolftyla, Bea Miller, League of Legends";
    toAdd.appendChild(cardOut);
    cardOut.appendChild(cardBody);
    cardBody.appendChild(cover);
    cardBody.appendChild(song);
    cardBody.appendChild(artist);
}