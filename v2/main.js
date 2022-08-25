const app = new Vue(

    {
        el : "#app",

        data : {

            diskList : {},

        },

        methods : {

            getData : function(){
                axios.get('http://localhost:8888/php-ajax-dischi/v2/controller.php')
                .then((result) => {
                    this.diskList = result.data;   
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