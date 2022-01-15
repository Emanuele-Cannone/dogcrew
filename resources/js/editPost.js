var app = new Vue({
    el: '#editPost',
    data: {
        textarea: ''

    },
    methods: {

        addBr(){
            
            console.log('br');
            console.log(this.textarea);
            this.textarea += '<br>'; 
        }

    },
    mounted() {

    }


});






