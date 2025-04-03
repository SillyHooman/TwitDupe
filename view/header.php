<!DOCTYPE html>
<html>
<head>
    <title><?php echo updateing $pagetitle ?></title>
   
</head>

<body>
<header>
	<nav>
		<a href="login_register.php">Home</a> | <?php echo $menu
		
		if(isset($_SESSION['username']))
    { ?>
    <nav>    
        <a href="session_example.php">Home</a> |
        <a href="session_example.php?action=forget">Forget Me</a> |     
        <a href="session_example.php?action=changeform">Change Info</a>    
    </nav>
    <?php }    else { ?>
    <nav>    
        <a href="session_example.php">Home</a> | 
        <a href="session_example.php?action=forget">Forget Me</a> 
    </nav>
    
    <?php } ?>
		
		
	</nav>
</header>
	