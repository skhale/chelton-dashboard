$(function($) {
	$('.patient-tabs').on('click', '.glyphicon-remove', function(e) {
		var $this = $(this), tabId = $this.parent().attr('href');
		$('.patient-tabs a[href="#patient-home"]').tab('show');
		$this.closest('li').remove();
		$(tabId).remove();
		e.preventDefault();
		e.stopPropagation();
	});

	$('#simple-search').on('submit', function(e) {
		var $this = $(this);
		e.preventDefault();
		$.ajax({
			'url': '/patient/search',
			'data': $this.serialize()
		}).then(function(data) {
			$('#patient-search-results').html(data);
		});
	});

	$(document).on('click', '.search-result-item', function(e) {
		var $this = $(this), $tabs = $('.patient-tabs'), tabId = $tabs.find('li').size() + 1, patientId = $this.data('id');

		$('<li><a href="#tab' + tabId + '" data-toggle="tab">' + $this.data('name') + ' <i class="glyphicon glyphicon-remove"></i></a></li>').appendTo($tabs);
		$('<div class="tab-pane" id="tab' + tabId + '">Loading...</div>').appendTo('.patient-panes');
		$tabs.find('a:last').tab('show');

		$.ajax({
			'type': 'GET',
			'url': '/patient/view',
			'data': 'id=' + patientId
		}).then(function(data) {
			$('#tab' + tabId).html(data);
		}, function(data) {
			alert('An unknown error occurred');
		});
	});


	$(document).on('hidden.bs.collapse', '.patient-content .panel', function(e) {
		var $this = $(this), $icon = $this.find('.panel-title i.fa-chevron-circle-up');
		$icon.removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
	});

	$(document).on('shown.bs.collapse', '.patient-content .panel', function(e) {
		var $this = $(this), $icon = $this.find('.panel-title i.fa-chevron-circle-down');
		$icon.removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
	});
});

function switchThemes() {
	$('body').toggleClass('lightTheme darkTheme');
}