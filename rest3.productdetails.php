<?php
session_start();
if(isset($_POST['btn'])){
    $cart_arr=array(
        "name"=>$_POST['name'],
        "image"=>$_POST['image'],
        "quantity"=>$_POST['quantity'],
        "price"=>$_POST['price']
    );
    header("location:rest3.cart.php");
    $_SESSION['cart_item'][]=$cart_arr;
    //unset($_SESSION['cart_item']);
    
}

?>

<?php
     if(isset($_POST['remove'])){
        foreach($_SESSION['cart_item'] as $key => $value){
             if($value['name']==$_POST['name']){
                unset($_SESSION['cart_item'][$key]);
                $_SESSION['cart_item']= array_values($_SESSION['cart_item']);
                header("location:rest3.cart.php");
             }
        }
     }
?>
<?php
if(isset($_POST['btn1'])){
    session_start();
    $_SESSION['dis']=$_POST['dis'];
    $_SESSION['image']=$_POST['image'];
    $_SESSION['item_name']=$_POST['name'];
    $_SESSION['price']=$_POST['price'];

    header("location:rest3.productdis.php");
}
?>

