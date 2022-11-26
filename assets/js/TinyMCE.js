(function () {

    tinymce.PluginManager.add('loremipsum', function (editor, url) {
        editor.addButton('loremipsum', {
            text: ' متن ساز رهگذر ',
            image: url + '/../images/icon.png',
            type: 'button',
            onclick: function () {
                jQuery.post(url + '/../../includes/TinyMCE/TinyMCEAjax.php?words=1', function (data) {
                    editor.insertContent(data);
                });
                // editor.windowManager.open({
                //     title: 'Insert Lorem Ipsum Words',
                //     body: [
                //         {
                //             type: 'textbox',
                //             name: 'numWords',
                //             label: 'Number of words to insert?',
                //             value: '130'
                //         }
                //     ],
                //     onsubmit: function (e) {
                //         jQuery.post(url + '/../../includes/TinyMCE/TinyMCEAjax.php?words=' + e.data.numWords, function (data) {
                //             editor.insertContent(data);
                //             editor.windowManager.close();
                //         });
                //     }
                // });
            }
        });
    });

})();
