<div id="addbooks">
    <h3>Add your book requests</h3>
    <ul>
    <li v-for="book in books" v-text="book">@{{ book }}</li>
    </ul>
    <input id="input" type="text" v-model="newBooks" v-on:keyup.enter="addBook">
    <button @click="addBook" v-bind:title="buttonTitle.button1">Add Book</button>
</div>

<script>
    var app = new Vue({
        el: "#addbooks",
        data: {
            books: [
                {title: 'Airborne', published: false, intro: 'lorem ipsum baby!' },
                {title: 'New Odds Down Under', published: true, intro: 'lorem ipsum dude!' },
                {title: 'People Shmeeple', published: true, intro: 'lorem ipsum dudette!' }
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
            newBooks: '',

        },
        methods: {
            addBook() {
                this.books.push(this.newBooks);
                this.newBooks = '';
            }
        },
    });
</script>   