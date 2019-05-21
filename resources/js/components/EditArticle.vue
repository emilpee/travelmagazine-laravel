<template>
    <div>
        <h2>Edit</h2>
        <form v-on:submit.prevent = "updateArticle">
            <input type="text" v-model="article.author">
            <input type="number" v-model="article.prio">
            <input type="text" v-model="article.title">
            <input type="number" v-model="article.category_id">
            <textarea rows="10" v-model="article.lead"></textarea>
            <textarea rows="30" v-model="article.bodytext"></textarea>
            <input type="text" v-model="article.img_url">
            <button type="submit">Spara</button>
        </form>
    </div>
</template>

<script>
import VueAxios from 'vue-axios'
import Axios from 'axios'

export default {
    data() {
        return {
            article: {
                author: '',
                prio: 0,
                title: '',
                lead: '',
                bodytext: '',
                category_id: 0,
                img_url: ''
            }
        }

    },
    created() {
        let url ='http://localhost/Travelmagazine/travelmagazine-laravel/public/articles/'+this.$route.params.id+'/edit';
        Axios.get(url).then((response) => {
            this.article = response.data;
            
        });
    },
    methods: {
        updateArticle() {
            let url ='http://localhost/Travelmagazine/travelmagazine-laravel/public/articles/'+this.$route.params.id;
             Axios.put(url, this.article).then((response) => {
            this.$router.push({name: 'Articles'})
            
        });
        }
    }
}
</script>
