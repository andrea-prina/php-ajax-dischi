const app = new Vue(

    {
        el : "#app",

        data : {},

        methods : {

            getData : function(){
                axios.get('http://localhost:8888/php-ajax-dischi/v2/controller.php')
                .then((result) => {
                    console.log(result.data[0]);   
                }).catch((err) => {
                    console.warn(err);
                });
            }
        },

        created(){
            this.getData();
        }
    }

)