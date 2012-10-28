<?php
if(!empty($_REQUEST["signed_request"])) {
	$data = parse_signed_request($_REQUEST["signed_request"], "dbd59c6694dc458f246a3970a806559b");
	
	if (!empty($data["page"]["liked"])) {
		/* fazer algo especial aqui para quem curtiu a pagina */
		?>
		
		<h2>Assista Ao Vivo</h2>
		<iframe width="420" height="315" src="http://www.youtube.com/embed/3daPo6BVY9w" frameborder="0" allowfullscreen></iframe>
	<?
		
	}
}
else
{
	echo "Você não está acessando através do Facebook";
}

function parse_signed_request($signed_request, $secret) {
	list($encoded_sig, $payload) = explode('.', $signed_request, 2);

	// decode the data
	$sig = base64_url_decode($encoded_sig);
	$data = json_decode(base64_url_decode($payload), true);

	if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
		error_log('Unknown algorithm. Expected HMAC-SHA256');
		return null;
	}

	// check sig
	$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
	if ($sig !== $expected_sig) {
		error_log('Bad Signed JSON signature!');
		return null;
	}

	return $data;
}

function base64_url_decode($input) {
	return base64_decode(strtr($input, '-_', '+/'));
}


?>
