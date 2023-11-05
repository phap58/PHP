<?php
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 12;
$offset = ($page - 1) * $records_per_page;

$sql_categories = "SELECT * FROM category ORDER BY ID ASC";
$result_categories = $conn->query($sql_categories);


if (isset($_GET['categoryId'])) {
    $categoryId = $_GET['categoryId'];
    $sql = "SELECT * FROM product WHERE CateID = $categoryId";
    $sql_category_name = "SELECT Name FROM category WHERE ParentID = $categoryId";
    $result_category_name = $conn->query($sql_category_name);
    $category_name = ($result_category_name->num_rows > 0) ? $result_category_name->fetch_assoc()['Name'] : "Unknown Category";
} else {
    $category_name = "Hôm nay";
}

// Lấy số lượng bản ghi
$sql_count = "SELECT COUNT(*) as total FROM product";
$result_count = $conn->query($sql_count);
$total_records = $result_count->fetch_assoc()['total'];

// Thực hiện truy vấn sản phẩm
$sql .= " LIMIT $offset, $records_per_page";
$result = $conn->query($sql);

// Kiểm tra số lượng sản phẩm sau khi truy vấn
if ($result->num_rows >= $records_per_page) {
    // Nếu có nhiều hơn 16 sản phẩm, tính số trang cần hiển thị
    $total_pages = ceil($total_records / $records_per_page);
} else {
    $total_pages = 1;
}


?>