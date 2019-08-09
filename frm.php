<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>form</title>
    

<script  src="message.js">
   



</script>
<style>

.center {
  margin: auto;
  width: 10%;
  border: 2px soli white;
  background-color: white;
  padding: 10px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;

  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
  .message {

    margin-left: 10px;
  }
  

</style>
</head>
    

        <body style="background-color:teal;"></body>
                <div class="">
                        <form action="next.php" method="POST" class="container">
                        
                      

        
    <form> <center>
       <h1> Sign Up</h1>
    
       <br><br>
       
       <font face="verdana" size="4" >Name </font> 
        <input type="text"name="firstName" placeholder="" ><br><br>

       
        <font face="verdana" size="4"> Email </font>   
        <input type="email" name="email"><br><br>
        
        <font face="verdana" size="4">Message</font> 

        <input type="" name=""placeholder=""><br><br>

        


        
         
    
       <button class="button" button style="width:200px;height: 40px;" button name="save" type="submit" onclick="msg()">SEND</button>
       
      
       
            
    
    </center>
    </form> 

    

  </body>
</html>

