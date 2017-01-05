<img id="ContentBoxHeadline" class="Title" src="layouts/tibiacom/images/header/headline-buypoints.gif" alt="Contentbox headline">
<?PHP
if($action == '')
	{
		if(!$logged) {

		     	$main_content .= 'Please enter your account name and your password.<br/><a href="?subtopic=createaccount" >Create an account</a> if you do not have one yet.<br/><br/><form action="?subtopic=accountmanagement" method="post" ><div class="TableContainer" >  <table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" >      <div class="CaptionInnerContainer" >        <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <div class="Text" >Account Login</div>        <span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>      </div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" ><tr><td class="LabelV" ><span >Account Name:</span></td><td style="width:100%;" ><input type="password" name="account_login" SIZE="10" maxlength="10" ></td></tr><tr><td class="LabelV" ><span >Password:</span></td><td><input type="password" name="password_login" size="30" maxlength="29" ></td></tr>          </table>        </div>  </table></div></td></tr><br/><table width="100%" ><tr align="center" ><td><table border="0" cellspacing="0" cellpadding="0" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></td><tr></form></table></td><td><table border="0" cellspacing="0" cellpadding="0" ><form action="?subtopic=lostaccount" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" 			type="image" name="Account lost?" alt="Account lost?" src="'.$layout_name.'/images/buttons/_sbutton_accountlost.gif" ></div></div></td></tr></form></table></td></tr></table>';

		}
	else
{

$main_content .= '<table width="100%" border="2" cellpadding="4" cellspacing="1">


<tbody><tr> 

<h1> <b>Regras da doa&ccedil;&atilde;o:</b> </h1>
Regra 01:
<br>
* Toda a renda obtida atraves das doacoes sera destinada para fins de melhorias no servico prestado a voces jogadores, tais como manuntencao de dedicado, melhorias no jogo e inumeras outras atividades que envolvem a ardua tarefa de manter um servidor online.
<br>
<br>
Regra 02:
<br>
* Ao efetuar sua doacao voce nao estara comprando ou adquirindo nada, e que apos o sucesso de sua doacao nos da equipe Arcania Global nao estamos dando ou vendendo nada, sendo os premium points uma pequena simbolizacao em forma de agradecimento por estar-nos auxiliando a manter-nos sempre ativos.
<br>
<br>
Regra 03:
<br>
* Nosso servico esta sujeito a falhas e equivocos portanto se por ventura viermos a necessitar de reinicializacao do servidor e ou recriacao do mesmo ( voces jogadores tem o direito de receber os pontos de doacoes efetuada no prazo maximo de 90 dias ). Nao havera devolucao monetaria das doacoes, pois entendemos que o ato de doar esta unido ao ato de ajudar. Portanto somente serao devolvidos pontos de doacoes caso exista algum dia um RESET e rigorosamente nos prazos estipulados anteriormente.
<br>
<br>
Regra 04:
<br>
* Ao aceitar os termos abre mão de recumperação e de qualquer outro meio de devolução sendo eles por disputa ou qualquer outro meio.
<br>
<br>
Consideracoes finais:
<br>
* Apos efetuar a leitura atenta de todos esses quesitos e se caso voce esteja de acordo com os mesmos, continue sua doacao logo abaixo:
<br>
<br>
<td class="white" colspan="3" bgcolor="#505050"><span class="style4">Detalhes dos Points.</span></td> 

 

</tr> 

<tr bgcolor="#f1e0c6"><td width="35%"><b>Quantidade de Points</b></td><td width="35%"><b>Valor da Doa&ccedil;&atilde;o</b></td></tr> 

<tr bgcolor="#d4c0a1"><td><img src="./layouts/tibiacom/images/content/bullet.gif"> 5 Points</td><td>R$5,00</td></tr> 

 

<tr bgcolor="#f1e0c6"><td><img src="./layouts/tibiacom/images/content/bullet.gif"> 10 Points</td><td>R$10,00</td></tr> 

<tr bgcolor="#d4c0a1"><td><img src="./layouts/tibiacom/images/content/bullet.gif"> 20 Points</td><td>R$20,00</td></tr> 

<tr bgcolor="#f1e0c6"><td><img src="./layouts/tibiacom/images/content/bullet.gif"> 40 Points</td><td>R$40,00</td></tr> 

<tr bgcolor="#d4c0a1"><td><img src="./layouts/tibiacom/images/content/bullet.gif"> 60 Points</td><td>R$60,00</td></tr> 

<tr bgcolor="#f1e0c6"><td><center><img src="./layouts/tibiacom/images/content/bullet.gif"> E assim por diante!!! <img src="./layouts/tibiacom/images/content/bullet.gif"></center></td><td><center><img src="./layouts/tibiacom/images/content/bullet.gif"> E assim por diante!!! <img src="./layouts/tibiacom/images/content/bullet.gif"></center></td></tr> 

</tbody></table> 
<br></br>


<center><table border="1"><tbody><tr border="1"><td bgcolor="#D4C0A1"> 
<center><h1></br>Pagseguro</h1></center>
<font size="2"><b></b></font>

<div style="width: 0%">
<center>
<form method="post" target="_new" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" name="LOGIN" class="formulario" style="width: 450px; margin: 0 0 10px 0; float: left;">

<p>
<input type="hidden" name="email_cobranca" value="onjogos.rs@gmail.com">

<input type="hidden" name="tipo" value="CP"> 

<input type="hidden" name="moeda" value="BRL"> 

<input type="hidden" name="item_id_1" value="2000050"> 

<br><table border="0"><tbody><tr border="2"><td bgcolor="#505050" class="white"><center><strong>Nome do seu character (sem erro):</strong></center></td></tr></tbody></table> 

<table border="1"><tbody><tr border="2"><td bgcolor="white"><input type="text" name="item_descr_1"></td></tr></tbody></table><br> 

<input type="hidden" name="item_quant_1" value="1"> 

<br><table border="0"><tbody><tr border="2"><td width="153" bgcolor="#505050" class="white"><span class="style11 style4"><center><strong>Valor da Doa&ccedil;&atilde;o:</center></strong></span></td>

</tr></tbody></table> 

<table border="0"><tbody><tr border="2">

  <td width="96" bgcolor="grey"><label>

    <select name="item_valor_1" id="item_valor_1" tabindex="2">

      <option selected>Selecione</option>

      <option value="5,00">5 Points</option>

      <option value="10,00">10 Points</option>
	
      <option value="15,00">15 Points</option>

      <option value="20,00">20 Points</option>

      <option value="30,00">30 Points</option>

      <option value="40,00">40 Points</option>

      <option value="50,00">50 Points</option>

      <option value="60,00">60 Points</option>

      <option value="70,00">70 Points</option>

      <option value="80,00">80 Points</option>

      <option value="90,00">90 Points</option>

      <option value="100,00">100 Points</option>

      <option value="110,00">110 Points</option>

      <option value="120,00">120 Points</option>

      <option value="130,00">130 Points</option>

      <option value="140,00">140 Points</option>

      <option value="150,00">150 Points</option>

                                </select>

  </label>


</td>
</tr>

<input type="hidden" name="item_frete_1" value="000"> 

 

<table border="1"><tbody><tr border="2"></br><td bgcolor="#505050"><input type="submit" value="Finalizar Doacao"></td></tr></tbody></table> 
</td>

</tr></tbody></table>
</p>


<div></div> 

</br><b><font size="1">Pelo PagSeguro e possivel realizar doacoes por Boletos Bancarios, Cartoes de credito e Transferencias entre contas PagSeguro. Apos efetuar a doacao aguarde o prazo de 24/48hrs para a conclusao da sua doacao. Os pontos serao entregues dentro do prazo definido ou apos a aprovacao do pagamento no PagSeguro.</b></font>﻿ 


<table border="0" cellspacing="1" cellpadding="4" width="100%">
        <tr bgcolor="#505050"><td colspan="1" class="white"><center><b>Deposito Bancario</b></center></td></tr>
<br>  <br> <tr bgcolor="#D4C0A1"><td><center> <img src=http://i42.tinypic.com/x1eo2r.jpg"> </center><br><center><b>Nome</b>: CARMEM LUCIA FERREIRA SOUSA <br>
<b>Banco</b>: Caixa<br>
<b>Numero da conta</b>: 00001282-9<br>
<b>Agencia</b>: 4782<br>
<b>Operacao</b>: 013</center>
<br>
<br>
<br>
        <tr bgcolor="#D4C0A1"><td><center><img src="/images/itau-fb.png"></center><br><center><b>Nome</b>: ROMARIO DA SILVA RIBEIRO<br>
<b>Banco</b>: ITAU<br>
<b>Conta</b>: corrente<br>
<b>Agencia</b>: 4391<br>
<b>Numero da conta</b>: 07819-5</center><br>
</td></tr></tbody></table></form>




<table border="0" cellspacing="1" cellpadding="4" width="100%">
        <tr bgcolor="#505050"><td colspan="1" class="white"><center><b>Paypal</b></center></td></tr>
<br>  <br> <tr bgcolor="#D4C0A1"><td><br><center>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HTALRR4QTBBUE">
<input type="image" src="/images/paypal_lateral.png" border="0" name="submit"  alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1"></form></center>

</td></tr>
<tr>
</tr>
</tbody></table></form>

<br>

<table border="0" cellspacing="1" cellpadding="4" width="100%">
        <tr bgcolor="#505050"><td colspan="1" class="white"><center><b>PayGol - SMS</b></center></td></tr>
<br>  <br> <tr bgcolor="#D4C0A1"><td><br><center>

<form name="pg_frm" method="post" action="https://www.paygol.com/pay" >
<input type="hidden" name="pg_serviceid" value="109332">
<input type="hidden" name="pg_currency" value="BRL">
<input type="hidden" name="pg_name" value="ArenaTibia - Donation">
<input type="hidden" name="pg_custom" value="">
<input type="hidden" name="pg_return_url" value="">
<input type="hidden" name="pg_cancel_url" value="">
<br><table border="0"><tbody><tr border="2"><td width="153" bgcolor="#505050" class="white"><span class="style11 style4"><center><strong>Valor da Doa&ccedil;&atilde;o:</center></strong></span></td>
</tr></tbody></table> 
<table border="0"><tbody><tr border="2">
<td width="96" bgcolor="grey"><label>
    <select name="pg_price" id="pg_price" tabindex="2">

      <option selected>Selecione</option>

      <option value="5">5 Points</option>

      <option value="10">10 Points</option>
	
      <option value="15">15 Points</option>

      <option value="20">20 Points</option>

      <option value="30">30 Points</option>

      <option value="40">40 Points</option>

      <option value="50">50 Points</option>

      <option value="60">60 Points</option>

      <option value="70">70 Points</option>

      <option value="80">80 Points</option>

      <option value="90">90 Points</option>

      <option value="100">100 Points</option>

      <option value="110">110 Points</option>

      <option value="120">120 Points</option>

      <option value="130">130 Points</option>

      <option value="140">140 Points</option>

      <option value="150">150 Points</option>

                                </select>
  </label>
</td>
</tr>
<table border="1"><tbody><tr border="2"></br><td bgcolor="#505050"><input type="submit" value="Finalizar Doacao"></td></tr></tbody></table> 
</td>

</tr></tbody></table></form>
</p>
<center>Apos fazer seu deposito envie os dados de sua doacao.</center>

		';
	}
}