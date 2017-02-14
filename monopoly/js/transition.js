$(document).on('click', '#boutonRetourChoix', function(){
      $('#bodyAccueil').addClass('visible');
      $('#bodyAccueil').removeClass('hidden');
      $('#bodyChoix').addClass('hidden');
      $('#bodyChoix').removeClass('visible');
    });
    $(document).on('click', '#boutonSolo', function(){
      $('#bodyAccueil').addClass('hidden');
      $('#bodyAccueil').removeClass('visible');
      $('#bodySolo').addClass('visible');
      $('#bodySolo').removeClass('hidden');
      var pseudo = $('#pseudo').val();
    });
    $(document).on('click', '#boutonMulti', function(){
      $('#bodyAccueil').addClass('hidden');
      $('#bodyAccueil').removeClass('visible');
      $('#bodyChoix').addClass('visible');
      $('#bodyChoix').removeClass('hidden');
      var pseudo = $('#pseudo').val();
    });
    $(document).on('click', '#boutonCreer', function(){
      $('#bodyChoix').addClass('hidden');
      $('#bodyChoix').removeClass('visible');
      $('#bodyCreer').addClass('visible');
      $('#bodyCreer').removeClass('hidden');
    });
    $(document).on('click', '#boutonRejoindre', function(){
      $('#bodyChoix').addClass('hidden');
      $('#bodyChoix').removeClass('visible');
      $('#bodyRejoindre').addClass('visible');
      $('#bodyRejoindre').removeClass('hidden');
    });
    $(document).on('click', '#boutonValiderCreer', function(){
      creerPartie();
      $('#bodyCreer').addClass('hidden');
      $('#bodyCreer').removeClass('visible');
      $('#bodyAttente').addClass('visible');
      $('#bodyAttente').removeClass('hidden');
    });