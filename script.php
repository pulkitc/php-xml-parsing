
<table align="center" style="width: 458px; font-family: 'Times New Roman', Times, serif; height: 87px; border-width: 0px">
<?php
$xmlfile = 'myXML.xml'; // xml file here
$xmlparser = xml_parser_create();
$fp = fopen($xmlfile, 'r');
$xmldata = fread($fp, 4096);
xml_parse_into_struct($xmlparser,$xmldata,$values);
xml_parser_free($xmlparser);

foreach($values as $m){
	if ($m['type']=='open'||$m['type']=='complete' ){
		  echo('<tr style="background-color: #8BD4FF"><td style="text-align: left; width: 228px; font-size: 17pt; height: 29px; background-color: #CECEFF;">
		<strong>'.$m['tag'].'</strong></td>
		<td style="text-align: left; width: 228px; font-size: 17pt; height: 29px; background-color: #CECEFF;">'.$m['value'].
		'</td></tr>');

	}
}
?>
</table>
