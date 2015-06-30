$(function() {

	$("[data-toggle=popover]").popover();


	$('#quick-attr').popover({
		html: true,
		placement: 'bottom',
		content: function () {
			return $('#quick-attr-content').html();
		}
	});
});
