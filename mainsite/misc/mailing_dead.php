<?php

function writeLog($text)
{
	$fp   = fopen("/var/www/mainsite/misc/mailing_dead.txt", "a+");
	$date = date("Y-m-d H:i:s");

	fwrite($fp, "[{$date}] {$text}\n");
	fclose($fp);

	return true;
}

require_once("../lib/html_mime_mail_2.5/htmlMimeMail.php");
$subject = "Yourpacs :: Comunicado";
$body    = "
			Durante mucho tiempo hemos estado ausentes. Queremos pedirte disculpas por la sensación de abandono que te hemos causado y por la falta de novedades en el proyecto durante todo este tiempo. No esperamos que sólo estas palabras arreglen la situación pero es evidente que hay que empezar por una disculpa.<br/><br/>
			Como sabes, Yourpacs ofrece varios softwares Opensource de manera gratuita y con una posibilidad de configuración bastante mayor a lo que el mercado actual ofrece. Este servicio ha causado mucho interés y la prueba de ello es el crecimiento exponencial de usuarios que ha tenido. Sin embargo, sólo con esto no se pagan facturas.<br/><br/>
			El modelo de publicidad de Adsense, con el que pensamos sustentar el proyecto, nos cerró las puertas alegando que o censurábamos el contenido \"ilegal\" como por ejemplo \"letras de canciones\" de todas páginas o nos cerraban la cuenta. En contra de la política que nos imponían y con más de 300.000 páginas indexadas (imposible para nosotros moderar y censurar) optamos por eliminar la publicidad de Adsense.<br/><br/>
			Durante mucho tiempo hemos buscado otras soluciones sin resultado satisfactorio, los ingresos disminuyen y los gastos crecen y focalizar nuestros esfuerzos en la rentabilidad del proyecto nos ha hecho imposible atender las tareas de soporte que iban creciendo al mismo ritmo que los costes de los servidores.<br/><br/>
			No hemos encontrado la manera de rentabilizar el servicio ni la de coordinar las tareas de soporte que requiere habiendo llegado a la siguiente conclusión: No tenemos más remedio que cerrar el proyecto Yourpacs.<br/><br/>
			El próximo día 21 de diciembre se cerrará la web y publicaremos el código fuente. No se hará hasta ese día para evitar que con el código en la mano nadie pueda aprovecharse de algún Bug en el sistema e impedir que se pueda migrar el contenido.<br/><br/>
			No tenemos otra opción. Ya no tenemos más dinero para continuar pagando los gastos de los servidores así que sólo nos queda pedirte disculpas y darte las gracias por haber creído en el proyecto Yourpacs.<br/><br/>
";


$conn = mysql_pconnect("localhost", "root", "pepitogrillo");
mysql_select_db("lynksee");
mysql_query("SET NAMES `utf8`");

$rs = mysql_query("SELECT * FROM account ORDER BY id_account ASC", $conn);
while ($data = mysql_fetch_assoc($rs))
{
	$mail = new htmlMimeMail();
	$mail->setHtml(utf8_decode($body), null);
	$mail->setReturnPath('support@lynksee.com');
	$mail->setFrom('"Yourpacs" <support@lynksee.com>');
	$mail->setSubject(utf8_decode($subject));
	$mail->setHeader('X-Mailer', 'Yourpacs mailer v1 (http://www.lynksee.com)');
	$mail->setHeader('Message-ID', '<jg2nnp.rkio1@>');
	$mail->setHeader('Content-type', 'text/html; charset="UTF-8"');
	$result = $mail->send(array($data['email']), 'mail');

	if (!$result) {
		writeLog(print_r($mail->errors, true));
	} else {
		writeLog("e-Mail enviado a ({$data['id_account']}) {$data['email']}");
	}

	sleep(1);
}
