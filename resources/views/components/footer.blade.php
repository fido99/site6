
<section class="section_form_footer">
  <div class="wrapper">
   <div class="form_panel">
    <div class="panel_text">
     <h3>Do You Like Wapik? Download it Now</h3>
     <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>

    <div class="form_btn_show">
     <div class="btn_show" v-on:click="isFormActive = !isFormActive">Заказать звонок</div>
    </div>
   </div>
  </div>
</section>
<footer>
 <div class="wrapper">
  <div class="footer_block">
   <div class="footer_panel_top">
    <div class="footer_panel_top_item">
      <div class="footer_logo_block">
        <img src="images/logoFooter.png" alt="">
      </div>
      <div class="footer_mail_block">
        @:<a href="" class="footer_mail">hi@wapik.com</a>
      </div>
      <div class="footer_tel_block">
        p:<a href="" class="footer_mail">+62 202 555 0117</a>
      </div>
      <div class="footer_a_block">
        <p> a:610 Overlook Circle Suite 323
    Kalamazoo, MI 49009</p>
      </div>
    </div> 
    <div class="footer_panel_top_item">
      <div class="footer_panel_top_item_zag">Company</div>
      <ul class="footer_panel_top_item_list">
       <li><a href="">Home</a></li>
       <li><a href="">About us</a></li>
       <li><a href="">Priceing</a></li>
       <li><a href="">Contact us</a></li>
      </ul>
    </div> 
    <div class="footer_panel_top_item">
      <div class="footer_panel_top_item_zag">Others</div>
      <ul class="footer_panel_top_item_list">
       <li><a href="">Help & Support</a></li>
       <li><a href="">Privacy Policy</a></li>
       <li><a href="">Terms</a></li>
       <li><a href="">Sitemap</a></li>
      </ul>
    </div> 
    <div class="footer_panel_top_item">
      <div class="footer_panel_top_item_zag"  v-on:click="show">Newsletter</div>
      <div class="footer_text_content">
       <?php echo html_entity_decode($footer_text)  ?>
      </div>
      <form action="#" method="POST">
       <input type="text" class="mail_footer_input">
      </form>
    </div> 
   </div>
   
   <div class="line_footer"></div>

   <div class="footer_panel_bottom">
    <div class="footer_panel_bottom_left">
     All rights reserved 2015.
    </div>
    <div class="footer_panel_bottom_right">
     <div class="social_block_footer">
      <div class="social_item">
       <a href="#" class="tweeter"></a>
      </div>
      <div class="social_item">
       <a href="#" class="facebook"></a>
      </div>
      <div class="social_item">
       <a href="#" class="instagram"></a>
      </div>
      <div class="social_item">
       <a href="#" class="dribbble"></a>
      </div>
      <div class="social_item">
       <a href="#" class="github"></a>
      </div>
     </div>
    </div>
   </div>
  </div> 
 </div>
</footer>