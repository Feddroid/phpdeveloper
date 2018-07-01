<?php

	header("Content-Type: text/html;charset=UTF-8");

	function build($str){

		echo "<strong>entrada</strong> : ".$str;

		$abecedario = range("a","z");
		$separarString = preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
	    $devolver = "";

		foreach ($separarString as $valores) {

			++$valores;

			if( in_array($valores, array_map("strtoupper", $abecedario) ) || in_array($valores, $abecedario) || $valores) {

				$devolver .= ($valores == "AA" ? "A" :
								($valores == "aa" ? "a" :
									(is_numeric($valores) ? $valores-1 :
										($valores == "O" ? "Ñ" :
											($valores == "N" ? "N" :
												($valores == "n" ? "n" :
													($valores == "Ñ" ? "O" :
														($valores == "ñ" ? "o" : $valores) ) ) ) ) ) ) );
			}

		}

		return $devolver;
	}

	echo " <strong>salida</strong> : ".build("mNÑ Moz O qQ !*Zsñ2");

?>