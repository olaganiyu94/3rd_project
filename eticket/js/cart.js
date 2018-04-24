var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        userid:'',
        quantity:'',


    },
    methods:{
        deleteitem:function (id) {

            axios.post('deletefromcart.php', {
                name: 'Concert Ticket',
                quantity: this.conquantity,
                userid: id,
                price:100
            })
                .then(function (response) {
                    this.status = true;

                })
                .catch(function (error) {
                    this.errorstatus = true;

                });
        }

    }
})