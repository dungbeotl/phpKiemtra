<?php
Class user{
    var $userName;
    var $passWord;
    var $fullName;

    function user($userName, $passWord, $fullName){
        $this->userName = $userName;
        $this->passWord = $passWord;
        $this->fullName = $fullName;
    }

    /**
     * Xác thực người sử dung
     * @param $userName string là tên đăng nhập
     * @param $passWord string là mật khẩu
     * @return User hoặc null 
     */
    static function authentication($userName, $passWord){
        if($userName == "dungbeotl9@gmail.com" && $passWord == "dungbeotl"){
            return new user($userName, $passWord, "Dang Anh Dung");
        }else{
            return null;
        }
    }
}

?>
