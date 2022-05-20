<template>
    <div class="bg-white w-full flex-col flex justify-center items-center pt-20">
        <div class="max-w-7xl w-full py-18 px-6">
            <h1 class="main-header text-7xl md:text-[10rem] lg:[10rem] xl:[10rem] 2xl:[10rem] font-black text-black py-6 mt-24 relative">WE BUILD APPS. <div class="text-pattern absolute left-0 right-0 w-full top-0 h-full"></div></h1>
            <h2 class="text-black flex">FIND OUT HOW WE CAN HELP <p class="pl-1 animate-bounce">.</p> <p class="pl-1 animate-bounce delay">.</p><p class="pl-1 delay-more animate-bounce">.</p></h2>
        </div>
        <!-- IF YOU NEED - SECTION -->
        <IfYouNeed/>
        <!-- WHAT WE DO || SECTION -->
        <WhatWeDo/>
        <!-- FEATURED/OUR WORK || SECTION -->
        <FeaturedWork/>
        <!-- Quote section -->
        <Quote/>
        <!-- BLOG SECTION  -->
        <BlogSection/>
        <!-- FOOTER -->
        <FooterVue @submitSub="submitForm"/>
    </div>
</template>

<script>
import BlogPost from './BlogPost.vue';
import FeatureBlog from './FeatureBlog.vue';
import FeaturedWork from './FeaturedWork.vue';
import Quote from './Quote.vue';
import FooterVue from './FooterVue.vue';
import WhatWeDo from './WhatWeDo.vue';
import IfYouNeed from './IfYouNeed.vue';
import BlogSection from './BlogSection.vue';

export default {
    components: {
    BlogPost,
    FeatureBlog,
    FeaturedWork,
    Quote,
    FooterVue,
    WhatWeDo,
    IfYouNeed,
    BlogSection
},
    
    data() {
        return {
            bounds: "",
            coords: [],
            feature: "",
        };
    },
    methods: {
        submitForm(form){
            form.post('/new_sub', {
                preserveScroll: true,
                onSuccess: () => form.reset('email'),
                }
            );
        }
    },
}
</script>

<style>
.main-header {
    line-height: 8rem;
    width: 44rem;
}
.delay {
    animation-delay: 333ms;
}
.text-pattern {
    background-image: url('../../../images/white-splat.png');
    background-position: center;
    background-size: cover;
}
.delay-more {
    animation-delay: 666ms;
}




</style>