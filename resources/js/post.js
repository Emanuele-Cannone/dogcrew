var app = new Vue({
    el: '#createPost',
    data: {
        http : ''

    },
    methods: {

        myMethod() {
            this.http.post(
                '/api/items',
                { name: "my item" }
            );

        }

    },
    mounted() {

        BalloonEditor
            .create(document.querySelector('#editor'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'bulletedList', 'blockQuote', 'undo', 'redo'],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            })
            .catch(error => {
                console.error(error);
            });
    }


});






