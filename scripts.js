var windowHeight=$(window).height();
var navbarHeight=$(".navbar").height();
var PageHeight=windowHeight-navbarHeight;
PageHeight+=150;

$(".theSameHeight").height(PageHeight+"px");
var tHeight=2*PageHeight;
$(".thirdHeight").height(tHeight+"px");

