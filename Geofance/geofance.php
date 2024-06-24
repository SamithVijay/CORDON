<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<title>Geofance | CORDON</title>
</head>

<body>
<div class="grid-container">

<!--Header-->
<header class="header">
<div class="menu-icon" onclick="openSidebar()">
<ion-icon name="menu-outline" style="width:50px; height:50px; color:#FFFFFF;">
<span>MENU</span>
</ion-icon>
</div>
<div class="header-left">
<input type="text" placeholder="Search..." />
<a href="#">
<span><ion-icon name="search-circle-outline"></ion-icon></span>
</a>
<h1>Cordon</h1>
</div>

</header>



<!--sidebar-->

<div class="sideNav">
<nav class="Nav">
<ul>
<li>
<a href="userdash.php" class="logo">
<img src="assets/img/logo.png" />
<span class="nav-item">Cordon</span>
</a>
</li>
<li><a href="userdash.php"><i class="fas fa-home"></i> <span class="nav-item">HOME</span></a></li>
<!-- <li><a href="#"><i class="fas fa-power-off"></i><span class="nav-item">Immoblizer</span></a></li>
<li><a href="#"><i class="fas fa-archive"></i><span class="nav-item">Management</span></a></li> -->
<li>
    <a class="sub-btn"><i class="fas fa-archive"></i><span class="nav-item">Management
      <!--dropdown-->
      <i class="fas fa-angle-right dropdown"></i>
    </span></a>
    <div class="sub-menu">
      <a href="user-reg.php" class="sub-item">User <i class="fas fa-user-plus" style="font-size:18px"> </i></a>
      <a href="vehicle-reg.php" class="sub-item">Vehicle <i class="fas fa-car" style="font-size:18px"></i></a>
    </div>
  </li>
<li><a href="range.php"><i class="fas fa-tachometer-alt"></i><span class="nav-item">Range</span></a></li>
<li><a href="#"><i class="fas fa-bell"></i><span class="nav-item">Alerts</span></a></li>
<li><a href="map.php"><i class="fas fa-map-marked-alt"></i><span class="nav-item">Map</span></a></li>
<li><a href="location.php"><i class="fas fa-map-marker-alt"></i><span class="nav-item">Location</span></a></li>
<li><a href="#"><i class="fas fa-file-alt"></i><span class="nav-item">Reports</span></a></li>
<li><a href="#"><i class="fas fa-globe-asia"></i><span class="nav-item">Geofence</span></a></li>
<!-- <li><a href="#"><i class="fas fa-cogs"></i><span class="nav-item">Settings</span></a></li> -->
<li><a href="track.php" class="track"><i class="fas fa-search-location"></i><span class="nav-item">Track</span></a></li>
<li><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i><span class="nav-item">Logout</span></a></li>
</ul>
</nav>
</div>






<!--Main-->

<!--Main-->
<main class="main-container">

<h1>Vehicle Tracker</h1>

  <div class="cards-container">
    <div class="card">
      <div class="card-inner">
        <h3>Total Vehicles</h3>
        <span><i class="fas fa-car"></i></span>
      </div>
      <h1 id="totalVehicles">0</h1>
    </div>

    <div class="card">
      <div class="card-inner">
        <h3>Running Vehicles</h3>
        <span><i class="fas fa-car-side"></i></span>
      </div>
      <h1 id="movingVehicles">0</h1>
    </div>

    <div class="card">
      <div class="card-inner">
        <h3>Parked Vehicles</h3>
        <span><i class="fas fa-car"></i></span>
      </div>
      <h1 id="parkedVehicles">0</h1>
    </div>

    <div class="card">
      <div class="card-inner">
        <h3>Idle Vehicles</h3>
        <span><i class="fas fa-car-alt"></i></span>
      </div>
      <h1 id="idleVehicles">0</h1>
    </div>
  </div>

  <form id="updateForm">
    <label for="state">Vehicle State:</label>
    <input type="text" id="state" name="state" required>
    <br>
    <label for="coordinates">Coordinates (comma-separated):</label>
    <input type="text" id="coordinates" name="coordinates" required>
    <br>
    <button type="submit">Update Vehicle</button>
  </form>


<main class="main-container">
<!-- <div class="main-title">
<h1 style="color:#ffffff; letter-spacing:1px;">geofance <ion-icon name="location-outline"></ion-icon></h1>
</div> -->
<br />

<div class="loc">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d124400.73085865192!2d77.6568832!3d13.0023424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1708681848901!5m2!1sen!2sin" style="border:0; align-items:center; justifu-content: center; width:100%; height:800px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

</main>

</div>



<style>
*{
margin:0;
padding:0;
text-decoration:none;
}
body{
margin:0;
padding:0;
background:black;
color:#CCCCCC;
font-family:"Times New Roman", Times, serif;
}
.grid-container{
display:grid;
grid-template-columns:5% 25% 25% 45%;
grid-template-rows: 0.2fr 3fr;
grid-template-areas:
"sidebar header header header"
"sidebar main main main";
height:100vh;
}
.header-left{
margin-top: 10px;
height:20px;
display:flex;
cursor:pointer;
padding:10px 20px;
background:white;
border-radius: 30px;
align-items: center;
justify-content: center;
box-shadow: 0 10px 25px rgba(0,0,0,.3);
width:320px;
}
.header-left:hover input{
width: 320px;
}
.header-left input{
width: 0;
outline:none;
border:none;
font-weight:500;
transition: .8s;
background:transparent;
}
.header-left a span{
color: #66ffcc;
font-size: 30px;
}
.header-left .fas{
background:transparent;
}


/* header */
.header{
grid-area: header;
height:70px;
align-items: center;
justify-content:space-between;
padding: 0 30px 0 30px;
box-shadow: 0 6px 7px -3px rgba(0,0,0,.35);
}
.menu-icon{
display:none;
}



/* slider */
/*#sidebar{
grid-area: sidebar;
height:100%;
background:url(2.jpg);
background-position:center;
background-size: cover;
background-repeat: no-repeat;
overflow-y: auto;
transition: all .5s;
-webkit-transition: all .5s;
}
.sidebar-title{
display:flex;
justify-content: space-between;
align-items: center;
padding: 30px 30px 10px 30px;
margin-bottom: 20px;
color:#FFFFFF;
font-size: 30px;
}
.sidebar-title > span{
display:none;
}
.sidebar-brand{
margin-top: 15px;
font-size: 20px;
font-weight:700;
}
.sidebar-list{
padding:0;
margin-top: 15px;
list-style-type:none;
}
.sidebar-list-item{
padding: 20px 20px 20px 20px;
font-size: 20px;
}
.sidebar-list-item:hover{
background-color: rgba(255,255,255,.2);
cursor:pointer;
}
.sidebar-responsive{
display: inline !important;
position:absolute;
z-index: 12 !important;
}
*/

/* side Nav */
.Nav{
background:url(3.jpg);
background-position:center;
background-size: cover;
background-repeat: no-repeat;
}
nav{
position:absolute;
top:0;
bottom:0;
left:0;
height:100%;
width:90px;
overflow:hidden;
transition: width .2s linear;
box-shadow: 0 20px 35px rgba(0,0,0,.1);
}
.logo{
text-align:center;
display:flex;
transition: all .5s ease;
margin:10px 0 0 10px;
}
.logo img{
width: 45px;
height: 45px;
border-radius: 50%;
}
.logo span{
font-weight:bold;
padding-left:15px;
font-size:18px;
text-transform:uppercase;
}
a{
position:relative;
color:rgb(85,83,83);
font-size:14px;
display:table;
width:300px;
padding:10px;
color:#FFFFFF;
}
.sideNav .fas{
position:relative;
width:70px;
height:40px;
top:14px;
font-size:20px;
text-align:center;
}
.nav-item{
position:relative;
top:12px;
margin-left:10px;
}
.Nav a:hover{
background:#777;
}
nav:hover{
width: 280px;
transition: all .5s ease;
}
.logout{
position:absolute;
bottom:0;
}



/* main */
.main-container{
grid-area: main;
background:url(2.jpg);
background-position:center;
background-size: cover;
overflow-y: auto;
padding: 20px 20px;
color:rgba(255,255,255,0.95);
}
.main-title{
display: flex;
justify-content: space-between;
}
.main-cards{
display: grid;
grid-template-columns:1fr 1fr 1fr 1fr;
gap: 20px;
margin: 20px 0;
}
.card{
display: flex;
flex-direction: column;
justufy-conten: space-around;
padding: 25px;
border-radius: 5px;
}
.card:first-child{
background-color:#2962ff;
}
.card:nth-child(2){
background-color: #ff6d00;
}
.card:nth-child(3){
background-color: #2e7d32;
}
.card:nth-child(4){
background-color: #d50000;
}
.card-inner{
display:flex;
align-items: center;
justify-content: space-between;
}
.card-inner >  span{
font-size: 45px;
}
.charts{
display: grid;
grid-template-columns:1fr 1fr;
gap: 20px;
margin-top: 60px;
}
.charts-card{
background-color: #cccccc;
margin-bottom: 20px;
padding: 25px;
box-sizing: border-box;
-webkit-column-break-inside: avoid;
border-radius: 5px;
box-shadow: 0 6px 7px -4px rgba(0,0,0,.2);
}
.chart-title{
display:flex;
align-items: center;
justify-content: center;
color:#000000;
}


/* geofance-vehicle count  */

.cards-container {
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.card {
  width: 200px;
  text-align: center;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 8px;
}

.card h1 {
  font-size: 36px;
  margin: 10px 0;
}

form {
  margin-top: 20px;
  text-align: center;
}

label {
  display: block;
  margin-bottom: 5px;
}

/* drop down */
a .dropdown{
  position: absolute;
  right: 0;
  margin: 20px;
  transition: 0.3s ease;
}
.sub-menu{
  background: #262627;
  display: none;
  color:white;
  text-align:center;
  font-size:18px;
}

</style>

<!-- Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.46.0/apexcharts.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!--<script src="script.js"></script> -->

<script>
var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar(){
if(!sidebarOpen){
sidebar.classList.add("sidebar-responsive");
sidebarOpen=true;
}
}

function closeSidebar(){
if(sidebarOpen){
sidebar.classList.remove("sidebar-responsive");
sidebarOpen=false;
}
}

// bar chart

var options = {
          series: [{
          data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['Bharath 101', 'V5', 'TS101', 'AT100', 'AT400', 'S101', 'BB101', 'ASN40'
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
        chart.render();



// area chart

var options = {
          series: [{
          name: 'TEAM A',
          type: 'area',
          data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
        }, {
          name: 'TEAM B',
          type: 'line',
          data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
        }],
          chart: {
          height: 350,
          type: 'line',
        },
        stroke: {
          curve: 'smooth'
        },
        fill: {
          type:'solid',
          opacity: [0.35, 1],
        },
        labels: ['Dec 01', 'Dec 02','Dec 03','Dec 04','Dec 05','Dec 06','Dec 07','Dec 08','Dec 09 ','Dec 10','Dec 11'],
        markers: {
          size: 0
        },
        yaxis: [
          {
            title: {
              text: 'Series A',
            },
          },
          {
            opposite: true,
            title: {
              text: 'Series B',
            },
          },
        ],
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if(typeof y !== "undefined") {
                return  y.toFixed(0) + " points";
              }
              return y;
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#area-chart"), options);
        chart.render();
    // dropdown
    $(document).ready(function () {
            $('.sub-btn').click(function (e) {
                e.preventDefault();
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });
        });

        // counter function 

        function updateStatus() {
    const vehicleName = document.getElementById('vehicleName').value;
    const status = document.getElementById('status').value;

    if (!vehicleName) {
        alert('Please enter a vehicle name.');
        return;
    }

    fetch('/update-status', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name: vehicleName, status }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Vehicle status updated successfully.');
        } else {
            alert('Failed to update vehicle status.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while updating vehicle status.');
    });
}


</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.46.0/apexcharts.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>

