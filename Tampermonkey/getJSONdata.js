// ==UserScript==
// @name         Get JSON-data
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Retrieve data from database
// @author       You
// @match        http://localhost/getBLOB.php
// @grant        all
// @require      http://code.jquery.com/jquery-2.1.0.min.js
// ==/UserScript==

$(document).ready(function(){
    var valueOfSearch = document.getElementById("inputData").value;
    var valueToAdd = parseInt(valueOfSearch);
    if (valueToAdd < 10){
        document.getElementById("inputData").setAttribute('value',(valueToAdd+1));
        document.getElementById("inputData").innerHTML = (valueToAdd+1);
        $("#getData").click();
    }
});