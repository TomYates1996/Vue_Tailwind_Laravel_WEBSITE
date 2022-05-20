<template>
    <a class="flex flex-col justify-start items-start bg-white w-full">
        <img class="w-full md:w-72 lg:w-96 xl:w-96 2xl:w-96" :src="`${this.image}`" alt="">
        <p class="py-2 w-96">{{this.type}} | {{this.created.slice(0,10)}}</p>
        <h2 class="mb-2 text-4xl text-bold w-96 transition-all">{{this.title}}</h2>
        <p class="text-2xl w-96">{{this.short}}</p>
    </a>
    
</template>

<script>
export default ({
    name: 'FeatureBlog',
    props: {
        posts: Object,
    },
    data() {
        return {
            latest: this.posts,
            title: '',
            content: '',
            image: '',
            short: '',
            author: '',
            created: '',
            type: '',
        }
    },
    methods: {
        async getBlogPosts() {
            await axios.get('/latest_blog')
            .then( response=> {
                this.latest = response.data[0];
                this.title = response.data[0].title;
                this.content = response.data[0].content;
                this.image = response.data[0].imageurls;
                this.short = response.data[0].summary;
                this.author = response.data[0].author;
                this.created = response.data[0].created_at;
                this.type = response.data[0].type;
            })
            .catch( error => {
                console.log( error );
            })
        }
    },
    created() {
        this.getBlogPosts();
        console.log(this.latest);
    },
    watch: {
        latest: function(value) {
            this.latest = value;
            console.log(value);
        }
    }
})
</script>

<style scoped>
    a:hover h2 {
        color: rgb(34 197 94);
    }
</style>