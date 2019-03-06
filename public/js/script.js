let name = document.querySelector("#name");
let form = document.querySelector("#order")
let surname = document.querySelector("#surname");
let data = document.querySelector("#data");
const drug = document.querySelector("#drug");
const clearBtn = document.querySelector(".clearBtn");
const showBtn = document.querySelector(".sendBtn");
const clear = document.querySelectorAll(".clear");
const hide = document.querySelector(".hide");
const hideSurname = document.querySelector(".hideSurname");
const hideData = document.querySelector(".hideData");
const hideDrug = document.querySelector(".hideDrug");

form.onSubmit = function(e) {
    e.preventDefault();

    let valName = name.value.trim();
    let valSurname = surname.value.trim();
    let valData = data.value.trim();
    let valDrug = drug.value.trim();
    const regName = /^[a-zA-ZąĄćĆęĘłŁńŃóÓśŚźżŻ]{3,}$/g;
    const regSurname = /^[a-zA-ZąĄćĆęĘłŁńŃóÓśŚźżŻ]{2,}$/g;
    const regData = /^\d{4}-\d{2}-\d{2}$/g;

    if (valName) {
        valName.toLowerCase();
    }
    if(!valName.length){
        hide.classList.add("show");
        hide.style.display = "block";
    } else if (!regName.test(valName)){
        hide.classList.add("show");
        hide.style.display = "block";
    } else {
        hide.classList.remove("show");
        hide.style.display="none";
    }

    if(valSurname){
        valSurname.toLowerCase();
    }
    if(!valSurname.length){
        hideSurname.classList.add("showSurname");
        hideSurname.style.display = "block";
    } else if (!regSurname.test(valSurname)){
        hideSurname.classList.add("showSurname");
        hideSurname.style.display = "block";
    } else {
        hideSurname.classList.remove("showSurname");
        hideSurname.style.display="none";
    }
    if(!valData.length){
        hideData.classList.add("showData");
        hideData.style.display = "block";
    } else if (!regData.test(valData)){
        hideData.classList.add("showData");
        hideData.style.display = "block";
    } else {
        hideData.classList.remove("showData");
        hideData.style.display="none";
    }

    if(!valDrug.length){
        hideDrug.classList.add("showData");
        hideDrug.style.display="block";
    } else {
        hideDrug.classList.remove("showData");
        hideDrug.style.display="none";
    }
console.log('asdkl');
};





