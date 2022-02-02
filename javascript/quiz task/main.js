const questions = [
    {
        question:'what is 2+2 ?',
        answers : [
            {text:'4' , correct:true } , 
            {text:'16' , correct:false} ,
            {text:'8' , correct:false} ,
            {text:'20' , correct:false} 
        ]
    },
    {
        question:'what is 4*2?',
        answers : [
            {text:'12' , correct:false } , 
            {text:'18' , correct:false} ,
            {text:'8' , correct:true} ,
            {text:'6' , correct:false} 
        ]
    },
    {
        question:'what is 8*2?',
        answers : [
            {text:'16' , correct:true ,} , 
            {text:'12' , correct:false} ,
            {text:'26' , correct:false} ,
            {text:'25' , correct:false} ,
        ]
    },
    {
        question:'what is 4*7?',
        answers : [
            {text:'4' , correct:false } , 
            {text:'28' , correct:true} ,
            {text:'24' , correct:false } ,
            {text:'19' , correct:false } ,
        ]
    },
    {
        question:'what is 2*7?',
        answers : [
            {text:'14' , correct:true ,} , 
            {text:'16' , correct:false} ,
            {text:'20' , correct:false} ,
            {text:'30' , correct:false} 
        ]
    }
]; 


let counter=0 ;
const result =document.getElementById('result') ;
const startBtn=document.getElementById('start-btn') ; 
const questionElement=document.getElementById('question') ;
const answerElemnt=document.getElementById('answers') ; 
const nextBtn = document.getElementById('next-btn') ;
const parent =document.getElementById('parent') ; 
const thank =document.getElementById('thank') ; 
let shaffle , questionIdx ;
startBtn.addEventListener('click',startGame)  ;

 function startGame(){ 
     questionElement.classList.remove('hide') ; 
     answerElemnt.classList.remove('hide'); 
     startBtn.classList.add('hide') ; 
     nextBtn.classList.remove('hide'); 
     timer() ;
     RandomQes() ; 
     

 } 
 function timer(){
    var sec = 59;
    var timer = setInterval(function(){
        document.getElementById('safeTimerDisplay').innerHTML='00:'+sec;
        sec--;
        if (sec < 0) {
            clearInterval(timer);
        }
    }, 1000);
  }
 function RandomQes(){ 
     shaffle=questions.sort(()=>Math.random()-0.5) ;
     questionIdx=0; 
     setQuestion(); 
     
 }
 function nextQues(){ 
     ///////testTimer :
    //  reSetTimer(); 
    //  timer(59);
     reSet() ;  
    questionIdx++; 
    if (questionIdx<5){ 
       
        setQuestion() ;
    } 
    else { 
        console.log("thank you !") ;
        parent.classList.add('hide') ;
        thank.classList.remove('hide'); 
        let mark =document.createElement('h2') ; 
        let garde =document.createTextNode(`${counter}`) ;
        mark.appendChild(garde); 
        result.appendChild(mark); 
        result.classList.remove('hide'); 
        
    }
}   
 function setQuestion(){  
    
     questionElement.innerText=shaffle[questionIdx].question; 
     questions[questionIdx].answers.forEach(ele=>{
         const button = document.createElement('button'); 
         button.innerText=ele.text ; 
         button.classList.add('btn') ;
         if(ele.correct)
          {
           button.dataset.correct=ele.correct ; 
          
          }
          answerElemnt.appendChild(button); 

     });
     answerElemnt.addEventListener('click' , selectAnswer) ;
    
    
 } 

 function selectAnswer(e) { 
     const SelectedButton = e.target ; 
     const correct =SelectedButton.dataset.correct ;
     ///////////counter :
     if(correct){ 
        counter++ ;
     }
     /////////////
     setStatus(document.body ,correct) ; 
     Array.from(answerElemnt.children).forEach(button => {
         setStatus(button,button.dataset.correct)         
     }); 
     nextBtn.classList.remove('hide');
     nextBtn.addEventListener('click',nextQues) ;
 } 
 function setStatus(ele ,correct ) { 
     clearStatus(ele) ;
         if (correct) { 
             ele.classList.add('right') ;
             
         }else { 
             ele.classList.add('wrong') ;
         }
     }
  
 function clearStatus (ele) { 
     ele.classList.remove('right') ;
     ele.classList.remove('wrong') ;
 }

 function reSet() { 
     nextBtn.classList.add('hide') ;
    while(answerElemnt.firstChild){ 
        answerElemnt.removeChild(answerElemnt.firstChild) ;
    } 
 }
// function reSetTimer(){ 
//    timer();
// }