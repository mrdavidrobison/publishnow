<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <title>PublishNow</title>
</head>
<body class='content'>

    <div id="app">
        <h1>PublishNow</h1>
        @include('add-books')
        <modal></modal>
    </div>

    <script>
        Vue.component('modal', {
            template: `
            <div class="modal is-active">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <div class="box">
                        Whatever contents inside this modal will be useful to you.    
                    </div>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div>
            `
        });

        new Vue({
            el: "#app"
        });


    </script>
</body>
</html>