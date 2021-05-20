function CheckPassword(){
    const password = document.getElementById("PASSWORD").value;
    const rePassword = document.getElementById("RE-PASSWORD").value;
   const prob =  document.getElementById("checkpassword");
    console.log(password);
    console.log(rePassword);
    if (password === rePassword) {
        prob.innerText="Password Matched";

    }
    else{
        prob.innerText="Password isn't Match";
    }
// console.log("HIHIHIIH");

}


