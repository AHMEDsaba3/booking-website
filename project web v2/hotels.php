<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="photo\logo.png">
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="hotels.css">
    <meta charset="UTF-8">
    <style>
    footer{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color:initial;
        color:white;
        text-align: center;
      }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourRest</title>
 
</head>
<body> 
  <?php
  include "dbh.classes.php";
  include "hotels.classes.php";
  ?>
  <div class="navbar" role="navigation">
    <ul class="navvv" >
      <li style="float: left;"><div id="logo" style="background-color: initial;"><a class="navv" href="project.php" style="background-color:inherit;"><img  src="photo\logo.png" alt="logo" height="40" width=auto style="margin: 0px;"></a></div></li>
      <li style="padding: 10px;"><a class="navv" href="contact.html" >Contact</a></li>
      <li style="padding: 10px;"><a class="navv" href="about.html">About</a></li>
      <li style="padding: 10px;"><a class="navv" href="story.html">Story</a></li>
      <li style="padding: 10px;"><a class="navv" class="dropbtn" href="hotels.php" style="background-color: #5200e0; border-radius: 10px;">Accommodations</a></li>
        <li class="dropdown" style="padding: 10px;">
      <a class="navv" class="dropbtn" href="#">Travel</a>
      <div class="dropdown-content">
        <a class="navv" href="travel.html">Trips</a>
        <a class="navv" href="car.html">Car Rentals</a>
      </div>
          </li>
    <li style="padding: 10px;"><a class="navv" href="project.php">Home</a></li>
    </ul>
  </div>
  <!-- ------------ -->
  <div class="hotell">
  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> All Accommodations</button>
    <button class="btn" onclick="filterSelection('hotels')"> Hotels</button>
    <button class="btn" onclick="filterSelection('apartments')"> Apartments</button>
    <button class="btn" onclick="filterSelection('studios')"> Studios</button>
  </div>
  
  <div class="row">
    <div class="column hotels">
    <div class="content"> <a href= "https://www.booking.com/hotel/eg/new-star.ar.html?label=metatrivago-hotel-237466_xqdz-ca8f36_los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&sid=341999bfc09b5122b7029f8b58861364&aid=807183&ucfs=1&arphpl=1&checkin=2023-01-08&checkout=2023-01-09&dest_id=-290692&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=2&hapos=2&sr_order=popularity&srpvid=246e7917c82400d9&srepoch=1672506800&all_sr_blocks=585448901_288402770_0_0_0&highlighted_blocks=585448901_288402770_0_0_0&matching_block_id=585448901_288402770_0_0_0&sr_pri_blocks=585448901_288402770_0_0_0__3029&from_sustainable_property_sr=1&from=searchresults#hotelTmpl">
        <img class="contentImg" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/246288449.jpg?k=1fcfca753bd714d254053da8183edadb481175f4e7c8b61bb655e0bd844831e9&o=&hp=1" alt="hotel" style="width:100%">
        <h4>New star zamalek hotel</h4>
        <p>30$/night</p>
        </a>
      </div>
    </div>
    <div id="myModal" class="modal">

      <!-- The Close Button -->
      <span class="close" style="background-color: initial;">&times;</span>
    
      <!-- Modal Content (The Image) -->
      <img class="modal-content" id="img01">
    
      <!-- Modal Caption (Image Text) -->
      <div id="caption"></div>
    </div>
    <div class="column hotels">
    <div class="content"><a href = "https://www.booking.com/hotel/eg/stella-di-mare-beach-spa.ar.html?label=metatrivago-hotel-237466_xqdz-ca8f36_los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&sid=341999bfc09b5122b7029f8b58861364&utm_source=metatrivago&utm_medium=meta&utm_term=hotel-237466&utm_content=los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&utm_campaign=sa&aid=807183&ucfs=1&arphpl=1&checkin=2023-01-08&checkout=2023-01-09&dest_id=-302053&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=1&hapos=1&sr_order=popularity&srpvid=476a7898cce202cf&srepoch=1672506546&all_sr_blocks=0_0_2_1_0&highlighted_blocks=0_0_2_1_0&matching_block_id=0_0_2_1_0&sr_pri_blocks=0_0_2_1_0__8980&from_beach_sr=1&tpi_r=1&from=searchresults#hotelTmpl">
        <img class="contentImg" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/108504927.jpg?k=aaed1910afd17c7c7ea6cd6ffafcc14c613ee5d1ac42adec82716921b2f9173f&o=&hp=1" alt="hotel" style="width:100%">
        <h4>Stella de marie,hurghada</h4>
        <p> night / 142$</p>
      </a>
         
      
      </div>
    </div>
    <div class="column hotels">
    <div class="content"> <a href="https://www.booking.com/hotel/eg/lti-pyramisa-isis-island-aswan.ar.html?label=metatrivago-hotel-237466_xqdz-ca8f36_los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&sid=341999bfc09b5122b7029f8b58861364&aid=807183&ucfs=1&arphpl=1&checkin=2023-01-08&checkout=2023-01-09&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=1&hapos=1&sr_order=popularity&srpvid=830f79a5575e0234&srepoch=1672507084&all_sr_blocks=1603007_201862224_0_41_0&highlighted_blocks=1603007_201862224_0_41_0&matching_block_id=1603007_201862224_0_41_0&sr_pri_blocks=1603007_201862224_0_41_0__5496&tpi_r=2&from=searchresults#hotelTmpl">
        <img class="contentImg" src="https://cf.bstatic.com/xdata/images/hotel/square600/16763437.webp?k=348419ede4c293dd98267f66b450dd3d044816717d98f14eed9d5aec09c5822f&o=&s=1" alt="pyramisa aswan" style="width:100%">
        <h4>Pyramisa Hotel Aswan</h4>
        <p>55$/night</p>
        </a>
      </div>
    </div>
  
    <div class="column apartments">
    <div class="content"><a href="https://www.booking.com/hotel/eg/newcity-apartments-amp-suites.ar.html?label=metatrivago-hotel-237466_xqdz-ca8f36_los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&sid=341999bfc09b5122b7029f8b58861364&aid=807183&ucfs=1&arphpl=1&checkin=2023-01-08&checkout=2023-01-09&dest_id=-290692&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=7&hapos=7&sr_order=popularity&srpvid=60d37cabf8f90093&srepoch=1672508633&all_sr_blocks=45254001_326432307_0_0_0&highlighted_blocks=45254001_326432307_0_0_0&matching_block_id=45254001_326432307_0_0_0&sr_pri_blocks=45254001_326432307_0_0_0__4937&tpi_r=2&from_sustainable_property_sr=1&from=searchresults#hotelTmpl">
        <img class="contentImg" src="https://cf.bstatic.com/xdata/images/hotel/square600/101052291.webp?k=77f71b0bcd29f7bb706b3a58bd3f3ee77c3a6a57bd57d0028fe9f909b0a5fbac&o=&s=1" alt="new city aparthotel" style="width:100%">
        <h4>New city aparthotel,cairo</h4>
        <p>49$/night</p>
        </a>
      </div>
    </div>
    <div class="column apartments">
    <div class="content"><a href="https://www.booking.com/hotel/eg/kafana-house.ar.html?label=metatrivago-hotel-237466_xqdz-ca8f36_los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&sid=341999bfc09b5122b7029f8b58861364&aid=807183&ucfs=1&arphpl=1&checkin=2023-01-08&checkout=2023-01-09&dest_id=-291535&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=9&hapos=9&sr_order=popularity&srpvid=276e7ddef65c0993&srepoch=1672509246&all_sr_blocks=722220901_309551247_2_2_0&highlighted_blocks=722220901_309551247_2_2_0&matching_block_id=722220901_309551247_2_2_0&sr_pri_blocks=722220901_309551247_2_2_0__2104&tpi_r=2&from=searchresults#hotelTmpl">
        <img class="contentImg" src="https://cf.bstatic.com/xdata/images/hotel/square600/294352500.webp?k=1f2bb76b01b512eec9a0c6ba2197f72b18977e340411d349fd6072693c83db6a&o=&s=1" alt="eka dolli hotel" style="width:100%">
        <h4>eka dolli Aswan</h4>
        <p>21$/night</p>
        </a>
      </div>
    </div>
    <div class="column apartments">
    <div class="content"><a href=https://www.booking.com/hotel/eg/labib-nubian-house.ar.html?label=metatrivago-hotel-237466_xqdz-ca8f36_los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&sid=341999bfc09b5122b7029f8b58861364&aid=807183&ucfs=1&arphpl=1&checkin=2023-01-08&checkout=2023-01-09&dest_id=-291535&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=16&hapos=16&sr_order=popularity&srpvid=79137ee2cf2a018d&srepoch=1672509766&all_sr_blocks=211531101_228488800_2_2_0&highlighted_blocks=211531101_228488800_2_2_0&matching_block_id=211531101_228488800_2_2_0&sr_pri_blocks=211531101_228488800_2_2_0__5049&from=searchresults#hotelTmpl >
        <img class="contentImg" src="https://cf.bstatic.com/xdata/images/hotel/square600/375158952.webp?k=e7237f2190bf825ae79ef3c7b098637bb9e6f6909deb0e8460c5f99e3084c01a&o=&s=1" alt="keka house" style="width:100%">
        <h4>KEKA house</h4>
        <p>50$/night</p>
      </a>
        </div>
    </div>
  
    <div class="column studios">
    <div class="content"><a href= "https://www.booking.com/hotel/eg/baba-dool.ar.html?label=metatrivago-hotel-237466_xqdz-ca8f36_los-1_nrm-1_gstadt-2_gstkid-0_curr-usd_lang-ar_mcid-10_dev-dsk_losb-1_bw-8_bwb-8_pg-0_dd-1_gsb-2_sl-0_w-0_tstar-0_trat-0_tprc-tprcd_tamnt-0_cod-1672506535_trvref-8614f159-0c6a-3afd-af47-c908fb04dc0e&sid=341999bfc09b5122b7029f8b58861364&aid=807183&ucfs=1&arphpl=1&checkin=2023-01-08&checkout=2023-01-09&dest_id=-291535&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=25&hapos=25&sr_order=popularity&srpvid=79137ee2cf2a018d&srepoch=1672509766&all_sr_blocks=203841201_97246450_2_42_0&highlighted_blocks=203841201_97246450_2_42_0&matching_block_id=203841201_97246450_2_42_0&sr_pri_blocks=203841201_97246450_2_42_0__2500&from=searchresults#hotelTmpl">
        <img class="contentImg" src="https://cf.bstatic.com/xdata/images/hotel/square600/334687181.webp?k=5cb7403442860afeab53a131b6b539cca016924cb5b77cdc56ef773949a4e169&o=&s=1" alt="baba dool hotel" style="width:100%">
        <h4>BaBa dool</h4>
        <p>25$/night</p>
      </div>
    </div>
    <div class="column studios">
      <div class="content">
        <img class="contentImg" src="https://media.istockphoto.com/id/104731717/photo/luxury-resort.jpg?s=612x612&w=0&k=20&c=cODMSPbYyrn1FHake1xYz9M8r15iOfGz9Aosy9Db7mI=" alt="People" style="width:100%">
        <h4>#</h4>
        <p>#</p>
      </div>
    </div>
    <div class="column studios">
      <div class="content">
        <img class="contentImg" src="https://media.istockphoto.com/id/104731717/photo/luxury-resort.jpg?s=612x612&w=0&k=20&c=cODMSPbYyrn1FHake1xYz9M8r15iOfGz9Aosy9Db7mI=" alt="People" style="width:100%">
        <h4>#</h4>
        <p>#</p>
      </div>
    </div>
  </div>
</div>
<footer>
<p>Copyright @ TourRest 2023</p>
</footer>
	  <script src="hotels.js"></script>
</body>
</html>