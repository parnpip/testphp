<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$name = $email = $gender  = $website = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $age = test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
  $birthday = test_input($_POST["birthday"]);
  $email = test_input($_POST["email"]);
  $phonenumber = test_input($_POST["phonenumber"]);
  $emergencycontractnumber = test_input($_POST["emergencycontractnumber"]);
  $haveyoueverrun = test_input($_POST["haveyoueverrun"]);
  $weight = test_input($_POST["weight"]);
  $height = test_input($_POST["height"]);
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $zipcode = test_input($_POST["zipcode"]);
  $nationality = test_input($_POST["nationality"]);
  $size = test_input($_POST["size"]);
}


function test_input($data) {
  $data = trim($data);

  $data = stripslashes($data);

  $data = htmlspecialchars($data);

  return $data;

}

echo "<h2>Your Input:</h2>";
echo $firstname;
echo 
"<br>";
echo $lastname;
echo 
"<br>";
echo $age;
"<br>";
echo $gender;
"<br>";
echo $birthday;
"<br>";
echo $email;
"<br>";
echo $phonenumber;
"<br>";
echo $emergencycontractnumber;
"<br>";
echo $haveyoueverrun;
"<br>";
echo $weight;
"<br>";
echo $height;
"<br>";
echo $address;
"<br>";
echo $city;
"<br>";
echo $zipcode;
"<br>";
echo $nationality;
"<br>";
echo $size;
echo

//insert data
$sql = "INSERT INTO pip (firstname,lastname, age, gender, birthday, email, phonenumber, emergencycontractnumber, haveyoueverrun, weight, height, address, city, zipcode, nationality, size) 
VALUES ('firstname','lastname', 'age', 'gender', 'birthday', 'email', 'phonenumber', 'emergencycontractnumber', 'haveyoueverrun', 'weight', 'height', 'address', 'city', 'zipcode', 'nationality', 'size')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>