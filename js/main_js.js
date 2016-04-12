$(document).ready(function(){

  $.get(ajax/'hockey_feed.php',function(data){
    $("#ajax_panel").html(data);
  });
});

var ajax_demo = {
  get_nhl_feed : function(){
    var param = {adr : 'http://www.nhl.com/rss/news.xml'};
    $.get('ajax/get_feed.php', param , function(data){

      $("#ajax_panel").fadeOut(function(){
        $("#ajax_panel").html(data).fadeIn();
      });

    });
  },
};
