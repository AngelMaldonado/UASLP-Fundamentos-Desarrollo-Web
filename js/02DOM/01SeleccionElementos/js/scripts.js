/******************************************
 *  Author : Angel Maldonado   
 *  Created On : Tue Jul 05 2022
 *  File : scripts.js
 *******************************************/
// querySelector
const heading = document.querySelector(".header__texto h2"); // 0 o 1 elemento
heading.textContent = "Nuevo heading";
console.log(heading);

// querySelectorAll
const enlaces = document.querySelectorAll(".navegacion a");
enlaces[0].textContent = "Nuevo enlace";
console.log(enlaces[0]);

// getElementById
const heading2 = document.getElementById("heading");
console.log(heading2);
