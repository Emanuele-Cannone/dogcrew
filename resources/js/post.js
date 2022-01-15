var app = new Vue({
    el: '#createPost',
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






