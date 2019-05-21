<template>
    <div>
        <h2>Articles</h2>

        <section v-for="article in filteredArticles" :key="article.article_id">
            <h2>{{article.title}}</h2>
       
 <router-link v-bind:to="{name: 'Article', params: {id: article.article_id}}">Show</router-link>
 </section>
    </div>
</template>

<script>
import VueAxios from 'vue-axios'
import Axios from 'axios'

export default {
    name: 'Articles',
    data() {
        return {
            articles: ''
        }
    },
    created() {
        let url ='http://localhost/Travelmagazine/travelmagazine-laravel/public/articles/'
        Axios.get(url).then((response) => {
            this.articles = response.data;
            console.log(this.articles)
        });
    },
    computed: {
        filteredArticles() {
            if(this.articles.length) {
                return this.articles;
            }
        }
    }
    
}
</script>


