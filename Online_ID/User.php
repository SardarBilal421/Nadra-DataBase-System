<?php
class User{
    private $user_id,$forename,$surname,$country ,$email,$password,$Detail,$accountType;

        public function __construct(){
    //        if ($this->accountType =="admin") {
                # code...
            
            $this->Detail='<tr><td> First Name : '.$this->forename.' , Last Name :    '.$this->surname .',
            country :  '.$this->country. ', email  :  '.$this->email . ', password :  ' .$this->password . ',  Account Type :  ' .$this->accountType.
            
                '</td>'.'<td><a href="./delete.php?id='.$this->user_id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
                '<td><a href="./updateUser.php?id='.$this->user_id.'"> Update </a></td>   
                   <td>  <button>
                       <a href="./ProDuct Details/ProductFoam.php">ADD ProDuct</a>
                     </button>
                     </td><td>
                     <button>
                         <a href="./ProDuct Details/PDOProductSelection.php">View ProDuct</a>
        //              </button></td></tr>';
        // }else{
        //         $this->Detail='<tr><td> First Name : '.$this->forename.' , Last Name :    '.$this->surname .',
        //         country :  '.$this->country. ', email  :  '.$this->email . ', password :  ' .$this->password . ',
        //           Account Type :  ' .$this->accountType.
        //           '</td>'.'<td><a href="./delete.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
        //         '<td><a href="./updateUser.php?id='.$this->id.'"> Update </a></td>
        //         <td>
        //              <button>
        //                  <a href="./ProDuct Details/PDOProductSelection.php">View ProDuct</a>
        //              </button>
        //         </td>
        //         </tr>';
                
            
        //     }
            
        }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setId($user_id)
    {
        $this->id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * @param mixed $forename
     */
    public function setForename($forename)
    {
        $this->forename = $forename;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @param string $Detail
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param mixed $accountType
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }



}

        
