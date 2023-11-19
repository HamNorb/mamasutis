<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Alapanyag kiszamolo</title>
  <script type="text/javascript">
	function kuldes() {
		var eredm = document.getElementById('eredmeny');
		switch (parseInt(document.getElementById('text').value)) {
		  case 1:
			var micsoda = "Napest";
			break;
		  case 2:
			var micsoda = "Csorgatott keserűcsoki";
			break;
		  case 3:
			 var micsoda = "Paramel bombatorta";
			break;
		  case 4:
			var micsoda = "Porcukros vaj";
			break;
		  case 5:
			var micsoda = "Tojásos piskóta";
			break;
		  case 6:
			var micsoda = "Vagdalt kent dió";
			break;
		}

		eredm.innerHTML = micsoda + " hozzávalói " + document.getElementById('szam1').value + " személyre";
	}
	function hozzavalo1() {
		var eredm = document.getElementById('hozza1');
		switch (parseInt(document.getElementById('text').value)) {
		  case 1:
			var micsoda = "Napest";
			break;
		  case 2:
			var micsoda = "Csorgatott keserűcsoki";
			break;
		  case 3:
			 var micsoda = "Paramel bombatorta";
			break;
		  case 4:
			var micsoda = "Porcukros vaj";
			break;
		  case 5:
			var micsoda = "Tojásos piskóta";
			break;
		  case 6:
			var micsoda = "Vagdalt kent dió";
			break;
		}

		hozza1.innerHTML = micsoda + " hozzávalói " + document.getElementById('szam1').value + " személyre";
	}
  </script>
</head>
<body>
	<h2>Űrlap elemek feldolgozása JavaScript-el</h2>
	<label>Mit sütünk?&emsp;</label><select id="text"><br>
		<option value="1">Napest</option>
		<option value="2">Csorgatott keserűcsoki</option>
		<option value="3">Paramel bombatorta</option>
		<option value="4">Porcukros vaj</option>
		<option value="5">Tojásos piskóta</option>
		<option value="6">Vagdalt kent dió</option>
	</select><br><br>
	<label>  Hány személyre készül? =</label><input type="text" id="szam1"><br><br>
	<label></label><input type="submit" onclick="kuldes()" value="OK">
	<p id="eredmeny"></p>
	<br>
	<p id="hozza1"></p>
</body>
</html> 
