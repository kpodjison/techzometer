let App = {
    data(){
        return{
            cart:[],
            isEmptyCart: true,
            isHidden:false,
            hotDeals:[],
            totalPriceInCart:0
        }
    },
    methods:{
        getCartData(){
            let userId = this.getUserId();
            let outer_this = this;
            let xhttp = new XMLHttpRequest();
            let url = "./backend/Ajax.php?action=getcart&uid="+userId;
            xhttp.onload = function(){
                let results = JSON.parse(this.responseText);
                if(results != '')
                {
                    outer_this.cart = results;
                    console.log(outer_this.cart)
                    outer_this.isEmptyCart = false;
                }
                else{
                    console.log("No data in cart");
                }

            }
            xhttp.open("GET",url);
            xhttp.send();

        },
        getHotDeals(){
            let outer_this = this;
            let xhttp = new XMLHttpRequest();
            let url = "./backend/Ajax.php?action=gethotdeals";
            xhttp.onload = function(){
                let results = JSON.parse(this.responseText);
                if( results != '')
                {
                    outer_this.hotDeals = results;
                    // console.log(results);
        
                }
                else{
                    console.log("No hot deals data found");
                }
            }
            xhttp.open("GET",url);
            xhttp.send();
        },
        getUserId()
        {
            let element = document.getElementById("uuid");
            let uuid = element.textContent;
            this.isHidden = true;
            console.log(uuid);
            return uuid;
        },
        getImage(imagePath) {
            return imagePath;
          }
    },
    computed:{
        // getTotalPrice(){
        //     let total;
        //     let obj = this.cart;
        //     for(let key in obj)
        //     {
        //         total += obj[key]['product_price'];
        //     }
            
        //     console.log(total)
        //     return this.totalPriceInCart = total;

        // }
    },
    mounted(){
        this.getUserId();
        this.getCartData();
        this.getHotDeals();

    }

}
Vue.createApp(App).mount('#app');