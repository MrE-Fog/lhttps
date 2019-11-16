<?php declare(strict_types=1);
use Madeny\lhttps\Test\CustomTestCase;
use Madeny\lhttps\CertificateKeyCreator;

class CertificateKeyCreatorTest extends CustomTestCase{

	   /** @test */
	public function it_can_generate_a_RSA_2048_key()
	    {
	    	$rsa = new CertificateKeyCreator($this->path);

	    	$this->assertEquals(0, $rsa->errors);
		}

	   /** @test */
	public function it_can_generate_an_error()
	    {
	    	$rsa = new CertificateKeyCreator("fake/path");

	    	$this->assertEquals(2, $rsa->errors);
		}

	   /** @test */
	public function it_can_ouput_logs()
	    {
	    	$rsa = new CertificateKeyCreator($this->path);

	    	$output = count($rsa->output);

	    	$this->assertEquals(0, $output);
		}

}