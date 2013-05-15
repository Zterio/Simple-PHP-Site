<?php
	/* Site.php */
	// Author: Heisteknikk \\
	// Does most of the stuff, From finding the page and render it \\
	$Index = "home";
	$Query = "";
	if(!isset($_GET['p']) || empty($_GET['p'])) { 
		$Query = "home";
	}
	else
	{
		$Query = strtolower($_GET['p']);
	}
    if(!file_exists("./Pages/".$Query.".php")) { header("Location: /NotFound");}
	require("./Pages/".$Query.".php");
	require("./Core/Page.php");
