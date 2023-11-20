<?php if (!isset($_SESSION['login'])) {
	    header("./demo");
    exit;
}
?>
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
			var hozzax = "Cukor " + document.getElementById('szam1').value*30 + " gramm"
			break;
		  case 2:
			var hozzax = "Cukor " + document.getElementById('szam1').value*7 + " gramm"
			break;
		  case 3:
			 var hozzax = "Cukor " + document.getElementById('szam1').value*47 + " gramm"
			break;
		  case 4:
			var hozzax = "Cukor " + document.getElementById('szam1').value*90 + " gramm"
			break;
		  case 5:
			var hozzax = "Cukor " + document.getElementById('szam1').value*15 + " gramm"
			break;
		  case 6:
			var hozzax = "Cukor " + document.getElementById('szam1').value*7 + " gramm"
			break;
		}

		hozza1.innerHTML = hozzax;
	}
	function hozzavalo2() {
		var eredm = document.getElementById('hozza2');
		switch (parseInt(document.getElementById('text').value)) {
		  case 1:
			var hozzax = "Vaj " + document.getElementById('szam1').value*10 + " gramm"
			break;
		  case 2:
			var hozzax = "Vaj " + document.getElementById('szam1').value*17 + " gramm"
			break;
		  case 3:
			 var hozzax = "Vaj " + document.getElementById('szam1').value*27 + " gramm"
			break;
		  case 4:
			var hozzax = "Vaj " + document.getElementById('szam1').value*40 + " gramm"
			break;
		  case 5:
			var hozzax = "Vaj " + document.getElementById('szam1').value*65 + " gramm"
			break;
		  case 6:
			var hozzax = "Vaj " + document.getElementById('szam1').value*70 + " gramm"
			break;
		}

		hozza2.innerHTML = hozzax;
	}
	function hozzavalo3() {
		var eredm = document.getElementById('hozza3');
		switch (parseInt(document.getElementById('text').value)) {
		  case 1:
			var hozzax = "Tojás " + document.getElementById('szam1').value*2 + " darab"
			break;
		  case 2:
			var hozzax = "Tojás " + document.getElementById('szam1').value*4 + " darab"
			break;
		  case 3:
			 var hozzax = "Tojás " + document.getElementById('szam1').value*5 + " darab"
			break;
		  case 4:
			var hozzax = "Tojás " + document.getElementById('szam1').value*5 + " darab"
			break;
		  case 5:
			var hozzax = "Tojás " + document.getElementById('szam1').value*12 + " darab"
			break;
		  case 6:
			var hozzax = "Tojás " + document.getElementById('szam1').value*1 + " darab"
			break;
		}

		hozza3.innerHTML = hozzax;
	}
	function hozzavalo4() {
		var eredm = document.getElementById('hozza4');
		switch (parseInt(document.getElementById('text').value)) {
		  case 1:
			var hozzax = "Margarin " + document.getElementById('szam1').value*12 + " gramm"
			break;
		  case 2:
			var hozzax = "Margarin " + document.getElementById('szam1').value*40 + " gramm"
			break;
		  case 3:
			 var hozzax = "Margarin " + document.getElementById('szam1').value*53 + " gramm"
			break;
		  case 4:
			var hozzax = "Margarin " + document.getElementById('szam1').value*25 + " gramm"
			break;
		  case 5:
			var hozzax = "Margarin " + document.getElementById('szam1').value*12 + " gramm"
			break;
		  case 6:
			var hozzax = "Margarin " + document.getElementById('szam1').value*44 + " gramm"
			break;
		}

		hozza4.innerHTML = hozzax;
	}
	function hozzavalo5() {
		var eredm = document.getElementById('hozza5');
		switch (parseInt(document.getElementById('text').value)) {
		  case 1:
			var hozzax = "Sütőpor " + document.getElementById('szam1').value*2 + " csomag"
			break;
		  case 2:
			var hozzax = "Sütőpor " + document.getElementById('szam1').value*4 + " csomag"
			break;
		  case 3:
			 var hozzax = "Sütőpor " + document.getElementById('szam1').value*3 + " csomag"
			break;
		  case 4:
			var hozzax = "Sütőpor " + document.getElementById('szam1').value*2 + " csomag"
			break;
		  case 5:
			var hozzax = "Sütőpor " + document.getElementById('szam1').value*1 + " csomag"
			break;
		  case 6:
			var hozzax = "Sütőpor " + document.getElementById('szam1').value*4 + " csomag"
			break;
		}

		hozza5.innerHTML = hozzax;
	}
	function hozzavalo6() {
		var eredm = document.getElementById('hozza6');
		switch (parseInt(document.getElementById('text').value)) {
		  case 1:
			var hozzax = "Kakaó " + document.getElementById('szam1').value*6 + " gramm"
			break;
		  case 2:
			var hozzax = "Keserűcsoki " + document.getElementById('szam1').value*4 + " csomag"
			break;
		  case 3:
			 var hozzax = "Karamell " + document.getElementById('szam1').value*3 + " gramm"
			break;
		  case 4:
			var hozzax = "Porcukor " + document.getElementById('szam1').value*2 + " gramm"
			break;
		  case 5:
			var hozzax = "Piskótalap " + document.getElementById('szam1').value*1 + " darab"
			break;
		  case 6:
			var hozzax = "Dió " + document.getElementById('szam1').value*40 + " gramm"
			break;
		}

		hozza6.innerHTML = hozzax;
	}

  </script>
</head>
<body>
	<h2>Alapanyag kiszámoló</h2>
	<label>Mit sütünk?&emsp;</label><select id="text"><br>
		<option value="1">Napest</option>
		<option value="2">Csorgatott keserűcsoki</option>
		<option value="3">Paramel bombatorta</option>
		<option value="4">Porcukros vaj</option>
		<option value="5">Tojásos piskóta</option>
		<option value="6">Vagdalt kent dió</option>
	</select><br><br>
	<label>  Hány személyre készül? = </label><input type="number" id="szam1"><br><br>
	<label></label><input type="submit" onclick="kuldes();hozzavalo1();hozzavalo2();hozzavalo3();hozzavalo4();hozzavalo5();hozzavalo6();" value="Számítsd ki!">
	<p id="eredmeny"></p>
	<p id="hozza1"></p>
	<p id="hozza2"></p>
	<p id="hozza3"></p>
	<p id="hozza4"></p>
	<p id="hozza5"></p>
	<p id="hozza6"></p>

</body>
</html> 
