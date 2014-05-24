var menu = false;

    $(function() {
        $('#menuButton').click(function() {
		if(menu){
			$("#menu").animate({top:"-95%"}, 1000);
			$("#menuButton").animate({top:"0"}, 1000);
			menu = false;	
		}
		else{
			$("#menu").animate({top:"0%"}, 1000);
			$("#menuButton").animate({top:"95%"}, 1000);
			menu = true;			
			}
        });
    });
	
function loadContent(page){
	var speed = 400;
		$.get("txt/"+page+".txt", function(data) {
			$('#content').slideUp(speed);
			setTimeout(function(){
			$('#contentMargin').html(data);
			},speed);
			$('#content').slideDown(speed);
		}, 'text');
	};
	


function introSlide(){
	$("#topHalf").animate({top:"-50%"}, 1000);
	$("#bottomHalf").animate({top:"100%"}, 1000);
}

function textSlide(){
    $('.tlt').textillate({ in: { effect: 'rollIn' } });
	}
	
function openCopyInfo(){
	$("#copyCont").fadeIn(500);
}

$(function() {
	 $('#copyrightInfo').click(function() {
		$("#copyCont").fadeOut(500);
	 });
 });

function getRGB(color) {
    var result;
    
    // Look for rgb(num,num,num)
    if (result = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color)) return [parseInt(result[1]), parseInt(result[2]), parseInt(result[3])];

    // Look for rgb(num%,num%,num%)
    if (result = /rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(color)) return [parseFloat(result[1]) * 2.55, parseFloat(result[2]) * 2.55, parseFloat(result[3]) * 2.55];

    // Look for #a0b1c2
    if (result = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(color)) return [parseInt(result[1], 16), parseInt(result[2], 16), parseInt(result[3], 16)];

    // Look for #fff
    if (result = /#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(color)) return [parseInt(result[1] + result[1], 16), parseInt(result[2] + result[2], 16), parseInt(result[3] + result[3], 16)];
}

// var lolol = setInterval("colorChange('tester');", 10);
/*
 function colorChange(id){
			var rgb = getRGB($(".colorChange").css('color'));
			
			if(rgb[0] >250){
				rgb[0] = 0;
			}
			else{
				rgb[0]++;
			}
			
			if(rgb[1] >250){
				rgb[1] = 0;
			}
			else{
				rgb[1]=rgb[1]+3;
			}
			
			if(rgb[2] >250){
				rgb[2] = 0;
			}
			else{
				rgb[2]=rgb[2]+7;
			}
			
			var newColor = 'rgb(' + rgb[0] + ',' + rgb[1] + ',' + rgb[2] + ')';
			
			$(".colorChange").css('color', newColor);
		}
*/

function axbx4() {
	for(var i = 1; i < i*3; i= i/3){
		{
try
  {
  adddlert("Welcome guest!");
  }
catch(err)
  {
  txt="There was an error on this page.\n\n";
  txt+="Error description: " + err.message + "\n\n";
  txt+="Click OK to continue.\n\n";
  alert(txt);
  }
}
	}
}

$(function() {
	 $('#topDiv').click(function() {
		introSlide();
		setTimeout("textSlide();",300);
	 });
 });

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 





