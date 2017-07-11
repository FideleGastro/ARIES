<?php 

class Utile{

    public function write($_file, $_data)
    {
        $fp = fopen($_file, "w+");
        fwrite($fp, $_data);
        fclose($fp);
    }

    public function read($_file, $array = false)
    {
        return(!$_array) ?
            file_get_contents($_file) :
            file($_file);
    }   

    public function getUtile()
    {
        return $this->utile->; 
    }

}

?>