<div id="LayerPop" style="display:block; position:absolute; left:0px; top:-520px;"></div>
<div id="LayerPop2" align="center" style="position: absolute; top:-520px; margin:auto; padding:auto; width: 100%; z-index: 5000;"><a href="?subtopic=buypoints" target="_BLANK"><img src="promo.jpg" class="imgBorder"></a><BR /><input type="button" name="fechar" value="FECHAR" onclick="document.getElementById('LayerPop').style.display = 'none';document.getElementById('LayerPop2').style.display = 'none'" style="font-family: Verdana; font-weight: bold; font-size:10px;  color: #FFFFFF; background-color: #000000; border: 1px solid #fffff;"></div>
<?PHP header("Content-Type: text/html; charset=ISO-8859-1",true);
date_default_timezone_set('America/Sao_Paulo');
//######################## SHOW TICKERS AND NEWS #######################
if ($logged){
$players_from_account = $SQL->query("SELECT `players`.`name`, `players`.`id` FROM `players` WHERE `players`.`account_id` = ".(int) $account_logged->getId())->fetchAll();
foreach($players_from_account as $player)
    {
        $str .= '<option value="'.$player['id'].'"';
            if($player['id'] == $char_id)
            $strt .= ' selected="selected"';
            $str .= '>'.$player['name'].'</option>';
    }
}
$time = time();
//featured article
//sem creditos do autor, apenas postado por Dhenyz Shady no X-tibia.

$news_content .= '
    <div id="news" class="Box">
    <div class="Corner-tl" style="background-image:url('.$layout_name.'/images/content/corner-tl.gif);"></div>
    <div class="Corner-tr" style="background-image:url('.$layout_name.'/images/content/corner-tr.gif);"></div>
    <div class="Border_1" style="background-image:url('.$layout_name.'/images/content/border-1.gif);"></div>
    <div class="BorderTitleText" style="background-image:url(layouts/tibiacom/images/content/title-background-green.gif);">
	<center><font size="3px" style="text-decoration: inherit; text-shadow:#000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px" size="1px" color="white">| IP: <font color="#00FF00">www.MEUOT.com</font> / Port: <font color="#00FF00">7171</font> / Client: <font color="#00FF00">10.90</font> | </center></font>
	</div>
    <div class="Border_2">
        <div class="Border_3">
            <div class="BoxContent" style="background-image:url('.$layout_name.'/images/content/scroll.gif);">
                <div id=\'TeaserThumbnail\'><img src="layouts/tibiacom/images/news/come.png" width=231 height=257 border=0 alt="" ALIGN=right hspace="10" /></div>
                <div id=\'TeaserText\'>
                    <div style="position: relative; top: -9px; margin-bottom: 10px;"></br>
				 <font size="2px"><p>Seja bem vindo ao <b><font color="green">MEUOT</font></b>, servidor feito especialmente para jogadores que gostam de um hard up. Oferecemos quests, outfits e miss&otilde;es 99% igual ao do global (n&atilde;o damos 100% de certeza pois pode ser que esteja faltando algo, e isto ser&aacute; corrigido com o tempo).<br><br><br><br>	
                </br>
				</font></p>
				<h1>Jogue agora mesmo!</h1>
				</br></br>
				<table border="0" align="center" width=100%">
						<tr>
							<td><p align="center"><img src="http://i.imgur.com/323oQjP.jpg" border="0"></p></td>
							<td><p align="center"><img src="http://i.imgur.com/2faKDeC.jpg" border="0"></p></td>
							<td><p align="center"><img src="http://i.imgur.com/lxTvrnv.jpg" border="0"></p></td>
							<td><p align="center"><img src="http://i.imgur.com/nYJ0cbK.jpg" border="0"></p></td>
						</tr>
						<tr>
							<td><p align="center"><a href="/index.php?subtopic=serverinfo">[CLIQUE AQUI]</a></p></td>
							<td><p align="center"><a href="http://www.tibiawiki.com.br/wiki/Quests" target="_blank">[CLIQUE AQUI]</a></p></td>
							<td><p align="center"><a href="#">[CLIQUE AQUI]</a></p></td>
							<td><p align="center"><a href="/index.php?subtopic=downloads">[CLIQUE AQUI]</a></p></td>
						</tr>
</table>
				</div>
				</div>
            </div>
        </div>
    </div>
    <div class="Border_1" style="background-image: url('.$layout_name.'/images/content/border-1.gif);"></div>
    <div class="CornerWrapper-b"><div class="Corner-bl" style="background-image: url('.$layout_name.'/images/content/corner-bl.gif);"></div></div>
    <div class="CornerWrapper-b"><div class="Corner-br" style="background-image: url('.$layout_name.'/images/content/corner-br.gif);"></div></div>
    </div>
';
//Fim do featured Article
//adding news
if($action == "newnews") {
if($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
$text = ($_REQUEST['text']);
$char_id = (int) $_REQUEST['char_id'];
$post_topic = stripslashes(trim($_REQUEST['topic']));
$smile = (int) $_REQUEST['smile'];
$news_icon = (int) $_REQUEST['icon_id'];
if(empty($news_icon)) {
$news_icon = 0;
}
if(empty($post_topic)) {
$an_errors[] .= 'You can\'t add news without topic.';
}
if(empty($text)) {
$an_errors[] .= 'You can\'t add empty news.';
}
if(empty($char_id)) {
$an_errors[] .= 'Select character.';
}
//execute query
if(empty($an_errors)) {
$SQL->query("INSERT INTO `z_forum` (`id` ,`first_post` ,`last_post` ,`section` ,`replies` ,`views` ,`author_aid` ,`author_guid` ,`post_text` ,`post_topic` ,`post_smile` ,`post_date` ,`last_edit_aid` ,`edit_date`, `post_ip`, `icon_id`) VALUES ('NULL', '0', '".time()."', '1', '0', '0', '".$account_logged->getId()."', '".(int) $char_id."', ".$SQL->quote($text).", ".$SQL->quote($post_topic).", '".(int) $smile."', '".time()."', '0', '0', '".$_SERVER['REMOTE_ADDR']."', '".$news_icon."')");
$thread_id = $SQL->lastInsertId();
$SQL->query("UPDATE `z_forum` SET `first_post`=".(int) $thread_id." WHERE `id` = ".(int) $thread_id);//show added data
$main_content .= '<form action="index.php?subtopic=latestnews" METHOD=post><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></form>';
}
else
{
//show errors
$main_content .= '<div class="SmallBox" >  <div class="MessageContainer" >    <div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="ErrorMessage" >      <div class="BoxFrameVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></div>      <div class="BoxFrameVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></div>      <div class="AttentionSign" style="background-image:url('.$layout_name.'/images/content/attentionsign.gif);" /></div><b>The Following Errors Have Occurred:</b><br/>';
foreach($an_errors as $an_error) {
	$main_content .= '<li>'.$an_error;
}
$main_content .= '</div>    <div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>  </div></div><br/>';
//okno edycji newsa z wpisanymi danymi przeslanymi wczesniej
$main_content .= '<form action="index.php?subtopic=latestnews&action=newnews" method="post" ><table border="0"><tr><td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td><td><table border="0" bgcolor="F1E0C6"><tr><td><img src="'.$layout_name.'/images/news/icon_0.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_1.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_2.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_3.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_4.gif" width="20"></td></tr><tr><td><input type="radio" name="icon_id" value="0" checked="checked"></td><td><input type="radio" name="icon_id" value="1"></td><td><input type="radio" name="icon_id" value="2"></td><td><input type="radio" name="icon_id" value="3"></td><td><input type="radio" name="icon_id" value="4"></td></tr></table></td></tr><tr><td align="center" bgcolor="F1E0C6"><b>Topic:</b></td><td><input type="text" name="topic" maxlenght="50" style="width: 300px" value="'.$post_topic.'"></td></tr><tr><td align="center" bgcolor="D4C0A1"><b>News<br>text:</b></td><td bgcolor="F1E0C6"><textarea name="text" rows="6" cols="60">'.$text.'</textarea></td></tr><tr><td width="180"><b>Character:</b></td><td><select name="char_id"><option value="0">(Choose character)</option>'.$str.'</select></td></tr><tr><td><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></form><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="CancelAddNews" src="'.$layout_name.'/images/buttons/_sbutton_cancel.gif" onClick="location.href=\'index.php?subtopic=latestnews\';" alt="CancelAddNews" /></div></div></td></tr></table>';
}
}
else
{
$main_content .= 'You don\'t have site-admin rights. You can\'t add news.';}
}
//####################Show script with new news panel############################								
if($group_id_of_acc_logged >= $config['site']['access_admin_panel'] && $action != 'newnews')
{

$main_content .= '
<font style="font-size: 16px; font-weight: bold; margin-left: 20px;">New News</font>
<form action="index.php?subtopic=latestnews&action=newnews" method="post" >
<table border="0">
<tr>
<td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td>
<td>
<table border="0">
<tr bgcolor="F1E0C6">
<td><img src="'.$layout_name.'/images/news/icon_0.gif" width="20"></td>
<td><img src="'.$layout_name.'/images/news/icon_1.gif" width="20"></td>
<td><img src="'.$layout_name.'/images/news/icon_2.gif" width="20"></td>
<td><img src="'.$layout_name.'/images/news/icon_3.gif" width="20"></td>
<td><img src="'.$layout_name.'/images/news/icon_4.gif" width="20"></td>
</tr>
<tr bgcolor="D4C0A1">
<td><input type="radio" name="icon_id" value="0" checked="checked"></td>
<td><input type="radio" name="icon_id" value="1" /></td>
<td><input type="radio" name="icon_id" value="2" /></td>
<td><input type="radio" name="icon_id" value="3" /></td>
<td><input type="radio" name="icon_id" value="4" /></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="F1E0C6"><b>Topic:</b></td>
<td><input type="text" name="topic" maxlenght="50" style="width: 300px" ></td>
</tr>
<tr>
<td align="center" bgcolor="D4C0A1"><b>News<br>text:</b></td>
<td bgcolor="F1E0C6"><textarea name="text" rows="6" cols="60"></textarea></td>
</tr>
<tr>
<td width="180"><b>Character:</b></td>
<td><select name="char_id"><option value="0">(Choose character)</option>'.$str.'</select></td>
</tr>
<tr>
<td>
<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></form></td></tr>
</table>
<hr/>';
$zapytanie = $SQL->query("SELECT `z_forum`.`icon_id`,`z_forum`.`post_topic`, `z_forum`.`author_guid`, `z_forum`.`post_date`, `z_forum`.`post_text`, `z_forum`.`id`, `z_forum`.`replies`, `players`.`name` FROM `z_forum`, `players` WHERE `section` = '1' AND `z_forum`.`id` = `first_post` AND `players`.`id` = `z_forum`.`author_guid` ORDER BY `post_date` DESC LIMIT 3;")->fetchAll();
}
///show news

//
$zapytanie = $SQL->query("SELECT `z_forum`.`icon_id`,`z_forum`.`post_topic`, `z_forum`.`author_guid`, `z_forum`.`post_date`, `z_forum`.`post_text`, `z_forum`.`id`, `z_forum`.`replies`, `players`.`name` FROM `z_forum`, `players` WHERE `section` = '1' AND `z_forum`.`id` = `first_post` AND `players`.`id` = `z_forum`.`author_guid` ORDER BY `post_date` DESC LIMIT 6;")->fetchAll();
foreach ($zapytanie as $row)
{
        $BB = array(
		'/\[youtube\](.*?)\[\/youtube\]/is' => '<center><object width="500" height="405"><param name="movie" value="http://www.youtube.com/v/$1&hl=pt-br&fs=1&rel=0&color1=0x3a3a3a&color2=0x999999&border=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/$1&hl=pt-br&fs=1&rel=0&color1=0x3a3a3a&color2=0x999999&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="500" height="405"></embed></object></center>',
		'/\[b\](.*?)\[\/b\]/is' => '<strong>$1</strong>',
		'/\[center\](.*?)\[\/center\]/is' => '<center>$1</center>',
		'/\[quote\](.*?)\[\/quote\]/is' => '<table cellpadding="0" style="background-color: #c4c4c4; width: 480px; border-style: dotted; border-color: #007900; border-width: 2px"><tr><td>$1</td></tr></table>',
		'/\[u\](.*?)\[\/u\]/is' => '<u>$1</u>',
		'/\[i\](.*?)\[\/i\]/is' => '<i>$1</i>',
		'/\[letter\](.*?)\[\/letter\]/is' => '<img src=images/letters/$1.gif alt=$1 />',
		'/\[url](.*?)\[\/url\]/is' => '<a href=$1>$1</a>',
		'/\[color\=(.*?)\](.*?)\[\/color\]/is' => '<span style="color: $1;">$2</span>',
		'/\[img\](.*?)\[\/img\]/is' => '<img src=$1 alt=$1 />',
		'/\[player\](.*?)\[\/player\]/is' => '<a href='.$server['ip'].'index.php?subtopic=characters&amp;name=$1>$1</a>',
		'/\[code\](.*?)\[\/code\]/is' => '<div dir="ltr" style="margin: 0px;padding: 2px;border: 1px inset;width: 500px;height: 290px;text-align: left;overflow: auto"><code style="white-space:nowrap">$1</code></div>'
		);
		$message = preg_replace(array_keys($BB), array_values($BB), nl2br($row['post_text']));
        $main_content .= '
		<div class="NewsHeadline">
		<div class="NewsHeadlineBackground" style="background-image:url('.$layout_name.'/images/news/newsheadline_background.gif)">
		<img src="'.$layout_name.'/images/news/icon_'.$row['icon_id'].'_big.gif" class="NewsHeadlineIcon" />
		<div class="NewsHeadlineDate">'.date('j M Y', $row['post_date']).' - </div>
		<div class="NewsHeadlineText">'.$row['post_topic'].'</div>
		</div>
		</div>
		<table style=\'clear:both\' border=0 cellpadding=0 cellspacing=0 width=\'100%\'><tr>
		<td><img src="'.$layout_name.'/images/global/general/blank.gif" width=10 height=1 border=0 alt=\'\' /></td>';
		if($group_id_of_acc_logged >= $config['site']['access_admin_panel'])
		{
			$main_content .='<td width="100%">'.$message.'<br><p align="right"><a href="index.php?subtopic=forum&action=remove_post&id='.$row['id'].'"><font color="red">[Delete this news]</font></a>  <a href="index.php?subtopic=forum&action=edit_post&id='.$row['id'].'"><font color="green">[Edit this news]</font></a>';
		}
		else		
		{
			$main_content .='<td width="100%">'.$message.'<br /><br />';		
		}
		$main_content .= '</td>
		<td><img src="'.$layout_name.'/images/global/general/blank.gif" width=10 height=1 border=0 alt=\'\' /></td>
		</tr></table>';

}
?>