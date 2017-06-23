<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>


  <link rel="stylesheet" href="css/register.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/jqueryeasing.js" type="text/javascript" ></script>
</head>
  <body>

<div id="header">
  <img src="./images/boltt1.jpg" onclick="window.open('https://boltt.com/');"> </img>
</div> 

<form id="regform" action="connect.php" method="POST" onsubmit="return checkform(this)">
 <!-- progressbar -->
<!-- <ul id="progressbar">
   <li class="active">Information</li>
   <li>Team Leader</li>
   <li>Team Details</li>
 </ul>  -->
 <!-- fieldsets -->
 <fieldset >
   <h2 class="fs-title">Registration Details</h2>
  <ol class="ol_content">
    <br><li>Team captains from respective colleges will be responsible for registering their team.</li>
    <br><li>It is compulsory to provide details of all team members. </li>
    <br><li>Valid ID cards need to be furnished at the time of registration. (Not kidding)</li>
    <br><li>Accommodation is available! So that we may be gracious hosts, the fee is INR 1000 (non-refundable) + 300 (Refundable security deposit)</li>
<br><li>Students travelling from outside Delhi will be given accommodation first. Delhi students may be given accommodation if space is available. </li>

<br><br><ul>We look forward to hosting you!
      </ul>

<ul>For any queries, feel free to contact
      </ul>

<br><ul><b> Ankit Jain: 7042015765
      </b></ul>
<ul><b> Fahad Sarfaraz Ahmed: 7042135799
      </b></ul>
  </ol>
   <input type="button" name="next" class="next action-button" value="Next" />
 </fieldset>

 <fieldset>
   <h2 class="fs-title">Team Leader Information</h2>

   <input type="text" name="name" placeholder="Name" required/>
   <input type="text" name="college" placeholder="Name of the college" required />
   <input type="text" name="teamname" placeholder="Name of the sport" required/>
   <input type="number" name="Players" id="players" placeholder="Number of players in team(max. size)" />
   <input type="text" name="conatct" placeholder="Contact number" required/>
   <input type="text" name="mail" placeholder="Your e-mail" />
   <input type="text" name="accomo" placeholder="Do you want accomodation ?(Yes/No)" />

   <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input type="button" name="next" class="next action-button" value="Next" />
 </fieldset>

 <fieldset>
   <h2 class="fs-title">Team Details</h2>

   <input type="number" name="Play" id="Players" placeholder="Number of players in team" required/>
   <a href="#" id="filldetails" onclick="addFields()"> Enter name of the players </a>
   <div id="container"></div>
<!--
   <div id="Team-info">

    Players: <input type="text" name="name" placeholder="Name" /><button id="addplayer">+</button>
  </div> -->
   <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input type="submit" name="submit" class="submit action-button" value="Submit" />
 </fieldset>
</form>




  <script src="js/register.js" type="text/javascript" ></script>
  <script type="text/javascript">
  //var num=document.getElementById('players').value;
  function addFields(){
           var number = document.getElementById("Players").value;
           var container = document.getElementById("container");
           while (container.hasChildNodes()) {
               container.removeChild(container.lastChild);
           }
           for (i=0;i<number;i++){
               container.appendChild(document.createTextNode("Player " + (i+1)));
               var input = document.createElement("input");
               input.type = "text";
               input.name="Player_name_"+i;
               container.appendChild(input);
               container.appendChild(document.createElement("br"));
           }
       }
  </script>

  <script type="text/javascript">
 function checkform(form) {
 // get all the inputs within the submitted form
 var inputs = form.getElementsByTagName('input');
 for (var i = 0; i < inputs.length; i++) {
     // only validate the inputs that have the required attribute
     if(inputs[i].hasAttribute("required")){
         if(inputs[i].value == ""){
             // found an empty field that is required
             alert("Please fill all required fields");
             return false;
         }
     }
 }
 return true;
}
 </script>

  </body>
</html>
