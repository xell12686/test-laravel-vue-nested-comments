<template>
    <div class="card comments-list mt-3">
        <div class="card-body">
            <h2 class="card-title">Comments:</h2>
            <div v-for="comment in comments">
                <comment :comment="comment" v-bind:key="comment.id"></comment>
            </div>

        </div>
    </div>

</template>

<script>
    import Comment from './Comment.vue';
    export default {
        components: {
            Comment,
        },

        data() {
            return {
                comments: '',
            }
        },

        methods: {
            getComments() {
                axios.get('/comments')
                .then(({data}) => {
                    this.comments = data;
                })
            }
        },

        created() {
            this.getComments();
        },

        mounted() {
            Fire.$on('updated', () => {
                this.getComments();
            })
        }
    }
</script>
