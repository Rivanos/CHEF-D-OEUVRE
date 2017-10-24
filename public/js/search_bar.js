$(document).ready(function(){
  $('#recherche').keyup(function(){
    $recherche = $(this).val();
    $.get('search/'+ $recherche +'/', function(data){
      $('#result').addClass('result');
      $('#result').html(data);
    });
    if ($recherche == "" ) {
      $('#result').removeClass('result').empty();
    }
  });
  $('#recherche').click( function(){
        $(this).val('');
  });
  $('#remove').click( function(){
    $('#result').removeClass('result').empty();
    $('#recherche').val('');
  });
});
