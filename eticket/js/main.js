var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        userid:'',
        mquantity:'',
        macquantity:'',
        conquantity:'',
        status:'',
        errorstatus:''
    },
    methods:{
        addconcert:function (id) {

            axios.post('addtocart.php', {
                name: 'Concert Ticket',
                quantity: this.conquantity,
                userid: id,
                price:100
            })
                .then(function (response) {

                    header('Location:index.php');

                })
                .catch(function (error) {
                    this.errorstatus = true;

                });
        },
        addmatch:function (id) {

            axios.post('addtocart.php', {
                name: 'Match Ticket',
                quantity: this.macquantity,
                userid: id,
                price:100
            })
                .then(function (response) {

                    location.reload();

                })
                .catch(function (error) {
                    this.errorstatus = true;

                });
        },
        addmovie:function (id) {

            axios.post('addtocart.php', {
                name: 'Movie Ticket',
                quantity: this.mquantity,
                userid: id,
                price:100
            })
                .then(function (response) {


                    location.reload();
                })
                .catch(function (error) {
                    this.errorstatus = true;

                });
        },

    }
})