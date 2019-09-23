$('#keyword').on('keyup', function() {
	$('#container').load('../ajax/ilmuan.php?keyword=' + $('#keyword').val());
});

$('#tulis').on('keyup', function() {
	$('#pembungkus').load('ajax/penemu.php?keyword=' + $('#tulis').val());
});