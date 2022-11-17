let form1 = document.getElementById("signin");
// form1.style.display="none";
let form2 = document.getElementById("signup");
let dash = document.getElementById("dashboard");
let inst = document.getElementById("instruments");
let leftt =document.getElementById("left");
let rightt = document.getElementById("right");
// form2.style.display="none";
// form1.style.display="block";
// form2.style.display="block";
let btnsignup=document.getElementById("btnup") ;
// btnsignup.style.display="none";
let btnsignin=document.getElementById("btnin");
// btnsignin.style.display="none";
// btnsignup.style.display="block";
// btnsignin.style.display="block";
function show_Sign_up(e){
    e.preventDefault();
    form2.style.display="block";  
    form1.style.display="none";  
    btnsignin.style.display="block";
    btnsignup.style.display="none";
}
function show_Sign_in(e){
    e.preventDefault();
    form1.style.display="block";  
}
function aside_left(e){
    e.preventDefault();
    dash.style.display="none";
    inst.style.display="none";
    rightt.style.display="block";
    leftt.style.display="none";
}
function aside_right(e){
    e.preventDefault();
    dash.style.display="block";
    inst.style.display="block";
    leftt.style.display="block";
    rightt.style.display="none";
    
}

    


 

