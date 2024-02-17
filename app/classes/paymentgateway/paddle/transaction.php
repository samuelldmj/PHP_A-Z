<?php
//another class
namespace app\classes\paymentgateway\paddle;
//using the use keyword to import DayTime() class, then i can remove the backslash (\)
// use DayTime;
//use Notification\Email;
class Transaction {

   //public static int $count = 0;
   private static int $count = 0;

   // public const STATUS_PAID = 'paid';
   // public const STATUS_PENDING = 'pending';
   // public const STATUS_DECLINED = 'declined';
   // private $status = "pending";
   // public const ALL_STATUS = [
   //       self::STATUS_PAID => "Paid",
   //       self::STATUS_PENDING => "Pending",
   //       self::STATUS_DECLINED => "Declined"
   // ];

   function __construct( public float $amount, public string $description)
   {
    //var_dump(new CustomerProfile);
    // var_dump(new \DateTime);
    //var_dump(new \app\classes\notification\Email);
    //var_dump(Transaction::STATUS_PAID);
    //$this->setStatus(self::STATUS_PENDING);
    self::$count ++;


   }

   // public function setStatus(string $status):self
   // {

   //    if(! isset(self::ALL_STATUS[$status])){
   //       throw new \InvalidArgumentException("Invalid Status");
   //    }
   //    $this->status = $status;
   //    return $this;
   // }

   public static function getCount(){
      return self::$count;
   }

   public function process(){
      echo "Processing paddle Transaction";
   }

}


