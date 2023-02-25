<!-- <div>
    <img src="../storage/photos/{{ $image }}" class="mt-2">
    <div id="tui-image-editor"></div>

    <script>
    </script>
</div> -->
<html>

<head>
    <meta charset="UTF-8">
    <title>0. Design</title>
    <link type="text/css" href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://uicdn.toast.com/tui-image-editor/latest/tui-image-editor.css">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Noto+Sans);

        html,
        body {
            height: 100%;
            margin: 0;
        }

        .tui-image-editor-container .tui-image-editor-header-logo,
        .tui-image-editor-container .tui-image-editor-header-buttons div:first-child {
            display: none;
        }
    </style>
</head>

<body>

    <div id="tui-image-editor-container"></div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.0/fabric.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
    <script src="https://uicdn.toast.com/tui-image-editor/latest/tui-image-editor.js"></script>
    <!-- <script type="text/javascript" src="./js/theme/white-theme.js"></script>
        <script type="text/javascript" src="./js/theme/black-theme.js"></script> -->
    <script>
        // Image editor
        const myTheme = {
            //"header.display": "none",            
            "header.logo": "none",
            "logo.display": "none",
            "header-logo.display": "none",
        };
        var imageEditor = new tui.ImageEditor('#tui-image-editor-container', {
            includeUI: {
                loadImage: {
                    path: '../storage/photos/{{ $image }}',
                    name: '{{ $image }}'
                },
                //theme: whiteTheme, // or blackTheme
                theme: myTheme,
                initMenu: 'shape',
                menu: ['draw', 'shape', 'text'],
                menuBarPosition: 'bottom'
            },
            cssMaxWidth: 700,
            cssMaxHeight: 500,
            usageStatistics: false
        });
        window.onresize = function() {
            imageEditor.ui.resizeEditor();
        }
    </script>
</body>

</html>