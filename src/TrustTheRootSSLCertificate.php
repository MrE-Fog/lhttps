<?php 
namespace Madeny\lhttps;

class TrustTheRootSSLCertificate{
	protected  $error;

	protected  $output;

	protected  $message;

	function __construct($path, $checker, $option)
	{
			exec("sudo security add-trusted-cert -d -r trustRoot -k /Library/Keychains/System.keychain {$path}/csr/root.pem 2>>{$path}/logs/log", $output, $error);	
			$this->error = $error;
	}

	public function getError()
	{
		return $this->error;
	}
}