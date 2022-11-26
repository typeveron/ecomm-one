<template>
<div>
    <hr>
    <button class="btn btn-warning" v-on:click.prevent="addProductToCart()">
    Add To Cart
    </button>
</div>
</template>


<script>
import axios from 'axios';

    export default {
        data() {

        },
        props: ['productId', 'userId'],
        methods: {
            async addProductToCart() {
                //checking if user logged in
                if(this.userId == 0) {
                    this.$toastr.e('You need to login, to add this product in cart')
                    return;
                }

                //if user logged in then add item to cart
                let response = await axios.post('/cart', {
                    'product_id': this.productId
                });

                this.$root.$emit('changeInCart', response.data.items);

                console.log(response.data);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
