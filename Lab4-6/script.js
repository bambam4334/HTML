var select = 0;
function changeTo1() {
    select = 1;
    var replyTo = document.getElementById("theReply");
    replyTo.innerHTML = "Reply To : What's Your Name ?";
}

function changeTo2() {
    select = 2;
    var replyTo = document.getElementById("theReply");
    replyTo.innerHTML = "Reply To : How Old Are You ?";
}

function changeTo3() {
    select = 3;
    var replyTo = document.getElementById("theReply");
    replyTo.innerHTML = "Reply To : What's Your Favorite Hobby ?";
}

function sendTo() {
    var selector = document.getElementById("node"+select);
    var ans = document.getElementById("answer").value;
    var getIn = document.createElement("p");
    getIn.innerHTML = ans;
    selector.appendChild(getIn);
}