<?php
$SQL = $GLOBALS['SQL'];
$skills = $SQL->query('SELECT * FROM players WHERE deleted = 0 AND group_id = 1 AND account_id != 1 ORDER BY level DESC LIMIT 10');
?>
<style type="text/css" media="all">
  .Toplevelbox {

    top: -4px;

    position: relative;

    margin-bottom: 10px;

    width: 180px;

    height: 346px;

  }

  .top_level_x {

    position: absolute;

    top: 29px;

    left: 6px;

    height: 290px;

    width: 168px;

    z-index: 20;

    text-align: center;

    padding-top: 6px;

    font-family: Tahoma, Geneva, sans-serif;

    font-size: 9.2pt;

    color: black;

    font-weight: bold;

    text-align: right;

    text-decoration: inherit;

    text-shadow: 0.1em 0.1em #333

  }

  .top_level {

    position: absolute;

    top: 29px;

    left: 6px;

    height: 300px;

    width: 168px;

    z-index: 20;

    text-align: center;

    padding-top: 6px;

    font-family: Tahoma, Geneva, sans-serif;

    font-size: 9.2pt;

    color: black;

    font-weight: bold;

    text-align: right;

    text-decoration: inherit;

    text-shadow: 0.1em 0.1em #333

  }

  #Topbar a {
  text-decoration: none;
  cursor: auto;
  }
  a.topfont {
    font-family: Verdana, Arial, Helvetica; 
    font-size: 11px; 
    color: #ffcc33;
    text-decoration: none
  }
  a:hover.topfont {
    font-family: Verdana, Arial, Helvetica; 
    font-size: 11px;  
    color: #CCC; 
    text-decoration:none
  }
</style>

<div id="Topbar" class="Toplevelbox" style="background-image:url(<?PHP echo $layout_name; ?>/images/top_level.png);">
  <div class="top_level" style="background:url(<?PHP echo $layout_name; ?>/images/bg_top.png)" align="left">
    <?php 
    $a = 1;
    
	foreach($skills as $skill) {
      if ($a <= 10){
	  echo '<div align="left">
	  <a href="?subtopic=characters&name='.$skill['name'].'" class="topfont">
        <font color="#CCC">&nbsp;&nbsp;&nbsp;&nbsp;'.$a.' - </font>'.htmlspecialchars($skill['name']).'
        <br>
        <small><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level: ('.$skill['level'].')</font></small>
        <br>
      </a>
	  
	   <img src="http://outfit-images.ots.me/outfit.php?id='.$skill['looktype'].'&addons='.$skill['lookaddons'].'&head='.$skill['lookhead'].'&body='.$skill['lookbody'].'&legs='.$skill['looklegs'].'&feet='.$skill['lookfeet'].'" width="64" height="64" style="width: 64px; height: 64px; position: absolute; background-position: 0 0; background-repeat: no-repeat; left: -53px; margin-top: -70px;">
      </div>';
	  }
      $a++;
    }
    ?>
    </div>
	   <div class="Bottom" style="margin-top:90px; background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
  </div>
</div>