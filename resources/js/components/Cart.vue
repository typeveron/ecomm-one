<template>
    <div class="container">
        <li class="nav-item">
            <a href="/checkout" class="btn btn-warning btn-sm">
                Cart {{itemCount}}
            </a>
        </li>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                itemCount: "",
            }
        },
        mounted() {
            this.$root.$on('changeInCart', (item)=> {
                this.itemCount = item;
            })
        },
        methods: {
            getCartItemsOnPageLoad() {
                 //if user logged in then add item to cart
                 //let response = await axios.post('/cart');
                 this.itemCount = response.data.items;
                 alert(this.itemCount);
            }
        },
        created() {
            this.getCartItemsOnPageLoad();
        }
    }
</script>
