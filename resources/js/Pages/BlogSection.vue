<template>
    <div class="px-10 md:px-6 lg:px-20 xl:px-20 2xl:px-20  py-10 sm:py-20 md:py-20 lg:py-20 xl:py-20 2xl:py-20 w-full flex flex-col bg-white justify-center items-center">
        <h2 class="text-5xl text-black w-full max-w-7xl">+ Further Reading</h2>
        <!-- BLOG CONTAINER -->
        <div class="max-w-7xl w-full flex flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row justify-center items-center">
            <div class="flex flex-col justify-start items-start w-full">
                <FeatureBlog/>
            </div>
            <div class="flex flex-col justify-start items-start w-full border-t md:border-t-0 lg:border-t-0 xl:border-t-0 2xl:border-t-0 md:border-l lg:border-l xl:border-l 2xl:border-l border-l-0 border-slate-300">
                <BlogPost v-for="post in this.posts.slice(1,4)" :key="post.id" :post="post"/>
            </div>
        </div>
    </div>
</template>

<script>
import FeatureBlog from './FeatureBlog.vue';
import BlogPost from './BlogPost.vue';

export default {
    components: {
        BlogPost,
        FeatureBlog,
    },
    data() {
        return {
            posts: []
        }
    },
    methods: {
        async getBlogPosts() {
            await axios.get('/recent_posts')
            .then( response=> {
                this.posts = response.data;
            })
            .catch( error => {
                console.log( error );
            })
        },
    },
    created() {
        this.getBlogPosts();
    }

}
</script>

<style>

</style>