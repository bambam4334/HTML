var n = 1;
function toTable() {
    var fCode = document.getElementById("code").value;
    var fFirst = document.getElementById("first").value;
    var fLast = document.getElementById("last").value;
    var fTbody = document.getElementById("idtbody");
    var ft = document.createElement("table");
    var ftr = document.createElement("tr");
    var ftd00 = document.createElement("td");
    var ftd01 = document.createElement("td");
    var ftd02 = document.createElement("td");
    var ftd03 = document.createElement("td");
    ftd00.innerHTML = n;ftr.appendChild(ftd00);n++;
    ftd01.innerHTML = fCode;ftr.appendChild(ftd01);
    ftd02.innerHTML = fFirst;ftr.appendChild(ftd02);
    ftd03.innerHTML = fLast;ftr.appendChild(ftd03);
    fTbody.appendChild(ftr);
}