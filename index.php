<?php
	include 'header.php';
	$pageID = "home";
	$pageIDNumber = "home";
	$pageParent = 0;
	if (isset($_GET["section"])) {
		$pageID = "section".$_GET["section"];
		$pageIDNumber = $_GET["section"];
	}
	if (isset($_GET["parent"])) {
		$pageParent = $_GET["parent"];
	}
	$pageLang = "en";
	if (isset($_GET["lang"])) {
		$pageLang = $_GET["lang"];
	}
?>
<!--check here pagenumber , see we need change or not-->
<!--<body id="<?php// echo $pageID; ?>">-->
<body id="<?php echo $pageID?>">
    <?php 
        if($pageID!="home"){
            echo "<header class=\"navbar navbar-inverse normal\" role=\"banner\">";        
        }else {
            echo "<header class=\"navbar navbar-inverse hero\" role=\"banner\">";
        }
    ?>
            <div class="container">
                <div class="<?php echo $pageLang;?>">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                            <!--xf chang testing here later-->
                        <a href=  <?php if($pageLang == "jp"){ echo "index.php?lang=jp";}
                                    else { echo"index.php";}
                                 ?> 
                                 class="navbar-brand">GloryApparel</a>
                    </div>
                    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav1" data-toggle="dropdown">
                                   <span> Languages</span> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?lang=en<?php if ($pageID != "home") {echo "&section=".$pageIDNumber; }?>" class="lang-en">Eng</a></li>
                                    <li><a href="index.php?lang=jp<?php if ($pageID != "home") {echo "&section=".$pageIDNumber; } ?>" class="lang-jp">日本語</a></li>           
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav2" data-toggle="dropdown">
                                    <span>About us</span><b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li ><a class="nav3" href="index.php?lang=<?php echo $pageLang; ?>&section=5"><span>Mission</span></a></li>
                                    <li ><a class="nav4" href="index.php?lang=<?php echo $pageLang; ?>&section=4"><span>Our Group</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav5" data-toggle="dropdown">
                                    <span>Production</span><b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <!--CHANGE, index.php to index.php-->
                                    <li ><a class="nav6" href="index.php?lang=<?php echo $pageLang; ?>&section=3"><span>Capacity</span></a></li>
                                    <li ><a class="nav7" href="index.php?lang=<?php echo $pageLang; ?>&section=2"><span>Quality Assurance & Market</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav8" href="index.php?lang=<?php echo $pageLang;?>&section=6"><span>Gallary</span></a> 
                            </li>
                              <li>
                                <a class="nav10" href="index.php?lang=<?php echo $pageLang;?>&section=7"><span>Contact us</span></a> 
                            </li>
                            <!--CHANGES HERE-->
                            <li><a class="nav9" href="http://www.glorynyc.com/staff"><span>Staff Login/Logout</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    
   <!--contain all the content below--> 

    <?php
    	if ($pageID != "home"){
    		include $pageLang."-".$pageID.".php";
    	}else {
             if($pageLang == "jp"){
                include "jp-home.php";
            } else {
                include "en-home.php";
            }
        }
	?>
    <div id="footer-white">
        <div class="container">
            <div class="row credits">
                <div class="col-md-12">
                   All rights reserved by Glory Apparel Inc.
                </div>
            </div>
        </div>
    </div>
</body>
</html>