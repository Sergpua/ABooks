
<?php
$pageTitle = 'Home';
$pageLanguage = '"es"';
$pageScripts = '<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!-- Include all compiled plugins (below), or include individual files as needed --><script src="js/bootstrap.min.js"></script>';
$pageStiles = '<link rel="stylesheet" href="css/bootstrap.css"><link rel="stylesheet" href="css/font-awesome.min.css"><link rel="stylesheet" href="css/style.css">';

include_once 'views/documentHead.php';
include_once 'views/documentTopMenu.php';
include_once 'views/documentSlider.php';
echo "<section class=\"container main\"><div class=\"row\">";
include_once 'views/documentMenuLeft.php';
include_once 'views/documentContent.php';
include_once 'views/documentRightBar.php';
echo "</div></section>";
include_once 'views/documentFooter.php';
echo $pageScripts;
include_once 'views/documentClose.php';
?>
    

    
    	
    		

    

    
    

    
  