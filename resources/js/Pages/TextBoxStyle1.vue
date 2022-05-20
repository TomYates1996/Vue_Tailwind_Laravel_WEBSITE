<template>
    <div class="flex flex-col justify-start items-start my-6 md:pr-12 lg:pr-12 xl:pr-12 2xl:pr-12">
        <h3 class="text-black text-4xl">{{ title }}</h3>
        <p class="text-xl my-4">{{ paragraph }}</p>
        <button class="my-2 rounded-full px-6 text-lg py-2 bg-white flex items-center justify-center transition-all duration-300 shadow-[inset_0_0_0_2px_rgba(0,0,0,0.3)] hover:shadow-[inset_0_0_0_4px_inherit] shadow-blue-500 hover:shadow-blue-500">See product strategy services</button>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        paragraph: String,
    }
}
</script>

<style>

</style>