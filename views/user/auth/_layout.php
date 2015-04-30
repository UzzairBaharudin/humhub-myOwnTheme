<div class="outside login-screen">
    <?php echo $content; ?>
    <div class="text text-center powered">
        Création <a href="http://www.myOwnSite.fr" target="_blank">My own Site !</a>
    </div>
</div>
  <img src="<?php echo Yii::app()->theme->baseUrl . '/img/background/img_01.jpg'?>" class="superbg" id='superbg'/> 
 <script> 	
 
 // Un tableau qui va contenir toutes tes images.
var images = new Array();
images.push("<?php echo Yii::app()->theme->baseUrl . '/img/background/img_01.jpg'?>");
images.push("<?php echo Yii::app()->theme->baseUrl . '/img/background/img_02.jpg'?>");
images.push("<?php echo Yii::app()->theme->baseUrl . '/img/background/img_03.jpg'?>");
var pointeur = 0;
 




function ChangerImage(){
	
document.getElementById("superbg").src = images[pointeur];
if(pointeur < images.length - 1){
pointeur++;
}
else{
pointeur = 0;
}
 
setTimeout("ChangerImage()", 10000)
}
 
// Charge la fonction
window.onload = function(){
ChangerImage();
}
  
 
$(document).ready(function(){
 		
 	
		  
/* background resizable */     
function redimensionnement(){  
  
    var image_width = $('img').width();  
    var image_height = $('img').height();      
      
    var over = image_width / image_height;  
    var under = image_height / image_width;  
      
    var body_width = $(window).width();  
    var body_height = $(window).height();  
      
    if (body_width / body_height >= over) {  
      $('img').css({  
        'width': body_width + 'px',  
        'height': Math.ceil(under * body_width) + 'px',  
        'left': '0px',  
        'top': Math.abs((under * body_width) - body_height) / -2 + 'px'  
      });  
    }   
      
    else {  
      $('img').css({  
        'width': Math.ceil(over * body_height) + 'px',  
        'height': body_height + 'px',  
        'top': '0px',  
        'left': Math.abs((over * body_height) - body_width) / -2 + 'px'  
      });  
    }  
}  
          
    redimensionnement(); //onload  
    $(window).resize(function(){  
        redimensionnement();  
    });  
 
  
  
  
});  
 </script>