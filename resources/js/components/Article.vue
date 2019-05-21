<template>
    <div>
        <router-link v-bind:to="{name: 'EditArticle', params: {id: article.article_id}}">Edit</router-link>

        <h1>{{ article.title }}</h1>
        <h3>{{ article.lead }}</h3>
        <p>{{ article.bodytext }}</p>
    </div>
</template>

<script>
import VueAxios from 'vue-axios'
import Axios from 'axios'

export default {
    data(){
        return {
            article: {
                title: '',
                lead: '',
                bodytext: ''
            }
        }
    },
    created(){
        
        let url ='http://localhost/Travelmagazine/travelmagazine-laravel/public/articles/'+this.$route.params.id;
        Axios.get(url).then((response) => {
            this.article = response.data;
            
        });
        console.log(this.article)
    }
}
</script>

