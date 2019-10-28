<?php
namespace arrakis\model\cart;


class Cart extends \arrakis\model\Description {

    private $invoice;
    private $productIds;
    private $productIndex = 0;
    private $currentId = 0;
    protected $total = 0;
    private $instockExceeded = false;
    public $option = '';

    public function __construct($categoryURL, $productURL, $option, $quantity) {
         
       parent::__construct($categoryURL, $productURL);
       
      $productId =   $categoryURL . "/" . $productURL . "/" . $option;
      
       if ($quantity === 0)
       {        
        unset($_SESSION['cart'][$productId]);  
       } else if($this->isDataReturned())
       { 
        $_SESSION['cart'][$productId] = $quantity;
       }
 //  $this->productIds is an array of all the keys in the cart array
       $this->productIds = array_keys(Cart::getCart());
       
    }
   

        public function nextProduct() {
        $this->currentId = null;
        
        if (isset($this->productIds[$this->productIndex])) {
            
            $this->currentId = $this->productIds[$this->productIndex];

            $url = explode('/',$this->currentId);
            
            $this->option = $url[2];
            
            $this->prepareBind(array(':cat_url'=>$url[0],':prod_url'=>$url[1]));

            $this->productIndex++;    
            
            if($this->next())
            {
            $this->total += $this->getSubtotal();
            $this->stockExceeded();
            return true;
            }
        }

        return false;
    }

    public function getSubtotal() {
        return $this->getQuantity() * ($this->getPrice() * $this->getProductOption());
    }

    public function getFormattedSubtotal() {
        return number_format($this->getSubtotal(),2);
    }
    
    public function getItemPrice() {
        return number_format($this->getPrice()*$this->getProductOption(),2);
    }
    
    public function getQuantity() {
        return intval($_SESSION['cart'][$this->currentId]);
    }

    public function getTotal() {
        return $this->total;
    }

    public function getFormattedTotal() {
        return number_format($this->total,2);
    }
    
    public function getCartTotal() {
        return $this->getShipping() + $this->total;
    }
    
    public function getDiscCartTotal() {
        return $this->getShipping() + $this->total - $this->getDiscount();
    }
    
    public function getDiscountedSubTotal() {
        return $this->total - $this->getDiscount();
    }
    
    
    public function getDiscount()
    {
        return $this->total * $this->getDiscountRate()/100;
    }
   
   public function getProductOption() {
        return $this->option;
    }
    
    
    public function stockExceeded() {
        
      $exceeded = $this->getInStock() < ($this->getQuantity() * $this->getWeight());

        $this->instockExceeded |= $exceeded;
        
        if($exceeded) {
            $this->setError("The quantity in the cart exceeds the available stock");
        }
        
        return $exceeded;
    }


    
    public function cartExceedsStock() {
        return $this->instockExceeded;
    }
 
    

    public function setInvoice($invoice)
    {
        $this->invoice = $invoice;
    }
       
    public function getInvoice()
    {
        return $this->invoice;
    }
 
  public function getProductCount() {
        return count($_SESSION['cart']);
    }   
  
  public static function createCart()
 {
      if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
 } 
 
 public static function store($productId, $quantity){
        $_SESSION['cart'][$productId] = $quantity; 
    }
    
 public static function getCartItemCount()
 {
     return array_sum($_SESSION['cart']);
 }
  
 public static function isCart()
 {
     return (self::getCartItemCount() > 0);
 }  
 
 public static function clearCart()
 {
    $_SESSION['cart'] = array();
 }
 
 public static function getCart()
 {
    return $_SESSION['cart'];
 }
 
 public static function getCartId()
 {
     $cartId = session_id(); 
     return $cartId; 
 }
 
 public static function setPurchaseId($id)
 {
   $_SESSION['cart_purchase_id'] = $id;  
 }
 
  public static function clearPurchaseId()
 {
     unset($_SESSION['cart_purchase_id']);  
 }
 
  public static function getPurchaseId()
 {
   return (isset($_SESSION['cart_purchase_id']))?$_SESSION['cart_purchase_id']:null;  
 }
 
  public static function setPaymentId($id)
 {
      $_SESSION['payment_id'] = $id;
 }
 
  public static function getPaymentId()
 {
   return isset($_SESSION['payment_id'])?$_SESSION['payment_id']:null;  
 }
}
?>
