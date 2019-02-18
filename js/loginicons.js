// JavaScript Document

$(document).ready(function(){
	var pos1 = $("#rowicon-1").offset();
	var pos2 = $("#rowicon-2").offset();
	var pos3 = $("#rowicon-3").offset();
	var pos4 = $("#rowicon-4").offset();
	var pos5 = $("#rowicon-5").offset();
	var pos6 = $("#rowicon-6").offset();
	
	$(".iconrow #rowicon-1[title]").tooltip({
		effect: 'fade',
		relative: true,
		position: 'center left',
		offset: [pos1.top+145,pos1.left+300],
		delay: '0'
	});
	
	$(".iconrow #rowicon-2[title]").tooltip({
		effect: 'fade',
		relative: true,
		position: 'center left',
		offset: [pos2.top+145,pos2.left+200],
		delay: '0'
	});
	
	$(".iconrow #rowicon-3[title]").tooltip({
		effect: 'fade',
		relative: true,
		position: 'center left',
		offset: [pos3.top+145,pos3.left+100],
		delay: '0'
	});
	$(".iconrow #rowicon-4[title]").tooltip({
		effect: 'fade',
		relative: true,
		position: 'center left',
		offset: [pos4.top+145,pos4.left-20],
		delay: '0'
	});
	
	$(".iconrow #rowicon-5[title]").tooltip({
		effect: 'fade',
		relative: true,
		position: 'center left',
		offset: [pos5.top+145,pos5.left-120],
		delay: '0'
	});
	
	$(".iconrow #rowicon-6[title]").tooltip({
		effect: 'fade',
		relative: true,
		position: 'center left',
		offset: [pos6.top+145,pos6.left-235],
		delay: '0'
	});
	

    $('#rowicon-1').mouseover(function () {
    	$(this).css("opacity","1");
    	$("#rowicon-2, #rowicon-3, #rowicon-4, #rowicon-5, #rowicon-6").css("opacity",".2");
    }).mouseout(function(){
		$("#rowicon-2, #rowicon-3, #rowicon-4, #rowicon-5, #rowicon-6").css("opacity","1");
	});
    
    $('#rowicon-2').mouseover(function () {
    	$(this).css("opacity","1");
    	$("#rowicon-1, #rowicon-3, #rowicon-4, #rowicon-5, #rowicon-6").css("opacity",".2");
    }).mouseout(function(){
		$("#rowicon-1, #rowicon-3, #rowicon-4, #rowicon-5, #rowicon-6").css("opacity","1");
	});
    
    $('#rowicon-3').mouseover(function () {
    	$(this).css("opacity","1");
    	$("#rowicon-1, #rowicon-2, #rowicon-4, #rowicon-5, #rowicon-6").css("opacity",".2");
    }).mouseout(function(){
		$("#rowicon-1, #rowicon-2, #rowicon-4, #rowicon-5, #rowicon-6").css("opacity","1");
	});
    
    $('#rowicon-4').mouseover(function () {
    	$(this).css("opacity","1");
    	$("#rowicon-1, #rowicon-2, #rowicon-3, #rowicon-5, #rowicon-6").css("opacity",".2");
    }).mouseout(function(){
		$("#rowicon-1, #rowicon-2, #rowicon-3, #rowicon-5, #rowicon-6").css("opacity","1");
	});
    
    $('#rowicon-5').mouseover(function () {
    	$(this).css("opacity","1");
    	$("#rowicon-1, #rowicon-2, #rowicon-3, #rowicon-4, #rowicon-6").css("opacity",".2");
    }).mouseout(function(){
		$("#rowicon-1, #rowicon-2, #rowicon-3, #rowicon-4, #rowicon-6").css("opacity","1");
	});
    
    $('#rowicon-6').mouseover(function () {
    	$("#rowicon-1, #rowicon-2, #rowicon-3, #rowicon-4, #rowicon-5").css("opacity",".2");
    }).mouseout(function(){
		$("#rowicon-1, #rowicon-2, #rowicon-3, #rowicon-4, #rowicon-5").css("opacity","1");
	});

	
});