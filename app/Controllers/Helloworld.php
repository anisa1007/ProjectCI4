<?php namespace App\Controllers;


class Helloworld extends BaseController {

    
    public function index()
    {
        // echo $this->name;
        // echo $name ."<br>";
        // echo $npm ."<br>";
        // echo "Hello Fauzi";
        $query =  $this->db->query("SELECT * FROM users");
        $row = $query->getRow();
        dd($row);
    }

    public function show()
    {
        echo "Fauzi Riski";
        echo "1717051029";
    }

}