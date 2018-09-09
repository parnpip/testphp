<!DOCTYPE html>
<html lang="th">
<head>
    
	<meta charset="UTF-8">
     
   <title>Run for ตุ๊ดตู่</title>
<style>
* 
{
    box-sizing: border-box;
}

body
 {
    font-family: Arial, Helvetica, sans-serif;
}

/*
 Style the header */
header {
    
background-color: #669999;
   
 padding: 30px;
   
 text-align: center;
   
 font-size: 35px;
   
 color: white;
}

/* 
Create two columns/boxes that floats next to each other */

nav 

{
    float: left;

    width: 30%;
 
   height: 500px; /*
 only for demonstration, should be removed */

    background: #cccccc;

    padding: 20px;
}

/*
 Style the list inside the menu */

nav ul 
{
    list-style-type: none;

    padding: 0;
}

article 
{
    float: left;

    padding: 20px;

    width: 70%;

    background-color: #CCCCFF;
    height: 500px; /*
 only for demonstration, should be removed */

}


/* Clear floats after the columns */

section:after 
{
    content: "";

    display: table;

    clear: both;
}

/*
 Style the footer */

footer
 {
    background-color: #99CCFF;

    padding: 200px;

    text-align: center;
 
   color: white;
}

/*
 Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */

@media (max-width: 600px)
 {
    nav, article 
{
        width: 100%;

        height: auto;
    }
}

</style>
</head>
<body>
<header>
 
 <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
 
 <nav>
 
   <ul>
  
    <li><a href="#">สมัคร Run</a></li>

      <li><a href="#">ตรวจสอบ BIB</a></li>

      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>

    </ul>

  </nav>

  
  <article>

    <h1>ทำไมต้อง Run</h1>
 
   <form  method="post" action="result.php">
  First name:<br>             
  <input type="text" name="firstname" value="       ">  
 <br>
 Last name:<br>
  <input type="text" name="lastname" value="        ">
  <br>
  Age:<br>
  <input type="text" name="age" value=" ">
  <br>
 <form>
  Gender<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other  
</form> 
  BirthDay:<br>
  <input type="text" name="birthday" value="  ">
  <br>
  E-Mail:<br>
  <input type="text" name="e-mail" value="  ">
  <br>
  Phone Number:<br>
  <input type="text" name="phone number" value="   ">
  <br>
Emergency Contract Name<br>
  <input type="text" name="Emergency Contract Name" value="  ">
  <br>
 <form>
 Have you ever run?<br>
  <input type="radio" name="Have you ever run?" value="Yes" checked> Yes<br>
  <input type="radio" name="Have you ever run?" value="No"> No<br>
</form>
Weight<br>
  <input type="text" name="weight" value="  ">
  <br>
Height<br>
  <input type="text" name="height" value="  ">
  <br>
Address<br>
  <input type="text" name="Address" value="  ">
  <br>
City<br>
  <input type="text" name="City" value="  ">
  <br>
Zip Code<br>
  <input type="text" name="Zip Code" value="  ">
  <br>
Nationality<br>
  <input type="text" name="Nationality" value="  ">
  <br>
 <form>
  Size<br>
  <input type="radio" name="size" value="S(36-38)" checked> s(36-38)<br>
  <input type="radio" name="size" value="M(38-40)">M(38-40)<br>
  <input type="radio" name="size" value="L(40-42)">L(40-42)<br>
  <input type="radio" name="size" value="XL(42-44)">XL(42-44)<br>
  <input type="radio" name="size" value="other"> Other  
</form> 
<br>

<br><br>
  <input type="submit" value="Submit">
</form>  </article>
</section>

<footer>
 
 <p>Footer</p>
</footer>

   
 </body>
</html>