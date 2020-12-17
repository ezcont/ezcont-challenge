<template>
    <div id="app">
        <h1 id="title">Loja  Vue Produtos</h1>
        <img class="imgHead" src="../assets/logo.png" alt="" srcset="">
        <div class="buttonAdd">
            <router-link class="button is-primary is-light" to="add"> Adicionar Produtos </router-link>
            <div class="buttonHome">
                <router-link class="button is-success is-light"  to="/"> Home</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>
    #app{
        width: 100%;
        height: 200px;
        background-color: #26cf7d;
    }

    #title{
        font-size: 40px;
        position: relative;
        left: 36%;
        top:20%;
        color:white;
    }
    .imgHead{
        width: 40px;
        position: relative;
        left: 41.5%;
        bottom: 1.9%;
    }
    .buttonAdd{
        position:relative;
        left:10px;
        top: 48px;
    }
    .buttonHome{
        position:relative;
        left:180px;
        bottom: 40px;
    }
</style>