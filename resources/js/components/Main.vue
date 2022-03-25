<template>
    <div>
        <main>
            <router-view :key="$route.path">
            </router-view>
        </main>
    </div>
</template>

<script>
export default {
    name: "Main",
    /* data() {
        return {
            posts:[]
        }
    },
    created() {
        axios
        .get("/api/posts")
        .then((data_api)=>{
            this.posts = data_api.data
            console.log(this.posts);
        })
    } */
}
</script>

<style>

</style>