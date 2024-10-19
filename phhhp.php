<?php
$servername = "sql105.infinityfree.com";
$username = "if0_37534572";
$password = "79EqzTAX08eB";
$dbname = "if0_37534572_main";


function getParam($name){
  if(isset($_GET[$name])) {
    $data = $_GET[$name];
    return htmlspecialchars($data);
  }else{
    return null;
  }
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo date('d/m/Y H:i:s');
    
    
    $sql = "INSERT INTO table (name, url) VALUES (:name, :url)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', getParam("name"));
    $stmt->bindParam(':url', getParam("url"));
    
    $stmt->execute();
    
    
    
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    
    
    
    
    
    
    /*foreach ($data as $row) {
        echo "العمود1: " . $row['العمود1'] . " - العمود2: " . $row['العمود2'] . "<br>";
    }*/
    
} catch(PDOException $e) {
    echo "خطأ: " . $e->getMessage();
}

// إغلاق الاتصال
$conn = null;
?>



