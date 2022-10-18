<?php
if(isset($_POST['download'])) {
    $hiddenInput = $_POST['hidden-input'];

    $ch = curl_init($hiddenInput);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    $download = curl_exec($ch);

    curl_close($ch);

    header("Content-type:image/jpg");
    header("Content-Disposition:attachment;filename=download.jpg");

    echo $download;
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/3c2b0afff2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
<script src="script.js" defer></script>
    <title>Thumbnail</title>
</head>
<body>
    <main class="flex">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="container flex">
            <header>Thumbnail Downloader</header>
            <div class="url-link-area">
                <span>Paste video url</span>
                <input id="url-input" type="text" name="urlinput" placeholder="https://www.youtube.com/watch?v=hf4pAixGdrc&ab_channel=LIVERPOOLNEWS%E2%80%A2">
                <input type="hidden" name="hidden-input" class="hidden-input" id="hidden-input">
            </div>

            <div class="preview-container flex">
            <div id="preview-area" class="preview-area flex">
                <i id="icon" class="fa-solid fa-cloud-arrow-down "></i>
                <span id="icon-msg" class="icon-msg">Paste video url to see preview</span>
            </div>
            <img id="img-thumbnail" class="thumbnail none" src="" alt="">
        </div>
            <div class="download-btn">
                <button type="submit" name="download" id="submit-button"   class="button">Download Thumbnail</button>
            </div>
        </div>
        </form>
    </main>
</body>
</html>