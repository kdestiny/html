function changeh2oz_z_img(){
	var $=jQuery;
	var hide = 1;
	if ($('#h2oz_z_img').hasClass("h2oz_z_img_yes")) {
		hide = 1;
	}else{
		hide = 0;
	}

	$('#h2oz_z_img').removeClass();
	$('.h2oz_z_imgbtn').removeClass('expand shrink');
	
	if (hide) {
		$('.h2oz_z_imgbtn').addClass('expand');
		$('#h2oz_z_img').addClass('h2oz_z_img_no');
		$('.threadlist_imglist').addClass('h2oz_z_dn');
	}else{
		$('.h2oz_z_imgbtn').addClass('shrink');
		$('#h2oz_z_img').addClass('h2oz_z_img_yes');
		$('.threadlist_imglist').removeClass('h2oz_z_dn');
	}
	setcookie('h2oz_z_imghide', hide, 2592000);
}