<template>
    <div>

        <div class="callout callout-default">
            <div class="avatar">
                <img src="/images/user-icon.jpg" alt="icon" class="img-fluid"/>
                <!-- <img :src="'https://via.placeholder.com/40/FF0000/FFFFFF?text=' + comment.user.name_first_character" class="img rounded-circle"> -->
            </div>
            <div class="comment-meta ml-3">
                <strong class="text-primary mr-1">{{ comment.user.name }}</strong>
                <small class="text-muted">{{ comment.created_at }}</small>
            </div>
            <div class="content">
                {{ comment.content }}
            </div>
        </div>

    </div>

</template>

<script>
    import Comment from './Comment.vue';
    export default {
        props: ['comment'],

        components: {
            Comment
        },
    }
</script>