// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {
	scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementById("banner").style.top = "0px";
    document.getElementById("navbar").style.top = "65px";
  } else {
    document.getElementById("banner").style.top = "0px";
    document.getElementById("navbar").style.top = "65px";
  }
}
