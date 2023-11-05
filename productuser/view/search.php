<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search"])) {
    $search_query = $_POST["search_query"];
    // Xử lý tìm kiếm sản phẩm dựa trên $search_query
    $sql = "SELECT * FROM product WHERE Name LIKE '%$search_query%'";
} else {
    // Nếu không có yêu cầu tìm kiếm, hiển thị tất cả sản phẩm
    $sql = "SELECT * FROM product";
}