let clear =document.getElementById("clear"); 
let num=document.getElementById("inputNums");
let multi =document.getElementById("multiply");
let add=document.getElementById("addition"); 
let equal =document.getElementById("equal"); 
let one = document.getElementById("1");
let two = document.getElementById("2");
let three = document.getElementById("3");
let four = document.getElementById("4");
let five = document.getElementById("5");
let sex = document.getElementById("6");
let seven = document.getElementById("7");
let eight = document.getElementById("8");
let nine = document.getElementById("9");






one.onclick =function(){ 
    num.value+="1"
}

two.onclick =function(){ 
    num.value+="2"
}
three.onclick =function(){ 
    num.value+="3"
}
four.onclick =function(){ 
    num.value+="4"
}

five.onclick =function(){ 
    num.value+="5"
}

sex.onclick =function(){ 
    num.value+="6"
}
seven.onclick =function(){ 
    num.value+="7"
}
eight.onclick =function(){ 
    num.value+="8"
}

nine.onclick =function(){ 
    num.value+="9"
}






multi.onclick = function(){ 

   num.value +="*"; 
    

}

add.onclick = function(){ 

    num.value +="+"; 
 
 }
 equal.onclick = function(){ 

    let text =num.value ;
    console.log(text); 
    // let sliceArray =text.slice("+ *");
    // let num1=sliceArray[0]; 
    // let operator =sliceArray[1]; 
    // let num2=sliceArray[2]; 

    let num1 =text.slice(0,text.indexOf('+')) ; 
    let operator =text.slice(text.indexOf('+'),text.indexOf('+')+1)
    let num2 =text.slice(text.indexOf('+')) ; 
    console.log(operator+" jj "+num1+" jj "+num2);

    if (operator ==="*") { 
        console.log(num1+" "+num2);
        num.value=(+num1)*(+num2) ;
    }
    else if(operator==="+"){ 
        
        num.value=(+num1)+(+num2) ;
    }

   
 } 
 clear.onclick =function (){ 
     num.value ="" ;
 }

 
