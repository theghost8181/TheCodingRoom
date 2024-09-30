
  
  var addMember = document.getElementById("addMember");

  addMember.addEventListener("click" , showMembers);

  var row = 1;
  var slash = 1;
    
    function showMembers(){
        var name = document.getElementById("Name").value;
        var email = document.getElementById("Email").value;

        if (!name ){
          alert("please fill your Name ");
          return;
        }
        if (!email ){
          alert("please fill your Email ");
          return;
        }

        var table = document.getElementById("table");

        var newRow = table.insertRow(row);

        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);

        cell1.innerHTML = slash;
        cell2.innerHTML = name;
        cell3.innerHTML = email;

        
        slash++;
        


    }
   

  

  
