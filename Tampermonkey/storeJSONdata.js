// ==UserScript==
// @name         Store JSON-data
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Store JSON-data in database
// @author       You
// @match        http://localhost/jsongenerator.html
// @grant        all
// @require      http://code.jquery.com/jquery-2.1.0.min.js
// ==/UserScript==

$(document).ready(function(){
     if (localStorage.getItem("clicks")) {
         if (localStorage.getItem("clicks") < 10) {
         localStorage.setItem("clicks",Number(localStorage.getItem("clicks"))+1);
         $("#storeJSON").click();
         }
     }else {
         localStorage.setItem("clicks", 0);
     }
});