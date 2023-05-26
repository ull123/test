<?php

if(!is_dir("../upload")){
    mkdir("../upload");
}

$images = $_FILES["images"];
$fileCount = count($images["name"]);
$imagesList = [];
$maxSize = 1000000;
$validTypees = ["image/jpeg", "image/png"];

for($i = 0; $i < $fileCount; $i++){
    foreach ($images as $key => $item){
        $imagesList[$i][$key] = $item[$i];
    }
}
foreach ($imagesList as $image){
    $size = $image["size"];
    $ext = pathinfo($image["name"], PATHINFO_EXTENSION);//вытянуть расширение файла
    $filename = uniqid($ext.'-', false).".".$ext;//уникальное имя для файла
    
    
    if(!in_array($image["type"], $validTypees) || $size > $maxSize){
        echo "Error upload file: ".$image["name"]."<br>";
        continue;
    }
    
    echo "Расширение: ".$filename."<br>";
    
    if(move_uploaded_file($image["tmp_name"], "../upload/$filename"))
    {
        echo "Successful upload: ".$image["name"]."<br>";
    }
    else{
        echo "Error upload file: ".$image["name"]."<br>";
    }
    
    
    
}

echo $fileCount;
echo "<pre>";
print_r( $imagesList);
echo "</pre>";