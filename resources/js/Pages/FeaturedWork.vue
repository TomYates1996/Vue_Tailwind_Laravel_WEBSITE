<template>
  <div class="bg-black w-full flex flex-col justify-start items-center pt-20">
            <div class="w-full flex flex-col justify-start items-center">
                <h2 class="text-5xl text-white w-full mb-6 ml-10 max-w-7xl xl:ml-0">+ Featured work</h2>
                <div class="grid lg:grid-cols-2 w-full grid-cols-1">
                    <!-- FEATURE 1 -->
                    <div v-on:mousemove="moveImg" v-on:mouseenter="setRect" class="overflow-hidden w-full flex flex-col justify-start items-end md:items-start relative px-10 sm:pl-20 py-12 feature-1 feature circle cursor-pointer">
                        <img src="../../../images/i01_namsan-photo.png" class="max-w-none w-full min-w-[600px] absolute left-0 z-0 bottom-0 scale-150 transition-all duration-100" alt="">
                        <div class="flex flex-col relative x-[3] justify-start items-start max-w-[660px] w-full pr-10 lg:ml-auto xl:ml-auto 2xl:ml-auto">
                            <h2 class="text-white text-5xl sm:text-7xl md:text-7xl lg:7xl xl:text-7xl font-bold mt-0 sm:mt-32 md:mt-32 lg:mt-32 xl:mt-32 2xl:mt-32 w-full relative z-[3]">NAMSAN digital</h2>
                            <p class="text-white text-lg sm:text-xl md:text-xl lg:text-xl xl:text-xl z-[3] w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 2xl:w-1/3 relative">Lorem ipsum dolor sit, Necessitatibus animi soluta rem esse veniam nam minima officia?</p>
                            <button class="relative mt-4 rounded-full px-6 z-3 text-lg py-2 bg-transparent text-green-400 flex items-center justify-center transition-all duration-300 shadow-[inset_0_0_0_2px_rgba(0,0,0,0.3)] hover:shadow-[inset_0_0_0_4px_inherit] shadow-green-400 hover:shadow-green-400">Learn more</button>
                        </div>
                        <div class="rounded-[50%] scale-[80%] absolute w-60 h-60 z-0 opacity-0 overflow-hidden left-[30%] transition-all duration-1000">
                            <img class="h-full w-auto" src="../../../images/namsan-photo.png" alt="">
                        </div>
                        
                    </div>
                    <!-- FEATURE 2 -->
                    <div v-on:mousemove="moveImg" v-on:mouseenter="setRect" class="overflow-hidden w-full flex flex-col justify-start items-start relative px-10 sm:pl-20 py-12 feature-2 feature hexagon cursor-pointer">
                        <img src="../../../images/i01_ln-self-photo.png" class="max-w-none w-full min-w-[600px] absolute left-0 z-0 scale-150 transition-all duration-100" alt="">
                        <h2 class="text-white text-5xl sm:text-7xl md:text-7xl lg:7xl xl:text-7xl font-bold mt-0 sm:mt-32 md:mt-32 lg:mt-32 xl:mt-32 2xl:mt-32 w-full relative z-[3]">L&N Self Storage</h2>
                        <p class="text-white text-xl relative z-[3] w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 2xl:w-1/3 ">Lorem ipsum dolor sit, Necessitatibus animi soluta rem esse veniam nam minima officia?</p>
                        <button class="relative mt-4 rounded-full px-6 z-[3] text-lg py-2 bg-transparent text-green-400 flex items-center justify-center transition-all duration-300 shadow-[inset_0_0_0_2px_rgba(0,0,0,0.3)] hover:shadow-[inset_0_0_0_4px_inherit] shadow-green-400 hover:shadow-green-400">Learn more</button>
                        <div class="absolute w-60 h-60 z-0 opacity-0 overflow-hidden left-[30%] transition-all duration-1000">
                            <img class="h-full w-auto transition-all duration-1000" src="../../../images/l&n-self-photo.png" alt="">
                        </div>
                    </div>
                    <!-- FEATURE 3 -->
                    <div v-on:mousemove="moveImg" v-on:mouseenter="setRect" class="overflow-hidden w-full flex flex-col justify-start items-end md:items-start relative px-10 sm:pl-20 py-12 feature-3 feature circle cursor-pointer">
                       <img src="../../../images/i01_infinitycomms.png" class="max-w-none w-full min-w-[600px] absolute left-0 z-0 scale-150 transition-all duration-100" alt="">
                       <div class="flex flex-col relative x-[3] justify-start items-start max-w-[660px] w-full pr-10 lg:ml-auto xl:ml-auto 2xl:ml-auto">
                            <h2 class="text-white text-5xl sm:text-7xl md:text-7xl lg:7xl xl:text-7xl font-bold mt-0 sm:mt-32 md:mt-32 lg:mt-32 xl:mt-32 2xl:mt-32 w-full relative z-[3]">INFINITY LOOP COMMUNICATIONS</h2>
                            <p class="text-white text-xl relative z-[3] w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 2xl:w-1/3 ">Lorem ipsum dolor sit,  rem esse veniam nam minima officia?</p>
                            <button class="relative mt-4 rounded-full px-6 z-[3] text-lg py-2 bg-transparent text-green-400 flex items-center justify-center transition-all duration-300 shadow-[inset_0_0_0_2px_rgba(0,0,0,0.3)] hover:shadow-[inset_0_0_0_4px_inherit] shadow-green-400 hover:shadow-green-400">Learn more</button>
                        </div>
                        <div class="rounded-[50%] scale-[80%] absolute w-60 h-60 z-0 opacity-0 overflow-hidden left-[30%] transition-all duration-1000">
                            <img class="h-full w-auto transition-all duration-1000" src="../../../images/infinitycomms.png" alt="">
                        </div>
                    </div>
                    <!-- FEATURE 4 -->
                    <div v-on:mousemove="moveImg" v-on:mouseenter="setRect" class="overflow-hidden w-full flex flex-col justify-start items-start relative px-10 sm:pl-20 py-12 feature-4 feature triangle cursor-pointer">
                        <img src="../../../images/i01_apparel.png" class="max-w-none w-full min-w-[600px] absolute left-0 z-0 scale-150 transition-all duration-100" alt="">
                        <h2 class="text-white text-5xl sm:text-7xl md:text-7xl lg:7xl xl:text-7xl font-bold mt-0 sm:mt-32 md:mt-32 lg:mt-32 xl:mt-32 2xl:mt-32 w-full relative z-[3]">BORDER APPAREL CO.</h2>
                        <p class="text-white text-xl relative z-[3] w-full sm:w-1/3 md:w-1/3 lg:w-1/3 xl:w-1/3 2xl:w-1/3 ">Lorem ipsum dolor sit,  rem esse veniam nam minima officia?</p>
                        <button class="relative mt-4 rounded-full px-6 z-[3] text-lg py-2 bg-transparent text-green-400 flex items-center justify-center transition-all duration-300 shadow-[inset_0_0_0_2px_rgba(0,0,0,0.3)] hover:shadow-[inset_0_0_0_4px_inherit] shadow-green-400 hover:shadow-green-400">Learn more</button>
                        <div class="absolute w-60 h-60 z-0 opacity-0 overflow-hidden left-[30%] transition-all duration-1000">
                            <img class="h-full w-auto transition-all duration-1000" src="../../../images/apparel.png" alt="">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
</template>

<script>
export default {
    name: 'FeaturedWork',
    methods: {
        setRect(event) {
            this.bounds = event.target.getBoundingClientRect();
            this.coords = [((this.bounds.right - this.bounds.left) / 2), ((this.bounds.bottom - this.bounds.top) / 2)];
            this.feature = event.target.firstChild;
        },
        moveImg(event) {
            this.feature.style.transform = `scale(1.5) translate(${(event.clientX - this.bounds.left) / ((this.bounds.right - this.bounds.left) / 8)}px, ${(event.clientY - this.bounds.top) / ((this.bounds.bottom - this.bounds.top) / 8)}px)`;
        },
    }
}
</script>

<style scoped>
    .circle:hover div:last-of-type {
    left: 50%;
    opacity: 100%;
    transform: scale(1);
}
.feature button {
    box-shadow: 0px 0px 0px 2px #4ade80 inset;
    transition: all 0.2s ease;
}
.feature:hover button {
    box-shadow: 0px 0px 0px 4px #4ade80 inset;
}
.feature:hover h2 {
    color: #4ade80;
}

.hexagon div {
    clip-path: polygon(50% 0,95% 25%, 95% 75%, 50% 100%, 5% 75%, 5% 25%);
    transform: rotateZ(-30deg);
}
.triangle div {
    clip-path: polygon(50% 0, 100% 100%, 0 100%);
    transform: rotateZ(60deg);
}
.triangle:hover div {
    opacity: 100%;
    left: 50%;
    transform: rotateZ(0deg);
}
.triangle div img {
    transform: rotateZ(-60deg);
}
.triangle:hover div img {
    transform: rotateZ(0deg);
}
.hexagon:hover div {
    left: 50%;
    opacity: 100%;
    transform: rotateZ(0deg);
}
.hexagon div img {
    transform: rotateZ(30deg);
}
.hexagon:hover div img {
    transform: rotateZ(0deg);
}


</style>