<template>
    <div class="clearfix">
        <a href="#" class="comment-reply float-right" v-if="!reply_form" @click.prevent="showReplyForm"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
        <div v-if="reply_form">
            <div class="form-group my-2 ml-4">
                <textarea class="form-control" v-model="reply_text" placeholder="Add a public reply..." cols="50"></textarea>
            </div>
            <div class="form-group ml-4">
                <button class="btn btn-secondary btn-sm" @click.prevent="hideReplyForm()">Cancel</button>
                <button class="btn btn-primary btn-success btn-sm" @click.prevent="reply()">Reply</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['comment'],

        data() {
            return {
                reply_form: false,
                reply_text: '',
            }
        },
        methods: {
            showReplyForm() {
                this.reply_form = true;
            },

            hideReplyForm() {
                this.reply_form = false;
                this.reply_text = '';
            },

            reply() {
                axios.post('comments/create', {
                    text: this.reply_text,
                    parent_id: this.comment.id,
                })
                .then(({data}) => {
                    console.log('okay');
                    Fire.$emit('updated');
                    this.hideReplyForm();
                })
            }
        }
    }
</script>
