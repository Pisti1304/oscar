<?php

class RestKezelo
{
    private $httpVersion =  "HTTP/1.1";
    public function sethttpFejlec()
    {
        $statusUzenet = $this->gethttpStatusUzenet($statusKod);
        header($this->httpVersion."".$statusKod
        ."".$statusUzenet);
        header("Content-Type: application/json");
    }
    public  function gethttpStatusUzenet($statusKod)
    {
        $httpstatus = array(
            200  => 'OK',
            400 =>'Bad Request',
            404 =>'Not Found'
        );
    }
}