<?php

class Db
{

	public static function connect() {
		$dsn = "//10.30.70.5:1521/dbpolice";
		$dbuser ='p_stations'; // $this->session->userdata('uname');
		$dbpass ='pol_centers';//  $this->session->userdata('pass');

		return oci_connect($dbuser, $dbpass, $dsn, 'AL32UTF8');
	}
}
