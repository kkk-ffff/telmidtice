<?php

  $servername = "sql105.infinityfree.com";
  $username = "if0_37534572";
  $password = "79EqzTAX08eB";
  $dbname = "if0_37534572_main";
  
  
  
  function getParam($name) {
    if (isset($_GET[$name])) {
      $data = $_GET[$name];
      return htmlspecialchars($data);
    } else {
      return "null";
    }
  }
  
  function fetchHTML($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
  }
  
  $id = getParam("id");
  
  $url = "https://www.alloschool.com/element/" . $id;
  
  
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $date = date('d/m/Y H:i:s');
  
  
  $sql = "INSERT INTO table (name, url, date) VALUES (:name, :url, :date)";
  
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', getParam("name"));
  $stmt->bindParam(':url', $id);
  $stmt->bindParam(':date', $date);
  
  $stmt->execute();
  
  
  
  
  
  
  
  $html = fetchHTML($url);
  
  $dom = new DOMDocument();
  @$dom->loadHTML($html
  
    $xpath = new DOMXPath($dom);
    $divElement = $xpath->query('//div[contains(@class, "pdf-tag-hide")]')->item(0);
  
    if ($divElement !== null) {
      // البحث عن أول <a> داخل هذا الـ <div>
      $aElement = $divElement->getElementsByTagName('a')->item(0);
  
      if ($aElement !== null) {
        // الحصول على قيمة href
        $fileUrl = $aElement->getAttribute('href');
        echo $fileUrl;
      } else {
        echo "لم يتم العثور على رابط <a> داخل الـ <div>.";
      }
    } else {
      echo "لم يتم العثور على عنصر <div class='pdf-tag-hide'>.";
    }
?>





<?php

  $servername = "sql105.infinityfree.com";
  $username = "if0_37534572";
  $password = "79EqzTAX08eB";
  $dbname = "if0_37534572_main";
  
  
  
  function getParam($name) {
    if (isset($_GET[$name])) {
      $data = $_GET[$name];
      return htmlspecialchars($data);
    } else {
      return "nooo";
    }
  }
  
  function fetchHTML($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
  }
  
  $id = getParam("id");
  
  $url = "https://www.alloschool.com/element/" . $id;
  
  
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $date = date('d/m/Y H:i:s');
  
  
  $sql = "INSERT INTO users (name, url, date) VALUES (:name, :url, :date)";
  
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', getParam("name"));
  $stmt->bindParam(':url', $id);
  $stmt->bindParam(':date', $date);
  
  $stmt->execute(); 
  
  
  
   
  
  
  
  $html = fetchHTML($url);
  
  $dom = new DOMDocument();
  $dom->loadHTML($html);
  
    $xpath = new DOMXPath($dom);
    $divElement = $xpath->query('//div[contains(@class, "pdf-tag-hide")]')->item(0);
  
    if ($divElement !== null) {
      // البحث عن أول <a> داخل هذا الـ <div>
      $aElement = $divElement->getElementsByTagName('a')->item(0);
  
      if ($aElement !== null) {
        // الحصول على قيمة href
        $fileUrl = $aElement->getAttribute('href');
        echo "link: ".$fileUrl;
      } else {
        echo "لم يتم العثور على رابط <a> داخل الـ <div>.";
      }
    } else {
      echo "لم يتم العثور على عنصر <div class='pdf-tag-hide'>.";
    }
?>