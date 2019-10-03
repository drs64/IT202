<html>
<head>
	<script>
	function pageLoaded(){
		//TODO solutions
		//Google/Explore how to create an element and add it to the DOM
		//create a div tag, add "added new element" as the text
		//add it to the DOM body
    var div = document.getElementById("myPara");
      div.innerText = "New Element added";
      console.log(div);
      document.body.appendChild(div);
	}
	</script>
</head>
<body onload="pageLoaded();">
	<p id="myPara">Just showing that we loaded something...</p>
</body>
</html>
