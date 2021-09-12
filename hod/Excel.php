<?php
function AddExcelData($studFNames,$studMNames,$studLNames,$rolls,$Enrollments,$paths,$month,$year){
$studName=$studFNames." ".$studMNames." ".$studLNames;
$output = passthru("C:/Users/admin/AppData/Local/Programs/Python/Python37/python.exe C:/xampp/htdocs/GUIFinal/HOD/exel.py ".$studName." ".$rolls." ".$Enrollments." ".$paths." ".$month." ".$year);

	
		
	
}
?>