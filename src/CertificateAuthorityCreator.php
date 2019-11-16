<?php 
namespace Madeny\lhttps;

class CertificateAuthorityCreator{
	public  $errors;

	public  $output;

	public function __construct($path)
	{
		exec("openssl req -x509 -new -nodes -passin pass:none -key {$path}/keys/root.key -sha256 -days 1024 -out {$path}/csr/root.pem -config {$path}/cnf/openssl.cnf 2>>{$path}/logs/log", $output, $error);

			$this->errors = $error;

			$this->output = $output;
	}
}

