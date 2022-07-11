<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'panatabdb');
$result = mysqli_query($conn, "SELECT * from ads");
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/dashboard.css">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="job">
 <div class="header">
  <div class="logo">
    <img src="assets/img/shanyraq.png" alt="" width = "30"> &nbspPanaTAB
  </div>
  <div class="header-menu">
   <a href="#" class="active">Find Room</a>
   <a href="#">Popular</a>
   <a href="#">Find Korshi</a>
   <a href="postads.html">Create ads</a>
   <a href="logout.php">Logout</a>

  </div>
  <div class="user-settings">
   <div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div>
   <div class="user-menu">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-square">
     <rect x="3" y="3" width="18" height="18" rx="2" ry="2" /></svg>
   </div>
   <a href = "profile.html"><img class="user-profile" src="assets/img/team/talgat.jpg"></a>
   <div class="user-name"><span class="email"><?= $_SESSION['username']?></span></div>
  </div>
 </div>
 <div class="wrapper">
  <div class="search-menu">
   <div class="search-bar">
    <input type="text" class="search-box" autofocus />
    <div class="search item">KTL Brotherhood
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
      <path d="M18 6L6 18M6 6l12 12" /></svg>
    </div>
    <div class="search item">Private
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
      <path d="M18 6L6 18M6 6l12 12" /></svg>
    </div>
   </div>
   <div class="search-location">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
     <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
     <circle cx="12" cy="10" r="3" />
    </svg>
    <input type="text" placeholder="City">
   </div>
   <div class="search-job">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
     <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
     <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" /></svg>
    <input type="text" placeholder="University">
   </div>
   <div class="search-salary">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="currentColor" stroke-width=".4">
     <path d="M12.6 18H9.8a.8.8 0 010-1.5h2.8a.9.9 0 000-1.8h-1.2a2.4 2.4 0 010-4.7h2.8a.8.8 0 010 1.5h-2.8a.9.9 0 000 1.8h1.2a2.4 2.4 0 010 4.7z" stroke="currentColor" />
     <path d="M12 20a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8zM12 11.5a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8z" stroke="currentColor" />
     <path d="M21.3 23H2.6A2.8 2.8 0 010 20.2V3.9C0 2.1 1.2 1 2.8 1h18.4C22.9 1 24 2.2 24 3.8v16.4c0 1.6-1.2 2.8-2.8 2.8zM2.6 2.5c-.6 0-1.2.6-1.2 1.3v16.4c0 .7.6 1.3 1.3 1.3h18.4c.7 0 1.3-.6 1.3-1.3V3.9c0-.7-.6-1.3-1.3-1.3z" stroke="currentColor" />
     <path d="M23.3 6H.6a.8.8 0 010-1.5h22.6a.8.8 0 010 1.5z" stroke="currentColor" /></svg>
    <input type="text" placeholder="Price">
   </div>
   <button class="search-button">Find Room</button>
  </div>
  <div class="main-container">
   <div class="search-type">
    <div class="alert">
     <div class="alert-title">Create Room Alert</div>
     <div class="alert-subtitle">Create a Room alert now and never miss a room</div>
     <input type="text" placeholder="Enter room keyword">
     <button class="search-buttons">Create Room Alerts</button>
    </div>
    <div class="job-time">
     <div class="job-time-title">Type of Rooms</div>
     <div class="job-wrapper">
      <div class="type-container">
       <input type="checkbox" id="job1" class="job-style" checked>
       <label for="job1">Private</label>
       <span class="job-number">56</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job2" class="job-style">
       <label for="job2">Public</label>
       <span class="job-number">43</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job3" class="job-style">
       <label for="job3">Premium</label>
       <span class="job-number">24</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job4" class="job-style">
       <label for="job4">Gold</label>
       <span class="job-number">27</span>
      </div>

      <div class="type-container">
       <input type="checkbox" id="job5" class="job-style">
       <label for="job5">AITU Dorm</label>
       <span class="job-number">76</span>
      </div>

      <div class="type-container">
       <input type="checkbox" id="job6" class="job-style">
       <label for="job6">KTL Brotherhood</label>
       <span class="job-number">28</span>
      </div>
     </div>
    </div>
    <div class="job-time">
     <div class="job-time-title">Price Range</div>
     <div class="job-wrapper">
      <div class="type-container">
       <input type="checkbox" id="job7" class="job-style">
       <label for="job7">$700 - $1000</label>
       <span class="job-number">49</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job8" class="job-style">
       <label for="job8">$1000 - $1200</label>
       <span class="job-number">67</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job9" class="job-style">
       <label for="job9">$1200 - $1400</label>
       <span class="job-number">24</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job10" class="job-style">
       <label for="job10">$1500 - $1800</label>
       <span class="job-number">27</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job11" class="job-style" checked>
       <label for="job11">$2000 - $3000</label>
       <span class="job-number">76</span>
      </div>
      <div class="type-container">
       <input type="checkbox" id="job12" class="job-style" checked>
       <label for="job12">$3000 - $4000</label>
       <span class="job-number">22</span>
      </div>
     </div>
    </div>
   </div>


   <div class="searched-jobs">
    <div class="searched-bar">
     <div class="searched-show">Showing 101 rooms</div>
     <div class="searched-sort">Sort by: <span class="post-time">Newest Post </span><span class="menu-icon">▼</span></div>
    </div>
    <div class="job-cards">
      	<?php while($row = mysqli_fetch_array($result)) { ?>
     <div class="job-card">
      <div class="job-card-header">
  	<img width="350" src="uploads/<?=$row['image']?>">
       <div class="menu-dot"></div>
      </div>
      <div class="job-card-title"><?=$row['title']?></div>
      <div class="job-card-subtitle">
        <?=$row['content']?>
      </div>
      <div class="job-detail-buttons">
       <button class="search-buttons detail-button"><?=$row['username']?></button>
       <button class="search-buttons detail-button">Min. 1 Year</button>
       <button class="search-buttons detail-button">KTL</button>
      </div>
      <div class="job-card-buttons">
       <button class="search-buttons card-buttons">Click More</button>
       <button class="search-buttons card-buttons-msg">Messages</button>
      </div>
     </div>
   <?php }?>

     <!-- <div class="job-card">
      <div class="job-card-header">
       <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="background-color: #5c6bc0">
        <g fill="#fff">
         <path d="M3.6 21.2h14.2l-.6-2.2 5.8 5V2.5C23 1 21.8 0 20.4 0H3.6A2.6 2.6 0 001 2.5v16.2c0 1.4 1.2 2.5 2.6 2.5zM14 5.7zM6.5 7C8.3 5.6 10 5.7 10 5.7l.2.1c-2.3.6-3.3 1.6-3.3 1.6.1 0 4.6-2.7 10.1 0 0 0-1-1-3.1-1.5l.2-.2c.3 0 1.8 0 3.5 1.3 0 0 1.8 3.1 1.8 7 0 0-1.1 1.6-4 1.7l-.7-1a4 4 0 002.2-1.4c-3.2 2-6 1.7-9.3.3h-.1l-.4-.2s.6 1 2.2 1.4l-.8 1c-2.8 0-3.8-1.8-3.8-1.8 0-3.9 1.8-7 1.8-7z" />
         <path d="M14.3 12.8c.7 0 1.3-.6 1.3-1.4 0-.7-.6-1.3-1.3-1.3a1.3 1.3 0 000 2.7zM9.7 12.8c.7 0 1.3-.6 1.3-1.4 0-.7-.6-1.3-1.3-1.3a1.3 1.3 0 000 2.7z" />
        </g>
       </svg>
       <div class="menu-dot"></div>
      </div>
      <div class="job-card-title">User Interface Designer</div>
      <div class="job-card-subtitle">
        Luxury Apartment Residential Complex Highvil G1 block.
      </div>
      <div class="job-detail-buttons">
       <button class="search-buttons detail-button">Full Time</button>
       <button class="search-buttons detail-button">Min. 1 Year</button>
       <button class="search-buttons detail-button">Senior Level</button>
      </div>
      <div class="job-card-buttons">
       <button class="search-buttons card-buttons">Apply Now</button>
       <button class="search-buttons card-buttons-msg">Messages</button>
      </div>
     </div>




     <div class="job-card">
      <div class="job-card-header">
       <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff" style="background-color:#ea4c88">
        <path d="M16.4 23.2C28.6 18.2 25.2 0 12 0a12 12 0 104.4 23.2zM5.3 20c.8-1.5 3.6-5.5 8.3-7 1 2.6 1.7 5.5 1.7 8.8-3.5 1.2-7.3.4-10-1.8zm11.5 1.2a27 27 0 00-1.7-8.4c2-.4 4.5-.2 7.2 1-.6 3.2-2.6 6-5.5 7.4zm5.7-9c-3-1.1-5.7-1.3-8-.8a28 28 0 00-1.1-2.3 20 20 0 006.5-4c1.7 1.9 2.7 4.3 2.6 7zM18.9 4c-.9.8-2.9 2.4-6.3 3.8A28 28 0 008 2.3C11.6.8 15.8 1.4 19 4zM6.6 3c.8.7 2.7 2.5 4.5 5.3a33 33 0 01-9.4 1.5c.6-3 2.4-5.4 4.9-6.9zm-5 8.3c4.2-.1 7.6-.8 10.3-1.7l1.1 2.1A17.4 17.4 0 004.2 19c-1.8-2-2.8-4.7-2.7-7.6z" /></svg>
       <div class="menu-dot"></div>
      </div>
      <div class="job-card-title">UI / UX Designer</div>
      <div class="job-card-subtitle">
        Luxury Apartment Residential Complex Highvil G1 block.
      </div>
      <div class="job-detail-buttons">
       <button class="search-buttons detail-button">Full Time</button>
       <button class="search-buttons detail-button">Min. 1 Year</button>
       <button class="search-buttons detail-button">Senior Level</button>
      </div>
      <div class="job-card-buttons">
       <button class="search-buttons card-buttons">Apply Now</button>
       <button class="search-buttons card-buttons-msg">Messages</button>
      </div>
     </div>




     <div class="job-card">
      <div class="job-card-header">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M113.5 309.4L95.6 376l-65 1.4A254.9 254.9 0 010 256c0-42.5 10.3-82.5 28.6-117.7l58 10.6 25.4 57.6a152.2 152.2 0 001.5 103z" fill="#fbbb00" />
        <path d="M507.5 208.2a256.3 256.3 0 01-91.2 247.4l-73-3.7-10.4-64.5c29.9-17.6 53.3-45 65.6-78H261.6V208.3h246z" fill="#518ef8" />
        <path d="M416.3 455.6a256 256 0 01-385.8-78.3l83-67.9a152.2 152.2 0 00219.4 78l83.4 68.2z" fill="#28b446" />
        <path d="M419.4 59l-83 67.8A152.3 152.3 0 00112 206.5l-83.4-68.2a256 256 0 01390.8-79.4z" fill="#f14336" /></svg>
       <div class="menu-dot"></div>
      </div>
      <div class="job-card-title">UX Designer</div>
      <div class="job-card-subtitle">
        Luxury Apartment Residential Complex Highvil G1 block.
      </div>
      <div class="job-detail-buttons">
       <button class="search-buttons detail-button">Full Time</button>
       <button class="search-buttons detail-button">Min. 1 Year</button>
       <button class="search-buttons detail-button">Senior Level</button>
      </div>
      <div class="job-card-buttons">
       <button class="search-buttons card-buttons">Apply Now</button>
       <button class="search-buttons card-buttons-msg">Messages</button>
      </div>
     </div>
      -->
    </div>

    <div class="job-overview">
     <div class="job-overview-cards">


      <div class="job-overview-card">
        <div class="job-card overview-card">
         <div class="overview-wrapper">
          <svg viewBox="0 -13 512 512" xmlns="http://www.w3.org/2000/svg" style="background-color:#2e2882">

          <div class="overview-detail">
           <div class="job-card-title">$1750 / month in Lower East Side</div>
           <div class="job-card-subtitle">
            Ridder, Qazaqstan
           </div>
          </div>
          <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
           <path d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z" /></svg>
         </div>
         <div class="job-overview-buttons">
          <div class="search-buttons time-button">Private</div>
          <div class="search-buttons level-button">$1500 - $1800</div>
          <div class="job-stat">New</div>
          <div class="job-day">4d</div>
         </div>
        </div>
       </div>


     </div>

     <div class="job-explain">
      <img class="job-bg" >
      <div class="job-logos">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="background-color:#f76754">
        <path xmlns="http://www.w3.org/2000/svg" d="M0 .5h4.2v23H0z" fill="#042b48" data-original="#212121"></path>
        <path xmlns="http://www.w3.org/2000/svg" d="M15.4.5a8.6 8.6 0 100 17.2 8.6 8.6 0 000-17.2z" fill="#fefefe" data-original="#f4511e"></path></svg>
      </div>
      <div class="job-explain-content">
      <div class="job-title-wrapper">
       <div class="job-card-title">UI /UX Designer</div>
       <div class="job-action">
        <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
          <path d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z" /></svg>
       </div>
       </div>
       <div class="job-subtitle-wrapper">
        <div class="company-name">Secure <span class="comp-location">Nur-Sultan, Qazaqstan</span></div>
        <div class="posted">Posted 8 days ago<span class="app-number">102 views</span></div>
       </div>
       <div class="explain-bar">
        <div class="explain-contents">
        <div class="explain-title">Duration</div>
        <div class="explain-subtitle">Minimum 6 months</div>
         </div>
        <div class="explain-contents">
        <div class="explain-title">Move In</div>
        <div class="explain-subtitle">Available now</div>
         </div>
        <div class="explain-contents">
        <div class="explain-title">Room Type</div>
        <div class="explain-subtitle">Private</div>
         </div>
        <div class="explain-contents">
        <div class="explain-title">Price</div>
        <div class="explain-subtitle">26.000 tenges / Month</div>
         </div>
       </div>
       <div class="overview-text">
        <div class="overview-text-header">Overview</div>
        <div class="overview-text-subheader">Luxury Apartment Residential Complex Highvil G1 block. The apartment has not been rented before. Perfectly clean, free of foreign odors. Furniture and appliances are all new in excellent condition. Ironed white linens, white slippers and bathrobes. Bathroom accessories, everything is available for a comfortable stay. Travel documents.</div>
       </div>
       <div class="overview-text">
        <div class="overview-text-header">Home Description</div>
        <div class="overview-text-item">Wifi Included, not like in Astana IT University</div>
        <div class="overview-text-item">Furnished</div>
        <div class="overview-text-item">TV</div>
        <div class="overview-text-item">Private Bathroom</div>
        <div class="overview-text-item">Heating</div>
        <div class="overview-text-item">Air Conditioning</div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="assets/js/dashboard.js"></script>

</body>
</html>
