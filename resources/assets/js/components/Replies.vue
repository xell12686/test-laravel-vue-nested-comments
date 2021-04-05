<template>
   <div class="reply" :class="'reply-' + nextReplyDepth">
       <div v-if="comment.replies">
            <div v-for="comment in comment.replies" v-bind:key="comment.id">
                <div class="reply-wrap" :class="'reply-' + nextReplyDepth">
                    <div class="avatar">
                        <img src="/images/user-icon.jpg" alt="icon" class="img-fluid"/>
                    </div>

                    <div class="reply-box">
                        <div class="body">
                            <span class="tip tip-left"></span>
                            <div class="message">
                                <h6 class="mb-2"><strong>{{ comment.user.name }}</strong> <small>{{ comment.created_at }}</small></h6>
                                <div class="reply-content">{{ comment.content }}</div>
                                <reply-form :comment="comment" v-if="nextReplyDepth < 3"/>
                            </div>
                        </div>
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
