var slider_img_center = document.getElementById("slider_img_center");
var image = new Array(
  "pictures/anime-anime-girls-blonde-braids-wallpaper-preview.png",
  "pictures/unknown_0.png",
  "pictures/unknown_1.png",
  "pictures/unknown_2.png"
  
);

var len = image.length;
var i=0;
function sliderko(){

  if(i>len-1){
    i=0;
  }
  slider_img_center.src=image[i];
  i++;
  setInterval('sliderko()',2000)
}
