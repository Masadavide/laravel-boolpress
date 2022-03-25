<template> 
    <header>
        <li>
            <router-link :to="{ name: 'home'}">Home</router-link>
        </li>
        <li>
            <router-link :to="{ name: 'about'}">Chi siamo</router-link>
        </li>
    </header>
</template>

<script>
export default {
    name: "Header",
}
</script>

<style lang="scss" scoped>
body{
    background-color: blue;
}
</style>