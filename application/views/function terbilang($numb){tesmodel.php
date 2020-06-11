function terbilang($numb){
$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
if($numb < 12) return " " . $huruf[$numb]; elseif ($numb < 20) return terbilang($numb - 10) . " belas" ; elseif ($numb < 100) return terbilang($numb / 10) . " puluh" . terbilang($numb % 10); elseif ($numb < 200) return " seratus" . terbilang($numb - 100); elseif ($numb < 1000) return terbilang($numb / 100) . " ratus" . terbilang($numb % 100); elseif ($numb < 2000) return " seribu" . terbilang($numb - 1000); elseif ($numb < 1000000) return terbilang($numb / 1000) . " ribu" . terbilang($numb % 1000); elseif ($numb < 1000000000) return terbilang($numb / 1000000) . " juta" . terbilang($numb % 1000000); elseif ($numb>= 1000000000)
	return false;
	}

	<table>
		<tr>
			<td style="vertical-align: top; padding-right: 9px;">terbilang</td>
			<td style="vertical-align: top;">:</td>
			<td style="text-align: left;"><?php echo wordwrap(terbilang(round(($plus_ppn + $sub_total))), 50, '<br />', true) . ' rupiah' ?>