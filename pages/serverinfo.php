<img id="ContentBoxHeadline" class="Title" src="layouts/tibiacom/images/header/headline-serverinfo.gif" alt="Contentbox headline"><?php
if(!defined('INITIALIZED'))
	exit;
	$main_content .= '<br><center>
		<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Status</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Server Status:</td><td><font class="green">ONLINE</font></td>
			</tr>
		</table>
		<br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td colspan="2"><font class="white"><b>Rates</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['vdarkborder'].'">
				<td><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td width="50%">Experience</td><td>Media 30x</td><br>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>1 - 8</td><td>60x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">	
				<td>9 - 30</td><td>50x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>31 - 50</td><td>40x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>51 - 80</td><td>30x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>81 - 100</td><td>20x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">	
				<td>101 - 120</td><td>15x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">	
				<td>121 - 150</td><td>10x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">	
				<td>151 - 200</td><td>5x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">	
				<td>201 - 300</td><td>3x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">	
				<td>301 +</td><td>2x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">	
				<td></td><td></td>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Skill</td><td>20x</td>
			</tr>
			<tr bgcolor="'.$config['site']['darkborder'].'">
				<td>Magic</td><td>7x</td>
			</tr>
			<tr bgcolor="'.$config['site']['lightborder'].'">
				<td>Loot</td><td>3x</td>
			</tr>
		</table><br>';

	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Info Server</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>World Type</td><td>RPG/PVP</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Server motd</td><td>'.$config['server']['motd'].'</td>
		</tr>
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Frags</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>White Skull Time</td><td>15 Minutos</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Frags Time</td><td>6 Horas</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Frags to Red Skull</td><td> 6 Frags</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Frags to Black Skull</td><td> 9 Frags</td>
		</tr>
	</table><br>';
	$main_content .= '<table border="0" cellpadding="4" cellspacing="1" width="95%">
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td colspan="2"><font class="white"><b>Onther information</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['vdarkborder'].'">
			<td width="50%"><font class="white"><b>Name</b></font></td><td><font class="white"><b>Value</b></font></td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Premium</td><td> Free</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Bank System</td><td>Ativo</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Guild halls</td><td>Inativo</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Kick Time</td><td>15 Minutos</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>PZ Lock</td><td>60 Segundos</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Free Bless Level</td><td>80</td>
		</tr>
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td>Buy house</td><td>!buyhouse</td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td>Level to create guild</td><td>100</td>
		</tr>
		<!--
		<tr bgcolor="'.$config['site']['darkborder'].'">
			<td></td><td></td>
		</tr>
		<tr bgcolor="'.$config['site']['lightborder'].'">
			<td></td><td></td>
		</tr>
		-->
	</table><br>';
	$main_content .= '</center>';