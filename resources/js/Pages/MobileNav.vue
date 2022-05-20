<template>
    <div class="bg-blue-500 text-lg p-4 justify-center flex fixed top-0 right-0 left-0 z-10">
        <div class="max-w-7xl w-full flex">
            <h2 class="text-lg flex items-center justify-center text-white">appbuilder.co.uk</h2>
            <input type="checkbox" class="checkbox-toggle opacity-0 absolute right-4 h-16 w-16 rounded-full" v-model="toggled">
            <div class="h-16 w-16 rounded-full bg-white ml-auto flex justify-center items-center">
                <img v-if="toggled" src="../../../images/x.png" alt="">
                <img v-if="!toggled" src="../../../images/toggle.png" alt="">
            </div>
            <div class="slide z-10 flex flex-col justify-start items-center fixed bg-white w-full h-full top-24 botton-0 left-[100%] right-0 transition-all duration-700">
                <ul class="flex flex-col w-full justify-start items-start py-10 px-6">
                    <li class="my-2 flex justify-start items-end">
                        <p class="text-slate-500 tracking-widest pb-1">01/</p>
                        <a class="text-5xl font-black ml-2 transition-all duration-[300ms] hover:pl-4" href="#">Expertise</a>
                    </li>
                    <li class="my-2 flex justify-start items-end">
                        <p class="text-slate-500 tracking-widest pb-1">02/</p>
                        <a class="text-5xl font-black ml-2 transition-all duration-[300ms] hover:pl-4" href="#">Work</a>
                    </li>
                    <li class="my-2 flex justify-start items-end">
                        <p class="text-slate-500 tracking-widest pb-1">03/</p>
                        <a class="text-5xl font-black ml-2 transition-all duration-[300ms] hover:pl-4" href="#">About</a>
                    </li>
                    <li class="my-2 flex justify-start items-end">
                        <p class="text-slate-500 tracking-widest pb-1">04/</p>
                        <a class="text-5xl font-black ml-2 transition-all duration-[300ms] hover:pl-4" href="#">Journal</a>
                    </li>
                    <li class="my-2 flex justify-start items-end">
                        <p class="text-slate-500 tracking-widest pb-1">05/</p>
                        <a class="text-5xl font-black ml-2 transition-all duration-[300ms] hover:pl-4" href="#">Contact</a>
                    </li>
                </ul>
                <div class="flex w-full items-center px-6">
                    <div class="flex flex-col justify-start items-start text-xl">
                        <p class="text-slate-500">Get in touch.</p>
                        <a class="hover:text-blue-400" href="mailto:">wemake@pps.co.uk</a>
                    </div>
                    <div class="ml-10 flex flex-col justify-start items-center">
                        <p class="text-slate-500 text-xl w-full">Social Media</p>
                        <ul class="flex text-xl">
                            <li><a class="hover:text-blue-400" href="#">LinkedIn</a></li>
                            <li><a class="ml-2 hover:text-blue-400" href="#">Twitter</a></li>
                            <li><a class="ml-2 hover:text-blue-400" href="#">Facebook</a></li>
                            <li><a class="ml-2 hover:text-blue-400" href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pre-slide fixed top-24 bg-black z-[2] opacity-50 w-full h-full top-24 botton-0 left-[100%] right-0 transition-all duration-500"></div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            toggled: false,
        }
    }
}
</script>

<style>
    .checkbox-toggle:checked ~ .slide {
        left: 0%;
    }
    .checkbox-toggle:checked ~ .pre-slide {
        left: 0%;
    }
</style>