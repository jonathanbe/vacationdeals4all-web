<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="contact.css" />
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 


<div class="mbox">
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill the form again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Booking Form"; 
        mail("jnb.writer@gmail.com", $subject, $message, $from); 
        echo "Thank you for sending your request. We will get back to you as soon as possible."; 
        } 
    }   
?>  
</div>

<!--
<div class="topbar">
<a href="">Home</a>    
<a href="">Featured Deals</a>    
<a href="">All Trips</a>    
<a href="">Categories</a>    
</div> -->
<div class="rightbox">
Enter the required information, and we will create an order form for the vacation you want.<br><br>
<a class="browse" href="vacationdeals4all.com/booking/all">Browse Our Deals</a>    <br><br><br>
 
 <!--
<a class="rightbox" href="">Featured</a>    
<a class="rightbox" href="">All Trips</a>    
<a class="rightbox" href="">Categories</a>  -->
</div>

<div class="ctcbg">
<center>
    <br><h1>Request Your Trip</h1>
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 

    <input name="name" type="text" placeholder="Your Name" value="" size="30"/><br> <br>

    <input name="email" type="text" placeholder="Your Email" value="" size="30"/><br> <br>

    <textarea name="message" rows="7" placeholder="Vacation you'd like to book" cols="30"></textarea><br> <br>
    <input type="submit" class="button" value="Send email"/> 
    </form>
    </center>
</div>
    

  