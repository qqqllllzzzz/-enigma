$(function(){
   
    // mobile menu
    $('.mobile_nav').click(function(e){
        e.preventDefault();
        $(this).toggleClass('mobile_nav-active');
        $('.nav_menu').toggleClass('nav_menu-active');
    });
    var tl = new TimelineMax({
		repeat: -1
	  });
	  
	  tl.add(
		TweenMax.from(".logo-svg", 2, {
		  scale: 0.5,
		  rotation: 360,
		  ease: Elastic.easeInOut
		})
	  );
	  
	  tl.add(
		TweenMax.to(".logo-svg", 2, {
		  scale: 0.5,
		  rotation: 360,
		  ease: Elastic.easeInOut
		})
	  );
   
});
function copyIp(str){
    document.oncopy = function(event) {
    event.clipboardData.setData("Text", str);
	event.preventDefault();
	alert("IP Адрес скопирован!");
        };
    document.execCommand("Copy");
        document.oncopy = undefined;
}
function redirect(url) {
    window.location.href = url;
}
