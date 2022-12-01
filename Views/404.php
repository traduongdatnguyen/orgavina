   <div class="body-content outer-top-bd">
       <div class="container">
           <div class="x-page inner-bottom-sm">
               <div class="row">
                   <div class="col-md-12 x-text text-center">
                       <h1>404</h1>
                       <p>We are sorry, the page you've requested is not available. </p>
                       <form role="form" class="outer-top-vs outer-bottom-xs">
                           <input placeholder="Search" autocomplete="off">
                           <button class="  btn-default le-button">Go</button>
                       </form>
                       <a href="?act=home"><i class="fa fa-home"></i> Go To Homepage</a>
                   </div>
               </div><!-- /.row -->
           </div><!-- /.sigin-in-->
       </div><!-- /.container -->
   </div><!-- /.body-content -->
   <!-- ============================================================= FOOTER ============================================================= -->

   <script>
       $(document).ready(function() {
           $(".changecolor").switchstylesheet({
               seperator: "color"
           });
           $('.show-theme-options').click(function() {
               $(this).parent().toggleClass('open');
               return false;
           });
       });

       $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
       });
   </script>
   <!-- For demo purposes – can be removed on production : End -->