<?php

class avada
{
    //connection start here
    function connection()
    {
        $connect = mysqli_connect('localhost','root','','divisma');
        return $connect;
    }//connection end here

//    get products for index page slider
    function getproducts()
    {
        $sql = "SELECT * FROM products";
        $query = mysqli_query($this->connection(),$sql);
        return $query;
    }

    // For Getting all categories at header
    function getcategory()
    {
        $sql = "SELECT * FROM `category`";
        $query = mysqli_query($this->connection(), $sql);
        return $query;
    }

    // Get products by id for product details page
    function getproduct_byid($a)
    {
      $sql = "SELECT * FROM `products` WHERE id = $a";
      $query = mysqli_query($this->connection(), $sql);
      return $query;
    }

    // insert the get customer query foem
    function getquery()
    {
      if(isset($_POST['send_btn']))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

      $sql = "INSERT INTO `query`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
      $query = mysqli_query($this->connection(),$sql);
      if(!$query)
      {
        echo "<script>alert('Sorry Some Thing Went Wrong Please Try Again')</script>";
      }
      else {
        echo "<script>alert('Your Query Added Successfully')</script>";
        }
      }
    }//function end hebrev

    // function for categories on catgory page
    function categories_info()
    {
      $sql = "SELECT c.id, COUNT(p.id) pcid , c.name as categname from products as p left JOIN category as c on c.id = p.category GROUP BY c.name";
      $query = mysqli_query($this->connection(), $sql);
      return $query;
    }

}// class avada end here

$avada = new avada;
