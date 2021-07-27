         
  
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/vendor-v3.js"></script>
<script src="js/theme.min.js"></script>
<script href="js/shopify-boomerang-1.0.0.min.js"></script>

<script>
 $(document).ready(function(){
  $(".btn22").click(function(){
    $('#screen2').show();
    $("#screen1").hide();
    $("#screen3").hide();
    $("#screen4").hide();
    $("#screen5").hide();
    $("#screen6").hide();
  });
  $("ul.sz-customise li a").click(function(){

  	localStorage.setItem("weight", $(this).data('weight'));
    $("#screen2").hide();
    $("#screen1").hide();
    $("#screen3").show();
    $("#screen4").hide();
    $("#screen5").hide();
    $("#screen6").hide();
  });
  $("#height").change(function(){
  	if($(this).val()){

	    $("#screen1").hide();
	    $("#screen2").hide();
	    $("#screen3").hide();
	    $("#screen4").show();
	    $("#screen5").hide();
	    $("#screen6").hide();
  	}
  });
  $("#age").change(function(){
  	if($(this).val()){
	    $("#screen1").hide();
	    $("#screen2").hide();
	    $("#screen3").hide();
	    $("#screen4").hide();
	    $("#screen5").show();
	    $("#screen6").hide();
	}
  });
$("#weight").change(function(){
	if($(this).val()){
	    $("#screen1").hide();
	    $("#screen2").hide();
	    $("#screen3").hide();
	    $("#screen4").hide();
	    $("#screen5").hide();
	    $("#screen6").show();


	    var weight = localStorage.getItem("weight");
	    var fatMan = "";
	    var slimMan = "";
	    switch (weight) {
	    	case 'fat':
	    		fatMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="fat/MFat/mfat1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="fat/MFat/mfat2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="fat/MFat/mfat3.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="fat/MFat/mfat4.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>BEFORE </p>
	                    
	                         <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel1" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	            slimMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="fat/Mslim/mslim1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="fat/Mslim/mslim2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="fat/Mslim/mslim4.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="fat/Mslim/mslim3.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>AFTER </p>
	                   
	                         <a class="carousel-control-prev" href="#carousel2" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel2" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	    		break;
	    	case 'medium':
	    		fatMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="medium/fat1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="medium/fat2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="medium/fat3.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="medium/fat4.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>BEFORE </p>
	                    
	                         <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel1" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	            slimMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="medium/slim1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="medium/slim2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="medium/slim3.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="medium/slim4.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>AFTER </p>
	                   
	                         <a class="carousel-control-prev" href="#carousel2" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel2" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	    		break;
	    	case 'low':
	    		fatMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="less/Lfat/lfat1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/Lfat/lfat2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="less/Lfat/lfat3.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/Lfat/lfat4.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>BEFORE </p>
	                    
	                         <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel1" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	            slimMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="less/LSlim/lslim1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/LSlim/lslim2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="less/LSlim/lslim3.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/LSlim/lslim4.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>AFTER </p>
	                   
	                         <a class="carousel-control-prev" href="#carousel2" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel2" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	    		break;
	    	default:
	    		fatMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="less/Lfat/lfat1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/Lfat/lfat2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="less/Lfat/lfat3.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/Lfat/lfat4.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>BEFORE </p>
	                    
	                         <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel1" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	            slimMan = `<div class="carousel-inner">

	                           <div class="carousel-item active">
	                             <img src="less/LSlim/lslim1.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/LSlim/lslim2.png" alt="" style="height: 350px;">
	                           </div>
	                         
	                           <div class="carousel-item">
	                              <img src="less/LSlim/lslim3.png" alt="" style="height: 350px;">
	                           </div>

	                           <div class="carousel-item">
	                              <img src="less/LSlim/lslim4.png" alt="" style="height: 350px;">
	                           </div>
	                       
	                         </div>
	                         <p>AFTER </p>
	                   
	                         <a class="carousel-control-prev" href="#carousel2" data-slide="prev">
	                            <img src="images/left-arrow.png" alt=""></a>
	                         <a><img src="images/rotate.png" alt="" style="width: 60px;margin: 0 10px;"></a>   
	                          <a class="carousel-control-next" href="#carousel2" data-slide="next">
	                            <img src="images/right-arrow.png" alt="">
	                          </a>`;
	    		break;
	    }
	    $("#carousel1").append(fatMan);
	    $("#carousel2").append(slimMan);
	}
  });
$("#view-product-detail").click(function(){
    $("#discrpt").show(500);
   
  });
$("#view-close").click(function(){
    $("#discrpt").hide(500);
   
  });
});
</script>

<script>
$(document).ready(function(){
  $(".mobile-menu").click(function(){
    $(".site-navigation").toggle(500);
  });
});
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {      
        $('.carousel').carousel('pause');
    });
</script>
<script type="text/javascript" src="js/smartscroll.js"></script>
<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
      continuousVertical: false,
        afterLoad: function(anchorLink, index){
            console.log("AFTER LOAD - anchorLink:" +anchorLink + " index:" +index);
        },
        onLeave: function(index, nextIndex, direction){
            console.log("ONLEAVE - index:" +index + " nextIndex:" +nextIndex  + " direction:" + direction);
        },
    });
</script>

 </body>
</html>s