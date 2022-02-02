/* 1. Write a JavaScript program that accept two integers and
 * display the larger.Go to the editor */
/******* Start Your Code *********/
  
let maximum = (num1 ,num2) => { 
    if (num1>num2) { 
        return num1 ; 
    }else if(num1<num2) { 
        return num2 ;

    }else { 
        return "num1 = num2" ; 
    }
}
console.log(maximum(2,4)) ;

 /******* End Your Code ********* */

/* 2. Write a JavaScript conditional statement to find the sign
 of product of three numbers. Display an alert box with the 
 specified sign. Go to the editor 
Sample numbers : 3, -7, 2 
Output : The sign is - */
/******* Start Your Code *********/
  let sign = (...nums)=>{ 
      for(let i=0;i<nums.length;i++){ 
       if (nums[i]<0){ 
          window.alert(nums[i]+" - ");
       }else { 
           window.alert(nums[i]+" + ") ; 
       }
      }
  }
sign(1,2,-3) ;
 
 /******* End Your Code ********* */

/* 3. Write a JavaScript conditional statement to sort three numbers. Display an alert box to show the result. Go to the editor 
Sample numbers : 0, -1, 4 
Output : 4, 0, -1 */
/******* Start Your Code *********/
 
let sort = (...argu) =>{ 
window.alert(argu.sort(function(a,b){return b-a;}) 
)  ;

}
sort(0,-1,4); 
 /******* End Your Code ********* */


/*4. Write a JavaScript conditional statement to find the largest of five numbers. 
Display an alert box to show the result. Go to the editor 
Sample numbers : -5, -2, -6, 0, -1 
Output : 0 */

/******* Start Your Code *********/
let largest = (...argu) =>{ 
    let max=0; 
    for(let i=0;i<argu.length;i++){ 
        max=argu[i]; 
       for(let j=0;j<argu.length;j++) { 
           if (max <argu[j]) { 
               max=argu[j] ; 
           }
       }
    }
    window.alert("the max num = "+max) ;    
}
largest(-5, -2, -6, 0, -1 ) ; 
 /******* End Your Code ********* */

 /* 5.Write the if statement to display "Hello World" if x is greater than y, otherwise alert "Goodbye".*/
/******* Start Your Code *********/
  let helloOrGoodBy = (x,y)=> { 
      if (x>y) { 
          window.alert("hello") ; 
      }else if ( x<y) { 
          window.alert("GoodBy."); 
      }else { 
          console.log("x=y") ;
      }
  }
  helloOrGoodBy(5,4); 
 /******* End Your Code ********* */



