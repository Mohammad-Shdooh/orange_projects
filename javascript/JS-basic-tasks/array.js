console.log('Here is : ', 'array')



/*
1
Correct the syntax error
 [ 1,7  9  45, ]

 ["Str" "alex","moh"

 'the','fox' 'over' lazy, 'dog',  ]

*/
let arr1= [ 1,7,  ,9,  ,45, ] ;
let  arr2 = ["Str" ,"alex","moh"] ;
let arr3 =  [ 'the','fox', 'over', 'lazy', 'dog'] ;

/*
2
What the index of "Banana","Tomato"
var fruits=["Tomato","Banana","Watermelon"]

*/
var fruits=["Tomato","Banana","Watermelon"];
console.log(fruits[0]); 
console.log(fruits[1]); 



/*
3
Create an array represents your:
1- Favorite Food (5)
2- Favorite Sport (3)
3- Favorite Movie (4)
*/
let favFood= ['fav1','fav2','fav3','fav4','fav5'] ;
let favSport= ['fav1','fav2','fav3'] ;
let favMovie= ['fav1','fav2','fav3','fav4'] ;

/*
4
Create a function called firstOfArray
that take an array as a parameter
and return the first element in an array

Ex: firstOfArray([1,4,5]) => 1
Ex: firstOfArray(["t","u","g","x"]) => "t"
*/
function firstOfArray(arr) { 
    return arr[0]; 
}
console.log(firstOfArray([1,2,3])) ;

/*
5
Create a function called lastOfArray
that take an array as a parameter
and return the first element in an array

Ex: lastOfArray([1,4,5]) => 5
Ex: lastOfArray(["t","u","g","x"]) => "x"
*/
function lastOfArray(arr) { 
    return arr[arr.length-1]; 
}
console.log(lastOfArray([1,2,3])) ;


/*
6
Using console make this array to be like this one (push, unshift, shift, pop)

var array = [0,5,7,9]
=> [1,3,4,6,8,9,10]
*/
var array = [0,5,7,9] ; 
array.shift(); 
console.log(array);
array.shift(); 
console.log(array);
array.shift(); 
console.log(array); 
array.unshift(8);
console.log(array); 
array.unshift(7);
console.log(array); 
array.unshift(6);
console.log(array); 
array.unshift(4);
console.log(array);
array.unshift(3);
console.log(array); 
array.unshift(1);
console.log(array); 
array.push(10); 
console.log(array);  



/*
7
Using the console try to figure out what the thing thats (push, unshift, shift, pop) return to you

var array2 = [5,9,-7,3.5]
*/


/*
8
Create a function called middleOfArray
that take an array as a parameter
and return the middle element in an array if it is have an odd elemnets
and return the two middle elemnt in an array if it is have an even elemnets

Ex: middleOfArray([1,4,5]) => 4
Ex: middleOfArray(["t","u","g","x"]) =>"u and g"
*/

function middleOfArray(arr) { 
    let count = arr.length ; 
    if (count%2!=0) { 
        let m=count/2 ; 
         let n =Math.floor(m); 
        return arr[n]; 

    }else { 
        let m=(count/2)-1;
        let arrX=[]; 
        arrX.push(arr[m]); 
        arrX.push(arr[m+1]); 
        return arrX; 
    }
}
console.log(middleOfArray([1,2,3,4,5])); 
console.log(middleOfArray([1,2,3,4,5,6])); 
/*
9
Using assignment operator (=)
make the animals array have these animals
var animals = ['cat', 'ele', 'bird']
animals; => ['zebra', 'elephant']
** hint: animals[0]=something


var nums= [1,2,3,8,9]
nums => [5,-22,3.5,44,98,44]
*/
var animals = ['cat', 'ele', 'bird'] ;
animals=['zebra','elephant'] ;
console.log(animals); 

/*
10
Create a function called indexOfArray
that accept an array and index
and return what this array have in this index

var nums= [1,2,3,8,9]
Ex: indexOfArray(nums,3) => 8
Ex: indexOfArray(nums,1) => 2
Ex: indexOfArray(nums,4) => 9

**try more cases by your self
*/
function indexOfArray(array=[] ,idx) { 
    return array[idx]; 
}

var nums= [1,2,3,8,9] ;
 console.log(indexOfArray(nums,3)) ;
/*
11
Create a function called arrayExceptLast
that accept an array
and return the entire array except the last elemnt
** hint: search abou the function that will cut the array on MDN
var nums= [1,2,3,8,9]
Ex: arrayExceptLast(nums) =>  [1,2,3,8]

**try more cases by your self
*/
function arrayExceptLast(nums=[]) { 
     nums.pop()
    return nums ; 
}
console.log(arrayExceptLast([1,2,3,4,5])); 
/*
12
Create a function called addToEnd
that accept an array and value
and return the entire array with add this value to the end of this array

var nums= [1,2,3,8,9]
Ex: addToEnd(nums,55) =>  [1,2,3,8,55]

**try more cases by your self
*/
    function addToEnd(nums=[],value) { 
        nums.pop() ; 
        nums.push(value); 
        return nums; 
    }
    console.log(addToEnd([1,2,3,4],10)) ; 
    
// all the exercises below should solved 2 times: 1- for loop 2- while lopp
/*
13
Create a function called sumArray
that accept an array
and return the summation of all elemnt in this array

var nums= [1,2,3,8,9]
Ex: sumArray(nums) => 23

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
function sumArray1(nums) { 
    let sum =0 ; 
    let i=0; 
    while(i<nums.length) { 
        sum+=nums[i++] ;
    }
    return sum ; 
}
function sumArray2(nums) { 
    let sum =0 ; 
    
    for(let i=0;i<nums.length;i++) { 
        sum+=nums[i] ;
    }
    return sum ; 
}
var nums= [1,2,3,8,9] ;
console.log(sumArray1(nums)); 
console.log(sumArray2(nums)); 
/*
14
Create a function called minInArray
that accept an array
and return the minimum value inside this array

var nums= [1,2,3,8,9]
Ex: minInArray(nums) => 1

** solve it one time using for loop and another using while loop
**try more cases by your self
*/
function minInArray1(nums) { 
    let i=0; 
    let min =0; 
    while(i<nums.length) { 
        min=nums[0] ; 
        if(min>nums[i])  {
            min=nums[i]; 
            i++;
        }else { 
            i++;
             
        }
    }
    return min ; 
}
function minInArray2(nums) { 
    
    let min =0; 
    for( let i=0;i<nums.length;i++) { 
        min=nums[0] ; 
        if(min>nums[i])  {
            min=nums[i]; 
           
        }else { 
           continue;
             
        }
    }
    return min ; 
}
var nums= [1,2,3,8,9] ; 
console.log(minInArray1(nums));
console.log(minInArray2(nums)); 
/*
15
Create a function called removeFromArray
that accept an array and elemnt to remove
and return the array after remove this elemnt from it

var nums= [1,2,3,8,9]
Ex: minInArray(nums,8) => [1,2,3,9]

** solve it one time using for loop and another using while loop
**try more cases by your self
*/


function removeFromArray1(array=[],ele) { 
    for (let i=0;i<array.length;i++) { 
        if (array[i]==ele) { 
            array.splice(i,i); 
        }
    }
    return array ;
}
var nums= [1,2,3,8,9];
console.log(removeFromArray1(nums,2)); 

//remove using filter 
function removeFromArray2(array=[],ele) { 
    return array.filter(function(n){ 
        return n!=ele ;
    });
    
}
console.log(removeFromArray2(nums,2)); 
