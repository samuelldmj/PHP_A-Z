<?php
declare(strict_types = 1);
//another class
namespace App\classes\paymentgateway\paddle;
//using the use keyword to import DayTime() class, then i can remove the backslash (\)
// use DayTime;
//use Notification\Email;
class Transaction {

   //public static int $count = 0;
   //private static int $count = 0;
   //public float $amount;
   private float $amount;

   // public const STATUS_PAID = 'paid';
   // public const STATUS_PENDING = 'pending';
   // public const STATUS_DECLINED = 'declined';
   // private $status = "pending";
   // public const ALL_STATUS = [
   //       self::STATUS_PAID => "Paid",
   //       self::STATUS_PENDING => "Pending",
   //       self::STATUS_DECLINED => "Declined"
   // ];


   public function __construct(float $amount){
       $this->amount = $amount;

   }

   public function getAmount(){
      return $this->amount;

   }

   public function setAmount(float $amount){
      return $this->amount = $amount;

   }

   public function process(){
      echo "Processing $" . $this->amount .  " transaction";
   }


   // function __construct( public float $amount, public string $description)
   // {
   //  //var_dump(new CustomerProfile);
   //  // var_dump(new \DateTime);
   //  //var_dump(new \app\classes\notification\Email);
   //  //var_dump(Transaction::STATUS_PAID);
   //  //$this->setStatus(self::STATUS_PENDING);
   //  self::$count ++;


   // }

   // public function setStatus(string $status):self
   // {

   //    if(! isset(self::ALL_STATUS[$status])){
   //       throw new \InvalidArgumentException("Invalid Status");
   //    }
   //    $this->status = $status;
   //    return $this;
   // }

   // public static function getCount(){
   //    return self::$count;
   // }

   

}


