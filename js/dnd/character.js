$(function() {
	character.init();
});

var character = {

	init : function() {
		$('#event-performance-add').popover({
			container: 'body',
			trigger: 'manual',
			html: true,
			placement: 'left',
			title: 'Add Performance',
			content: function(){ 
				return $('#event-manager-date-form').html();
			}
		});
	}
}