function cToF() {
    //Celcius to farenheit
    var celcius = document.getElementById("celsius").value;
    var toF = (celcius * 9/5) + 32;
    Document.getElementById("fahrenheit").value = toF;
}

function kgsToLbs() {
    //Kgs to Pounds
    let kgs = document.getElementById("kgs").value;
    let toPounds = kgs * 2.2;
    document.getElementById("pounds").value = toPounds;
}

function kmsToMiles() {
    //Kms to Miles
    let km = document.getElementById('kms').value;
    let toMiles = km * 0.62137;
    document.getElementById("miles").value = toMiles;
 }
