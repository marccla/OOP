<?



class Account {
    protected $balance;
    
    
    public function __construct($balance) {
        $this->balance = $balance;
        

      

    }
    // public function getAmount(){
    //     return $this->amount;
    // }
      public function doWithdraw($amount) {
            
            $this->balance = $this->balance - $amount;
            var_dump($amount);
            echo 'Successfully transfered teh moneys';
            return $this->balance;
        }
}