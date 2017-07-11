<?php
    namespace lib;

    class Utile{
        public function save($data, $file){
            $fp = fopen($file, 'w+');
            fwrite($fp, $data);
            echo "save: ";
            fclose($fp);
        }
    }
?>