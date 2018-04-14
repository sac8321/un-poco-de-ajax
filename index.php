<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AJAX - MYSQL</title>
	<style type="text/css">
		
		table{
			width: 30%;
			border-collapse:collapse;
			box-shadow: 7px 7px 23px -4px rgba(0,0,0,0.75);
		}

		table,td,th{
			border: 1px solid #cccccc;
			padding: 5px;
		}

		th{text-align: left;}

		tr:nth-child(even){
			background-color: #E8ECED;
		}

	</style>



</head>
<body>

<button onclick="mostrarUsuarios()">Mostrar usuarios</button><br/><br/>
<div id="info"></div>

<script type="text/javascript">
	
var resultado=document.getElementById("info");

function mostrarUsuarios() {
	
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function(){
		if (this.readyState===4 && this.status === 200){
			resultado.innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","servidor.php",true);
	xmlhttp.send();
}

</script>



</body>
</html>
