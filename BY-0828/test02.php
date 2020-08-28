<h1>計算累加和累乘</h1>
<hr>
<?php
	function accumulate($n) { //替函數進行命名
			//$n=50;由固定一值變為比較彈性
			$total=0;
			for($i=1; $i<=$n; $i++){
				$total += $i; //意思為 $total=$total+$i
			}
		return $total; //計算累加
	}

	function fact($n) { //替函數進行命名
			//$n=50;由固定一值變為比較彈性
			$total=1;
			for($i=1; $i<=$n; $i++){
				$total *= $i; //意思為 $total=$total*$i
			}
		return $total; //計算累乘
	}
	function gen_row($bgc, $c1, $c2, $c3){
			echo "<tr bgcolor=$bgc><td align=center>$c1</td><td align=center>$c2</td><td align=center>$c3</td></tr>";
			}


	echo "<table border=0 width=500>";
	gen_row("#ffd000","i", "Σi", "i!");
	//echo "<tr bgcolor=#749d9b><td align=center>i</td><td align=center>Σi</td><td align=center>i!</td></tr>";

	for($i=1; $i<=20; $i++ ){ //for迴圈可重複動作
		//echo accumulate($i). "<br>";
		//echo fact($i). "<br>"; //函數需要被呼叫才會被執行
		if ($i%2) //條件篩選透過餘數運算來區分顏色
	       	//echo"<tr bgcolor=#efb28c>";
	//else
			gen_row("#598987",$i, accumulate($i), fact($i));
		else
			gen_row("#ff6670",$i, accumulate($i), fact($i));
		//echo "<tr bgcolor=#eed19c>";
		//echo "<td align=center width=100>".$i. "</td>";
		//echo "<td align=center width=100>".accumulate($i) . "</td>";
		//echo "<td align=center width=300>" .fact($i) ."</td>";
		//echo "</tr>";
	}
	echo "</table>";
	echo "<hr>";
	


		
?>
	