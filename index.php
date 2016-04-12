<!DOCTYPE html>

<html>
  <head>
    <title>testar ajax</title>
    <meta charset="utf-8" />
    <link href="css/stil.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/main_js.js"></script>
  </head>

  <body>
  <div id="wrapper">
    <ul>
      <li><a href="javascript: location.reload();">Ladda ProHockeyTalk</a></li>
      <li><a href="javascript: ajax_demo.get_nhl_feed();">Ladda NHL</a></li>
      <li><a href="javascript: ajax_demo.get_fifa_feed();">Ladda FIFA</a></li>
      <li><a href="javascript: ajax_demo.get_pga_feed();">Ladda PGA</a></li>
    </ul>
    <p class="clear">&nbsp:</p>
    <div id="ajax_panel"></div>

  </div>
  </body>
</html>
