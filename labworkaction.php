<!DOCTYPE html>
<html lang="en">
<body>
    <h1>STUDENT UNION FORM</h1>
    <?php
        if (isset($_POST["submit"])) {
            $name= $_POST["name"];
            $email= $_POST["email"];
            $website= $_POST["website"];
            $comment= $_POST["comment"];
            $gender= $_POST["gender"];
        } else{
            die("Sorry, you cannot access this page!");
        }
        if(!empty($name)){
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                echo "Data doesn't match!<br>";
            }else{
                $name = text_input($name);
                echo "Your name is : " .$name."<br>";
            }
        }else{
            $name = text_input($name);
            echo("Name is required <br>");
        }
        if(!empty($email)){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Data doesn't match! <br>";
            } else{
                $email = text_input($email);
                echo "Your email is : ". $email."<br>";
            }
        } else{
            echo("email is required <br>");
        }
        if(!empty($website)){
            if(!preg_match("/\b(?:https?|ftp):\/\/|www\.[-a-z0-9+@#\/%?=_|!:,.;]*[-a-z0-9+&@#\/%=_|]/i",$website)){
                echo "Data doesn't match! <br>";
            } else{
                $website = text_input($website);
                echo "Your website is: ". $website."<br>";
            }
        } else{
            echo("Website is not found <br>");
        }
        if(!empty($comment)){
            $comment = text_input($comment);
            echo "Your comment is: ". $comment."<br>";
        } else{
            echo("Your comment is: none <br>");
        }
        if(isset($_POST["gender"])){
            $gender = $_POST["gender"];
        }
        if(!empty($gender)){
            echo "You are :".$gender."<br>";
        } else{
            echo("gender is required");
        }
        //fungsi trim dan strpslashes
        function text_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
        ?>
        </body>
    </html>