var app = new Vue({
    el: '#createPost',
    data: {
        textarea: ''

    },
    methods: {

        addBr(){
            console.log('br');
            console.log(this.textarea);
            this.textarea += '<br><br>'; 
        }

    },
    mounted() {

    }


});






