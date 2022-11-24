let form1             = document.getElementById("signin");
let form2             = document.getElementById("signup");
let btnsignup         = document.getElementById("btnup") ;
let btnsignin         = document.getElementById("btnin");
let dash              = document.getElementById("dashboard");
let inst              = document.getElementById("instruments");
let leftt             = document.getElementById("left");
let rightt            = document.getElementById("right");


// sign-in validation variables 
let confirmemail =0;
let confirmpw=0;

let emailaddressi     = document.getElementById("emailaddressi");
let erreuremailin     = document.getElementById("erreuremailin");
let successemailin    = document.getElementById("successemailin");
let passwordi         = document.getElementById("passwordi");

let btnbuttonin       = document.getElementById("btnbuttonin");
let validRegex        = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
let passw             = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;




//  sig-up validation variables 
let confirmfirst           = 0;
let confirmlast            = 0;
let confirmemailaddress    =0;
let confirmpasswordu       =0;
let  confirmretypepasswordu=0;
 
let firstnameu             = document.getElementById("firstnameu");
let erreurfirst            = document.getElementById("erreurfirst");
let successfirst           = document.getElementById("successfirst");
let lastnameu              = document.getElementById("lastnameu");
let erreurlast             = document.getElementById("erreurlast");
let successlast            = document.getElementById("successlast");
let emailaddressu          = document.getElementById("emailaddressu");
let erreuremail            = document.getElementById("erreuremail");
let successemail           = document.getElementById("successemail");
let passwordu              = document.getElementById("passwordu");
let erreurpass             = document.getElementById("erreurpass");
let successpass            = document.getElementById("successpass");
let retypepasswordu        = document.getElementById("retypepasswordu");
let successpassword        = document.getElementById("successpassword");
let erreurpassword         = document.getElementById("erreurpassword");


let btnbuttomup            = document.getElementById("btnbuttomup");

//function show sign_up

function show_Sign_up(e){
    e.preventDefault();
    form2.style.display      ="block";  
    form1.style.display      ="none";  
    btnsignin.style.display  ="block";
    btnsignup.style.display  ="none";
}

//function show sign_in

function show_Sign_in(e){
    e.preventDefault();
    form1.style.display      ="block";  
}
function aside_left(e){
    e.preventDefault();
    dash.style.display       ="none";
    inst.style.display       ="none";
    rightt.style.display     ="block";
    leftt.style.display      ="none";

   
}
function aside_right(e){
    e.preventDefault();
    dash.style.display       ="block";
   
    inst.style.display       ="block";

    leftt.style.display      ="block";
    rightt.style.display     ="none";
    
}
// ------------------------------- validate sign-in --------------------------

function validate_email(){
if (emailaddressi.value=="" || !emailaddressi.value.match(validRegex)){
    erreuremailin.style.display="block";
    
    confirmemail=0;
    check_sign_in();
   // btnbuttonin.setAttribute("disabled");    
}else{
    erreuremailin.style.display="none";
    emailaddressi.className ="form-control border-success";
    confirmemail=1;
    check_sign_in();
}
}
function validate_pw(){
    if(passwordi.value=="" ){
        confirmpw=0;
        check_sign_in();

    }else{
        confirmpw=1;
        check_sign_in();
    }


}

function check_sign_in(){
    if(confirmemail==1 && confirmpw==1 ){
        btnbuttonin.disabled = false;
      //  btnbuttonin.removeAttribute("disabled")
    
    }
    else{
        btnbuttonin.disabled = true;
    }
}



// ------------------------------- validate sign-up --------------------------


function validate_first() {
    var regName  = /^([\w]{3,})+$/;
    
    if(!regName.test(firstnameu.value)){ 
        erreurfirst.style.display="block";
        successfirst.style.display="none";  
        confirmfirst =0;   
        check_sign_up();   
} else{
     erreurfirst.style.display="none";
     successfirst.style.display="block";  
     confirmfirst =1; 
     check_sign_up(); 

}
}

function validate_last() {
    var regName = /^([\w]{5,})+$/;
    
    if(!regName.test(lastnameu.value)){ 
        erreurlast.style.display="block";
        successlast.style.display="none";  
        confirmlast =0;   
        check_sign_up();   
} else{
     erreurlast.style.display="none";
     successlast.style.display="block";  
     confirmlast =1; 
     check_sign_up(); 

}
}

function validate_emailu(){
    if (emailaddressu.value=="" || !emailaddressu.value.match(validRegex)){
        erreuremail.style.display="block";
        successemail.style.display="none";
        confirmemailaddress=0;
        check_sign_up();
           
    }else{
        erreuremail.style.display="none";
        successemail.style.display="block";
        confirmemailaddress=1;
        check_sign_up();
    }
    }

    function validate_pwu(){
        if(passwordu.value==""  || !passwordu.value.match(passw)){
            erreurpass.style.display="block";
            successpass.style.display="none";
            confirmpasswordu=0;
            check_sign_up();
    
        }else{
            erreurpass.style.display="none";
            successpass.style.display="block";
            confirmpasswordu=1;
            check_sign_up();
        }
        if(retypepasswordu.value!=passwordu.value){
            erreurpassword.style.display="block";
            successpassword.style.display="none";
            confirmretypepasswordu=0;
            confirmpasswordu=0;
            check_sign_up();
        }
        else{
            erreurpassword.style.display="none";
            successpassword.style.display="block";
            confirmretypepasswordu=1;
            confirmpasswordu=1;
            check_sign_up();

        }
    }
        
    
    function validate_rpwu(){
        if(retypepasswordu.value==""  || !retypepasswordu.value.match(passw )){
            erreurpassword.style.display="block";
            successpassword.style.display="none";
            confirmretypepasswordu=0;
            check_sign_up();
    
        }else{
            erreurpassword.style.display="none";
            successpassword.style.display="block";
            confirmretypepasswordu=1;
            check_sign_up();
        }
        if(retypepasswordu.value!=passwordu.value){
            erreurpassword.style.display="block";
            successpassword.style.display="none";
            confirmretypepasswordu=0;
            confirmpasswordu=0;
            check_sign_up();
        }
        else{
            erreurpassword.style.display="none";
            successpassword.style.display="block";
            confirmretypepasswordu=1;
            confirmpasswordu=1;
            check_sign_up();

        }
    }    




function check_sign_up(){
    if(confirmfirst==1  && confirmlast==1 && confirmemailaddress==1 &&  confirmpasswordu==1 && confirmretypepasswordu==1){
        btnbuttomup.disabled = false;
      //  btnbuttonin.removeAttribute("disabled")
    
    }
    else{
        btnbuttomup.disabled = true;
    }
}
function display(id,name,description,price,quantity,image,admin_id){
    let name10                    = document.getElementById("name10");
    let description10             = document.getElementById("description10");
    let price10                   = document.getElementById("price10");
    let quantity10                = document.getElementById("quantity10");
    document.getElementById("tmp_image").value = image;
    document.getElementById("id_i").value = id // id_i = id instrument
    name10.value             = name;
    description10.value      = description;
    price10.value            = price;
    quantity10.value         = quantity;
}




    


 

