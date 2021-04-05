<template>
    <div>

        <div class="callout callout-default">
            <div class="avatar">
                <img src="/images/user-icon.jpg" alt="icon" class="img-fluid"/>
            </div>
            <div class="comment-meta ml-3">
                <strong class="text-primary mr-1">{{ comment.user.name }}</strong>
                <small class="text-muted">{{ comment.created_at }}</small>
            </div>
            <div class="content">
                {{ comment.content }}
            </div>
            <reply-form :comment="comment"/>
        </div>

        <replies :comment="comment" v-bind:key="comment.id" :depth="1" />

    </div>

</template>

<script>
    import ReplyForm from './ReplyForm.vue';
    import Replies from './Replies.vue';
    import Comment from './Comment.vue';
    export default {
        props: ['comment'],

        components: {
            ReplyForm,
            Replies,
            Comment
        },
    }
</script>