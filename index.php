<?php
include('config.php');
$page = $_GET['page'];

//Page logic

if(empty($page))
{
        $page = "home";
        $page_title = "Home";
        include('view/header.phtml');    
		include('view/home.phtml');
}
else
{
	if(!file_exists("view/" . $page . ".phtml"))
	{
                $page_title = "404";
                include('view/header.phtml');
				include('view/404.phtml');
	}
	else
	{
                $page_title = ucfirst($page);
                include('view/header.phtml');
				include('view/' . $page . '.phtml');
	}
}

include('view/footer.phtml');
?>