$(document).ready(function(){$("a").on("click",function(t){if(""!==this.hash){t.preventDefault();var n=this.hash;$("html, body").animate({scrollTop:$(n).offset().top-68},800,function(){})}})});