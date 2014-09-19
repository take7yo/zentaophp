<?php
$config->installed    = true;  
$config->debug        = true;  
$config->requestType  = 'GET';    // PATH_INFO or GET.
$config->requestFix   = '-';
$config->webRoot      = '/'; 

$config->db->host     = '117.29.168.34';
$config->db->port     = '3306';
$config->db->name     = 'zentao_ivan'; 
$config->db->user     = 'root'; 
$config->db->password = 'root';

/* To use master and slave database feature, uncomment this.
$config->slaveDB->host     = 'localhost';
$config->slaveDB->port     = '3306';
$config->slaveDB->name     = 'demo'; 
$config->slaveDB->user     = 'root'; 
$config->slaveDB->password = ''; */
?>
