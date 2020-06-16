<?php 
#*********************************REMARKS***************#
# Script are free to use, modify and distribute.		# 
# Please do not modify or remove this remarks.			#
# Created by Tim Leary @ Timothy						#
# 	 Jun 2009											#
# (C) http://www.sinompuru.com/extra/programming      #
#          /convert_number2word.php						#
# php program to convert numeric to words,				#
# original language (bahasa melayu)					    #																					#														#
# Script are free to use, modify and distribute.		# 
# Please do not modify or remove this remarks.			#
#*******************************************************#
#*********************************CATATAN****************
# Script ini bebas digunakan, dipinda atau diedarkan 	#
# dengan syarat untuk mengekalkan bahagian catatan ini.	#
# Dicipta oleh Tim Leary @ Timothy						#
# 	 Jun 2009											#
# (C) http://www.sinompuru.com/extra/programming      #
#          /convert_number2word.php						#
# program php untuk memaparkan nilai nombor ke perkataan#
# bahasa asal (bahasa melayu)							#
# 														#
# Script ini bebas digunakan, dipinda atau diedarkan 	#
# dengan syarat untuk mengekalkan bahagian catatan ini.	#
#*******************************************************#

/*
#########################################################
#           contoh /example								#
#														#
# echo number_2_words('123456.00','currency');			#
# echo number_2_words('123456.00','nilai');				#
#														#
# -------number format library list-------------------	#
#														#
# 1. currency	=matawang								#
# 2. decimal	=perpuluhan								#
# 3. value		=nilai									#
#########################################################
*/

function number_2_words($nombor,$format)
{ 
	$nombor = trim(str_replace(',', '', $nombor));
	
	if(is_numeric($nombor))
	{		
	
	
		list($jumlah,$perpuluhan)=explode(".", $nombor);
		
		
		if($jumlah=="")
			{
			$jumlah=0;
			}
		if($format=="matawang")
			{ 
			 //round given number and return number and  decimal seperately
			$jumlah=round_number($nombor,2,'num');
			//trim number to eleminate front zero				
			$jumlah=trim_number($jumlah);	
			 }
			 else
			 {
			 //if bukan matawang
		 	$jumlah=round_number($nombor,6,'num');
			$perpuluhan=round_number($nombor,6,'dcmal');
			$jumlah=trim_number($jumlah);
			 }
		
//#########start convert ke perkataan / convert to words #####################################
		$no_len=strlen(intval($jumlah));
		if($no_len>3 && $no_len!='000')
			{
				//jika lebih dari seribu
				$num_words= tukar_ke_gandaan($jumlah);
			}
		else
		if($no_len==3)
			{
					//tukar ke ratus
				$num_words=gandaan3(intval($jumlah));
			}
		else
		if($no_len==2)
			{
				//tukar ke puluh / belas
				$num_words=belas_puluh(intval($jumlah));
			}
		else 
			{
				// tukar ke digit
			$num_words=digit(intval($jumlah));
			}
//----------------------------------------------------------------//	
//setelah jumlah ditukar, tukar titik perpuluhan kepada perkataan
		$perpuluhan_baru= cek_perpuluhan($perpuluhan,$format); 
		
		if(trim($perpuluhan_baru)!="")
		{
		$decimal="yes";
		}
//#########end convert ke perkataan / convert to words#####################################			
///--------format output  mengikut jenis format nombor------------------------------------
//jika matawang---------------------------------------------------------------------------
		if($format=="matawang")
		{
			$jenis_matawang=" ringgit malaysia "; 
			$end=" sahaja ";//currency type
			if($decimal=="yes" )
				{
					$sen=" sen ";
					$join=" dan "; //decimal /point 
					
				}
			if($num_words=="" || $num_words=="kosong")
				{
				$jenis_matawang="";
					$num_words="";
					$join="";
					$end="";
				}
				
			if(trim($num_words)!="" || trim($perpuluhan_baru)!="" )
				{
				$num_words=$jenis_matawang.$num_words.$join.$sen.$perpuluhan_baru.$end;
				}
			
		}else	
		//jika nilai biasa--------------------------------------------------------------------------
		if($format=="nilai")
		{
			if($decimal=="yes")
				{
					$join="<font color='red'> dan </font>"; //decimal /point 
				}
					$num_words=$num_words;
		}		
		else
		{
		//jika perpuluhan--------------------------------------------------------------------------
		
			if($decimal=="yes")
				{
					$join="<font color='red'> perpuluhan </font>"; //decimal /point 
				}
				if($num_words=="")
				{
					$num_words="kosong";
					
				}
					$num_words=$num_words.$join.$perpuluhan_baru;
		}		

return $num_words;

	}
	else
	{
	echo "Masukkan nombor yang sah";
	}
} 
///#################### end of main function ##############################


/*############################ sub function#########################*/	
//number with length more than 3 
function tukar_ke_gandaan($nombor)
{
				//tukar ke gandaan
				//terbalikkan nombor kerana kiraan gandaan 3 digit bermula dari belakang nombor
				$no_dari_belakang=strrev($nombor);
				//echo $no_dari_belakang;
				//pecahkan kepada 3 setiap bahagian,
				$bahagian = str_split($no_dari_belakang, 3);
				$kira_bhg=1;
				//echo "<br>".$no_dari_belakang."<br>";
					foreach ($bahagian as $bhg_ptr=>$nilai ) 
					{
				     
						  //cek panjang setiap bahagian
						  $nilai_len=strlen($nilai);
						  //jika nilai ==3 convert ke gandaan3
						  if($nilai_len==3)
						  { 
						    
						  $numb=gandaan3(strrev($nilai));
														  
						  }else
						  if($nilai_len==2)
						  {
						  $numb=belas_puluh(strrev($nilai));
						  }
						  else
						  {
						  $numb=digit(strrev($nilai));
						  }
						//  echo"<br>".$kira_bhg."=".$nilai."<br>";
						  
						   if($bhg_ptr>0 && $nilai !='000')
							  {
							  $numb.=" ".gandaan($kira_bhg);
							 
							  }
							  	if ($numb != '') {
								$new_numb[$bhg_ptr] = $numb;
							}
							
							//echo "<br>".$cur."::::".$numb."<br>";
						  //jika nilai==2 convert ke belas/ puluh
						  //jika nilai=1 convert ke digit
						 $kira_bhg++; 
					}
			//setelah mendapat no dalam perkataan bagi setiap bahagian/ susun semula kedudukan nombor (terbalikkan)
				$rearange_numb = array_reverse($new_numb);
				$num_words = implode(' ', $rearange_numb);
				return $num_words;
}
#---------------------------jika gandaan==3--------------------------
function gandaan3($nombor)
{
$no_1= substr($nombor, 0, 1);
$no_2 = substr($nombor, -2);
//jika no pertama bagi gandaan 3 bukan	0
		if ($no_1 != 0) {
			$num_words = digit($no_1) ." ".gandaan(1);
		}
//jika no seterusnya bagi gandaan 3 bukan	00		
		if ($no_2 != '00') {
			$num_words .=" ". belas_puluh($no_2);
			
		}
		
		return $num_words;
}
#---------------------------jika gandaan =3 end------------------------------------
#---------------------------jika gandaan 2++>belas/puluh --------------------------
function belas_puluh($nombor)
{ 
$nombor_pertama= substr($nombor, 0, 1);
$nombor_akhir= substr($nombor, -1);
	
//jika gandaan 2 bukan 10  dan besar dari 19 -- cari belas 
	if($nombor>=11 && $nombor<=19)
		{
		//cari belas
		$num_words=belas($nombor);
		}
	else
	if($nombor_akhir==0)
		{
		//cari puluh
		$num_words=puluh($nombor);
	
		}
	else
	if($nombor_akhir>0)
		{
		$num_words=puluh($nombor_pertama.'0')." ".digit($nombor_akhir);
		}
		//echo $nombor_akhir;
		return $num_words;

}
#---------------------------jika gandaan 2++>belas/puluh  end --------------------------
#--------------------------- FORMAT TITIK PERPULUHAN -----------------------------------
function cek_perpuluhan($perpuluhan,$format)
{ 

	
	if($format=="matawang")
		{
				
		if(strlen($perpuluhan)>2)
			{
				$perpuluhan=round('0.'.$perpuluhan,2);
					
				$perpuluhan=substr($perpuluhan,2,2);
			
			}
			if(strlen($perpuluhan)==1)
			{
				$perpuluhan=$perpuluhan.'0';
			}
			
			if(strlen($perpuluhan)==2 && $perpuluhan!='00')
			{
				$perpuluhan_baru=belas_puluh($perpuluhan);
			}
			else
			{
			if($perpuluhan!='0')
				{
					$perpuluhan_baru=digit($perpuluhan);
				}
			}
		}
		else
		{
		$arr_per=str_split($perpuluhan,1);
			foreach($arr_per as $num)
			{
			$perpuluhan_baru.=" ".digit($num);
			}
		
	}	
		return $perpuluhan_baru;
}
#--------------------------- FORMAT TITIK PERPULUHAN END -----------------------------------

#--------------------------- TRIM NUMBER  TO ELEMINATE FRONT ZERO  -------------------------
function trim_number($nombor)
{///-------------------------///trim jumlah start supaya tiada awalan kosong----------------
//we dont use inval to avoid rounding number for more than quadrillion value
							$trim_str_arr=str_split($nombor,1);
							$penanda='0';
							$new_jumlah = "";
							foreach($trim_str_arr as $trim_str)
							{
								if($penanda=='0')
								{
									if($trim_str!='0')
									{
									$new_jumlah.=$trim_str;
									$penanda="1";
									}
								}
								else
								{
								$new_jumlah.=$trim_str;
								}
							}
							
							$nombor=$new_jumlah;
							if($nombor=="")
							{
							$nombor=0;
						}
	
		return $nombor;
}
#--------------------------- TRIM NUMBER  TO ELEMINATE FRONT ZERO END --------------------------
#----------------------------ROUND NUMBER TO DESIRED DECIMAL POINT------------------------------
/* we dont use existing PHP round() function to avoid value conversion  for value more than quadrillion*/
function round_number($nombor,$dec_point,$param)
{ //round number to 2 decimal point
//param=="dcmal"==>return decimal;
//param=="num"==>return num only;
	list($nombor,$dcmal)=explode(".",$nombor);
	if($nombor=="" || intval($nombor)=="0")
			{
			$nombor=0;
			}
			
			    		// tukar kepada 3 titik perpuluhan sahaja
			$dec_point=	$dec_point;		
			$dcmal=substr($dcmal,0,$dec_point+1);
			$dec_first_len=strlen($dcmal);
			$tambahan = 0;
				if(strlen($dcmal)>2 && intval($dcmal)!=0)
					{
					//bundarkan kepada 2 titik perpuluhan
					$dcmal=round('0.'.$dcmal,$dec_point);
					$dcmal=substr($dcmal,2,$dec_point);
					// tukar kepada 2 titik perpuluhan sahaja
					//jika kosong selepas dibundarkan // tambah 1 ke jumlah.
					if(trim($dcmal)=="")
						{
							$tambahan=1;
						}
						
					}
					
							$no_reverse=strrev($nombor);
							//echo $no_dari_belakang;
							//pecahkan kepada 3 setiap bahagian,
							$arr_3no = str_split($no_reverse, 3);
							//kira jumlah bilangan dalam array
							$kira_arr3=count($arr_3no);
							//pembilang array
							$arr_counter=1;
							//echo "<br>".$no_dari_belakang."<br>";
								foreach ($arr_3no as $bhg_ptr=>$nilai ) 
								{
								$arr_3val=strrev($nilai)+$tambahan;
								
								   if(strlen($arr_3val)>=4)
									   {
									 	 $tambahan=1; 
//jika pembilang array  kurang dari jumlah bilangan array, set 0;
										  if($arr_counter<$kira_arr3)
											  {
												  $arr_3val="000";
											  }
									   }
									   else
									   {
									   $tambahan=0; 
									    }
							
								
								//echo "<br>ctr:".$arr_counter."-->".$kira_arr3."<br>";
								  if($bhg_ptr>=0)
									  {
									
									 if($arr_counter<$kira_arr3)
										{
											  for($i=strlen($arr_3val);$i<3;$i++)
											  {
											  
											  $arr_3val="0".$arr_3val;
											  
											  }
										 } 
									//  echo "<br>aaa:".$arr_3val;
										 $new_numb[$bhg_ptr] =$arr_3val;
									
									}
							$arr_counter++;
							
							
							
							$dcmal=trim($dcmal);
					
				}
					$rearange_numb2 = array_reverse($new_numb);
					$nombor = implode('', $rearange_numb2);
					
					
				if(strlen($dcmal)==1)
					{
						$dcmal=$dcmal.'0';
					}
					
				if(strlen($dcmal)>1)
					{	
						$dcmal=".".$dcmal;
						for($i=strlen($dcmal);$i<$dec_first_len;$i++)
						{
						$dcmal.="0";
						}
					}
				else
					{
						$dcmal=".00";
					}					
							
if($param=="dcmal")
		{
		return $dcmal;
		}
if($param=="num" || $param=="")
		{
		return $nombor;
		}						

}
#----------------------------ROUND NUMBER TO DESIRED DECIMAL POINT END------------------------------
#--------------------------- FORMAT NUM WITH SEPERATOR  ----------------------------------------
/* use this function to display number in numeric, we dont use existing PHP number_format() function to avoid avoid value conversion for value more than quadrillion*/
function format_my_number($nombor)
{
						$jum_reverse=strrev($nombor);
							$arr_rev = str_split($jum_reverse, 3);
							//rearrange reversed number
							$rearange_arr_rev = array_reverse($arr_rev);
							//print jumlah with comma
							
							//echo "<br>".implode(',', $arr_rev)."<br>";
							$nombor_prt=strrev(implode(',', $arr_rev));
return $nombor_prt;
}
#--------------------------- FORMAT NUM WITH SEPERATOR  END-------------------------------------


############################# pembilang dan nombor dalam perkataan ################################
/* numbers and value in words*/
function digit($num)
{
  $digit = array('kosong', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'lapan', 'sembilan');
return $digit[$num];
}
$penjarak=" ";
function belas($num)
{
$belas[11]="sebelas";
$belas[12]="dua belas";
$belas[13]="tiga belas";
$belas[14]="empat belas";
$belas[15]="lima belas";
$belas[16]="enam belas";
$belas[17]="tujuh belas";
$belas[18]="lapan belas";
$belas[19]="sembilan belas";
return $belas[$num];
}
function puluh($num){
//pembilang puluh
$puluh[10]="sepuluh";
$puluh[20]="dua puluh";
$puluh[30]="tiga puluh";
$puluh[40]="empat puluh";
$puluh[50]="lima puluh";
$puluh[60]="enam puluh";
$puluh[70]="tujuh puluh";
$puluh[80]="lapan puluh";
$puluh[90]="sembilan puluh";
return $puluh[$num];
}
//pembilang gandaan 3
function gandaan($num)
{
$gandaan[1]="ratus";
$gandaan[2]="ribu";
$gandaan[3]="juta";
$gandaan[4]="billion";
$gandaan[5]="trillion";
$gandaan[6]="quadrillion";
$gandaan[7]="quintillion";
$gandaan[8]="sextillion";
$gandaan[9]="septillion";
$gandaan[10]="octillion";
$gandaan[11]="nonillion";
return $gandaan[$num];
}

?>