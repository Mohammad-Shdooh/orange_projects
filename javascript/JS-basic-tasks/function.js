/*
1
Write a function named tellFortune that:
takes 4 arguments: number of children,
partner's name, geographic location, job title.
outputs your fortune to the screen like so:
"You will be a X in Y, and married to Z with N kids."

Ex: tellFortune('software engineer', 'Jordan', 'Alice', 3);
=> "You will be a software engineer in Jordan, and married to Alice with 3 kids."
*/
function tellFortune(jobTitle, location,partnerName,numOfChild) { 
  console.log(`a ${jobTitle} in ${location}, and married to ${partnerName} with ${numOfChild} kids.`) ; 
}
tellFortune('software engineer', 'Jordan', 'Alice', 3);
/*
2
Write a function named calculateDogAge that:
takes 1 argument: your puppy's age.
calculates your dog's age based on the conversion
rate of 1 human year to 7 dog years.
outputs the result to the screen like so:
"Your doggie is NN years old in dog years!"

Ex: calculateDogAge(1);
=> "Your doggie is 7 years old in dog years!"
*/
function calculateDogAge (Hage) { 
  return Hage*7 ; 
}
console.log(`Your doggie is ${calculateDogAge(1)} years old in dog years!` ) ;
/*
3
Write a function named calculateSupply that:
takes 2 arguments: age, amount per day.
calculates the amount consumed for rest of the life (based on a constant max age 100).
outputs the result to the screen like so:
"You will need NN to last you until the ripe old age of X"

Ex: calculateSupply(30, 3);
=> 'You will need 76650 cups of tea to last you until the ripe old age of 100;
*/
function calculateSupply(age ,amount) { 
  let ageInDay=0;
  let Mage=0;
  if(age <=100) { 
    Mage=100-age ;
    ageInDay =Mage*365 ; 
  }else { 
    console.log("the max age can accept is 100 year!") ; 
  }
  let cups = ageInDay*amount ;
  console.log(`You will need ${cups} to last you until the ripe old age of 100`) ;

}
calculateSupply(30,3); 
/*
4
Write a function called greet that:
takes 1 argument: name.
and it will return hello + name

Ex: greet("Jouza")
=> "Hello Jouza"
*/
function greet(name) { 
  console.log(`Hello ${name}` ) ; 
}
greet("Mohammad"); 
/*
5
what is the error:
function double(cat) {
  return 2 * x;
}

function double(7) {
  return 2 * 7;
}

function double('7') {
  return 2 * 'x';
}
*/
function double(cat) {
  return 2 * cat;
}
function double(x) {
  return 2 * x;
}
function double(y) {
  return 2 * y;
}
/*
6
fix these functions:
func double1(x {
  return 2 * x ;
}

functiondouble2 x)
return 2 * x;
}

function (x) double3 {
  return 2 * x;

*/
function double1(x) {
  return 2 * x ;
}
function double2( x){
return 2 * x;
}

function  double3 (x){
  return 2 * x;}
/*
7
Write a function called cube that:
accept 1 parameter and calculate the cube of this number

Ex: cube(4)
=> 64
*/
function cube(x) { 
  console.log(x*16) ;

}
cube(4); 

/*
8
Write a function called multiply that:
accept 2 parameters and calculate the multiply of these 2 numbers

Ex: multiply(3,4)
=> 12
Ex: multiply(5,4)
=> 20
*/
function multiply(x,y) { 
  return x*y ;
}
console.log(multiply(3,4)) ;

/*
9
Write a function called canIGetADrivingLicense that:
accept 1 parameter represent the age
and if the age greater than or equal to 20 return "yes you can"
otherwise return "please come back after X years to get one"

Ex: canIGetADrivingLicense(21)
=> "yes you can"

Ex: canIGetADrivingLicense(17)
=> "please come back after 3 years to get one"

Ex: canIGetADrivingLicense(20)
=> "yes you can"

*/
function canIGetADrivingLicense(age) { 
  if (age>=20) { 
    console.log("yes you can .") ;
  }else { 
    console.log(`please come back after ${20-age} years to get one.`) ;
  }
}
canIGetADrivingLicense(15) ;

/*
10
Write a function called sameLength
that accepts two strings as arguments,
and returns true if those strings have the same length, and false otherwise.

**hint: how we can know string length   Ex: : "tree".length   => 4

Ex: sameLength("tree","clue")
=> true

Ex: sameLength("tree","car")
=> false
*/
function sameLength(x,y) { 
  return x===y?true:false ;
}
console.log(sameLength("172","172")) ;
/*
11
Write a function called largerNubmer
that accept two numbers as arguments,
and return the first larger numbers

Ex: largerNubmer(5,6)
=> 6

Ex: largerNubmer(5,3)
=> 5
*/
function largerNubmer(x,y) { 
  return x>y? x:y ;
}
console.log(largerNubmer(5,3)) ;

/*
12
Write a function called smallerNubmer
that accept three numbers as arguments,
and return the first smaller number

Ex: smallerNubmer(8,6,7)
=> 6

Ex: smallerNubmer(5,99,34)
=> 5

Ex: smallerNubmer(5,99,3)
=> 3

Ex: smallerNubmer(5,3,3)
=> 3

*/
function smallerNubmer(...argu) { 
  let min=0; 
  for(let i=0;i<argu.length;i++){ 
    min=argu[i]; 
     for(let j=0;j<argu.length;j++) { 
         if (min >argu[j]) { 
          min=argu[j] ; 
         }
     }
  }
  window.alert("the min num = "+min) ;
}
smallerNubmer(5,3,8) ;
/*
13
Write a function called shorterString
that accept five string as an arguments,
and return the first shorter string

Ex: shorterString("air","school","car","by","github")
=> by

Ex: shorterString("air","tr","car","by","github")
=> tr

Ex: shorterString("by","tr","car","air","github")
=> by

Ex: shorterString("air","by","car","school","github")
=> by

Ex: shorterString("air","tr","by","car","github")
=> by

Ex: shorterString("air","tr","car","github","by")
=> by

*/
function shorterString (...argu) { 
  for (let i=0;i<argu.length;i++) { 
    min=argu[i] ; 
    for(let j=0;j<argu.length;j++) { 
      if (argu[j].length<min.length){ 
        min=argu[j]; 
      }
    }
  }
  console.log(`the shortest string : ${min} .`) ;
}
shorterString('Mohammad','Ahmad','walaa','by'); 
/*
14
Write a function called longerString
that accept four string as an arguments,
and return the first longer string

Ex: longerString("air","school","car","github")
=> school

Ex: longerString("air","schoo","car","github")
=> github

try all the cases (change the order of the longestString)
*/
function longererString (...argu) { 
  for (let i=0;i<argu.length;i++) { 
    max=argu[i] ; 
    for(let j=0;j<argu.length;j++) { 
      if (argu[j].length>max.length){ 
        max=argu[j]; 
      }
    }
  }
  console.log(`the longer  string : ${max} .`) ;
}
longererString('Mohammad','Ahmad','walaa','by'); 
/*
15
Write a function called isEven
that accept 1 argument as a number,
and return true if this number is even
and false if this number is odd

Ex: isEven(1)
=> false
Ex: isEven(2)
=> true

*/
function isEven(x){ 
  return x%2==0 ?true:false ;
}
console.log(isEven(4));
/*
16
Write a function called isOdd
that accept 1 argument as a number,
and return true if this number is Odd
and false if this number is Even

Ex: isOdd(4)
=> false
Ex: isOdd(5)
=> true

*/
function isOdd(x){ 
  return x%2!==0?true:false ;
}
console.log(isOdd(3));
/*
17
Write a function called positive
that accept 1 argument as a number,
and return the positive version of the number passed

Ex: positive(4)
=> 4
Ex: positive(-5)
=> 5

*/
function positive(x){ 
  return Math.abs(x); 
}
console.log(positive(-4)); 
/*
18
Write a function called fullName
that accept two parameters, firstName and lastName,
and returns the firstName and lastName concatenated
together with a space in between.

Ex: fullName("Mohammad","Jouza")
=> "Mohammad Jouza"
Ex: fullName("Alex", "Mercer")
=> "Alex Mercer"
*/
function fullName(fname, lname){ 
  return fname+" "+lname ;
}
console.log(fullName('Mohammad','shdooh')); 

/*
19
Write a function called average
that takes five numbers as inputs
and returns the average of those numbers.

Ex: average(1,2,3,4,5)
=> 3

Ex: average(5,7,9,3,5)
=> 5.8

*/
function average(...argu){ 
  let sum=0; 
  let avg=0; 
  for (let i=0;i<argu.length;i++){ 
    sum+=argu[i] ;

  }
  avg=sum/argu.length ;
  return avg ;
}
console.log(average(10,9,8,7,6)) ;
/*
20
Write a function called randomNumber
that didnt takes any parameter
and returns a random number between 0-1
** hint: you can seacrh using MDN

Ex: randomNumber()
=> 0.2278

Ex: randomNumber()
=> 0.475

*/
function randomNumber(){ 
  return Math.random(1); 
}
console.log(randomNumber()); 
