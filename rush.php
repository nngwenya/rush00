<!DOCTYPE html>

<HTML>
    <HEAD>
        <TITLE>Rush_00</TITLE>
        <link rel="stylesheet" type="text/css" href="rush.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </HEAD>
    <BODY>
        <header>
           
                    <div class="header"><h1>GOTHIC LIFESTYLE</h1></div>
                    <i class="fa fa-basket"></i>
                    <button class="login" onclick="window.location.href='login.php'"  ><h1>login</h1></button>
                    <button class="login" onclick="window.location.href='SignUp.php'" ><h1>Sign UP</h1></button>
        
        </header>
        <ul>
                <li><div class="dropdown">
                        <button class="dropbtn">HOME</button>
                        <div class="dropdown-content">
                          <a onclick="window.location.href='rush.php'">About</a>
                        </div>
                      </div></li>
                <li><div class="dropdown">
                        <button class="dropbtn">MAN</button>
                        <div class="dropdown-content">
                          <a onclick="window.location.href='man.php'">man clothing</a>
                        </div>
                      </div></li>
                <li><div class="dropdown">
                        <button class="dropbtn">WOMEN</button>
                        <div class="dropdown-content">
                          <a onclick="window.location.href='women.php'">women clothing</a>
                        </div>
                      </div></li>
                <li><div class="dropdown">
                        <button class="dropbtn">ACCESORIES</button>
                        <div class="dropdown-content">
                          <a onclick="window.location.href='accessories.php'">accesories</a>
                        </div>
                      </div></li>
                    
            </div>
        </ul><br>

        <div class="w3-content w3-display-container">
        <center><img class="mySlides" src="http://www.inofashionstyle.com/wp-content/uploads/gothic-short-prom-dresses-samples.jpg"width="1000px" height="800px"/></center>
        <center><img class="mySlides" src="http://3.bp.blogspot.com/-YQilSBE6ehM/UXzdiJLpE-I/AAAAAAAAALU/AolTZjmQUUk/s1600/7634f3faf3f3e79aa582718801e244bf.jpg" width="1000px" height="800px"/></center>
        <center><img class="mySlides" src="https://ae01.alicdn.com/kf/HTB1.n9iRpXXXXcdXVXXq6xXFXXXx/Punk-Mens-Ripped-Motorcycle-Casual-T-Shirt-Visual-Kei-Elastic-Strip-Top-L-XXL-T303.jpg"width="1000px" height="800px"/>
        <center><img class="mySlides" src="https://d2fzf9bbqh0om5.cloudfront.net/images/6302/original/1.Goth-Dresses.png?1476737644"width="1000px" height="800px"/></center>
        <p id="onimage"></a> Gothic fashion is a clothing style marked by conspicuously dark, mysterious, antiquated and homogenous features. It is worn by members of the Goth subculture. A dark, sometimes morbid fashion and style of dress, typical gothic fashion includes a pale complexion with colored black hair, black lips and black clothes.</p>

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <script>
                var slideIndex = 1;
                showDivs(slideIndex);
                
                function plusDivs(n) {
                  showDivs(slideIndex += n);
                }
                
                function showDivs(n) {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  if (n > x.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                     x[i].style.display = "none";  
                  }
                  x[slideIndex-1].style.display = "block";  
                }
                </script>
            <br>
    </BODY>
    <hr>
    <footer><p><i>Copyright &copy; nngwenya 2017.All rights reserved.</i></p></footer>
</HTML>