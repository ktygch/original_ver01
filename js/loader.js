// JavaScript Document

$('head').append(
	'<style type="text/css">#wrapper { display: none; } .loader, #wrapper { display: block; }</style>'
);

jQuery.event.add(window,"load",function() { // 全ての読み込み完了後に呼ばれる関数
	var pageH = $("#wrapper").height();
	$(".loader").delay(400).fadeOut(800);
	$("#wrapper").fadeIn(2800);
	$("#wrapper").css("display", "block");
});