<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selamat datang di BNCC</h1>

    <?php

    echo "Hello World";
    echo "Hallo ini Rifdah";
    $a = 5;
    $b = 10;

    // echo $a + $b;

    // echo $b;

    // echo strlen($kata1) . "<br>";
    // echo str_word_count($kata1) . "<br>";
    // echo strrev($kata1) . "<br>";
    // echo strcmp($kata1, $kata2) . "<br>";
    // echo strtoupper($kata1) . "<br>";
    // echo strtolower($kata1) . "<br>";

    //CONDITIONAL
    // if ($kata1 === $kata2) {
    //     echo "Waw katanya sama";
    // } else {
    //     echo "Yahh katanya beda";
    // }

    // $books = array("heri poter" => 30, "senowmen" => 10, "twailaig" => 20);

    // foreach ($books as $book => $value) {
    //     echo $book . " " . $value . "<br>";
    // }

    // for ($i = 0; $i < count($books); $i++) {
    //     echo $books[$i] . "<br>";
    // }

    class vechile
    {
        //Property
        public $name;
        public $wheel;
        public $color;
        public $type;
        public $serialNo;

        //Method
        public function __construct($name, $wheel, $color, $type, $serialNo)
        {
            $this->name = $name;
            $this->wheel = $wheel;
            $this->color = $color;
            $this->type = $type;
            $this->serialNo = $serialNo;
        }
    }

    class sports extends vechile
    {
        public function set_wheel($wheel)
        {
            $this->wheel = $wheel;
        }

        public function get_wheel()
        {
            return $this->wheel;
        }


        public function set_color($color)
        {
            $this->color = $color;
        }

        public function get_color()
        {
            return $this->color;
        }
    }

    //Tanpa Construct
    // $car = new vechile();
    // $car->set_name("Toyota");
    // $car->set_wheel(4);

    // echo $car->get_name();
    // echo "<br>";
    // echo $car->get_wheel();

    //Dengan construct

    echo "<br>";
    echo "<br>";

    echo "<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "CREATE DATABASE myDBTry";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    ?>
</body>

</html>
