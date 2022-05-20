<template>
  <div class="bg-blue-500 text-lg p-6 justify-center flex w-full">
            <div class="max-w-7xl w-full flex flex-col justify-start items-center">
                <!-- Addresses | Offices -->
                <div class="flex justify-start w-full py-20">
                    <div class="flex flex-col mr-auto text-white">
                        <h3 class="text-3xl font-black tracking-wide">YORK</h3>
                        <h4 class="text-2xl">29 Building 2, <br>York Business Park, <br>York, YO8 4YS</h4>
                    </div>
                    <div class="flex flex-col mr-auto text-white">
                        <h3 class="text-3xl font-black tracking-wide">HULL</h3>
                        <h4 class="text-2xl">29 Building 2, <br>Hull Business Park, <br>York, HU1 7PA</h4>
                    </div>
                    <div class="flex flex-col text-white">
                        <h3 class="text-3xl font-black tracking-wide">LEEDS</h3>
                        <h4 class="text-2xl">29 Building 2, <br>Leeds Business Park, <br>Leeds, LE8 4YS</h4>
                    </div>
                </div>
                <!-- Final Foot -->
                <div class="flex justify-start items-start w-full">
                    <div class="flex justify-start items-start w-1/2">
                        <div class="flex flex-col justify-start items-start">
                            <p class="mb-4 text-slate-400">Site</p>
                            <ul class="flex flex-col justify-start items-start">
                                <li>
                                    <a class="text-white" href="#">Home</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">Expertise</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">Work</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">About</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">Journal</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-col justify-start items-start ml-auto">
                            <p class="mb-4 text-slate-400">Social</p>
                            <ul class="flex flex-col justify-start items-start">
                                <li>
                                    <a class="text-white" href="#">LinkedIn</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">Twitter</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">Facebook</a>
                                </li>
                                <li>
                                    <a class="text-white" href="#">Instagram</a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex flex-col justify-start items-start ml-auto">
                            <p class="mb-4 text-slate-400">Contact</p>
                            <ul class="flex flex-col justify-start items-start">
                                <li>
                                    <p class="text-white"><a href="mailto:">wemake@pps.co.uk</a></p>
                                </li>
                                <li>
                                    <p class="text-white"><a href="tel:">+44 (0) 777 196 702</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- SUBSCRIBE -->
                    <form class="flex flex-col justify-start items-start w-1/2 ml-24" @submit.prevent="submitForm(form)">
                        <label class="font-semibold text-white">Sign up to our newsletter to keep up to date with us.</label>
                        <input class="w-full tracking-wide my-1 mb-2 text-xl py-2 border-slate-400 focus:border-slate-900" type="email" maxlength="30" name="email" id="email" v-model="form.email">
                        <button type="submit" class="rounded-full text-white border border-white ml-auto px-4 text-center flex justify-center items-center">Submit</button>
                    </form>
                </div>
                <div class="flex justify-start flex-col items-end w-full">
                    <p class="text-sm text-slate-400">&#169;2022 Appbuilder.com Limited. All rights reserved. Company No. 898240sfss</p>
                    <ul class="flex justify-end items-center">
                        <li>
                            <a class="text-sm hover:text-slate-900 ml-2 text-white" href="#">Terms of use</a>
                        </li>
                        <li>
                            <a class="text-sm hover:text-slate-900 ml-2 text-white" href="#">Privacy</a>
                        </li>
                        <li>
                            <a class="text-sm hover:text-slate-900 ml-2 text-white" href="#">Cookies</a>
                        </li>
                        <li>
                            <a class="text-sm hover:text-slate-900 ml-2 text-white" href="#">Sitemap</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';

export default {
    setup(){
        const form = useForm({
            'email' : null
        });

        return { form } 
    },
    methods: {
        submitForm(form){
            this.$emit('submitSub', form)
        }
    }
}
</script>

<style>

</style>