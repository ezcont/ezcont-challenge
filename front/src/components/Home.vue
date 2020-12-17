<template>
  <div id="app">
    <HeadPage/>
    <div v-for="(product, index) in products" :key="index">
      <AllProduct :name="product.name" :description="product.description" :price="product.price" :amountAvailable="product.amount_available" :amountCritical="product.amount_critical" :id="product.id" />
    </div>
  </div>
</template>

<script>
import axios from "axios"
import AllProduct from "./Products"
import HeadPage from "./HeadPage"

export default {
  name:"App",
  data(){
    return {
      products:[]
    }
  },

  created: function(){
    axios.get("http://127.0.0.1:8000/api/products").then(res =>{
      console.log(res.data);
      this.products = res.data
      console.log(this.products.price)
    })
  },

  components:{
    AllProduct,
    HeadPage
  }
}
</script>

<style>
  #app{
    background-color:rgba(192, 104, 104, 0.24);
  }
</style>

