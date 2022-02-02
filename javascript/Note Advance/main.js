const aregisterBtn = document.getElementById('register'); 
const logForm = document.getElementById('logInForm'); 
const registerForm = document.getElementById('Sign-up') ; 
const aLogInBtn = document.getElementById('aLogIn'); 
const registerBtn= document.getElementById('register-btn') ;

const userName = document.getElementById('User-name') ;
const email = document.getElementById('email') ; 
const password =document.getElementById('password') ; 
const rePass = document.getElementById("Re_pass") ;
const logInBtn =document.getElementById("logInBtn") ;
const username =document.getElementById('username') ;
const pass =document.getElementById('pass');
aregisterBtn.onclick=  ()=>swapToRegister();
     

function swapToRegister(){ 
    registerForm.style.display="block"; 
    logForm.style.display="none"; 
}
aLogInBtn.onclick = ()=> swapToLog();

function swapToLog(){ 
    logForm.style.display="block"; 
    registerForm.style.display="none";
}
// for store in localStorage . 
registerBtn.onclick=function() {
    
    
    if (userName.value =="" && email.value=="" && password.value=="" && rePass.value=="") { 
        swal({
            title: "Empty!",
            text: "you may to enter your user name, email and password!",
            icon: "error",
            button: "Ok!",
          });
        
    }else { 
        localStorage.setItem('name',userName.value); 
        localStorage.setItem('email',email.value); 
        if(password.value==rePass.value) { 
            localStorage.setItem('password',password.value) ; 

        } 
        else{ 
            swal({
                title: "Password!",
                text: "your password not identical!",
                icon: "warning",
                button: "Ok!",
              });
        }

    }
}
let counter=0; 

logInBtn.onclick=function(){
    
    if (counter<2) { 

    if(username.value=="Enas" && pass.value=="123" 
    || username.value==localStorage.getItem('name') && pass.value==localStorage.getItem('password')){ 
// go to to do page --> 
window.open('index.html','_self') ;
    }else{ 
        swal({
            title: "wrong user name or Password!",
            text: "Try again!",
            icon: "error",
            button: "Ok!",
          });
          counter++ ;
    }
 }else { 
     swapToRegister(); 
 }
}