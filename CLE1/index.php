<?php
$show = (isset($_GET['subpage']) && $_GET['subpage'] != '')
    ? $_GET['subpage'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Portfolio</title>
        <link rel="stylesheet" type="text/css"
         href="css/stylesheet.css"/> <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap">
        <script src="javascript/script.js"></script>
    
    </head>
    <body background="images/last4.jpg">
        <div id="wrapper">
            <div id="logo-menu">
                <div id="logo">
                    <a href="index.php"><img src="images/logo2.png" width="300" height="150" 
                    title="Logo" alt="Logo" /></a>
                    <img src="images/airplane1.png" width="200" height="150" 
                    title="airplane" alt="airplane" />
                    <img src="images/clouds1.png" width="200" height="150" 
                    title="clouds" alt="clouds" />
                    <img src="images/clouds1.png" width="200" height="150" 
                    title="clouds" alt="clouds" />
                    <img src="images/superman.png" width="300" height="150" 
                    title="superman" alt="superman" />
                </div>
                
                <div id="menu">
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="index.php">WORK</a></li>
                        
                    </ul>
                
                </div>
            </div>
            <div id="contents">
                <?php
                switch($show){
                    case 'HOME':
                    require_once 'home.php';
                        break;
                    case 'ABOUT':        
                    require_once 'about.php';
                        break;
                    case 'WORK':
                    require_once 'index.php';
                        break;
                    default:
                }
                ?>
                <div id="pic-content">
                <div id="pic">
                    <a href="CLE1MT/index.html"><img src="images/pic1.png" width="800" height="400" 
                    title="poverty" alt="poverty" /></a>
            </div>
                <div id="pic2">
                    <a href="LT2/Index.html"><img src="images/cook.png" width="800" height="400" 
                    title="cook" alt="cook" /></a>
            </div>
                    <div id="pic3">
                    <a href="LT3/Index.html"><img src="images/pic3.png" width="800" height="400" 
                    title="red" alt="red" /></a>
            </div>
                    <div id="pic4">
                    <a href="LT4/Index.html"><img src="images/pic4.png" width="800" height="400" 
                    title="bike" alt="bike" /></a>
            </div>
                    <div id="pic5">
                    <a href="LT5/Index.html"><img src="images/ironman.jpg" width="1400" height="700" 
                    title="ironman" alt="ironman" /></a>
            </div>
                    <div id="pic6">
                    <img src="images/palm1.png" width="240" height="300" 
                    title="palm" alt="palm" />
            </div>
                    <div id="pic7">
                    <img src="images/pirate.gif" width="600" height="550" 
                    title="pirate" alt="pirate" />
            </div>
                    
                    
       </div>
                <div id="footer">
                        <p>&#8220;Life is short, do what makes you happy.&#8221;</p><span>- Saint Yulo</span>
                </div>
        </div>
             </div>
        <div id="block">
                    
                    <div id="block-1" onclick="talkid(this)" onmouseout="hideid(this)">
                
                
                    </div>
                    <div id="block-2">
                
                
                    </div>

                    <div id="block-3" onclick="talkid(this)" onmouseout="hideid(this)"> 
                
                
                    </div>

                    <div id="block-4" onclick="talkid(this)" onmouseout="hideid(this)"> 
            
            
                    </div>
                    <div id="block-5">
                
                
                    </div>
                    <div id="block-6" onclick="talkid(this)" onmouseout="hideid(this)">
                
                
                    </div>
                    <div id="block-7">
                
                
                    </div>
                    <div id="block-8" onclick="talkid(this)" onmouseout="hideid(this)">
                
                
                    </div>
                    <div id="block-9" onclick="talkid(this)" onmouseout="hideid(this)">
                
                
                    </div>
                    <div id="block-10">
                
                
                    </div>
            <div id="man-text" >
                <div class="bubble">
                  
                WELCOME ON BOARD<br/>
                    Please click on the images.
                    <br/>
                 
                </div>
            </div>
            <div id="life-text" >
                <div class="bubble">
                   <br/>
                    Keep life simple.
                 
                </div>
            </div>
            <div id="pirate-text" >
                <div class="bubble">
                    “Not all treasure is silver and gold, mate.”

                        ― Jack Sparrow.
                 
                </div>
            </div>
                </div>
        
    </body>
</html> 