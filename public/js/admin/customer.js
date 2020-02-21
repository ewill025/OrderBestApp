/*jshint esversion: 6 */

document.body.onload = () => {
    let showFormBtn = document.getElementById("show-new-Customer-form");
    let newCustomerForm = document.getElementById("form-holder");
    newCustomerForm.style.display = "none";

    showFormBtn.onclick = () => {
        if(newCustomerForm.style.display == "none"){
            newCustomerForm.style.display = "block";
        }else{
            newCustomerForm.style.display = "none";
        }
    };
};
