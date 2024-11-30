<?php
class Student
{
    private $id;
    private $name;

    private static $file_path = "data.txt";

    function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }
    public function csv()
    {
        return $this->id . "," . $this->name . PHP_EOL;
    }

    public function save()
    {
        file_put_contents(self::$file_path, $this->csv(), FILE_APPEND);
    }
    public static function display_students()
    {
        $students = file(self::$file_path);

        echo "
        <table style='margin:0 auto; border-collapse: collapse;'>
            <thead>
                <tr>
                    <th style='border: 1px solid black; padding: 8px;'>ID</th>
                    <th style='border: 1px solid black; padding: 8px;'>Name</th>
                </tr>
            </thead>
            <tbody>";
        foreach ($students as $student) {
            list($id, $name) = explode(",", trim($student));
            echo "
            <tr>
                <td style='border: 1px solid black; padding: 8px;'>$id</td>
                <td style='border: 1px solid black; padding: 8px;'>$name</td>
            </tr>";
        }
        echo "
            </tbody>
        </table>";
    }
}

?>
