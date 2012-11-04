<?php
$page = $_GET['page'];

//Page logic

if(empty($page))
{
        $page = "home";
        $title = "Home";
        include('view/header.phtml');    
	include('view/home.phtml');
}
else
{
	if(!file_exists("view/" . $page . ".phtml"))
	{
                $title = "404";
                include('view/header.phtml');
		include('view/404.phtml');
	}
	else
	{
                $title = ucfirst($page);
                include('view/header.phtml');
		include('view/' . $page . '.phtml');
	}
}

include('view/footer.phtml');
?>