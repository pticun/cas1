<? include ("header.php"); ?>

<td width="2px"><img src="image/spacer.gif" width="2px" height=1></td><td valign="top" width="100%" style=" margin:0; padding:0 4 10 4px; "><div style="margin:0; padding:0; "><img src="image/spacer.gif" width="300px" height=1></div> 
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="left" valign="top" style="background-color:#000000; border:1px solid #6E2500; padding:1px; ">
<table width="100%" style="height:100%; border:1px solid #2E2E2E;  " border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top">
<div style="padding-left:20px; padding-top:0px"><ul style="margin:0; padding:0; line-height:18px">
<center><font class="option" color="#FFFFFF"><b>��������� �������</b></font></center>
<br>

<? echo "";
$out_summ=$out_summ-0;
echo "<li>��� ������ �� ����� $out_summ ������ ������!</li>";

$con=mysql_fetch_array(mysql_query("select * from seting"));
if ($con[paymail]=="yes"){
include("../mail/in.php");
$to =$con['adm_email'];
$subject = $reg_reg_mail_subject;
$msg =$reg_reg_mail;
$mailheaders = "Content-Type: text/plain; charset=Windows-1251\n";
$mailheaders .= "From: $con[adm_email]\n";
mail($to, $subject, $msg, $mailheaders);
}
?>

<br>
</div>
</ul>		
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>

<?include ("footer.php");?>