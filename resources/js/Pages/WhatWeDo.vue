<template>
        <div class="bg-white w-full flex justify-center items-center px-6">
            <div class="max-w-7xl w-full flex flex-col justify-start items-start">
                <h2 class="main-header text-7xl md:text-[10rem] lg:[10rem] xl:[10rem] 2xl:[10rem] font-black text-black py-2 pt-6 sm:py-6 md:py-6 lg:py-6 xl:py-6 2xl:py-6 mt-6 sm:mt-24 md:mt-24 lg:mt-24 xl:mt-24 2xl:mt-24 relative ">WHAT WE DO <div class="text-pattern absolute left-0 right-0 w-full top-0 h-full"></div></h2>
                <!-- GRID CONTAINER -->
                <div class="grid grid-cols-1 md:grid-cols-2 max-w-7xl w-full border-b border-slate-300">
                    <TextBoxStyle1 :title="'PRODUCT STRATEGY'" :paragraph="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolore ipsum non sapiente nostrum qui assumenda modi reiciendis, in error maxime doloremque ullam labore laborum. Quasi debitis aspernatur soluta impedit excepturi a quam maiores doloribus, eos atque praesentium officiis provident!'"/> 
                    <TextBoxStyle1 :title="'PRODUCT DESIGN'" :paragraph="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolore ipsum non sapiente nostrum qui assumenda modi reiciendis, in error maxime doloremque ullam labore laborum. Quasi debitis aspernatur soluta impedit excepturi a quam maiores doloribus, eos atque praesentium officiis provident!'"/>
                    <TextBoxStyle1 :title="'PRODUCT DEVELOPMENT'" :paragraph="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolore ipsum non sapiente nostrum qui assumenda modi reiciendis, in error maxime doloremque ullam labore laborum. Quasi debitis aspernatur soluta impedit excepturi a quam maiores doloribus, eos atque praesentium officiis provident!'"/>
                    <TextBoxStyle1 :title="'PRODUCT OPTIMISATION'" :paragraph="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolore ipsum non sapiente nostrum qui assumenda modi reiciendis, in error maxime doloremque ullam labore laborum. Quasi debitis aspernatur soluta impedit excepturi a quam maiores doloribus, eos atque praesentium officiis provident!'"/>
                </div>
                <!-- ABOUT US || SECTION -->
                <div class="w-full py-6 flex justify-start items-center border-b border-slate-300">
                    <h2 class="text-blue-500 text-lg">Want to know more about us?</h2>
                    <a href="#" class="text-black text-lg ml-6 transition-all duration-200 hover:underline">our story</a>
                </div>
            </div>
        </div>
</template>

<script>
import TextBoxStyle1 from './TextBoxStyle1.vue';
export default {
    components: { TextBoxStyle1 }
}
</script>

<style>

</style>