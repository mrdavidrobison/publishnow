<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<script>
    var app = new Vue({
        el: "#addbooks",
        data: {
            newBooks: '',
            books: [
                {title: 'Airborne', published: false, intro: lorem ipsum baby!},
                {title: 'New Odds Down Under', published: true, intro: lorem ipsum dude! },
                {title: 'People Shmeeple', published: true, intro: lorem ipsum dudette! }
            ],
            buttonTitle: {
                button1: 'Go ahead....add a book.',
            },
            classNames: {
                red: 'red-font',
                blue: 'blue-font',
                dark: 'is-dark',
                primary: 'is-primary',
                link: 'is-link',
                info: 'is-info',
                success: 'is-success',
                warning: 'is-warning',
                danger: 'is-danger',
            },
            message: 'Hello World'
        },
        methods: {
            addBook() {
                this.books.push(this.newBooks);
                this.newBooks = '';
            }
        },
    });
</script>    
</body>
