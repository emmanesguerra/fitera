<template>
    <div class="filterblk">
        
        <section>
            <h6>Filters:</h6>
            <div class="form-check my-2"  v-for="category in dcategories" :key="category.id">
                <input class="form-check-input checkd" type="checkbox" v-model="category.selected" :value="category.display"  v-bind:id="category.id" @change="compute(category.display, $event)">
                <label class="form-check-label" v-bind:for="category.id">
                    {{ category.name }}
                </label>
            </div>
        </section>
        <section>
            <h6>Sizes:</h6>
            <div class="form-check my-2"  v-for="sizes in dsizes" :key="sizes.id">
                <input class="form-check-input checkd" type="checkbox" :value="sizes.display"  v-bind:id="sizes.id" @change="compute(sizes.display, $event)">
                <label class="form-check-label" v-bind:for="sizes.id">
                    {{ sizes.name }}
                </label>
            </div>
        </section>
        <section>
            <h6>Located:</h6>
            <div class="form-check my-2">
                <input class="form-check-input checkd" type="checkbox" value="0" id="defaultLoc1">
                <label class="form-check-label" for="defaultLoc1">
                    Indoor
                </label>
            </div>
            <div class="form-check my-2">
                <input class="form-check-input checkd" type="checkbox" value="0" id="defaultLoc2">
                <label class="form-check-label" for="defaultLoc2">
                    Outdoor
                </label>
            </div>
        </section>
        
        <button class="btn btn-primary btn-sm col-12" @click="apply">APPLY</button>
        <button class="btn btn-dark btn-sm col-12" @click="clear">CLEAR ALL</button>
        
    </div>
</template>

<script>

    export default {
        props: ['categories', 'sizes', 'initialcnt'],
        data () {
            return {
                dcategories: this.categories,
                dsizes: this.sizes,
                dcounter: this.initialcnt
            }
        },
        mounted() {
        },
        methods: {
            compute (cnt, $event) {
                if($event.target.checked) {
                    this.dcounter = this.dcounter + cnt;
                } else {
                    this.dcounter = this.dcounter - cnt;
                }
            },
            apply () {
                this.$emit('emit-counter', {
                    counter: this.dcounter,
                });
            },
            clear () {
		$('.checkd').each(function() {
                    this.checked = false;
		});
                this.dcounter = 0;
                this.apply();
           }
        },
        computed: {
        }
    }
</script>
