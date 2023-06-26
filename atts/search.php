// การเชื่อมต่อฐานข้อมูล MySQL
$conn = mysqli_connect("localhost", "username", "password", "database");

// การค้นหาข้อมูลด้วยฟังก์ชั่น mysqli_query()
$query = "SELECT * FROM products WHERE name LIKE '%$searchTerm%' AND category = '$category'";
$result = mysqli_query($conn, $query);

// การแสดงผลลัพธ์
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Product name: " . $row["name"] . "<br>";
        echo "Price: " . $row["price"] . "<br>";
    }
} else {
    echo "No results found";
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);