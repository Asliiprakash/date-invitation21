const yesBtn = document.getElementById("yesBtn");
const maybeBtn = document.getElementById("maybeBtn");
const noBtn = document.getElementById("noBtn");


function sendResponse(answer) {

    window.location.href =
        "response.php?answer=" +
        encodeURIComponent(answer);

}


yesBtn.addEventListener("click", function () {

    sendResponse("Yes");

});


maybeBtn.addEventListener("click", function () {

    sendResponse("Maybe");

});


noBtn.addEventListener("click", function () {

    sendResponse("No");

});