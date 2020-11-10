<?php get_header();?>

<?php $hero = get_field('hero');?>
<?php $contact = get_field('contact');?>
<?php $new_stock = get_field('new_stock');
  $boat01 = $new_stock['boat01'];
  $boat02 = $new_stock['boat02'];
  $boat03 = $new_stock['boat03'];
  $boat04 = $new_stock['boat04'];
  $boat05 = $new_stock['boat05'];
  $boat06 = $new_stock['boat06'];
  $boat07 = $new_stock['boat07'];
  $boat08 = $new_stock['boat08'];
  $boat09 = $new_stock['boat09'];
  $boat10 = $new_stock['boat10'];
  $boat11 = $new_stock['boat11'];
  $boat12 = $new_stock['boat12'];
?>
<?php $pre_owned = get_field('pre_owned');
  $boat13 = $pre_owned['boat13'];
  $boat14 = $pre_owned['boat14'];
  $boat15 = $pre_owned['boat15'];
  $boat16 = $pre_owned['boat16'];
  $boat17 = $pre_owned['boat17'];
  $boat18 = $pre_owned['boat18'];
  $boat19 = $pre_owned['boat19'];
  $boat20 = $pre_owned['boat20'];
  $boat21 = $pre_owned['boat21'];
  $boat22 = $pre_owned['boat22'];
  $boat23 = $pre_owned['boat23'];
  $boat24 = $pre_owned['boat24'];
  
?>


<body>
  <div class="background-container" style="background: url(<?php echo $hero['bg_img'];?>) no-repeat center center/cover">

    <!-- Logo and Social -->
   <div class="top-container">
     <div class="logo">
       <a href=" <?php echo $hero['company_logo07_link'];?> ">
       <img src=" <?php echo $hero['main_logo'];?> " alt=""></a>
     </div>
     <div class="social">
      <ul>
        <li>
          <a href="https://www.facebook.com/yachthubgroup" target=”_blank>
            <i class="fab fa-facebook fa-1x process-icon"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/yachthubgroup/" target=”_blank>
            <i class="fab fa-instagram fa-1x process-icon"></i>
          </a>
        </li>
      </ul>
     </div>
   </div>

   <!-- Main Content -->
   <div class="main-container">

   <!-- Hidden Form -->
    <div id="hidden-form-container02">
      <div id="hdn-form-btn05" > 
    <h3>+</h3>
      </div>
      <p>ENQUIRE NOW</p>
      <div id="form-box03">
       
      <?php gravity_form(2, 'Enquire', null, false, [], true, 100, true);?>
      

      </div>
    </div>

    <!-- Left Container -->
     <div id="left-main-cont" class="container01">       
       <div class="element01">
        <div id="left-btn" class="nav-btn01">
          <p>NEW STOCK</p>
        </div>
        <div id="right-btn" class="nav-btn02">
          <p>PRE-OWNED</p>
        </div>
       </div>

       <div id="hidden-photos01" class="element02">
         <div class="overlay-cont"> 
           <a href="#">        
             <img id="img-click01" src="<?php echo $boat01['boat01_main_img'];?>" alt="" class="img01"></a> 
         </div>
         <div class="overlay-cont">  
           <a href="#">
            <img id="img-click02" src="<?php echo $boat02['boat02_main_img'];?>" alt="" class="img01"></a>
          </div>  
          <div class="overlay-cont"> 
            <a href="#">
            <img id="img-click03" src="<?php echo $boat03['boat03_main_img'];?>" alt="" class="img01"></a> 
          </div>  
          <div class="overlay-cont">  
            <a href="#">
            <img id="img-click04" src="<?php echo $boat04['boat04_main_img'];?>" alt="" class="img01"></a>
          </div>
       </div>
       
       <div id="hidden-photos02" class="element02">
        <div class="overlay-cont">
          <a href="#">
            <img id="img-click05" src="<?php echo $boat05['boat05_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont">
          <a href="#">
           <img id="img-click06" src="<?php echo $boat06['boat06_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont">
          <a href="#">
          <img id="img-click07" src="<?php echo $boat07['boat07_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont">
          <a href="#">
          <img id="img-click08" src="<?php echo $boat08['boat08_main_img'];?>" alt="" class="img01"></a>
        </div>        
       </div>

      <div id="hidden-photos03" class="element02">
        <div class="overlay-cont">
          <a href="#">
          <img id="img-click09" src="<?php echo $boat09['boat09_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont">
          <a href="#">
          <img id="img-click10" src="<?php echo $boat10['boat10_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont">
          <a href="#">
          <img id="img-click11" src="<?php echo $boat11['boat11_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont">
          <a href="#">
          <img id="img-click12" src="<?php echo $boat12['boat12_main_img'];?>" alt="" class="img01"></a>
        </div>        
      </div>

     <div class="element03">
       <p> < </p>
       <p id="first-click" > 1 </p>
       <p id="second-click" > 2 </p>
       <p id="third-click" > 3 </p>
       <p> > </p>
       </div>
     </div>


    <!-- Left Container 02-->
    <div id="left-switch-cont" class="container01">       
      <div class="element01">
       <div id="left-btn02" class="nav-btn01">
         <p>NEW STOCK</p>
       </div>
       <div id="right-btn02" class="nav-btn02">
         <p>PRE-OWNED</p>
       </div>
      </div>

      <div id="hidden-photos04" class="element02">
        <div class="overlay-cont02">
          <a href="#">
          <img id="img-click13" src="<?php echo $boat13['boat13_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont02">
          <a href="#">
          <img id="img-click14" src="<?php echo $boat14['boat14_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont02">
          <a href="#">
          <img id="img-click15" src="<?php echo $boat15['boat15_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont02">
          <a href="#">
          <img id="img-click16" src="<?php echo $boat16['boat16_main_img'];?>" alt="" class="img01"></a>
        </div>       
      </div>
      
      <div id="hidden-photos05" class="element02">
        <div class="overlay-cont02">
          <a href="#">
           <img id="img-click17" src="<?php echo $boat17['boat17_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont02">
          <a href="#">
           <img id="img-click18" src="<?php echo $boat18['boat18_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont02">
          <a href="#">
           <img id="img-click19" src="<?php echo $boat19['boat19_main_img'];?>" alt="" class="img01"></a>
        </div>
        <div class="overlay-cont02">
          <a href="#">
           <img id="img-click20" src="<?php echo $boat20['boat20_main_img'];?>" alt="" class="img01"></a>
        </div>       
      </div>


     <div id="hidden-photos06" class="element02">
      <div class="overlay-cont02">
        <a href="#">
         <img id="img-click21" src="<?php echo $boat21['boat21_main_img'];?>" alt="" class="img01"></a>
      </div>
      <div class="overlay-cont02">
        <a href="#">
         <img id="img-click22" src="<?php echo $boat22['boat22_main_img'];?>" alt="" class="img01"></a>
      </div>
      <div class="overlay-cont02">
        <a href="#">
         <img id="img-click23" src="<?php echo $boat23['boat23_main_img'];?>" alt="" class="img01"></a>
      </div>
      <div class="overlay-cont02">
        <a href="#">
         <img id="img-click24" src="<?php echo $boat24['boat24_main_img'];?>" alt="" class="img01"></a>
      </div>      
     </div>

    <div class="element03">
      <p> < </p>
      <p id="four-click" > 1 </p>
      <p id="five-click" > 2 </p>
      <p id="six-click" > 3 </p>
      <p> > </p>
      </div>
    </div>


     <!-- Middle Container Switch 01-->
     <!-- Boat Galery Slider01 -->
     <div id="middle-container-switch" class="testing">
      <div id="img01-cont01" class="main-photo">
        <img id="img01-galery01" src=" <?php echo $boat01['boat01_main_img'];?> " alt="">
        <div class="img-slider-cont">
          <h1 id="img01-ls01"> < </h1>
          <h1 id="img01-rs01" > > </h1>
        </div>       
      </div>
      <div id="img01-cont02" class="main-photo">
        <img id="img01-galery02" src=" <?php echo $boat01['boat01_gallery01'];?> " alt="">
        <div class="img-slider-cont">
          <h1 id="img01-ls02"> < </h1>
          <h1 id="img01-rs02" > > </h1>
        </div>       
      </div>
      <div id="img01-cont03" class="main-photo">
        <img id="img01-galery03" src=" <?php echo $boat01['boat01_gallery02'];?> " alt="">
        <div class="img-slider-cont">
          <h1 id="img01-ls03"> < </h1>
          <h1 id="img01-rs03" > > </h1>
        </div>       
      </div>
      <div id="img01-cont04" class="main-photo">
        <img id="img01-galery04" src=" <?php echo $boat01['boat01_gallery03'];?> " alt="">
        <div class="img-slider-cont">
          <h1 id="img01-ls04"> < </h1>
          <h1 id="img01-rs04" > > </h1>
        </div>       
      </div>
      <div id="img01-cont05" class="main-photo">
        <img id="img01-galery05" src="  <?php echo $boat01['boat01_gallery04'];?> " alt="">
        <div class="img-slider-cont">
          <h1 id="img01-ls05"> < </h1>
          <h1 id="img01-rs05" > > </h1>
        </div>       
      </div>






       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat01['boat01_name'];?><?php echo $boat01['boat01_model'];?></p>
          <div class="price02">
            <p class="large-p" > <?php echo $boat01['price'];?> </p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat01['download_brochure01'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat01['virtual_tour01'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Middle Container Switch Boats 02 -->
     <div class="testing middle-switch02" id="mdl-switch02">
      <div id="img02-cont01" class="main-photo">
        <img id="img02-galery01" src="<?php echo $boat02['boat02_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img02-ls01"> < </h1>
          <h1 id="img02-rs01" > > </h1>
        </div>       
      </div>
      <div id="img02-cont02" class="main-photo">
        <img id="img02-galery02" src="<?php echo $boat02['boat02_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img02-ls02"> < </h1>
          <h1 id="img02-rs02" > > </h1>
        </div>       
      </div>
      <div id="img02-cont03" class="main-photo">
        <img id="img02-galery03" src="<?php echo $boat02['boat02_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img02-ls03"> < </h1>
          <h1 id="img02-rs03" > > </h1>
        </div>       
      </div>
      <div id="img02-cont04" class="main-photo">
        <img id="img02-galery04" src="<?php echo $boat02['boat02_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img02-ls04"> < </h1>
          <h1 id="img02-rs04" > > </h1>
        </div>       
      </div>
      <div id="img02-cont05" class="main-photo">
        <img id="img02-galery05" src="<?php echo $boat02['boat02_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img02-ls05"> < </h1>
          <h1 id="img02-rs05" > > </h1>
        </div>       
      </div>
       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat02['boat02_name'];?><?php echo $boat02['boat02_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat02['price02'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat02['download_brochre02'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat02['virtual_tour02'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>         
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 02-->
    <div  class="testing right-switch02" id="rgt-switch02">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat02['boat02_main_logo'];?>" alt="">
        <h2><?php echo $boat02['boat02_name'];?></h2>
        <h4><?php echo $boat02['boat02_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat02['builder02'];?> </p>
            <p> <?php echo $boat02['model02'];?> </p>
            <p> <?php echo $boat02['year02'];?> </p>
            <p> <?php echo $boat02['length02'];?> </p>
            <p> <?php echo $boat02['beam02'];?> </p>
            <p> <?php echo $boat02['draft02'];?> </p>
            <p> <?php echo $boat02['location02'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat02['price02'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class=" hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>





    <!-- Middle Container Switch Boats 03 -->
    <div class="testing" id="mdl-switch03">
      <div id="img03-cont01" class="main-photo">
        <img id="img03-galery01" src="<?php echo $boat03['boat03_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img03-ls01"> < </h1>
          <h1 id="img03-rs01" > > </h1>
        </div>       
      </div>
      <div id="img03-cont02" class="main-photo">
        <img id="img03-galery02" src="<?php echo $boat03['boat03_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img03-ls02"> < </h1>
          <h1 id="img03-rs02" > > </h1>
        </div>       
      </div>
      <div id="img03-cont03" class="main-photo">
        <img id="img03-galery03" src="<?php echo $boat03['boat03_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img03-ls03"> < </h1>
          <h1 id="img03-rs03" > > </h1>
        </div>       
      </div>
      <div id="img03-cont04" class="main-photo">
        <img id="img03-galery04" src="<?php echo $boat03['boat03_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img03-ls04"> < </h1>
          <h1 id="img03-rs04" > > </h1>
        </div>       
      </div>
      <div id="img03-cont05" class="main-photo">
        <img id="img03-galery05" src="<?php echo $boat03['boat03_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img03-ls05"> < </h1>
          <h1 id="img03-rs05" > > </h1>
        </div>       
      </div>
      

       

       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat03['boat03_name'];?><?php echo $boat03['boat03_model'];?> </p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat03['price03'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat03['download_brochure03'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat03['virtual_tour03'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 03-->
    <div  class="testing right-switch02" id="rgt-switch03">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat03['boat03_main_logo'];?>" alt="">
        <h2><?php echo $boat03['boat03_name'];?></h2>
        <h4><?php echo $boat03['boat03_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat03['builder03'];?> </p>
            <p> <?php echo $boat03['model03'];?> </p>
            <p> <?php echo $boat03['year03'];?> </p>
            <p> <?php echo $boat03['length03'];?> </p>
            <p> <?php echo $boat03['beam03'];?> </p>
            <p> <?php echo $boat03['draft03'];?> </p>
            <p> <?php echo $boat03['location03'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat03['price03'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 04 -->
    <div class="testing" id="mdl-switch04">
      <div id="img04-cont01" class="main-photo">
        <img id="img04-galery01" src="<?php echo $boat04['boat04_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img04-ls01"> < </h1>
          <h1 id="img04-rs01" > > </h1>
        </div>       
      </div>
      <div id="img04-cont02" class="main-photo">
        <img id="img04-galery02" src="<?php echo $boat04['boat04_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img04-ls02"> < </h1>
          <h1 id="img04-rs02" > > </h1>
        </div>       
      </div>
      <div id="img04-cont03" class="main-photo">
        <img id="img04-galery03" src="<?php echo $boat04['boat04_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img04-ls03"> < </h1>
          <h1 id="img04-rs03" > > </h1>
        </div>       
      </div>
      <div id="img04-cont04" class="main-photo">
        <img id="img04-galery04" src="<?php echo $boat04['boat04_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img04-ls04"> < </h1>
          <h1 id="img04-rs04" > > </h1>
        </div>       
      </div>
      <div id="img04-cont05" class="main-photo">
        <img id="img04-galery05" src="<?php echo $boat04['boat04_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img04-ls05"> < </h1>
          <h1 id="img04-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat04['boat04_name'];?><?php echo $boat04['boat04_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat04['price04'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat04['download_brochure04'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat04['virtual_tour04'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 04-->
    <div  class="testing right-switch02" id="rgt-switch04">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat04['boat04_main_logo'];?>" alt="">
        <h2><?php echo $boat04['boat04_name'];?></h2>
        <h4><?php echo $boat04['boat04_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat04['builder04'];?> </p>
            <p> <?php echo $boat04['model04'];?> </p>
            <p> <?php echo $boat04['year04'];?> </p>
            <p> <?php echo $boat04['length04'];?> </p>
            <p> <?php echo $boat04['beam04'];?> </p>
            <p> <?php echo $boat04['draft04'];?> </p>
            <p> <?php echo $boat04['location04'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat04['price04'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 05 -->
    <div class="testing" id="mdl-switch05">
      <div id="img05-cont01" class="main-photo">
        <img id="img05-galery01" src="<?php echo $boat05['boat05_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img05-ls01"> < </h1>
          <h1 id="img05-rs01" > > </h1>
        </div>       
      </div>
      <div id="img05-cont02" class="main-photo">
        <img id="img05-galery02" src="<?php echo $boat05['boat05_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img05-ls02"> < </h1>
          <h1 id="img05-rs02" > > </h1>
        </div>       
      </div>
      <div id="img05-cont03" class="main-photo">
        <img id="img05-galery03" src="<?php echo $boat05['boat05_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img05-ls03"> < </h1>
          <h1 id="img05-rs03" > > </h1>
        </div>       
      </div>
      <div id="img05-cont04" class="main-photo">
        <img id="img05-galery04" src="<?php echo $boat05['boat05_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img05-ls04"> < </h1>
          <h1 id="img05-rs04" > > </h1>
        </div>       
      </div>
      <div id="img05-cont05" class="main-photo">
        <img id="img05-galery05" src="<?php echo $boat05['boat05_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img05-ls05"> < </h1>
          <h1 id="img05-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat05['boat05_name'];?><?php echo $boat05['boat05_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat05['price05'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat05['download_brochure05'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat05['virtual_tour05'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 05-->
    <div  class="testing right-switch02" id="rgt-switch05">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat05['boat05_main_logo'];?>" alt="">
        <h2><?php echo $boat05['boat05_name'];?></h2>
        <h4><?php echo $boat05['boat05_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat05['builder05'];?> </p>
            <p> <?php echo $boat05['model05'];?> </p>
            <p> <?php echo $boat05['year05'];?> </p>
            <p> <?php echo $boat05['length05'];?> </p>
            <p> <?php echo $boat05['beam05'];?> </p>
            <p> <?php echo $boat05['draft05'];?> </p>
            <p> <?php echo $boat05['location05'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat05['price05'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 06 -->
    <div class="testing" id="mdl-switch06">
      <div id="img06-cont01" class="main-photo">
        <img id="img06-galery01" src="<?php echo $boat06['boat06_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img06-ls01"> < </h1>
          <h1 id="img06-rs01" > > </h1>
        </div>       
      </div>
      <div id="img06-cont02" class="main-photo">
        <img id="img06-galery02" src="<?php echo $boat06['boat06_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img06-ls02"> < </h1>
          <h1 id="img06-rs02" > > </h1>
        </div>       
      </div>
      <div id="img06-cont03" class="main-photo">
        <img id="img06-galery03" src="<?php echo $boat06['boat06_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img06-ls03"> < </h1>
          <h1 id="img06-rs03" > > </h1>
        </div>       
      </div>
      <div id="img06-cont04" class="main-photo">
        <img id="img06-galery04" src="<?php echo $boat06['boat06_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img06-ls04"> < </h1>
          <h1 id="img06-rs04" > > </h1>
        </div>       
      </div>
      <div id="img06-cont05" class="main-photo">
        <img id="img06-galery05" src="<?php echo $boat06['boat06_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img06-ls05"> < </h1>
          <h1 id="img06-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat06['boat06_name'];?><?php echo $boat06['boat06_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat06['price06'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat06['download_brochure06'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat06['virtual_tour06'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 06-->
    <div  class="testing right-switch02" id="rgt-switch06">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat06['boat06_main_logo'];?>" alt="">
        <h2><?php echo $boat06['boat06_name'];?></h2>
        <h4><?php echo $boat06['boat06_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat06['builder06'];?> </p>
            <p> <?php echo $boat06['model06'];?> </p>
            <p> <?php echo $boat06['year06'];?> </p>
            <p> <?php echo $boat06['length06'];?> </p>
            <p> <?php echo $boat06['beam06'];?> </p>
            <p> <?php echo $boat06['draft06'];?> </p>
            <p> <?php echo $boat06['location06'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat06['price06'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 07 -->
    <div class="testing" id="mdl-switch07">
      <div id="img07-cont01" class="main-photo">
        <img id="img07-galery01" src="<?php echo $boat07['boat07_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img07-ls01"> < </h1>
          <h1 id="img07-rs01" > > </h1>
        </div>       
      </div>
      <div id="img07-cont02" class="main-photo">
        <img id="img07-galery02" src="<?php echo $boat07['boat07_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img07-ls02"> < </h1>
          <h1 id="img07-rs02" > > </h1>
        </div>       
      </div>
      <div id="img07-cont03" class="main-photo">
        <img id="img07-galery03" src="<?php echo $boat07['boat07_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img07-ls03"> < </h1>
          <h1 id="img07-rs03" > > </h1>
        </div>       
      </div>
      <div id="img07-cont04" class="main-photo">
        <img id="img07-galery04" src="<?php echo $boat07['boat07_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img07-ls04"> < </h1>
          <h1 id="img07-rs04" > > </h1>
        </div>       
      </div>
      <div id="img07-cont05" class="main-photo">
        <img id="img07-galery05" src="<?php echo $boat07['boat07_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img07-ls05"> < </h1>
          <h1 id="img07-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat07['boat07_name'];?><?php echo $boat07['boat07_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat07['price07'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat07['download_brochure07'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat07['virtual_tour07'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 07-->
    <div  class="testing right-switch02" id="rgt-switch07">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat07['boat07_main_logo'];?>" alt="">
        <h2><?php echo $boat07['boat07_name'];?></h2>
        <h4><?php echo $boat07['boat07_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat07['builder07'];?> </p>
            <p> <?php echo $boat07['model07'];?> </p>
            <p> <?php echo $boat07['year07'];?> </p>
            <p> <?php echo $boat07['length07'];?> </p>
            <p> <?php echo $boat07['beam07'];?> </p>
            <p> <?php echo $boat07['draft07'];?> </p>
            <p> <?php echo $boat07['location07'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat07['price07'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 08 -->
    <div class="testing" id="mdl-switch08">
      <div id="img08-cont01" class="main-photo">
        <img id="img08-galery01" src="<?php echo $boat08['boat08_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img08-ls01"> < </h1>
          <h1 id="img08-rs01" > > </h1>
        </div>       
      </div>
      <div id="img08-cont02" class="main-photo">
        <img id="img08-galery02" src="<?php echo $boat08['boat08_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img08-ls02"> < </h1>
          <h1 id="img08-rs02" > > </h1>
        </div>       
      </div>
      <div id="img08-cont03" class="main-photo">
        <img id="img08-galery03" src="<?php echo $boat08['boat08_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img08-ls03"> < </h1>
          <h1 id="img08-rs03" > > </h1>
        </div>       
      </div>
      <div id="img08-cont04" class="main-photo">
        <img id="img08-galery04" src="<?php echo $boat08['boat08_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img08-ls04"> < </h1>
          <h1 id="img08-rs04" > > </h1>
        </div>       
      </div>
      <div id="img08-cont05" class="main-photo">
        <img id="img08-galery05" src="<?php echo $boat08['boat08_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img08-ls05"> < </h1>
          <h1 id="img08-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat08['boat08_name'];?><?php echo $boat08['boat08_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat08['price08'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat08['download_brochure08'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat08['virtual_tour08'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 08-->
    <div  class="testing right-switch02" id="rgt-switch08">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat08['boat08_main_logo'];?>" alt="">
        <h2><?php echo $boat08['boat08_name'];?></h2>
        <h4><?php echo $boat08['boat08_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat08['builder08'];?> </p>
            <p> <?php echo $boat08['model08'];?> </p>
            <p> <?php echo $boat08['year08'];?> </p>
            <p> <?php echo $boat08['length08'];?> </p>
            <p> <?php echo $boat08['beam08'];?> </p>
            <p> <?php echo $boat08['draft08'];?> </p>
            <p> <?php echo $boat08['location08'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat08['price08'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 09 -->
    <div class="testing" id="mdl-switch09">
      <div id="img09-cont01" class="main-photo">
        <img id="img09-galery01" src="<?php echo $boat09['boat09_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img09-ls01"> < </h1>
          <h1 id="img09-rs01" > > </h1>
        </div>       
      </div>
      <div id="img09-cont02" class="main-photo">
        <img id="img09-galery02" src="<?php echo $boat09['boat09_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img09-ls02"> < </h1>
          <h1 id="img09-rs02" > > </h1>
        </div>       
      </div>
      <div id="img09-cont03" class="main-photo">
        <img id="img09-galery03" src="<?php echo $boat09['boat09_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img09-ls03"> < </h1>
          <h1 id="img09-rs03" > > </h1>
        </div>       
      </div>
      <div id="img09-cont04" class="main-photo">
        <img id="img09-galery04" src="<?php echo $boat09['boat09_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img09-ls04"> < </h1>
          <h1 id="img09-rs04" > > </h1>
        </div>       
      </div>
      <div id="img09-cont05" class="main-photo">
        <img id="img09-galery05" src="<?php echo $boat09['boat09_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img09-ls05"> < </h1>
          <h1 id="img09-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat09['boat09_name'];?><?php echo $boat09['boat09_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat09['price09'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat09['download_brochure09'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat09['virtual_tour09'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 09-->
    <div  class="testing right-switch02" id="rgt-switch09">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat09['boat09_main_logo'];?>" alt="">
        <h2><?php echo $boat09['boat09_name'];?></h2>
        <h4><?php echo $boat09['boat09_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat09['builder09'];?> </p>
            <p> <?php echo $boat09['model09'];?> </p>
            <p> <?php echo $boat09['year09'];?> </p>
            <p> <?php echo $boat09['length09'];?> </p>
            <p> <?php echo $boat09['beam09'];?> </p>
            <p> <?php echo $boat09['draft09'];?> </p>
            <p> <?php echo $boat09['location09'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat09['price09'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 10 -->
    <div class="testing" id="mdl-switch10">
      <div id="img10-cont01" class="main-photo">
        <img id="img10-galery01" src="<?php echo $boat10['boat10_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img10-ls01"> < </h1>
          <h1 id="img10-rs01" > > </h1>
        </div>       
      </div>
      <div id="img10-cont02" class="main-photo">
        <img id="img10-galery02" src="<?php echo $boat10['boat10_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img10-ls02"> < </h1>
          <h1 id="img10-rs02" > > </h1>
        </div>       
      </div>
      <div id="img10-cont03" class="main-photo">
        <img id="img10-galery03" src="<?php echo $boat10['boat10_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img10-ls03"> < </h1>
          <h1 id="img10-rs03" > > </h1>
        </div>       
      </div>
      <div id="img10-cont04" class="main-photo">
        <img id="img10-galery04" src="<?php echo $boat10['boat10_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img10-ls04"> < </h1>
          <h1 id="img10-rs04" > > </h1>
        </div>       
      </div>
      <div id="img10-cont05" class="main-photo">
        <img id="img10-galery05" src="<?php echo $boat10['boat10_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img10-ls05"> < </h1>
          <h1 id="img10-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat10['boat10_name'];?><?php echo $boat10['boat10_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat10['price10'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat10['download_brochure10'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat10['virtual_tour10'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 10-->
    <div  class="testing right-switch02" id="rgt-switch10">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat10['boat10_main_logo'];?>" alt="">
        <h2><?php echo $boat10['boat10_name'];?></h2>
        <h4><?php echo $boat10['boat10_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat10['builder10'];?> </p>
            <p> <?php echo $boat10['model10'];?> </p>
            <p> <?php echo $boat10['year10'];?> </p>
            <p> <?php echo $boat10['length10'];?> </p>
            <p> <?php echo $boat10['beam10'];?> </p>
            <p> <?php echo $boat10['draft10'];?> </p>
            <p> <?php echo $boat10['location10'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat10['price10'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 11 -->
    <div class="testing" id="mdl-switch11">
      <div id="img11-cont01" class="main-photo">
        <img id="img11-galery01" src="<?php echo $boat11['boat11_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img11-ls01"> < </h1>
          <h1 id="img11-rs01" > > </h1>
        </div>       
      </div>
      <div id="img11-cont02" class="main-photo">
        <img id="img11-galery02" src="<?php echo $boat11['boat11_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img11-ls02"> < </h1>
          <h1 id="img11-rs02" > > </h1>
        </div>       
      </div>
      <div id="img11-cont03" class="main-photo">
        <img id="img11-galery03" src="<?php echo $boat11['boat11_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img11-ls03"> < </h1>
          <h1 id="img11-rs03" > > </h1>
        </div>       
      </div>
      <div id="img11-cont04" class="main-photo">
        <img id="img11-galery04" src="<?php echo $boat11['boat11_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img11-ls04"> < </h1>
          <h1 id="img11-rs04" > > </h1>
        </div>       
      </div>
      <div id="img11-cont05" class="main-photo">
        <img id="img11-galery05" src="<?php echo $boat11['boat11_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img11-ls05"> < </h1>
          <h1 id="img11-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat11['boat11_name'];?><?php echo $boat11['boat11_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat11['price11'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat11['download_brochure11'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat11['virtual_tour11'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 11-->
    <div  class="testing right-switch02" id="rgt-switch11">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat11['boat11_main_logo'];?>" alt="">
        <h2><?php echo $boat11['boat11_name'];?></h2>
        <h4><?php echo $boat11['boat11_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat11['builder11'];?> </p>
            <p> <?php echo $boat11['model11'];?> </p>
            <p> <?php echo $boat11['year11'];?> </p>
            <p> <?php echo $boat11['length11'];?> </p>
            <p> <?php echo $boat11['beam11'];?> </p>
            <p> <?php echo $boat11['draft11'];?> </p>
            <p> <?php echo $boat11['location11'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat11['price11'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 12 -->
    <div class="testing" id="mdl-switch12">
      <div id="img12-cont01" class="main-photo">
        <img id="img12-galery01" src="<?php echo $boat12['boat12_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img12-ls01"> < </h1>
          <h1 id="img12-rs01" > > </h1>
        </div>       
      </div>
      <div id="img12-cont02" class="main-photo">
        <img id="img12-galery02" src="<?php echo $boat12['boat12_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img12-ls02"> < </h1>
          <h1 id="img12-rs02" > > </h1>
        </div>       
      </div>
      <div id="img12-cont03" class="main-photo">
        <img id="img12-galery03" src="<?php echo $boat12['boat12_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img12-ls03"> < </h1>
          <h1 id="img12-rs03" > > </h1>
        </div>       
      </div>
      <div id="img12-cont04" class="main-photo">
        <img id="img12-galery04" src="<?php echo $boat12['boat12_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img12-ls04"> < </h1>
          <h1 id="img12-rs04" > > </h1>
        </div>       
      </div>
      <div id="img12-cont05" class="main-photo">
        <img id="img12-galery05" src="<?php echo $boat12['boat12_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img12-ls05"> < </h1>
          <h1 id="img12-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat12['boat12_name'];?><?php echo $boat12['boat12_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat12['price12'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat12['download_brochure12'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat12['virtual_tour12'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 12-->
    <div  class="testing right-switch02" id="rgt-switch12">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat12['boat12_main_logo'];?>" alt="">
        <h2><?php echo $boat12['boat12_name'];?></h2>
        <h4><?php echo $boat12['boat12_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat12['builder12'];?> </p>
            <p> <?php echo $boat12['model12'];?> </p>
            <p> <?php echo $boat12['year12'];?> </p>
            <p> <?php echo $boat12['length12'];?> </p>
            <p> <?php echo $boat12['beam12'];?> </p>
            <p> <?php echo $boat12['draft12'];?> </p>
            <p> <?php echo $boat12['location12'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat12['price12'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>
    

     <!-- Middle Container Switch Boats 013 -->
     <div class="testing" id="mdl-switch13">
      <div id="img13-cont01" class="main-photo">
        <img id="img13-galery01" src="<?php echo $boat13['boat13_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img13-ls01"> < </h1>
          <h1 id="img13-rs01" > > </h1>
        </div>       
      </div>
      <div id="img13-cont02" class="main-photo">
        <img id="img13-galery02" src="<?php echo $boat13['boat13_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img13-ls02"> < </h1>
          <h1 id="img13-rs02" > > </h1>
        </div>       
      </div>
      <div id="img13-cont03" class="main-photo">
        <img id="img13-galery03" src="<?php echo $boat13['boat13_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img13-ls03"> < </h1>
          <h1 id="img13-rs03" > > </h1>
        </div>       
      </div>
      <div id="img13-cont04" class="main-photo">
        <img id="img13-galery04" src="<?php echo $boat13['boat13_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img13-ls04"> < </h1>
          <h1 id="img13-rs04" > > </h1>
        </div>       
      </div>
      <div id="img13-cont05" class="main-photo">
        <img id="img13-galery05" src="<?php echo $boat13['boat13_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img13-ls05"> < </h1>
          <h1 id="img13-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat13['boat13_name'];?><?php echo $boat13['boat13_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat13['price13'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat13['download_brochure13'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat13['virtual_tour13'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 13-->
    <div  class="testing right-switch02" id="rgt-switch13">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat13['boat13_main_logo'];?>" alt="">
        <h2><?php echo $boat13['boat13_name'];?></h2>
        <h4><?php echo $boat13['boat13_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat13['builder13'];?> </p>
            <p> <?php echo $boat13['model13'];?> </p>
            <p> <?php echo $boat13['year13'];?> </p>
            <p> <?php echo $boat13['length13'];?> </p>
            <p> <?php echo $boat13['beam13'];?> </p>
            <p> <?php echo $boat13['draft13'];?> </p>
            <p> <?php echo $boat13['location13'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat13['price13'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 14 -->
    <div class="testing" id="mdl-switch14">
      <div id="img14-cont01" class="main-photo">
        <img id="img14-galery01" src="<?php echo $boat14['boat14_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img14-ls01"> < </h1>
          <h1 id="img14-rs01" > > </h1>
        </div>       
      </div>
      <div id="img14-cont02" class="main-photo">
        <img id="img14-galery02" src="<?php echo $boat14['boat14_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img14-ls02"> < </h1>
          <h1 id="img14-rs02" > > </h1>
        </div>       
      </div>
      <div id="img14-cont03" class="main-photo">
        <img id="img14-galery03" src="<?php echo $boat14['boat14_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img14-ls03"> < </h1>
          <h1 id="img14-rs03" > > </h1>
        </div>       
      </div>
      <div id="img14-cont04" class="main-photo">
        <img id="img14-galery04" src="<?php echo $boat14['boat14_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img14-ls04"> < </h1>
          <h1 id="img14-rs04" > > </h1>
        </div>       
      </div>
      <div id="img14-cont05" class="main-photo">
        <img id="img14-galery05" src="<?php echo $boat14['boat14_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img14-ls05"> < </h1>
          <h1 id="img14-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat14['boat14_name'];?><?php echo $boat14['boat14_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat14['price14'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat14['download_brochure14'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat14['virtual_tour14'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 14-->
    <div  class="testing right-switch02" id="rgt-switch14">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat14['boat14_main_logo'];?>" alt="">
        <h2><?php echo $boat14['boat14_name'];?></h2>
        <h4><?php echo $boat14['boat14_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat14['builder14'];?> </p>
            <p> <?php echo $boat14['model14'];?> </p>
            <p> <?php echo $boat14['year14'];?> </p>
            <p> <?php echo $boat14['length14'];?> </p>
            <p> <?php echo $boat14['beam14'];?> </p>
            <p> <?php echo $boat14['draft14'];?> </p>
            <p> <?php echo $boat14['location14'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat14['price14'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>
     
    <!-- Middle Container Switch Boats 15 -->
    <div class="testing" id="mdl-switch15">
      <div id="img15-cont01" class="main-photo">
        <img id="img15-galery01" src="<?php echo $boat15['boat15_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img15-ls01"> < </h1>
          <h1 id="img15-rs01" > > </h1>
        </div>       
      </div>
      <div id="img15-cont02" class="main-photo">
        <img id="img15-galery02" src="<?php echo $boat15['boat15_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img15-ls02"> < </h1>
          <h1 id="img15-rs02" > > </h1>
        </div>       
      </div>
      <div id="img15-cont03" class="main-photo">
        <img id="img15-galery03" src="<?php echo $boat15['boat15_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img15-ls03"> < </h1>
          <h1 id="img15-rs03" > > </h1>
        </div>       
      </div>
      <div id="img15-cont04" class="main-photo">
        <img id="img15-galery04" src="<?php echo $boat15['boat15_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img15-ls04"> < </h1>
          <h1 id="img15-rs04" > > </h1>
        </div>       
      </div>
      <div id="img15-cont05" class="main-photo">
        <img id="img15-galery05" src="<?php echo $boat15['boat15_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img15-ls05"> < </h1>
          <h1 id="img15-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat15['boat15_name'];?><?php echo $boat15['boat15_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat15['price15'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat15['download_brochure15'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat15['virtual_tour15'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 15-->
    <div  class="testing right-switch02" id="rgt-switch15">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat15['boat15_main_logo'];?>" alt="">
        <h2><?php echo $boat15['boat15_name'];?></h2>
        <h4><?php echo $boat15['boat15_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat15['builder15'];?> </p>
            <p> <?php echo $boat15['model15'];?> </p>
            <p> <?php echo $boat15['year15'];?> </p>
            <p> <?php echo $boat15['length15'];?> </p>
            <p> <?php echo $boat15['beam15'];?> </p>
            <p> <?php echo $boat15['draft15'];?> </p>
            <p> <?php echo $boat15['location15'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat15['price15'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>

    <!-- Middle Container Switch Boats 16 -->
    <div class="testing" id="mdl-switch16">
      <div id="img16-cont01" class="main-photo">
        <img id="img16-galery01" src="<?php echo $boat16['boat16_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img16-ls01"> < </h1>
          <h1 id="img16-rs01" > > </h1>
        </div>       
      </div>
      <div id="img16-cont02" class="main-photo">
        <img id="img16-galery02" src="<?php echo $boat16['boat16_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img16-ls02"> < </h1>
          <h1 id="img16-rs02" > > </h1>
        </div>       
      </div>
      <div id="img16-cont03" class="main-photo">
        <img id="img16-galery03" src="<?php echo $boat16['boat16_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img16-ls03"> < </h1>
          <h1 id="img16-rs03" > > </h1>
        </div>       
      </div>
      <div id="img16-cont04" class="main-photo">
        <img id="img16-galery04" src="<?php echo $boat16['boat16_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img16-ls04"> < </h1>
          <h1 id="img16-rs04" > > </h1>
        </div>       
      </div>
      <div id="img16-cont05" class="main-photo">
        <img id="img16-galery05" src="<?php echo $boat16['boat16_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img16-ls05"> < </h1>
          <h1 id="img16-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat16['boat16_name'];?><?php echo $boat16['boat16_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat16['price16'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat16['download_brochure16'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat16['virtual_tour16'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 16-->
    <div  class="testing right-switch02" id="rgt-switch16">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat16['boat16_main_logo'];?>" alt="">
        <h2><?php echo $boat16['boat16_name'];?></h2>
        <h4><?php echo $boat16['boat16_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat16['builder16'];?> </p>
            <p> <?php echo $boat16['model16'];?> </p>
            <p> <?php echo $boat16['year16'];?> </p>
            <p> <?php echo $boat16['length16'];?> </p>
            <p> <?php echo $boat16['beam16'];?> </p>
            <p> <?php echo $boat16['draft16'];?> </p>
            <p> <?php echo $boat16['location16'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat16['price16'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>


    
    <!-- Middle Container Switch Boats 17 -->
    <div class="testing" id="mdl-switch17">
      <div id="img17-cont01" class="main-photo">
        <img id="img17-galery01" src="<?php echo $boat17['boat17_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img17-ls01"> < </h1>
          <h1 id="img17-rs01" > > </h1>
        </div>       
      </div>
      <div id="img17-cont02" class="main-photo">
        <img id="img17-galery02" src="<?php echo $boat17['boat17_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img17-ls02"> < </h1>
          <h1 id="img17-rs02" > > </h1>
        </div>       
      </div>
      <div id="img17-cont03" class="main-photo">
        <img id="img17-galery03" src="<?php echo $boat17['boat17_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img17-ls03"> < </h1>
          <h1 id="img17-rs03" > > </h1>
        </div>       
      </div>
      <div id="img17-cont04" class="main-photo">
        <img id="img17-galery04" src="<?php echo $boat17['boat17_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img17-ls04"> < </h1>
          <h1 id="img17-rs04" > > </h1>
        </div>       
      </div>
      <div id="img17-cont05" class="main-photo">
        <img id="img17-galery05" src="<?php echo $boat17['boat17_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img17-ls05"> < </h1>
          <h1 id="img17-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat17['boat17_name'];?><?php echo $boat17['boat17_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat17['price17'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat17['download_brochure17'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat17['virtual_tour17'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 17-->
    <div  class="testing right-switch02" id="rgt-switch17">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat17['boat17_main_logo'];?>" alt="">
        <h2><?php echo $boat17['boat17_name'];?></h2>
        <h4><?php echo $boat17['boat17_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat17['builder17'];?> </p>
            <p> <?php echo $boat17['model17'];?> </p>
            <p> <?php echo $boat17['year17'];?> </p>
            <p> <?php echo $boat17['length17'];?> </p>
            <p> <?php echo $boat17['beam17'];?> </p>
            <p> <?php echo $boat17['draft17'];?> </p>
            <p> <?php echo $boat17['location17'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat17['price17'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>





     <!-- Middle Container Switch Boats 18 -->
    <div class="testing" id="mdl-switch18">
      <div id="img18-cont01" class="main-photo">
        <img id="img18-galery01" src="<?php echo $boat18['boat18_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img18-ls01"> < </h1>
          <h1 id="img18-rs01" > > </h1>
        </div>       
      </div>
      <div id="img18-cont02" class="main-photo">
        <img id="img18-galery02" src="<?php echo $boat18['boat18_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img18-ls02"> < </h1>
          <h1 id="img18-rs02" > > </h1>
        </div>       
      </div>
      <div id="img18-cont03" class="main-photo">
        <img id="img18-galery03" src="<?php echo $boat18['boat18_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img18-ls03"> < </h1>
          <h1 id="img18-rs03" > > </h1>
        </div>       
      </div>
      <div id="img18-cont04" class="main-photo">
        <img id="img18-galery04" src="<?php echo $boat18['boat18_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img18-ls04"> < </h1>
          <h1 id="img18-rs04" > > </h1>
        </div>       
      </div>
      <div id="img18-cont05" class="main-photo">
        <img id="img18-galery05" src="<?php echo $boat18['boat18_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img18-ls05"> < </h1>
          <h1 id="img18-rs05" > > </h1>
        </div>       
      </div>

      <div class="bottom-box">
        <div class="left-box">
         <p><?php echo $boat18['boat18_name'];?><?php echo $boat18['boat18_model'];?></p>
         <div class="price02">
           <p class="large-p" ><?php echo $boat18['price18'];?></p>
           <p class="small-p" >TAX PAID</p>
         </div>
           <P>For more details visit</P>
           <h4>WWW.SUNSEEKERMALTA.COM</h4>
        </div>
        <div class="right-box">
         <div class="switch-btn-box" >
           <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat18['download_brochure18'];?>" download>DOWNLOAD E - BROCHURE</a>
         </div>
         <div class="switch-btn-box" >
           <a class="secondary-switch-btn02" href="<?php echo $boat18['virtual_tour18'];?>" target=”_blank>VIRTUAL TOUR</a>
         </div>          
        </div>
      </div>
    </div>
    <!-- Right Container Switch Boats 18-->
   <div  class="testing right-switch02" id="rgt-switch18">
     <div class="top-part">
       <img class="swtich-logo" src="<?php echo $boat18['boat18_main_logo'];?>" alt="">
       <h2><?php echo $boat18['boat18_name'];?></h2>
       <h4><?php echo $boat18['boat18_model'];?></h4>
       <div class="details">
         <div class="boat-details-left">
           <p>Builder:</p>
           <p>Model:</p>
           <p>Year:</p>
           <p>Length:</p>
           <p>Beam:</p>
           <p>Draft:</p>
           <p>Location:</p>
         </div>
         <div class="boat-details-right">
            <p> <?php echo $boat18['builder18'];?> </p>
            <p> <?php echo $boat18['model18'];?> </p>
            <p> <?php echo $boat18['year18'];?> </p>
            <p> <?php echo $boat18['length18'];?> </p>
            <p> <?php echo $boat18['beam18'];?> </p>
            <p> <?php echo $boat18['draft18'];?> </p>
            <p> <?php echo $boat18['location18'];?> </p>
         </div>
       </div>
       <div class="price">
         <p class="large-p" ><?php echo $boat18['price18'];?></p>
         <p class="small-p" >TAX PAID</p>
       </div>
     </div>
     <div class="bottom-part">
       <div class="bottom-part-text">
         <p>FINANCE AND PART EXCHANGE</p>
         <P>ON SELECTED MODELS</P>
       </div>
       <div class="hidden-form-btn-on switch-btn" >
         <a id="main-switch-btn">ENQUIRE NOW</a>
       </div>
     </div>
   </div>


   
   
   <!-- Middle Container Switch Boats 19 -->
    <div class="testing" id="mdl-switch19">
      <div id="img19-cont01" class="main-photo">
        <img id="img19-galery01" src="<?php echo $boat19['boat19_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img19-ls01"> < </h1>
          <h1 id="img19-rs01" > > </h1>
        </div>       
      </div>
      <div id="img19-cont02" class="main-photo">
        <img id="img19-galery02" src="<?php echo $boat19['boat19_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img19-ls02"> < </h1>
          <h1 id="img19-rs02" > > </h1>
        </div>       
      </div>
      <div id="img19-cont03" class="main-photo">
        <img id="img19-galery03" src="<?php echo $boat19['boat19_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img19-ls03"> < </h1>
          <h1 id="img19-rs03" > > </h1>
        </div>       
      </div>
      <div id="img19-cont04" class="main-photo">
        <img id="img19-galery04" src="<?php echo $boat19['boat19_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img19-ls04"> < </h1>
          <h1 id="img19-rs04" > > </h1>
        </div>       
      </div>
      <div id="img19-cont05" class="main-photo">
        <img id="img19-galery05" src="<?php echo $boat19['boat19_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img19-ls05"> < </h1>
          <h1 id="img19-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat19['boat19_name'];?><?php echo $boat19['boat19_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat19['price19'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat19['download_brochure19'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat19['virtual_tour19'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 19-->
    <div  class="testing right-switch02" id="rgt-switch19">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat19['boat19_main_logo'];?>" alt="">
        <h2><?php echo $boat19['boat19_name'];?></h2>
        <h4><?php echo $boat19['boat19_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat19['builder19'];?> </p>
            <p> <?php echo $boat19['model19'];?> </p>
            <p> <?php echo $boat19['year19'];?> </p>
            <p> <?php echo $boat19['length19'];?> </p>
            <p> <?php echo $boat19['beam19'];?> </p>
            <p> <?php echo $boat19['draft19'];?> </p>
            <p> <?php echo $boat19['location19'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat19['price19'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>




    <!-- Middle Container Switch Boats 20 -->
    <div class="testing" id="mdl-switch20">
      <div id="img20-cont01" class="main-photo">
        <img id="img20-galery01" src="<?php echo $boat20['boat20_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img20-ls01"> < </h1>
          <h1 id="img20-rs01" > > </h1>
        </div>       
      </div>
      <div id="img20-cont02" class="main-photo">
        <img id="img20-galery02" src="<?php echo $boat20['boat20_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img20-ls02"> < </h1>
          <h1 id="img20-rs02" > > </h1>
        </div>       
      </div>
      <div id="img20-cont03" class="main-photo">
        <img id="img20-galery03" src="<?php echo $boat20['boat20_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img20-ls03"> < </h1>
          <h1 id="img20-rs03" > > </h1>
        </div>       
      </div>
      <div id="img20-cont04" class="main-photo">
        <img id="img20-galery04" src="<?php echo $boat20['boat20_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img20-ls04"> < </h1>
          <h1 id="img20-rs04" > > </h1>
        </div>       
      </div>
      <div id="img20-cont05" class="main-photo">
        <img id="img20-galery05" src="<?php echo $boat20['boat20_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img20-ls05"> < </h1>
          <h1 id="img20-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat20['boat20_name'];?><?php echo $boat20['boat20_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat20['price20'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat20['download_brochure20'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat20['virtual_tour20'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 20-->
    <div  class="testing right-switch02" id="rgt-switch20">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat20['boat20_main_logo'];?>" alt="">
        <h2><?php echo $boat20['boat20_name'];?></h2>
        <h4><?php echo $boat20['boat20_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat20['builder20'];?> </p>
            <p> <?php echo $boat20['model20'];?> </p>
            <p> <?php echo $boat20['year20'];?> </p>
            <p> <?php echo $boat20['length20'];?> </p>
            <p> <?php echo $boat20['beam20'];?> </p>
            <p> <?php echo $boat20['draft20'];?> </p>
            <p> <?php echo $boat20['location20'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat20['price20'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>




    <!-- Middle Container Switch Boats 21 -->
    <div class="testing" id="mdl-switch21">
      <div id="img21-cont01" class="main-photo">
        <img id="img21-galery01" src="<?php echo $boat21['boat21_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img21-ls01"> < </h1>
          <h1 id="img21-rs01" > > </h1>
        </div>       
      </div>
      <div id="img21-cont02" class="main-photo">
        <img id="img21-galery02" src="<?php echo $boat21['boat21_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img21-ls02"> < </h1>
          <h1 id="img21-rs02" > > </h1>
        </div>       
      </div>
      <div id="img21-cont03" class="main-photo">
        <img id="img21-galery03" src="<?php echo $boat21['boat21_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img21-ls03"> < </h1>
          <h1 id="img21-rs03" > > </h1>
        </div>       
      </div>
      <div id="img21-cont04" class="main-photo">
        <img id="img21-galery04" src="<?php echo $boat21['boat21_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img21-ls04"> < </h1>
          <h1 id="img21-rs04" > > </h1>
        </div>       
      </div>
      <div id="img21-cont05" class="main-photo">
        <img id="img21-galery05" src="<?php echo $boat21['boat21_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img21-ls05"> < </h1>
          <h1 id="img21-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat21['boat21_name'];?><?php echo $boat21['boat21_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat21['price21'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat21['download_brochure21'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat21['virtual_tour21'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 21-->
    <div  class="testing right-switch02" id="rgt-switch21">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat21['boat21_main_logo'];?>" alt="">
        <h2><?php echo $boat21['boat21_name'];?></h2>
        <h4><?php echo $boat21['boat21_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat21['builder21'];?> </p>
            <p> <?php echo $boat21['model21'];?> </p>
            <p> <?php echo $boat21['year21'];?> </p>
            <p> <?php echo $boat21['length21'];?> </p>
            <p> <?php echo $boat21['beam21'];?> </p>
            <p> <?php echo $boat21['draft21'];?> </p>
            <p> <?php echo $boat21['location21'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat21['price21'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>





    <!-- Middle Container Switch Boats 22 -->
    <div class="testing" id="mdl-switch22">
      <div id="img22-cont01" class="main-photo">
        <img id="img22-galery01" src="<?php echo $boat22['boat22_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img22-ls01"> < </h1>
          <h1 id="img22-rs01" > > </h1>
        </div>       
      </div>
      <div id="img22-cont02" class="main-photo">
        <img id="img22-galery02" src="<?php echo $boat22['boat22_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img22-ls02"> < </h1>
          <h1 id="img22-rs02" > > </h1>
        </div>       
      </div>
      <div id="img22-cont03" class="main-photo">
        <img id="img22-galery03" src="<?php echo $boat22['boat22_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img22-ls03"> < </h1>
          <h1 id="img22-rs03" > > </h1>
        </div>       
      </div>
      <div id="img22-cont04" class="main-photo">
        <img id="img22-galery04" src="<?php echo $boat22['boat22_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img22-ls04"> < </h1>
          <h1 id="img22-rs04" > > </h1>
        </div>       
      </div>
      <div id="img22-cont05" class="main-photo">
        <img id="img22-galery05" src="<?php echo $boat22['boat22_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img22-ls05"> < </h1>
          <h1 id="img22-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat22['boat22_name'];?><?php echo $boat22['boat22_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat22['price22'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat22['download_brochure22'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat22['virtual_tour22'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 22-->
    <div  class="testing right-switch02" id="rgt-switch22">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat22['boat22_main_logo'];?>" alt="">
        <h2><?php echo $boat22['boat22_name'];?></h2>
        <h4><?php echo $boat22['boat22_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat22['builder22'];?> </p>
            <p> <?php echo $boat22['model22'];?> </p>
            <p> <?php echo $boat22['year22'];?> </p>
            <p> <?php echo $boat22['length22'];?> </p>
            <p> <?php echo $boat22['beam22'];?> </p>
            <p> <?php echo $boat22['draft22'];?> </p>
            <p> <?php echo $boat22['location22'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat22['price22'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>




    <!-- Middle Container Switch Boats 23 -->
    <div class="testing" id="mdl-switch23">
      <div id="img23-cont01" class="main-photo">
        <img id="img23-galery01" src="<?php echo $boat23['boat23_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img23-ls01"> < </h1>
          <h1 id="img23-rs01" > > </h1>
        </div>       
      </div>
      <div id="img23-cont02" class="main-photo">
        <img id="img23-galery02" src="<?php echo $boat23['boat23_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img23-ls02"> < </h1>
          <h1 id="img23-rs02" > > </h1>
        </div>       
      </div>
      <div id="img23-cont03" class="main-photo">
        <img id="img23-galery03" src="<?php echo $boat23['boat23_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img23-ls03"> < </h1>
          <h1 id="img23-rs03" > > </h1>
        </div>       
      </div>
      <div id="img23-cont04" class="main-photo">
        <img id="img23-galery04" src="<?php echo $boat23['boat23_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img23-ls04"> < </h1>
          <h1 id="img23-rs04" > > </h1>
        </div>       
      </div>
      <div id="img23-cont05" class="main-photo">
        <img id="img23-galery05" src="<?php echo $boat23['boat23_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img23-ls05"> < </h1>
          <h1 id="img23-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat23['boat23_name'];?><?php echo $boat23['boat23_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat23['price23'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat23['download_brochure23'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat23['virtual_tour23'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 23-->
    <div  class="testing right-switch02" id="rgt-switch23">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat23['boat23_main_logo'];?>" alt="">
        <h2><?php echo $boat23['boat23_name'];?></h2>
        <h4><?php echo $boat23['boat23_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat23['builder23'];?> </p>
            <p> <?php echo $boat23['model23'];?> </p>
            <p> <?php echo $boat23['year23'];?> </p>
            <p> <?php echo $boat23['length23'];?> </p>
            <p> <?php echo $boat23['beam23'];?> </p>
            <p> <?php echo $boat23['draft23'];?> </p>
            <p> <?php echo $boat23['location23'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat23['price23'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>



    
    <!-- Middle Container Switch Boats 24 -->
    <div class="testing" id="mdl-switch24">
      <div id="img24-cont01" class="main-photo">
        <img id="img24-galery01" src="<?php echo $boat24['boat24_main_img'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img24-ls01"> < </h1>
          <h1 id="img24-rs01" > > </h1>
        </div>       
      </div>
      <div id="img24-cont02" class="main-photo">
        <img id="img24-galery02" src="<?php echo $boat24['boat24_gallery01'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img24-ls02"> < </h1>
          <h1 id="img24-rs02" > > </h1>
        </div>       
      </div>
      <div id="img24-cont03" class="main-photo">
        <img id="img24-galery03" src="<?php echo $boat24['boat24_gallery02'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img24-ls03"> < </h1>
          <h1 id="img24-rs03" > > </h1>
        </div>       
      </div>
      <div id="img24-cont04" class="main-photo">
        <img id="img24-galery04" src="<?php echo $boat24['boat24_gallery03'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img24-ls04"> < </h1>
          <h1 id="img24-rs04" > > </h1>
        </div>       
      </div>
      <div id="img24-cont05" class="main-photo">
        <img id="img24-galery05" src="<?php echo $boat24['boat24_gallery04'];?>" alt="">
        <div class="img-slider-cont">
          <h1 id="img24-ls05"> < </h1>
          <h1 id="img24-rs05" > > </h1>
        </div>       
      </div>



       <div class="bottom-box">
         <div class="left-box">
          <p><?php echo $boat24['boat24_name'];?><?php echo $boat24['boat24_model'];?></p>
          <div class="price02">
            <p class="large-p" ><?php echo $boat24['price24'];?></p>
            <p class="small-p" >TAX PAID</p>
          </div>
            <P>For more details visit</P>
            <h4>WWW.SUNSEEKERMALTA.COM</h4>
         </div>
         <div class="right-box">
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn download-form2-btn" href="<?php echo $boat24['download_brochure24'];?>" download>DOWNLOAD E - BROCHURE</a>
          </div>
          <div class="switch-btn-box" >
            <a class="secondary-switch-btn02" href="<?php echo $boat24['virtual_tour24'];?>" target=”_blank>VIRTUAL TOUR</a>
          </div>          
         </div>
       </div>
     </div>
     <!-- Right Container Switch Boats 24-->
    <div  class="testing right-switch02" id="rgt-switch24">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat24['boat24_main_logo'];?>" alt="">
        <h2><?php echo $boat24['boat24_name'];?></h2>
        <h4><?php echo $boat24['boat24_model'];?></h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>
          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat24['builder24'];?> </p>
            <p> <?php echo $boat24['model24'];?> </p>
            <p> <?php echo $boat24['year24'];?> </p>
            <p> <?php echo $boat24['length24'];?> </p>
            <p> <?php echo $boat24['beam24'];?> </p>
            <p> <?php echo $boat24['draft24'];?> </p>
            <p> <?php echo $boat24['location24'];?> </p>
          </div>
        </div>
        <div class="price">
          <p class="large-p" ><?php echo $boat24['price24'];?></p>
          <p class="small-p" >TAX PAID</p>
        </div>
      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn" >ENQUIRE NOW</a>
        </div>
      </div>
    </div>




     <!-- Middle Container -->
     <div class="testing" id="main-container-switch">
     <div class="container02">
      <img  class="main-logo" src=" <?php echo $hero['main_logo'];?> " alt="">
       <div class="main-txt"> 
         
        <p> <?php echo $hero ['main_txt01'];?> </p>
        <p> <?php echo $hero ['main_txt02'];?> </p>
        <p> <?php echo $hero ['main_txt03'];?> </p>
       </div>
       
       <div class="grid-logo">
         <a href=" <?php echo $hero['company_logo01_link'];?> " target=”_blank>
            <img  class="secondary-logo" src=" <?php echo $hero['company_logo01'];?> " alt="">
         </a>
       
        <a href=" <?php echo $hero['company_logo02_link'];?> " target=”_blank>
          <img  class="secondary-logo" src=" <?php echo $hero['company_logo02'];?> " alt="">
        </a>
        
        <a href=" <?php echo $hero['company_logo03_link'];?> " target=”_blank>
          <img  class="secondary-logo" src=" <?php echo $hero['company_logo03'];?> " alt="">
        </a>
        
        <a href=" <?php echo $hero['company_logo04_link'];?> " target=”_blank>
          <img  class="secondary-logo" src=" <?php echo $hero['company_logo04'];?> " alt="">
        </a>
        
        <a href=" <?php echo $hero['company_logo05_link'];?> " target=”_blank>
          <img  class="secondary-logo" src=" <?php echo $hero['company_logo05'];?> " alt="">
        </a>
        
        <a href=" <?php echo $hero['company_logo06_link'];?> " target=”_blank>
          <img  class="secondary-logo" src=" <?php echo $hero['company_logo06'];?> " alt="">
        </a>
        
        <a href=" <?php echo $hero['company_logo07_link'];?> " target=”_blank>
          <img  class="secondary-logo" src=" <?php echo $hero['company_logo07'];?> " alt="">
        </a>
        
        <a href=" <?php echo $hero['company_logo08_link'];?> " target=”_blank>
          <img  class="secondary-logo" src=" <?php echo $hero['company_logo08'];?> " alt="">   
        </a>

       </div>
     </div>
    </div>
    
    <!-- Right Container switch 01-->
    <div  id="right-cont-switch02" class="testing">
      <div class="top-part">
        <img class="swtich-logo" src="<?php echo $boat01['boat01_main_logo'];?>" alt="">
        <h2>  <?php echo $boat01['boat01_name'];?> </h2>
        <h4> <?php echo $boat01['boat01_model'];?> </h4>
        <div class="details">
          <div class="boat-details-left">
            <p>Builder:</p>
            <p>Model:</p>
            <p>Year:</p>
            <p>Length:</p>
            <p>Beam:</p>
            <p>Draft:</p>
            <p>Location:</p>


          </div>
          <div class="boat-details-right">
            <p> <?php echo $boat01['builder'];?> </p>
            <p> <?php echo $boat01['model'];?> </p>
            <p> <?php echo $boat01['year'];?> </p>
            <p> <?php echo $boat01['length'];?> </p>
            <p> <?php echo $boat01['beam'];?> </p>
            <p> <?php echo $boat01['draft'];?> </p>
            <p> <?php echo $boat01['location'];?> </p>

          </div>
        </div>
        <div class="price">
          <p class="large-p"> <?php echo $boat01['price'];?> </p>
          <p class="small-p" >TAX PAID</p>
        </div>

      </div>
      <div class="bottom-part">
        <div class="bottom-part-text">
          <p>FINANCE AND PART EXCHANGE</p>
          <P>ON SELECTED MODELS</P>
        </div>
        <div class="hidden-form-btn-on switch-btn" >
          <a id="main-switch-btn">ENQUIRE NOW</a>
        </div>
      </div>
    </div>
    <!-- Right Container -->
    <div class="testing" id="right-cont-switch">
     <div class="container03">
       <div>
      <div class="form">   


     <?php gravity_form(1, 'Enquire', null, false, [], true, 100, true);?>

       
     </div>
     </div>
    


     





     <div class="btns">
      
     </div>
     <div class="btn-cont" >
      <div class="social02">
        <ul>
          <li>
            <a href="https://www.facebook.com/yachthubgroup" target=”_blank>
              <i class="fab fa-facebook fa-1x process-icon"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/yachthubgroup/" target=”_blank>
              <i class="fab fa-instagram fa-1x process-icon"></i>
            </a>
          </li>
        </ul>
       </div>
      <a id="btn-open" class="btn02">CONTACT<i class="arrow right"></i></a>
    </div>
     
    <div class="bottom-cont">
      <div class="cont-elm">
      <h4> <?php echo $hero['bottom_txt01'];?> </h4>
      <p><?php echo $hero['bottom_txt02'];?></p>
      <h4><?php echo $hero['bottom_txt03'];?></h4>
      <div class="btn-cont02">
      <a class="btn03" href="<?php echo $hero['download_profile'];?>" download>DOWNLOAD PROFILE</a>
      </div>
      </div>
    </div>
   </div>
  









   <!-- Hiddent Content -->
   <div id="hdn-form" class="contact-hidden">
     <div class="hidden-nav">
      <h2>Contact us</h2>
      <h1 id="btn-close">+</h1>
     </div>     
     <div id="hidden-cont">
     <div id="left-cont01">
       <h4> <?php echo $contact['contact01_headline'];?> </h4>
       <p> <?php echo $contact['contact01_number'];?> </p>
       <p> <?php echo $contact['contact01_email'];?> </p>
       <p> <?php echo $contact['contact01_email02'];?> </p>
     </div>
     <div id="right-cont01">
       <h4> <?php echo $contact['contact02_headline'];?> </h4>
       <p> <?php echo $contact['contact02_number'];?> </p>
       <p> <?php echo $contact['contact02_email'];?> </p>       
     </div>
     <div id="left-cont02">
       <h4> <?php echo $contact['contact03_headline'];?> </h4>
       <p> <?php echo $contact['contact03_number'];?> </p>
       <p> <?php echo $contact['contact03_email'];?> </p>
     </div>
     <div id="right-cont02">
      <h4> <?php echo $contact['contact04_headline'];?> </h4>
      <p> <?php echo $contact['contact04_number'];?> </p>
      <p> <?php echo $contact['contact04_email'];?> </p>
    </div>
    </div>
   </div>
  </div> 
 </div>
</div>



<!-- Second Download Form 
<div id="download-form2">
  <h1 id="form-btn02">+</h1>
  <form id="form02">
    <div id="form-box02">
      <p>PLEASE ENTER THE FOLLOWING DETAILS TO DOWNLOAD OUR BROCHURE/PROFILE</p>
    <input type="text" name="fname" placeholder="Full Name" required>
    <input type="email" name="femail" placeholder="Email" required>
    <input type="tel" name="fnumber" placeholder="Mobile Number" required>
    </div>
    
     <button type="submit">SUBMIT</button>
  </form>
  
</div>-->


    
    

<?php get_footer();?>