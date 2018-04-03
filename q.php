<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- based on https://www.buzzfeed.com/andrewziegler/build-a-subway-sandwich-and-we-will-guess-things?utm_term=.taWkx7kG5#.bu0yaWyw4 -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 10%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>

</head>

<body>
<body>

<h1>JavaScript Progress Bar</h1>

<div id="myProgress">
  <div id="myBar">10%</div>
</div>

<br>
<button onclick="move()">Click Me</button> 

<script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 10;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>
	
	<div id="page-wrap">

		<h1>Jersey Mikes Sub Quiz</h1>

		<form action="quiz.php" method="post" id="quiz">
			<ol>
				<li>
					<h3>Do you like meats?</h3>
					<div>
						<input type="radio" name="question-1-answers"
							id="question-1-answers-A" value="A" /> <label
							for="question-1-answers-A">A) Computer Styled Sections </label>
					</div>

					<div>
						<input type="radio" name="question-1-answers"
							id="question-1-answers-B" value="B" /> <label
							for="question-1-answers-B">B) Cascading Style Sheets</label>
					</div>

					<div>
						<input type="radio" name="question-1-answers"
							id="question-1-answers-C" value="C" /> <label
							for="question-1-answers-C">C) Crazy Solid Shapes</label>
					</div>

					<div>
						<input type="radio" name="question-1-answers"
							id="question-1-answers-D" value="D" /> <label
							for="question-1-answers-D">D) None of the above</label>
					</div>

				</li>

				<li>

					<h3></h3>

					<div>
						<input type="radio" name="question-2-answers"
							id="question-2-answers-A" value="A" /> <label
							for="question-2-answers-A">A) 2001</label>
					</div>

					<div>
						<input type="radio" name="question-2-answers"
							id="question-2-answers-B" value="B" /> <label
							for="question-2-answers-B">B) 1998</label>
					</div>

					<div>
						<input type="radio" name="question-2-answers"
							id="question-2-answers-C" value="C" /> <label
							for="question-2-answers-C">C) 2006</label>
					</div>

					<div>
						<input type="radio" name="question-2-answers"
							id="question-2-answers-D" value="D" /> <label
							for="question-2-answers-D">D) 2003</label>
					</div>

				</li>

				<li>

					<h3>SEO Stand for...</h3>

					<div>
						<input type="radio" name="question-3-answers"
							id="question-3-answers-A" value="A" /> <label
							for="question-3-answers-A">A) Secret Enterprise Organizations</label>
					</div>

					<div>
						<input type="radio" name="question-3-answers"
							id="question-3-answers-B" value="B" /> <label
							for="question-3-answers-B">B) Special Endowment Opportunity</label>
					</div>

					<div>
						<input type="radio" name="question-3-answers"
							id="question-3-answers-C" value="C" /> <label
							for="question-3-answers-C">C) Search Engine Optimization</label>
					</div>

					<div>
						<input type="radio" name="question-3-answers"
							id="question-3-answers-D" value="D" /> <label
							for="question-3-answers-D">D) Seals End Olives</label>
					</div>

				</li>

				<li>

					<h3>A 404 Error...</h3>

					<div>
						<input type="radio" name="question-4-answers"
							id="question-4-answers-A" value="A" /> <label
							for="question-4-answers-A">A) is an HTTP Status Code meaning Page
							Not Found</label>
					</div>

					<div>
						<input type="radio" name="question-4-answers"
							id="question-4-answers-B" value="B" /> <label
							for="question-4-answers-B">B) is a good excuse for a clever
							design</label>
					</div>

					<div>
						<input type="radio" name="question-4-answers"
							id="question-4-answers-C" value="C" /> <label
							for="question-4-answers-C">C) should be monitored for in web
							analytics</label>
					</div>

					<div>
						<input type="radio" name="question-4-answers"
							id="question-4-answers-D" value="D" /> <label
							for="question-4-answers-D">D) All of the above</label>
					</div>

				</li>

				<li>

					<h3>Your favorite website is</h3>

					<div>
						<input type="radio" name="question-5-answers"
							id="question-5-answers-A" value="A" /> <label
							for="question-5-answers-A">A) CSS-Tricks</label>
					</div>

					<div>
						<input type="radio" name="question-5-answers"
							id="question-5-answers-B" value="B" /> <label
							for="question-5-answers-B">B) CSS-Tricks</label>
					</div>

					<div>
						<input type="radio" name="question-5-answers"
							id="question-5-answers-C" value="C" /> <label
							for="question-5-answers-C">C) CSS-Tricks</label>
					</div>

					<div>
						<input type="radio" name="question-5-answers"
							id="question-5-answers-D" value="D" /> <label
							for="question-5-answers-D">D) CSS-Tricks</label>
					</div>

				</li>

			</ol>

			<input type="submit" value="Submit Quiz" />

		</form>

	</div>

	<script type="text/javascript">
	
	</script>

</body>

</html>