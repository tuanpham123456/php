<!-- 
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/news.css">
</head>

<body>
<section id="cart">
        <div id="heading">
            <h2 style="text-align: center;">GIỎ HÀNG CỦA BẠN </h2>
        </div>
        <div id="text">
            
        </div>
<table id="table" border="0" cellpadding="10px" cellspacing="1px">
    
    <tr id= "main_heading">
        <td>Số thứ tự</td>
        <td>Tên sản phẩm</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Thành tiền</td>
        <td>Xóa sản phẩm</td>
    </tr>
    
    <tr>
        <td><td>
        <td></td>
        <td> 
        <a href="#"><span class="glyphicon glyphicon-minus"></span></a> 
        <input type="text" class="qty text-center" value=" " style="width:30px; font-weight:bold; font-size:15px; color:blue;" readonly="readonly" wtx-context="8C13182E-0E5D-44B3-B216-79A76930EB39"> 
        <a href="#"><span class="glyphicon glyphicon-plus-sign"></span></a>
        </td>
        <td></td>
        
        <td></td>
        <td >   
            <a href="index.php?action=home">Xóa
         </a>
        </td>
    </tr>
    <tr>
        <td><b>Tổng tiền: </b></td>
        <td></td>
        <td colspan="5" align="right"><input  class ='fg-button teal' type="button" value="Xóa giỏ hàng" >
        <input class ='fg-button teal'  type="submit" value="Update Cart"/>
        
        <input class ='fg-button teal' type="button" value="Thanh toán" /></td>
    </tr>
</table>      
</section>
    <section class="homeproduct">
                <a class="proditem" href="#">
                    <figure>
                        <img src="#"  width="120" height="120"/>
                        <span class="textkm"></span>
                        <h4>Price: </h4>
                        <h3></h3>
<form action="" method="post" accept-charset="utf-8">
    <input type="hidden" name="id"">
    <input type="hidden" name="name" >
    <input type="hidden" name="price" >                      
                        <p id="add_button"> <input type="submit" name="action" value="Add to Cart" class="fg-button teal"/></p>
 </form>                          
                    </figure>           
                </a>
    </section>
</body>  

</html>
 -->
 <?php 
    foreach($cartProduct as $cartProduct){
        $id = $cartProduct->id;
        echo $cartProduct->id." ";
        echo $cartProduct->name." ";
        echo $cartProduct->price." ";
        echo $cartProduct->image." ";
        echo $_SESSION['cart'][$id]['quantity'];
        echo "<a href='index.php?action=news_detail&id=$id'>Delete</a>";
        echo "<br>";
    }
?>
<a href="index.php?action=payment">PAYMENT</a>