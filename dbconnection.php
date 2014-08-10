<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbconnection
 *
 * @author LAB5
 */
class DbConnection {
    
    private $connection;
    
    public function getConnection()
    {
        $this->connection = mysql_connect('localhost', 'root', '', 'ftfl');
       
        return $this->connection;
        
        
    }
}
