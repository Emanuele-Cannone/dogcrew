var app = new Vue({
    el: '#editPost',
    data: {
        textarea: ''

    },
    methods: {

        addBr(){

            this.textarea += '<br><br>'; 
        }

    },
    mounted() {

    }


});






