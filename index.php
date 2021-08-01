<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: center;
  text-decoration: none;
  size: 20px;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

.bee{
  
  color:white;
  border:none;
  position:relative;
  
  font-size:1em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
    }
.bee:hover{
 
  color:#0ff5e9;
  
}
.bee:before,.bee:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #0ff5e9;
  transition:400ms ease all;
}
.bee:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.bee:hover:before,.bee:hover:after{
  width:100%;
  transition:800ms ease all;
}
.b{
  background:MediumTurquoise; 
  color:#fff;
  border:none;
  position:relative;
  height:300px;
  width: 300px;
  font-size:1.1em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
.b:hover{
  background:DarkCyan;
  color:#0ff5e9;
  font-size:2em;
  height: 380px;
  width: 350px;
}
.b:before,.b:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
.b:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.b:hover:before,.b:hover:after{
  width:100%;
  transition:800ms ease all;
}
.shop{
  opacity:1;
  border-color: white;
}
.link{
  background: black;
}
.wrapper{
  max-height: 410px;
  border: 3px solid #ddd;
  display: flex;
  overflow-x: auto ;
}
.wrapper:: -webkit-scrollbar{
 width: 0 ;
 height: 0;
}
.wrapper .item{
  min-width: 1000px;
  height: 410px;
  line-height: 110px;
  background-color: #ddd;
  margin-right: 2px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  height: 100%;
  border-radius: 4px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 50px;
}

.center {
 
  text-align: center;
}

.services {
  background: #131313;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100%;
  padding: 10rem 0;
}


.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #7de8e1, 0 0 40px #7de8e1, 0 0 50px #7de8e1, 0 0 60px #7de8e1, 0 0 70px #7de8e1;
  }
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #0ff5e9, 0 0 40px #0ff5e9, 0 0 50px #0ff5e9, 0 0 60px #0ff5e9, 0 0 70px #0ff5e9, 0 0 80px #0ff5e9;
  }
}
}
</style>
</head>
<body style="margin: 0; font-family: Helvetica; font-size: 20px;">
  <ul>
  <li><a href="login_page.php" target="_blank" style="padding: 30px 20px 20px 20px;" class="bee">LOGIN</a></li>
  <li><a href="home_page.html" style="padding: 30px 20px 20px 20px;" class="bee" target="_blank">ABOUT US</a></li>   
  <li><a href="#Live" style="padding: 30px 20px 20px 20px;" class="bee">LIVE UPDATES</a></li>
  <li><a href="#links" style="padding: 30px 20px 20px 20px;" class="bee">SERVICES</a></li>
  <li><a href="manage_cart.php" target="_blank" style="padding: 30px 20px 20px 20px;" class="bee">EASY SHOP</a></li>
  <li><a href="index.php" style="padding: 30px 20px 20px 20px;" class="bee">HOME</a></li>
  <li style="float: left; margin-left: 15px;"><img src = "image/fevicon.jpg" height="70px" width="70px"></li>
  <li style="padding: 20px 380px 0px 0px; float: left; margin-left: 5px;"><font size="6" color="white">CoviTech</font></li>
</ul>
<br><br><br>
<div class = "wrapper"> 
    <div class="item"><a href="https://transformingindia.mygov.in/digital-india/" target="_blank"><img src="image/scroll1.png" width="1000px" height="400px"></a></div>

    <div class="item"><a><img src="image/scroll2.jpg"  width="1000px" height="400px"></a></div>

    <div class="item"><a href="https://www.cowin.gov.in/home" target="_blank"><img src="image/scroll3.jpg"  width="1000px" height="400px"></a></div>

    <div class="item"><a href="https://www.aarogyasetu.gov.in/applink/" target="_blank"><img src="image/scroll4.jpg"  width="1000px" height="400px"></a></div>
</div>
<div align="center">
  <br><br><br>
<table>
  <tr>
   <th>
      <i class="fas fa-virus" style="margin-right: 20px; font-size: 60px; color:red ;"></i>
      <br>
      <h3 style="margin: 20px 100px; color:red;">FIGHT COVID WITH US</h3>
  </th>

  <th>
      <i class="fas fa-cart-plus" style="margin-right: 30px; font-size: 60px; color:green;"></i>
      <h3 style="margin: 20px 100px; color:green;">BUY COVID ESSENTIALS</h3>
  </th>
  <th>
      <i class="fas fa-headset" style="margin-right: 30px; font-size: 60px; color:blue;"></i>
      <h3 style="margin: 20px 100px; color: blue;">PREMIUM SUPPORT</h3>
  </th>
</tr>
</table>
<br><br><br>
</div>
<div style="background-color: black;" align="center" id="links">
  <br>
  <h1 class="glow" id="links">SERVICES</h1>
  <br>
      <a href="https://www.aarogyasetu.gov.in/" target="_blank"><img src="image/Register.gif" width="300px"></a>
      &emsp;&emsp;&emsp;&emsp;
      <a href="https://www.pmcares.gov.in/en/" target="_blank"><img src="image/donate.gif" width="300px"></a>
      &emsp;&emsp;&emsp;&emsp;
       <a href="https://www.aarogyasetu.gov.in/" target="_blank"><img src="image/location.gif" width="300px"></a>
       &emsp;&emsp;&emsp;&emsp;
        <a href="suggest.html" target="_blank"><img src="image/reading.gif" width="300px"></a>
        <br><br><br>
    </div>
  <div>
  <br>
    <h1 class="glow" id="Live">LIVE UPDATES</h1>
    <br> 
  <span> 
    <iframe src="https://www.bing.com/search?q=covid+graph&cvid=254d21ba1cd84d1296c79134df1437c1&aqs=edge..69i57j0l5j69i60.5812j0j1&pglt=169&FORM=ANNTA1&PC=HCTS" height="600px" width="50%"></iframe>

    <iframe src="https://www.bing.com/search?q=Coronavirus+vaccine&FORM=covwpt&tf=U2VydmljZT1HZW5lcmljQW5zd2VycyBTY2VuYXJpbz1Db3JvbmFWaXJ1c01MIFBvc2l0aW9uPVRPUCBSYW5raW5nRGF0YT1UcnVlIEZvcmNlUGxhY2U9VHJ1ZSBQYWlycz1pbnRlbnQ6Q2hlY2tDb3JvbmFWYWNjaW5lO2NvdW50cnljb2RlOklORDtzdGF0ZUNvZGU6SFI7YWJvdmVuZXdzOnRydWU7IHw%3d&hs=EnZkh4FhmjqrTSuGPySClY6%2fNfwU2v9VPWd2LPFM8bo%3d" height="600px" width="49%"></iframe>
  </span>
    </div>
  <br>
  <div id="ytb">
    <br>
    <h1 style="color: black; text-align: center;">SOME USEFUL YOUTUBE VIDEOS</h1>
    <br>
    <div align="center">
    <iframe width="450" height="315" src="https://www.youtube.com/embed/2etHdW0Xdsk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&emsp;&emsp;&emsp;
    <iframe width="450" height="315" src="https://www.youtube.com/embed/vm0eaW24EpE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br><br><br>
  </div>
  <div style="background-color:#333; color:white; font-size: 15px;" align="center">
    <table>
    <tr>
    <th style="padding:25px 60px 0px 70px">
    <pre style="font-size: 15px; font-family: 'Times New Roman';">
      <span style="font-size: 20px; font-family: 'Times New Roman'; ">About Us</span><br>
      CoviTech was created amdist the corona 
      pandemic, by the students of Chandigarh
      University. This website is a one stop 
      solution for all your covid needs. Want 
      to register for covid vaccination? or need
      some covid essential goods? You can get 
      these all and many more right here at CoviTech.
    </pre>
  </th>
  <th style="padding:0px 70px 0px 70px">
      <h3 style="font-size: 20px;">Address</h3>
      <h4><i class="fas fa-map"></i>&emsp;Mohali, Punjab</h4>
      <h4><i class="fas fa-phone-alt"></i>&emsp;+91-9876542345</h4>
      <h4><i class="fas fa-envelope"></i>&emsp;abc@example.com</h4>
  </th>
  <th style="padding:0px 70px 0px 70px">
    <span style="font-size: 20px;">Connect to Us</span>
    <br><br>
    <a href="#"><span class="fab fa-facebook-f" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
    &emsp;
    <a href="#"><span class="fab fa-twitter" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
    &emsp;
    <a href="#"><span class="fab fa-instagram" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
    &emsp;
    <a href="#"><span class="fab fa-youtube" style="font-size: 40px; color:#0ff5e9 ;"></span></a>
  </th>
</tr>
</table>
<p align="right"><font color="white" size="3">&copy; CoviTech</font></p>
<br>
</div>
</body>
</html>