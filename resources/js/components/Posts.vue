<template> 
    <div>
        <ul>
            <li v-for="(post, index) in posts" :key="index">
                <ul>
                    <li>
                        Titolo: {{post.title}}
                    </li>
                    <li>
                        Contenuto: {{post.content}}
                    </li>
                    <li>
                        Autore: {{post.author}}
                    </li>
                    <li>
                        Categoria: {{post.category ? post.category.name  : '-'}}
                    </li>
                    <li>
                        Tag: 
                        <span v-for="(tag, index) in post.tags" :key="index">
                            {{tag.name ? tag.name : '-'}}
                        </span>
                    </li>
                    <router-link :to="{name: 'single-post', params:{ slug: post.slug } }">Visualizza Post</router-link>
                </ul>
                <br>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Posts",
    data() {
        return{
            posts: []
        }
    },
    created(){
        axios
        .get("/api/posts")
        .then( (response) => {
            this.posts = response.data;
        })
    }
}
</script>

<style>

</style>