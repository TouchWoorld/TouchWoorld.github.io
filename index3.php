<?php
#text {
position: absolute
top: 50%;
left: 50%;


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>worldmap</title>
</head>
<body>цена от:<input type="range" step="500" min="0" max="100000" list="rangeList" onchange="document.getElementById('rangeValue').innerHTML = this.value;"> <datalist id="rangeList"> <option value="0" label="0"> <option value="50000" label="50000"> <option value="100000" label="100000"> </datalist> <span id="rangeValue">50000</span>
<br>
<body>цена до:<input type="range" step="500" min="0" max="100000" list="rangeList" onchange="document.getElementById('rangeValue').innerHTML = this.value;"> <datalist id="rangeList"> <option value="0" label="0"> <option value="50000" label="50000"> <option value="100000" label="100000"> </datalist> <span id="rangeValue">50000</span>                        
<br>
Кол-во дней.
<input type="text" placeholder="дни"/>
<input type="submit" value="Поиск"/>
<center>
<p><img src="map.png" width="1000" height="500" alt="map"></p>
 <p><img src="met.png">
<span id="text"> <h6><a href="">Москва 8000р</a></p></h6></span>
</center>
</body>
</html>

