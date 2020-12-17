<template>
    <div id="app">
        <div id="styleProduct">
          <h4>ID: {{id}} </h4>
          <h1> Nome: {{name}} </h1> <br>
          <p>Descrição: {{description}} </p> <br>
          <p>Preço:R${{price}} </p><br>
          <p>Quantidade disponivel:{{amountAvailable}} </p> <br>
          <router-link to="/edit" class="button is-info">Editar produto</router-link>
          <button class="button is-danger" @click="deleteProduct">Deletar produto</button>
        </div>
    </div>
        
</template>

<script>
import axios from "axios"

export default {
    props: {
        name: String,
        description: String,
        price: Number,
        amountAvailable: Number,
        amountCritical: Number,
        id:Number
    },

    methods:{
        deleteProduct: function() {
            axios.delete(`http://127.0.0.1:8000/api/products/${this.id}`)
            .then(response => {
               console.log(response)
               alert("PRODUTO DELETADO")
            })
            .catch(error => {
                 console.log(error)
            })
        }
    }
}
</script>

<style scoped>
    #app{
        display:grid;
        grid-template-columns: repeat(3, 1fr);
    }
    #styleProduct{
        border:1px solid black;
        border-radius: 10px;
        width: 400px;
        padding: 20px;
        margin-top: 20px;;
    }

</style>