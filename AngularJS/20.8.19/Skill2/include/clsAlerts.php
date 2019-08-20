<?php 

function showAlerts()
{
	if(isset($_SESSION['ErrorMessage']))
	{
		if($_SESSION['ErrorMessage']!="")
		{
			showError($_SESSION['ErrorMessage']);
			$_SESSION['ErrorMessage']='';
		}
		
	}
	
	if(isset($_SESSION['SuccessMessage']))
	{
		if($_SESSION['SuccessMessage']!="")
		{
			showSuccess($_SESSION['SuccessMessage']);
			$_SESSION['SuccessMessage']='';
		}
		
	}
	
	if(isset($_SESSION['InfoMessage']))
	{
		if($_SESSION['InfoMessage']!="")
		{
			showInfo($_SESSION['InfoMessage']);
			$_SESSION['InfoMessage']='';
		}
		
	}
}	

function showError($message)
{
	echo '<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		
		echo $message;
	echo '</div>';
}

function showSuccess($message)
{
	echo '<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	';
		
		echo $message;
	echo '</div>';
}

function showInfo($message)
{
	echo '<div class="alert alert-info alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
		
		echo $message;
	echo '</div>';
}
?>