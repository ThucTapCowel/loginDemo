<?php

/**
 * @author Jackie Do
 * @copyright 2013
 */
session_start();
echo '<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Jackie Do" />
    
    <link rel="stylesheet" href="templates/css/style.css" />
    
    <title>PHPCB78 Project - News</title>
</head>

<body>

    <div id="layout">
        <div id="top">
            Banner
        </div><!-- End Top -->
        <div id="topmenu">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Tin Tức</a>
                    <ul>';
                    //Kết nối CSDL
                    require("lib/connect_db.php");
                        
                    // Lấy tất cả các danh mục tin tạo thành các liên kết
                    $sql = 'SELECT * FROM category ORDER BY cate_title ASC';
                    $query = mysql_query($sql, $conn);
                    $menu = array();
                    while ($data = mysql_fetch_assoc($query)) {
                        $menu[] = $data;
                    }
                    foreach ($menu as $item) {
                        echo '
                        <li><a href="category.php?id=' .$item["cate_id"]. '">' .$item["cate_title"]. '</a></li>';
                    }
                    echo'
                    </ul>
                </li>
                <li><a href="#">Dịch Vụ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li><a href="#">Liên Hệ</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="left">
                <div id="leftmenu">
                    <h1>
                        Menu Chính
                    </h1>
                    <ul>
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Tin Tức</a>
                            <ul>';
                            foreach ($menu as $item) {
                                echo '
                                <li><a href="category.php?id=' .$item["cate_id"]. '">' .$item["cate_title"]. '</a></li>';
                            }
                            echo '
                            </ul>
                        </li>
                        <li><a href="#">Dịch Vụ</a></li>
                        <li><a href="#">Sản Phẩm</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                    </ul>
                </div><!-- End leftmenu -->
                <div id="login">
                    <h1>
                        Đăng Nhập
                    </h1>
                    <div class="content">
                        <div id="login_msg"></div>
                        <form name="fLogin" id="fLogin" action="#" method="post">
                            Username:<br />
                            <input type="text" name="txtUser" id="txtUser" class="textbox" /><br />
                            Password: <br />
                            <input type="password" name="txtPass" id="txtPass" class="textbox" /><br />
                            <input type="submit" name="btnLogin" id="btnLogin" value="Đăng nhập" />
                        </form>
                    </div>
                </div>
            </div><!-- End Left -->
            <div id="main">';

?>