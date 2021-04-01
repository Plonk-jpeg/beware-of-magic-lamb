<?php 
//prevetionpour les injections sql
function _escape ($string) {
	return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
	//echo htmlentities($string, ENT_QUOTES, 'UTF-8');
}

