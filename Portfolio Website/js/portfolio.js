import React from "react"; 
import ReactDOM from "react-dom"; 
var docWindow; 
function openNav() {
  document.getElementById("sideNav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("sideNav").style.width = "0";
}
function openDoc(){
	docWindow = window.open("kristianwilleyresume.docx"); 
}
function closeDoc(){
	docWindow.close(); 
}

$('.buttons .button .btn-spacing').delay(1000).animate({"opacity":"1"}, 700); 

/*$("#test p").delay(1000).animate({"opacity":"1"}, 700); */ 


