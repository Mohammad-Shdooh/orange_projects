
 
var y1=5;  
let y2=6 ; 
const y3 =7 ;  
console.log("y1="+y1);
console.log("y2="+y2); 
console.log("y2="+y3);

 y1=10 ;
console.log("y1 after change = "+y1) ; 
 y2=11; 
console.log(y2)  ; 


// const y3=13 ; 
// y3=13 ; 
// console.log(y3) ;  



// var declarations are globally scoped or function scoped while let and const are block scoped. 
// var variables can be updated and re-declared within its scope; 
// let variables can be updated but not re-declared; const variables can neither be updated nor re-declared.


// var i ="globale" ;
function dataTypesVar() { 
    var i ="function scope" ; 
    if (true) { 
        var i="block scope" ;   
        console.log("in 'var' case : ") ;
        console.log("inside (if) statment = "+i) ;
    } 
    console.log("outside (if) statment = "+i) ; 
}
dataTypesVar() ;
// console.log(i) ;

// let e="globale" ;
function dataTypeslet() { 
     let e ="function scope" ; 
    if (true) { 
        let e="block scope" ;   
        console.log("in 'let' case : ") ;
        console.log("inside (if) statment = "+e) ;
    } 
    console.log("outside (if) statment = "+e) ; 
}
dataTypeslet() ;
// console.log(e) ;





var m= 1; 
let n=2; 
console.log(window.m); 
console.log(window.n) ;  
// that can help in security . cause the var will be accessable from every where .cause it a global scope. 
//but the let cannot access ;cause it a block scope .





