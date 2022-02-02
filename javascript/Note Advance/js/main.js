let addBtn = document.getElementById("add-btn");
addBtn.addEventListener("click", function(e) {
  
  let addTitle = document.getElementById("note-title");
  let addTxt = document.getElementById("note-text");
  let addtime = document.getElementById("note-time");
  
    if (addTitle.value == "" || addTxt.value == "") {
        return alert("Please add Note Title and Details")
    }

  let notes = localStorage.getItem("notes");
  if (notes == null) {
    notesObj = [];
  } else {
    notesObj = JSON.parse(notes);
  }
  let myObj = {
    title: addTitle.value,
    text: addTxt.value
  }
  notesObj.push(myObj);
  localStorage.setItem("notes", JSON.stringify(notesObj));
  addTxt.value = "";
  addTitle.value = "";
  addtime.value ="";
//   console.log(notesObj);

  showNotes();
});

// Function to show elements from localStorage
function showNotes() {
    
  let notes = localStorage.getItem("notes");
  var today = new Date();
  if (notes == null) {
    notesObj = [];
  } else {
    notesObj = JSON.parse(notes);
  }
  let html = "";
  
 




  notesObj.forEach(function(element, index) {
 
    html += `
        <div class="note">
            <p class="note-counter">Note ${index + 1}</p>
            <h3 class="note-title"> ${element.title} </h3>
            <p class="note-text"> ${element.text}</p>
            <p class="note-text"> ${today.getHours() + ":" + today.getMinutes()}</p>
            <button id="${index}"onclick="deleteNote(this.id)" class="note-btn">Delete Note</button>
            <button id="${index}"onclick="editNote(this.id)" class="note-btn edit-btn">Edit Note</button>
            <button id="${index}"onclick="doneItem(this.id)" class="note-btn done-btn">Done</button>
        </div>
            `;
  });
  let notesElm = document.getElementById("notes");
  if (notesObj.length != 0) {
    notesElm.innerHTML = html;
  } else {
    notesElm.innerHTML = `No Notes Yet! Add a note using the form above.`;
  }
}

// Function to delete a note
function deleteNote(index) {
//   console.log("I am deleting", index);
    let confirmDel = confirm("Delete this note?");
    if (confirmDel == true) {
        let notes = localStorage.getItem("notes");
        if (notes == null) {
            notesObj = [];
        } else {
            notesObj = JSON.parse(notes);
        }

        notesObj.splice(index, 1);
        localStorage.setItem("notes", JSON.stringify(notesObj));
        showNotes();
    }
  
}

// Function to Edit the Note
function editNote(index) {
    let notes = localStorage.getItem("notes");
    let addTitle = document.getElementById("note-title");
    let addTxt = document.getElementById("note-text");

    if (addTitle.value !== "" || addTxt.value !== "") {
      return alert("Please clear the form before editing a note")
    } 

    if (notes == null) {
      notesObj = [];
    } else {
      notesObj = JSON.parse(notes);
    }
    console.log(notesObj);

    notesObj.findIndex((element, index) => {
      addTitle.value = element.title;
      addTxt.value = element.text;
    })
    notesObj.splice(index, 1);
        localStorage.setItem("notes", JSON.stringify(notesObj));
        showNotes();
}


showNotes();

function  doneItem(idx) { 
  let doneList=[];
  let confirmDel = confirm("check  this note?");
    if (confirmDel == true) {
        let notes = localStorage.getItem("notes");
        // console.log(notes);
        if (notes == null) {
            notesObj = [];
            // console.log("null from done items .");
        } else {
          // console.log("first of else {done item}") ;
          // doneList.push(notes[idx]); 
            notesObj = JSON.parse(notes);

            // doneList = [...notesObj];
            // console.log( doneList );
            
        }

        
        doneList= notesObj.splice(idx, 1);
        localStorage.setItem("notes", JSON.stringify(notesObj));

        // document.getElementById('list-notes').innerHTML=doneList.title + doneList.text;  
        console.log("before showNotes fun") ;
        showNotes();
        console.log(doneList); 
        showDone(doneList); 
    }
  
}
function showDone(doneList) {
    
  let notes = JSON.stringify(doneList); //localStorage.getItem("notes");
  // console.log(notes);
  var today = new Date();// for delete if we may . 
  if (notes == null) {
    notesObj = [];
  } else {
    notesObj = JSON.parse(notes);
  }
  let html = "";
  
 




  notesObj.forEach(function(element, index) {
 
    html += `
        <div class="list-notes note">
            
            <h3 class="note-title"> ${element.title} </h3>
            <p class="note-text"> ${element.text}</p>
            <p class="note-text"> ${today.getHours() + ":" + today.getMinutes()}</p>
            <button id="${index}"onclick="deleteNote(this.id)" class="note-btn">Delete Note</button>
           
        </div>
            `;
  });
  let notesElm = document.getElementById("list-notes");
  if (notesObj.length != 0) {
    notesElm.innerHTML += html;
  } else {
    notesElm.innerHTML = `No Notes Yet! Add a note using the form above.`;
  }
}