<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #dc3545, #fca311);
    }
    .container{
        max-width: 700px;
        width: 100%;
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }
    .container .title{
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }
    .container .title::before{
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #dc3545, #fca311);
    }
    .content form .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }
    form .user-details .input-box{
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }
    form .input-box span.details{
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }
    
    .user-details .input-box input, select{
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid rgb(233, 180, 180);
        border-bottom-width: 2px;
        transition: all 0.3s ease;
    }
    .user-details .input-box input:focus,
    .user-details .input-box input:valid{
        border-color: #f88c82;
    }

    .user-details .input-box select:focus {
        border-color: #f88c82;
    }
    
    
    form .button{
        height: 45px;
        margin: 35px 0
    }
    form .button input{
        height: 100%;
        width: 100%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #dc3545, #fca311);
    }

    form .button input:hover{
    /* transform: scale(0.99); */
        background: linear-gradient(-135deg, #dc3545, #fca311);
    } 
    li{
        display: inline;
    }
    #back{
        position: absolute;
        top:20px;
        left:30px;
        color:white;
        font-size: 1.5vw;
        text-decoration: none;
    }
    
    @media(max-width: 584px){
        .container{
            max-width: 100%;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: 100%;
        }
        form .category{
            width: 100%;
        }
        .content form .user-details{
            max-height: 300px;
            overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar{
            width: 5px;
        }

    }
    @media(max-width: 459px){
    .container .content .category{
        flex-direction: column;
    }
    }

    </style>
</head>
<body>
    <a id="back"href="seller.php"><--back</a>
    <div class="container">
        <div class="title">Add Product</div>
        <div class="content">
          <form action="" method="POST">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Brand Name</span>
                <input type="text" placeholder="Enter the Brand Name" name="brandName" required>
              </div>
              <div class="input-box">
                <span class="details">Category</span>
                <select name="category">
                    <option value="Electronics">Electronics</option>
                    <option value="Clothing">Clothing</option>
                    <option value="Toys">Toys</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">Product Name</span>
                <input type="text" placeholder="Enter the product name" name="prodName" required>
              </div>
              <div class="input-box">
                <span class="details">Item price</span>
                <input type="text" placeholder="Enter the item price" name="price" required>
              </div>
              <div class="input-box">
                <span class="details">Product Image Link</span>
                <input type="text" name="image" placeholder="Enter the link to the image" required>
              </div>
    
            </div>
            <div class="button">
              <input type="submit" value="submit">
            </div>
          </form>
          <?php
                if($_SERVER['REQUEST_METHOD']== "POST") {
                    $seller_id = $_SESSION['seller_id'];
                    $brandName = $_POST['brandName'];
                    $prodName = $_POST['prodName'];
                    $category = $_POST['category'];
                    $price = $_POST['price'];
                    $image = $_POST['image'];
                    #Connecting database
                    include ("database/db_controller.php");
                    $stmt = $con ->prepare("INSERT into product (seller_id,category, item_brand, item_name, item_price, item_image) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt ->bind_param("isssis",$seller_id,$category,$brandName,$prodName,$price,$image);
                    $stmt->execute();
                    echo mysqli_error($con);
                }      
            ?>

           
        </div>
      </div>    
</body>
</html>