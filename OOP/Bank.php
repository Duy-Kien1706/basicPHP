<?php 
class Bank{
    private int $balance = 100;


    // setter: gán balance có kiểm tra
    public function deposit (int $amount){
        if($amount>0){
            $this->balance += $amount;
        }
    }
    // setter: gán balance có kiểm tra
    public function withdraw (int $amount){
        if($amount>0 && $this->balance>=$amount){
            $this->balance -= $amount;
        }
    }
    // getter: trả về balance
    public function getBalance (){
        return $this->balance;
    }
}

$a = new Bank();
$a->deposit(100);
echo "Số dư tài khoản hiện tại của bạn là: ".$a->getBalance()."<br>";
$a->withdraw(100);
echo "Số dư tài khoản hiện tại của bạn là: ".$a->getBalance();


?>