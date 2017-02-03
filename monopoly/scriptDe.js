function showRand(){
  var random1 = Math.floor(Math.random() * 6 + 1);
  var random2 = Math.floor(Math.random() * 6 + 1);

  $("#dice1").text(random1);
  $("#dice2").text(random2);
}

function setIntervals(callback, delay, repetitions){
  var a = 0;
  var intervalID = setInterval(function(){

    callback();
    if (++a === repetitions){
      clearInterval(intervalID);
      $("dice1").text(Math.floor(Math.random() * 6 + 1));
      $("dice2").text(Math.floor(Math.random() * 6 + 1));
    }
  }, delay);
}

$("#roll").click(function(){
  setIntervals(showRand, 10, 40)
});
