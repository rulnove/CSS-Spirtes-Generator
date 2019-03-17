<html class='no-js'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content="IE=edge,chrome=1">
    <title>CSS Sprites Generator</title>
<link href='css/style.css?v=1.0' rel='stylesheet'>
    <script language="JavaScript">
        window.GET_CONFIG_URI = '/css-sprites-generator/get_config.json'; /* This path will be substituted on stage at production servers. */
        if (window.GET_CONFIG_URI.indexOf('{') !== -1) {
            console.warn('Warning! Development environment initial frontend url has not been set up');
            window.GET_CONFIG_URI = '/get_config.json';
        }
    </script>
</head>

<body class='body-main'>
    <div id='page' style="opacity: 1.0">
        <div class="page-container position-relative">
            <div class="content-container content-container--wide">
                <div class='content'>
                    <div class='content__main'>
                        <div class='content-info'>
                            <h1>CSS Sprites Generator</h1>
                            <p><b>Upload your images.</b> (Note: Please don’t upload HUGE files. That’s not the purpose of sprites technique.)</p>
                        </div>
						<div id="editor"></div>
                        <div id='app'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='js/manifest.js?v=1.0'></script>
    <script type='text/javascript' src='js/vendor.js?v=1.0'></script>
    <script type='text/javascript' src='js/app.js?v=1.0'></script>
</body>

</html>