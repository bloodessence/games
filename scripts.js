var windowHeight=$(window).height();
var navbarHeight=$(".navbar").height();
//alert(navbarHeight+"px");
//alert(windowHeight+"px");
var PageHeight=windowHeight-navbarHeight;
PageHeight+=200;

$(".theSameHeight").height(PageHeight+"px");
var tHeight=2*PageHeight;
$(".thirdHeight").height(tHeight+"px");

