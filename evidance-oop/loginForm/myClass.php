<?php

class Trainee{
    private $id;
    private $name;
    private $batch;
    private static $file_path = 'store.txt';
    function __construct($trainID, $trainName, $trainBatch)
    {
        $this->id = $trainID;
        $this->name = $trainName;
        $this->batch = $trainBatch;
    }
    function combine(){
        return $this->id.','.$this->name.','.$this->batch.PHP_EOL;
    }
    function save(){
        file_put_contents(self::$file_path,$this->combine(),FILE_APPEND);
    }
    static public function display(){
        $myArray = file(self::$file_path);
            echo "
            <table style='margin:0 auto; border-collapse: collapse;'>
                <thead>
                    <tr>
                        <th style='border: 1px solid black; padding: 8px;'>Trainee ID</th>
                        <th style='border: 1px solid black; padding: 8px;'>Trainee Name</th>
                        <th style='border: 1px solid black; padding: 8px;'>Trainee Batch</th>
                    </tr>
                </thead>
                <tbody>";
                foreach ($myArray as $process) {
                list($id, $name, $batch) = explode(",", trim($process));
                echo "
                <tr>
                    <td style='border: 1px solid black; padding: 8px;'>$id</td>
                    <td style='border: 1px solid black; padding: 8px;'>$name</td>
                    <td style='border: 1px solid black; padding: 8px;'>$batch</td>
                </tr>";
            }
            echo "
                </tbody>
            </table>";
        }
    
}




?>