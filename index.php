<?php
$page = $_GET['page'];

//Page logic
include('view/header.phtml');

if(empty($page))
{
	include('view/home.phtml');
}
else
{
	if(!file_exists("view/" . $page . ".phtml"))
	{
		include('view/404.phtml');
	}
	else
	{
		include('view/' . $page . '.phtml');
	}
}

include('view/footer.phtml');
?>