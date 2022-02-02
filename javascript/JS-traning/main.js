const arr1= ['JAN','FEB','MAR','APR','MAY'] ;
let arr2 ; 
(function(){ 
    arr2=[...arr1]; //we saved a element inside the object in arr2 ,but in the last case we saved all-object inside arr2 ; 
    arr1[0]='potato' ; 

})();
console.log(arr2) ;

function makeClass() { 
    
    class tempratuerInCilcuse { 
   
        constructor(x) { 
           this._result= x*30; 
        }
        get tempreture() { 
            return this._result ;
        } 
        set tempreture(newTemp) { 
            this._result=newTemp ;
        } 
    
    }
    return tempratuerInCilcuse ;
}
const make = makeClass() ;
 const thermos = new make(3) ; 
let temp =thermos.tempreture;
console.log(temp) ;  



// const myHTMLMarup = ` 
// <div class="countiner-fluaid bg-dark ">
// <div class="p-3 text-light">
// <h1> hello </h1> 
// <p style="color:red;"> iam mohammad shdooh code from javaScript . </p> 
// <a  href="#" class="text-warning"> click on me </a>  
// <h3 class="text-primary">Finally the idea we can make any thing from here (JS) .</h3>
// </div> 
// </div>
// `
// document.body.innerHTML=myHTMLMarup;

function addAll (...argus) { 
let numbers = 0;  
for (item of argus) numbers+=item ;
return numbers ; 
} 

console.log(`addAll fun = ${addAll(1,2,3,4,8,5,6,7)}`) ;
 
const user = { 
    name : "Mohammad" , 
    age : 22, 
    countery: '', 

}
const { name , age ,countery ="defualt"} = user ; //have to be the same var name ;  
    console.log(`name : ${name}`);   

    let  button = document.getElementById("btn"); 
     var txt ; 
     var w ;
         
   function fun1(){ 
        w =document.createElement("div") , 
         txt = document.createTextNode("hello from JS"), 
         w.appendChild(txt); 
         document.body.appendChild(w); 
   }