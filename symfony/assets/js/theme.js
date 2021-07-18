$(document).ready(function() {
    $('.table-subscribers').tablesort();
    $('.navbar-toggler').click(function () {
        console.log('CLICK');
        $('.collapse').toggleClass('show');
    });
});