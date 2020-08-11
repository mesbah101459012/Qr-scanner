



<!DOCTYPE html>
<html>

<head>
    <title>QR Code Scanner</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <link rel="stylesheet" href="/src/style.css" />
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
</head>

<body>
    <div id="container">
        <h1>QR Code Scanner</h1>

        <a id="btn-scan-qr">
            <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
        </a>

        <canvas hidden="" id="qr-canvas"></canvas>

        <div id="qr-result">
            <b>Data:</b> <span id="outputData"></span>
        </div>
    </div>

    <script src="/src/jquery-3.2.1.min.js"></script>
    <script src="/src/html5shiv.js"></script>
    <script src="/src/qrCodeScanner.js"></script>
	
</body>

</html>