<?php
class RSA extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generatePrimeP() {
		$p = gmp_nextprime(rand(5000000,9000000)); 
		return $p;
	}	

	public function generatePrimeQ() {
		$q = gmp_nextprime(rand(1000000,4000000)); 
		return $q;
	}	

	public function generateModulo($p,$q){
		$n=bcmul($p,$q);
		return $n;
	}	

	public function generateTotient($p,$q){
		$totient=bcmul(bcsub($p,1),bcsub($q,1));
		return $totient;
	}

	public function generatePublicKeys($totient){
	$start=rand(1000,2000);
	$end=rand(3000,4000);
	for($e=$start;$e<$end;$e++){  
	    $gcd = gmp_gcd($e, gmp_strval($totient));
	    if(strval($gcd)=='1')
	        break;
	}
		return $e;
	}

	public function generatePrivateKeys($totient,$e){
		$i=1;
		do{
			$a = gmp_mul($totient,$i);
			$b = gmp_add($a,1);
			$res = gmp_div_qr($b, $e);
			$i++;
		    if($i==10000) 
		    break;
		}while(strval($res[1])!='0');
		$d=$res[0];
		return $d;
	}

	public function encrypt($plaintext,$e,$n){
		$ciphertext = "";
		for($i=0;$i<strlen($plaintext);++$i){
			$todecimal = ord($plaintext[$i]);
			$ciphertext .= gmp_strval(gmp_powm($todecimal,$e,$n),36);
			if($i!=strlen($plaintext)-1){
				$ciphertext.="-";
			}
		}	
		return $ciphertext;
	}

	public function decrypt($ciphertext,$d,$n){
		$plaintext="";
		$teks=explode("-",$ciphertext);
		foreach($teks as $nilai){
		    $decimal = base_convert($nilai, 36, 10);
			$plaintext .= chr(gmp_strval(gmp_powm($decimal, $d, $n)));
			if($nilai!=strlen($plaintext)-1){
				$plaintext.="";
			}
		}	
		return $plaintext;
	}

}
