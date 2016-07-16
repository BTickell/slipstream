$(document).ready(function() {
	$("#search1").submit(function(e) {
		e.preventDefault();
		search();
	});
	function search() {
		var data = $("#search").val();
		window.location.assign("scripts/search.php?search=" + data);
	}
});
