@extends('index')

<div id="addbooks">
    <h1>Add your book requests</h1>
        <li v-for="book in books" v-text="add book">@{{ book }}</li>
        <input type="text">
        <button v-on:click="addBook">Add Book</button>
</div>

<script>
    
    var app = new Vue({
        el: "#addbooks",
        data: {
            books: []
        }
        methods: {
            addBook: function () {
                alert('book');
            }
        }
    });

    

</script>