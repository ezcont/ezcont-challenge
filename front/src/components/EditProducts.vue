<template>
    <div id="app">
        <HeadPage/>
        <div id="formEdit">
            <h2 id="titleEdit">Editando Produtos</h2>
            <input class="input is-success" type="number" placeholder="ID do produto" v-model="id">
            <input class="input is-success" type="text" placeholder="Nome do produto" v-model="name">
            <input class="input is-success" type="text" placeholder="Descrição do produto" v-model="description">
            <input class="input is-success" type="number" placeholder="Preço do produto" v-model="price">
            <input class="input is-success" type="number" placeholder="Quantidade Disponivel do produto" v-model="amountAvailable">
            <input class="input is-success" type="number" placeholder="Quantidade Critica" v-model="amountCritical">
            <button @click="edit" class="button is-success">Editar Produto</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import HeadPage from './HeadPage'

export default {
    components:{
        HeadPage
    },

    data(){
        return{
            id:0,
            name:'',
            description:'',
            price:0,
            amountAvailable:0,
            amountCritical:0
        }
    },

    methods:{
        edit: function(){
            if (this.name === '' | this.price === 0 | this.amountAvailable === 0 | this.amountCritical === 0) {
                alert("Por favor corrija seus dados")
            } else {
                axios.put(`http://127.0.0.1:8000/api/products/${this.id}`, {name:this.name, description:this.description, 
                price:this.price, amount_available: this.amountAvailable, amount_critical: this.amountCritical })
                .then(function(response){
                alert('Produto editado com sucesso')
                console.log(response)  
            }).catch(error => {
                 console.log(error)
            });  
            }
        }

    }
}
</script>

<style scoped>
    #formEdit{
        padding: 10px;
        width: 500px;
        position: relative;
        left: 31%;
    }
    #formEdit{
        font-size: 20px;
        font-weight: bold;
    }
</style>