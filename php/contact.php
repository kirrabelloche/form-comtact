<?php 
$array = array("firstname" =>"",  "name" =>"", "email" =>"", "phone" =>"", "message" =>"", "firstnameError" =>"", "nameError" =>"", "emailErro" =>"", "phoneError" =>"",  "messageError" =>"", "emailError" =>"",
"isSucces" => false,);

$emailTo = "kirraridibo@gmail.com";



if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $array["firstname"] = verifyInput($_POST["firstname"]);
    $array["name"]= verifyInput($_POST["name"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["phone"] = verifyInput($_POST["message"]);
    $array["isSucces"] = true;
    $emailText = "";

    if(empty($array["firstname"]))
    {
        $array["firstnameError"] = "Je veux connaitre ton prénom!!";
        $array["isSucces"] = false;
    }
    else 
    {
        $emailText .= "Firstname: {$array["firstname"]}\n ";
    }
   
    if(empty$array["name"]))
    {
        $array["nameError"] = "et oui Je veux tous savoir meme  ton nom!!";
        $array["isSucces"] = false;
    }
    else 
    {
        $emailText .= "Name: {$array["name"]}\n ";
    }

    if(empty($array["message"]))
    {
        $array["messageError"] = "Qu'es que tu veux me dire !!";
        $array["isSucces"] = false;
    }
    else
    {
        $emailText .= "Message: {$array["message"]}\n ";
    }
    if(!isEmail($array["email"]))
    {
        $array["emailError"] = "cet email n'est pas valide ";
        $array["isSucces"] = false;
    }
    else
    {
        $emailText .= "Email: {$array["email"]}\n ";
    }
    if(!isPhone($array["phone"]))
    {
        $array["phoneError"] = "entré que des chiffres et des espaces stp...";
        $array["isSucces"] = false;
    }
    else
    {
        $emailText .= "Phone: {$array["phone"]}\n ";
    }
    if($array["isSucces"])
    {
        $headers ="form:  {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReply-To: ${$array["email"]}";
        mail($emailTo, "un message de votre site", $emailText, $headers );
        
    }
    echo json_encode($array);

}

function isPhone($var)
{
      return preg_match("/^[0-9 ]*$/ " , $var);
    
}


function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function verifyInput ($var){
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}

?>