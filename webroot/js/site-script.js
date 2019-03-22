$(function () {
  $('select').select2();
  $('input[data-date="daterange"]').daterangepicker();
  //select2-results__options
  $(document).off('load', '.select2-results__options').on('load', '.select2-results__options',function(e) {
  
  })
  
  console.log('jquery working...');
})