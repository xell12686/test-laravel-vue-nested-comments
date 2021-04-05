<template>
   <div class="ml-4 reply">
       <div v-if="comment.replies">
            <div v-for="comment in comment.replies" v-bind:key="comment.id">
                <div class="d-flex mt-3 ml-4">
                    <div class="avatar">
                        <img src="/images/user-icon.jpg" alt="icon" class="img-fluid"/>
                    </div>

                    <div class="ml-3">
                        <h6><strong>{{ comment.user.name }}</strong> <small>{{ comment.created_at }}</small></h6>
                        <div>{{ comment.content }}</div>
                        <reply-form :comment="comment" v-if="nextReplyDepth < 3"/>
                    </div>
                </div>
                <replies :comment="comment" v-bind:key="comment.id" :depth="nextReplyDepth" />
            </div>
        </div>
   </div>
</template>

<script>
    import ReplyForm from './ReplyForm.vue';
    export default {
        props: {
            comment: Object,
            depth: Number
        },

        data() {
            return {
                nextReplyDepth: this.depth,
            }
        },

        components: {
            ReplyForm
        },

        created() {
            this.nextReplyDepth++;
        }
    }
</script>
