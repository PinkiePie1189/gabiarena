<?php
$target_dir = "eval/";
$target_file = $target_dir . "cobai.cpp";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Ce fisier mare imi incarci aicea omule?";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "cpp" && $imageFileType != "c" && $imageFileType != "txt") {
    echo "Sorry, only CPP, C & TXT files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Nu ti-am incarcat sursa-n pula mea";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Fisieru'  ". basename( $_FILES["fileToUpload"]["name"]). " a fost urcat";
    } else {
        echo "Nu ti-am urcat fisierul.";
    }
}

exec("cd eval && verif.exe");
echo ("<br>");

$puncte = file_get_contents( "./eval/verdict.boss" );
if ($puncte == -1)
	echo ("Ai depășit limita de timp coae...");
elseif ($puncte == 0)
	echo ("mamă ce prost ești, ai luat " . "<b>0</b>" . " puncte!!!");
elseif ($puncte == 100)
	echo ("Ho deșteptule, ai luat " . "<b>100</b>" . " de pkte, t ai stat ca șoarecele în casă să bagi djikstra?");
else
	echo ("Ai luat <b>" . $puncte . "</b> puncte băăă");
?>