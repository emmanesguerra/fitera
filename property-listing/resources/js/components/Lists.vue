<template>
    <div class="lists">
        <section class="row mx-0" v-for="index in counter" :key="index">
            <div class="col-4 px-0">
                <img v-bind:src="imgpath" class="img-fluid">
            </div>
            <div class="col-5 p-4">
                <span class="loc">{{ data.loc }}</span>
                <span class="title">{{ data.title }}</span>
                <span class="size">Southbound Size: {{ data.size }}</span>
                <span class="details">Vicinity: {{ data.vicinity }}</span>
                <span class="details">Details: {{ data.vicinity }}</span>
            </div>
            <div class="col-3 px-0 py-5 text-center">
                <a href="" class="btn btn-primary col-10 my-5">VIEW PROPERTY</a>
            </div>
        </section>
    </div>
</template>

<script>

    export default {
        props: ['data', 'counter'],
        computed: {
            imgpath() {
                return '/img/' + this.data.img;
            }
        },
    }
</script>
