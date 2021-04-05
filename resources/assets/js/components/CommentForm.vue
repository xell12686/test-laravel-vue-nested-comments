<template>
    <div>
        <textarea class="form-control" v-model="comment" placeholder="Add a a comment..."></textarea>
        <button class="btn btn-primary mt-2" @click.prevent="storeComment">Comment</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                comment: '',
            }
        },

        methods: {
            storeComment() {
                axios.post('/comments/create', {
                    text: this.comment,
                })
                .then(({data}) => {
                    console.log(data);
                    Fire.$emit('updated');
                    this.comment = '';
                })
            }
        }
    };
</script>
