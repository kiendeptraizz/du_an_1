<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/admin/Sidebar.css">
    <link 
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.container{
    width: 250px;
    height: 500px;
    background-color: #d9d9d9;
    padding-left: 30px;
    margin-top: 65px;
}
ul{
    width: 200px;
    list-style: none;
}
li{
    padding: 10px 0;
}
a{
    display: flex;
    justify-content: start;
    align-items: center;
    text-decoration: none;
    padding: 10px 15px;
    color: gray;
}
li:hover a{
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 5px #b7b7b7;
    color: #000;
}
li:hover .icon{
    width: 25px;
    height: 25px;
    margin-right: 35px;
    background-image: linear-gradient(to bottom right,#1e5c89,#3d95d2);
}
li:hover i{
    color: #fff;
    font-size: 14px;
}
a .icon{
    background-image: linear-gradient(#fff,#fff);
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 25px;
    height: 25px;
    margin-right: 10px;
    transition: 1s;
}
i{
    font-size: 16px;
    color: black;
}

</style>
<body>
    <div class="sidebar">
        <div class="container">
            <ul>
                <li><a href="#"><div class="icon"><i class="fa-solid fa-house"></i></div>Bảng điều khiển</a></li>
                <li><a href="#"><div class="icon"><i class="fa-solid fa-building"></i></div>Danh mục</a></li>
                <li><a href="#"><div class="icon"><i class="fa-solid fa-images"></i></div>Ảnh trình chiếu</a></li>
                <li><a href="#"><div class="icon"><i class="fa-solid fa-mobile"></i></div>Sản phẩm</a></li>
                <li><a href="#"><div class="icon"><i class="fa-solid fa-user"></i></div>Tài khoản</a></li>
                <li><a href="#"><div class="icon"><i class="fa-brands fa-weixin"></i></div>Bình luận</a></li>
                <li><a href="#"><div class="icon"><i class="fa-solid fa-cart-shopping"></i></div>Đơn hàng</a></li>
            </ul>
        </div>
    </div>
</body>
</html>