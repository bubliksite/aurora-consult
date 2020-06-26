$('document').ready(function() {
	$('#mobileMenuOpen').click(function () {
		$('#mobileMenu').css({
			transform: 'translateX(-80vw)'
		});
		$('#mobileMenuClose').click(function () {
			$('#mobileMenu').css({
				transform: 'translateX(0)'
			});
		})
	})
})