<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});


</script>

<template> 
    <Head title="Appbuilder.co.uk" />
    <div class="bg-white min-h-screen">
        <Navbar v-if="!isMobile"/>
        <MobileNav v-if="isMobile"/>
        <HomeContent/>
    </div>
</template>

<script>
import BlogPost from './BlogPost.vue'
import Navbar from './Navbar.vue'
import HomeContent from './HomeContent.vue'
import MobileNav from './MobileNav.vue'

export default {
    components: {
        BlogPost,
        Navbar,
        HomeContent,
        MobileNav,
    },
    data() {
        return {
            blogPosts: [
                {title: 'How to eat', content: 'Take spoon and eat with it put spoon in mouth', author: 'Bobby'},
                {title: '2 Test 2', content: 'dsafsdafadsfasdvv fsdfds f fsdf sdfddafah', author: 'Fred'},
                {title: '3 Test post 3', content: 'Ubiquirtsoid isofn sai woasnsfpjf jdsp jd fijsda  v', author: 'Mike'},
            ],
            posts: [],
            isMobile: true,
        }
    },
    methods: {
        getBlogPosts() {
            axios.get('/blog_posts')
            .then( response=> {
                this.posts = response.data
            })
            .catch( error => {
                console.log( error );
            })
        },
        changingScreen(e) {
            if (window.innerWidth <= 640) {
                this.isMobile = true;
                console.log(this.isMobile);
            } else {
                this.isMobile = false;
            }
        }
    },
    created() {
        this.getBlogPosts();
        window.addEventListener("resize", this.changingScreen);
        if (window.innerWidth <= 640) {
            this.isMobile = true;
        } else {
            this.isMobile = false;
        }
    }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap');
* {
    /* font-family: 'Maven Pro', sans-serif; */
    font-family: 'Yanone Kaffeesatz', sans-serif;
    box-sizing: border-box;
    padding: 0px;
    margin: 0px;
}
</style>