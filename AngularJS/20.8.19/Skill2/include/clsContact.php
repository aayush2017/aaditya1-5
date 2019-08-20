<?php
/**
* Email Recive and Send Data
*/
class contactDetail 
{
	public function saveContactEMail($cName, $email, $phone, $message, $formName)
	{
		try {
			$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die('Unable to connect');
			$sql = "INSERT INTO `emailData`(`name`, `email`, `phone`, `message`, `formName`) VALUES('$cName', '$email', '$phone', '$message', '$formName')";
			return $mysqli->query($sql);
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());			
		}
	}
	public function selectEmail($formName)
	{
		try {
			$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die('Unable to connect');
			$sql = "SELECT * FROM `emailData` WHERE `formName`='$formName'";
			return $mysqli->query($sql);
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());			
		}
	}
	public function executeSQL($sql)
	{
		try {
			$mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die('Unable to connect');
			return $mysqli->query($sql);
		} catch (Exception $e) {
			die('Error : ' . $e->getMessage());			
		}
	}
}
?>