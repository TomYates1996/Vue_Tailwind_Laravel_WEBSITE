<template>
  <div class="px-10 sm:px-20 md:px-20 lg:px-20 xl:px-20 2xl:px-20 py-20 w-full text-white flex flex-col bg-blue-600 justify-start items-start relative">
            <img src="../../../images/66.png" alt="" class="absolute top-1 left-1 lg:top-6 sm:top-4 sm:left-10 lg:left-20 w-20">
            <p class="absolute right-4 sm:top-64 top-20 sm:fadey md:fadey lg:fadey xl:fadey 2xl:fadey opacity-0">"great price"</p>
            <p class="absolute right-6 sm:top-64 top-20 sm:fadey md:fadey lg:fadey xl:fadey 2xl:fadey opacity-0" style="animation-delay:7s">"above and beyond"</p>
            <p class="absolute right-8 sm:top-64 top-20 sm:fadey md:fadey lg:fadey xl:fadey 2xl:fadey opacity-0" style="animation-delay:15s">"incredible service"</p>
            <p class="absolute right-4 sm:top-64 top-32 sm:fadey md:fadey lg:fadey xl:fadey 2xl:fadey opacity-0" style="animation-delay:3s">"lovely team"</p>
            <p class="absolute right-8 sm:top-72 top-32 sm:fadey md:fadey lg:fadey xl:fadey 2xl:fadey opacity-0" style="animation-delay:18s">"fast"</p>
            <p class="absolute right-4 sm:top-72 top-32 sm:fadey md:fadey lg:fadey xl:fadey 2xl:fadey opacity-0" style="animation-delay:8s">"friendly and reliable"</p>
            <p class="absolute right-6 sm:top-72 top-32 sm:fadey md:fadey lg:fadey xl:fadey 2xl:fadey opacity-0" style="animation-delay:13s">"no less than perfect"</p>
            <h2 class="lg:pl-20 sm:pl-6 pl-2 text-3xl lg:text-5xl text-bold w-full sm:pr-16 md:pr-16 lg:pr-28">AppBuilder.com Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ut possimus quas natus ullam ratione recusandae totam corrupti maxime consequuntur vero repellendus similique neque nisi dolorum? Quaerat laudantium soluta minus, asperiores labore repellendus vel magnam placeat alias fuga. Repellendus sed id incidunt.</h2>
            <h3 class="lg:pl-20 sm:pl-6 pl-2 text-xl pt-6 pb-2">Howard Kim</h3>
            <h3 class="lg:pl-20 sm:pl-6 pl-2 text-lg">Managing Director - Namsan Digital</h3>
        </div>
</template>

<script>
export default {

}
</script>

<style scoped>
/* FADE animation */

.fadey {
    animation: flashfade 20s infinite ease;
}
@keyframes flashfade {
    0% {
        opacity: 0%;
    }
    14% {
        opacity: 100%;
    }
    25% {
        opacity: 0%;
    }
    100% {
        opacity: 0%;
    }
}
</style>