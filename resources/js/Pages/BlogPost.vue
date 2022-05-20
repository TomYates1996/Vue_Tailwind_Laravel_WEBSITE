<template>
    <a class="container w-full px-2 flex center justify-start items-center mb-4 rounded cursor-pointer border-b md:border-0 lg:border-0 xl:border-0 2xl:border-0 border-slate-300">
        <img class="w-1/2 md:w-20 lg:w-20 xl:w-20 2xl:w-20" :src="`${post.imageurls}`" alt="">
        <div class="flex flex-col justify-start items-start w-full px-6 md:border-b lg:border-b xl:border-b 2xl:border-b border-slate-300">
            <p class="py-2">{{this.post.type}} | {{this.post.created_at.slice(0,10)}}</p>
            <h1 class="text-black mb-2 text-4xl text-bold transition-all">{{ post.title }}</h1>
            <p class="text-black text-xl">{{ post.summary }}</p>
        </div>
    </a>

</template>

<script>
export default ({
    name: 'BlogPost',
    props: {
        post: Object,
    }
})
</script>

<style scoped>
    a:hover h1 {
       	color: rgb(34 197 94);
    }
</style>

