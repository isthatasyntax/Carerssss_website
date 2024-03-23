// Made by Nishka

//function to show more details about appointment
function openMoreDetails(clickedID) {

    var buttonText = document.getElementById(clickedID);
    idNum = clickedID.slice(-1);
    var moreText = document.getElementById("moreText" + idNum);

    if (moreText.style.display === "inline") {
        buttonText.innerHTML = "More Details";
        moreText.style.display = "none";
    }
    else {
        buttonText.innerHTML = "Show Less";
        moreText.style.display = "inline";
    }
}

//call patient when button is clicked
function callPatient() {
    // Replace number with patients phone number
    //this feature will only work on a device capable of making phone calls
    window.location.href = "tel:+447918383931";
}