<html>
	<head>
		<script>
			function myFunction(){
				var x=document.getElementById("firstName");
				x.value=x.value.toUpperCase();

			}
		</script>
	</head>
	<body>
		<p>When you leave the input field, a function is triggered which transforms the input text to upper case</p>
		
		Enter your name:<input type="text" id="firstName" onblur="myFunction()">


	</body>
</html>