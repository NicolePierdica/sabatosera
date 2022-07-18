<?php
require __DIR__ . '/config.php';
/*
* Tutorial: PHP Login Registration system
*
* Page: Application library
* */

class AppLib
{

  /*
   * Register New User
   *
   * @param $name, $email, $username, $password
   *
   * */
  public function Register($username,$email,$password,$company_name,$referee,$company_email,$phone,$field,$company_number,$company_id,$main_address,$legal_address)
  {
      try {
          $db = DataBase();
          $sql = "INSERT INTO users(UserName, Email, Password, NomeAzienda, Referente, EmailAziendale, NumeroTelefono, Settore, PartitaIva, CodiceFiscale, IndirizzoSedeOperativa, IndirizzoSedeLegale) VALUES (:uname,:email,:pass,:cname,:ref,:companye,:tel,:sett,:piva,:cid,:maddress,:laddress)";
          $query = $db->prepare($sql);
          
          $query->bindParam("uname", $username, PDO::PARAM_STR);
          $query->bindParam("email", $email, PDO::PARAM_STR);
          $enc_password = password_hash($password,PASSWORD_DEFAULT);
          $query->bindParam("pass", $enc_password, PDO::PARAM_STR);
          
          $query->bindParam("cname", $company_name, PDO::PARAM_STR);
          $query->bindParam("ref", $referee, PDO::PARAM_STR);
          $query->bindParam("companye", $company_email, PDO::PARAM_STR);
          $query->bindParam("tel", $phone, PDO::PARAM_STR);
          $query->bindParam("sett", $field, PDO::PARAM_STR);
          $query->bindParam("piva", $company_number, PDO::PARAM_STR);
          $query->bindParam("cid", $company_id, PDO::PARAM_STR);
          $query->bindParam("maddress", $main_address, PDO::PARAM_STR);
          $query->bindParam("laddress", $legal_address, PDO::PARAM_STR);
         
          $query->execute();
          $lastinserid = $db->lastInsertId();
          //if ($lastinserid>0) {
          	//echo "<script>alert('Your account have successfully registered')</script>";
          //}
      } catch (PDOException $e) {
          exit($e->getMessage());
      }
  }


  /*
       * Login
       *
       * @param $username, $password
       * 
       * */

       /*
    * Login
    *
    * @param $username, $password
    * 
    * */    public function Login($username, $password)
   {
       try {
           $db = DataBase();
           $sql ="SELECT UserName,Password FROM users WHERE (UserName=:usname)";
           $query= $db -> prepare($sql);
           $query-> bindParam(':usname', $username, PDO::PARAM_STR);
           $query-> execute();
           $results=$query->fetchAll(PDO::FETCH_OBJ);
           if($query->rowCount() > 0)
           {
             foreach ($results as $row) {
               $hashpass=$row->Password;
             }
             //verifying Password
             if(password_verify($password, $hashpass)) {
                 //echo "<script>alert('You Login successfully')</script>";

                 header("Location: index.php");
               } else {
                 echo "<script>alert('You entered wrong password')</script>";

               }
           }
           //if username or email not found in database
           else{
              echo "<script>alert('User not registered')</script>";
           }
       } catch (PDOException $e) {
           exit($e->getMessage());
       }
   }

  
    
   

}


    


?>

