<!DOCTYPE html>
<html>
<head>
	<title>Dream Interpreter</title>
	<script src = "http://code.jquery.com/jquery-3.2.1.min.js"></script>

	<link href="dream.css" rel="stylesheet" type="text/css"/>
	
	<style>
		#myProgress {
		  width: 100%;
		  background-color: rgba(100,100,100,.2);
		  border: 2px solid rgb(100,100,100);
		}
		
		#myBar {
		  width: 10%;
		  height: 30px;
		  background-color: rgb(230,180,220);
		  text-align: center;
		  line-height: 30px;
		  color: white;
		}
	</style>

	<script>
		var fname;
		var lname;
		var A; var B; var C; var D;
				
		$(document).ready(function(){
		
			$("#q1").hide();
			$("#q2").hide();
			$("#q3").hide();
			$("#q4").hide();
			$("#q5").hide();
			$("#dreamName").hide();
			$("#results").hide();
			
		});
		
			function nextForm(question, newQuestion){
				//fade last form out
				$(question).fadeOut('fast')
				//fade next form in
				$(newQuestion).delay(500).fadeIn('fast');
			}
		
			function handleClick()
			{         
				var total = 0;          
				for(var i = 0; i <= 5; i++) 
				{
					var radios = document.getElementsByClassName('radio'+i);
				 	for(var j = 0; j < radios.length; j++)
					{
						var radio = radios[j];
					    if(radio.value == "A" && radio.checked) 
					    	total++;
					    else if(radio.value == "B" && radio.checked) 
							total+= 2;
					    else if(radio.value == "C" && radio.checked) 
							total+= 3;
					    else if(radio.value == "D" && radio.checked) 
						    total+= 4;
				  	}
				  	fillInt();
				}
		
				function fillInt()
				{
					var space = document.getElementById("resultP");
					//total determines the interpretation
					if(total >= 5 && total < 10)
					{
						var text = "You are repressing emotions, and your dreams reflect this. You are repressing some thoughts and it is because of a traumatic event in the past, present, or one that you are anticipating in the future. Try to get as deep of a sleep as is possible, and make sure you are eating healthily.";
						space.value = text;
					}
					else if(total >= 10 && total < 15)                    
					{
						var text = "You are doing great. Your social life is likely fantastic, and you have a great work/life balance (that leads to good sleep). Your dreams are not too intense, but you retain a healthy amount of imformation about them. Keep up the good work!";
						space.value = text;
					}
					else if(total >= 15 && total < 20)
					{
						var text = "Whether it's a specific individual, work, or even something you may have done yourself - Your dreams are desperately trying to bring whatever is stressing you out to the foreground. Recurring dreams of being chased are a major indicator that you are actively running from something, or have a habit of bottling up problems instead of dealing with them head-on. ";
						space.value = text;
					}
					else
					{
						var text = "Unable to interpret dream.";
						space.value = text;
					}
	
					var meaning = document.getElementById("resultH");
					var dname = "Meaning of \""+ document.getElementById("dName").value + "\"";
	
					meaning.innerHTML = dname;	
	
					//get date of dream
					var date = new Date();
					var ddate = document.getElementById("ddate");
					ddate.innerHTML = date;
				}
			}

				function setCookie(cname, cvalue, exdays) {
				    var d = new Date();
				    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
				    var expires = "expires="+d.toUTCString();
				    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
				}

				function getCookie(cname) 
				{
				    var name = cname + "=";
				    var ca = document.cookie.split(';');
				    for(var i = 0; i < ca.length; i++) 
					{
				        var c = ca[i];
				        while (c.charAt(0) == ' ') 
					    {
				            c = c.substring(1);
				        }
				        if (c.indexOf(name) == 0) 
					    {
				            return c.substring(name.length, c.length);
				        }
				    }
				    return "";
				}

				function checkCookie() 
				{
				    var user = getCookie("username");
				    if (user != "") 
					{
				        $('#title').text("Welcome to DreamCatcher, " + user);
				    } 
				    else 
					{
				        user = $('#fname').val()
				        alert(user);
				        if (user != "" && user != null) 
					    {
				            setCookie("username", user, 30);
				        }
				    }
				} 
				                   
					
		</script>
		
	</head>

	<body style="background-image:url(grayClouds.jpg); background-size: 1500px; background-repeat: no-repeat;" onload="checkCookie();">
			<nav class="horizontal">
	
				<header style="height: 100px;">
					<ul>
						<a id ="logo" href="DreamInt.php"><img id="logoimg" src="DreamCatcher.png" style="width: 200px;"/></a>
						<a href="DreamLog.php" style="clear: right; float:left;">View your dream log</a>
					</ul>
				</header>
			</nav>
	
	
	<script>
	/**function move(num) {
	  var elem = document.getElementById("myBar");   
	  var width = 0;
	  var id = setInterval(frame, 10);
	  var n = num;
	  function frame(n) {
		var next= width+10;
	    if (width >= n) {
	      clearInterval(id);
	    } else {
		  width++; 
	      elem.style.width = width + '%'; 
	      elem.innerHTML = width * 1  + '%';
		  }
	  }
	}**/
	</script>
		

	<form action="/action_page.php" method="get" id="nameform" name="nameform" >
		<div id="qName">
			<h1 id="title" ><img src="Welcome.png" style="width: 800px"></h1>
			<p id="nameP">Please enter your name:</p>
		
			<input name="fname" id="fname" class="input" placeholder="First Name"/>
		
			<input name="lname" id="lname" class="input" placeholder="Last Name"/>
				
			<input id ="done1" type="button" value="Done" onclick="javascript: nextForm('#nameform','#q1'); setCookie('firstName',fname,30); move(15);"/>
		</div>
	</form>
	
	<form action="dreamCalc.php"  method="post" id="form1" name="form1" >
		<div id="q1">
			<h2 class="q">Was your most recent dream underwater?</h2>
			<!--https://css-tricks.com/building-a-simple-quiz/-->
			
				<input type="radio" name="question-1-answers" class="radio1" id="question-1-answers-A" value="A" />
				<label for="question-1-answers-A">A) Yes, I was in a large body of water </label>
			
				<input type="radio" name="question-1-answers" class="radio1" id="question-1-answers-B" value="B" />
				<label for="question-1-answers-B">B) Yes, I was in a small body of water</label>
					
				<input type="radio" name="question-1-answers" class="radio1" id="question-1-answers-C" value="C" />
				<label for="question-1-answers-C">C) Yes, I was in an unusual body of water (i.e. a room filled with water)</label>
			
				<input type="radio" name="question-1-answers" class="radio1" id="question-1-answers-D" value="D" />
				<label for="question-1-answers-D">D) No, I was not in water</label>
			<input id ="done1" type="button" value="Next Question>" onclick="javascript: nextForm('#q1','#q2');move(20);"/>
		</div>
	
		<div id="q2">
			<h2 class="q">Was your most recent dream a pleasant one or a nightmare?</h2>
				<input type="radio" class="radio2" name="question-2-answers" id="question-2-answers-A" value="A" />
				<label for="question-2-answers-A">A) It was pleasant, as have been most of my dreams recently. </label>
					
				<input type="radio" class="radio2" name="question-2-answers" id="question-2-answers-B" value="B" />
				<label for="question-2-answers-B">B) It was surprisingly pleasant, unlike most of my dreams recently.</label>
					
				<input type="radio" class="radio2" name="question-2-answers" id="question-2-answers-C" value="C" />
				<label for="question-2-answers-C">C) It was a nightmare surprisingly, unlike most of my dreams recently.)</label>
			
				<input type="radio" class="radio2" name="question-2-answers" id="question-2-answers-D" value="D" />
				<label for="question-2-answers-D">D) It was mightmare, as have been most of my dreams recently.</label>
			<input id ="done2" type="button" value="Next Question>" onclick="javascript: nextForm('#q2','#q3');move(35);"/>
		</div>
		
		<div id="q3">
			<h2 class="q">What was the intensity of your emotion in this dream?</h2>
				<input type="radio" class="radio3" name="question-3-answers" id="question-3-answers-A" value="A" />
				<label for="question-3-answers-A">A) Not at all intense; I woke up unemotional. </label>
					
				<input type="radio" class="radio3" name="question-3-answers" id="question-3-answers-B" value="B" />
				<label for="question-3-answers-B">B) Mildly intense; I woke up thinking about my dream.</label>
					
				<input type="radio" class="radio3" name="question-3-answers" id="question-3-answers-C" value="C" />
				<label for="question-3-answers-C">C) Fairly intense; I woke up with some residual emotions(i.e. a room filled with water)</label>
			
				<input type="radio" class="radio3" name="question-3-answers" id="question-3-answers-D" value="D" />
				<label for="question-3-answers-D">D) Very intense; I woke up very emotional, possibly in tears.</label>
			<input id ="done3" type="button" value="Next Question>" onclick="javascript: nextForm('#q3','#q4');move(45);"/>
		</div>
		
		<div id="q4">
			<h2 class="q">How well do you remember your dream last night?</h2>
				<input type="radio" class="radio4" name="question-4-answers" id="question-4-answers-A" value="A" />
				<label for="question-4-answers-A">A) I don't remember dreaming at all! </label>
					
				<input type="radio" class="radio4" name="question-4-answers" id="question-4-answers-B" value="B" />
				<label for="question-4-answers-B">B) Bits and pieces; I remember the emotions left behind more than anything.</label>
					
				<input type="radio" class="radio4" name="question-4-answers" id="question-4-answers-C" value="C" />
				<label for="question-4-answers-C">C) I remember doing certain things, but the entire picture isn't clear</label>
			
				<input type="radio" class="radio4" name="question-4-answers" id="question-4-answers-D" value="D" />
				<label for="question-4-answers-D">D) Very vivdly; I can remember what I was doing and my motivation.</label>
			<input id ="done4" type="button" value="Next Question>" onclick="javascript: nextForm('#q4','#q5');"/>
		</div>
		
		<div id="q5">
			<h2 class="q">How do you handle stress?</h2>
				<input type="radio" class="radio5" name="question-5-answers" id="question-5-answers-A" value="A" />
				<label for="question-5-answers-A">A) By seeking guidance from others. </label>
					
				<input type="radio" class="radio5" name="question-5-answers" id="question-5-answers-B" value="B" />
				<label for="question-5-answers-B">B) I try to calm myself down through distractions.</label>
					
				<input type="radio" class="radio5" name="question-5-answers" id="question-5-answers-C" value="C" />
				<label for="question-5-answers-C">C) I handle my problems head on, sometimes creating emotional distress.</label>
			
				<input type="radio" class="radio5" name="question-5-answers" id="question-5-answers-D" value="D" />
				<label for="question-5-answers-D">D) I bottle up my emotions, and they eventually explode out later on.</label>
			<input id ="done5" type="button" style="width: 300px;" value="Name the Dream>" onclick="javascript: nextForm('#q5','#dreamName');"/>
		</div>
		
		<div id="dreamName">
			<h2 class="q">Give your dream a name: </h2>
			<input name="dName" id="dName" >
			
			<h2 class="q" style="clear: both">Add a description of the dream: </h2>
			<textarea name="desc" id="desc"  rows="4" cols="50" style="float: left;"></textarea>
			
			<input type="button" id="doneName" value="Submit" style="clear: left;" onclick="javascript: nextForm('#dreamName','#results');  handleClick(); "/>
		</div>
		
		<div id ="results">
			<h2 id="resultH"></h2>
			<h3>Interpretation (edit if needed):</h3>
			<textarea id="resultP" name="resultP" type="text" value="default value" rows="4" cols="70"></textarea>
			<h3>Date (edit if needed):</h3>
			<textarea id="ddate" name="ddate" type="text" value="default value" rows="4" cols="70" style="float: left;"></textarea>
			
			<input type="Submit" id="Submit" name="Submit" value="Submit to Log" style="clear: left"/>
		</div>

	</form>
	</body>
	</html>