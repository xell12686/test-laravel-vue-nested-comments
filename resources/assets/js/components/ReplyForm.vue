<template>
    <div>
        <a href="#" @click.prevent="showReplyForm">Reply</a>
        <div v-if="reply_form">
            <div class="form-group">
            <div class="d-flex align-items-start">
                <div class="avatar">
                    <img src="/images/user-icon.jpg" alt="icon" class="img-fluid"/>
                </div>
                <textarea class="form-control ml-2" v-model="reply_text" placeholder="Add a public reply..." cols="50"></textarea>
            </div>
            </div>
            <button class="btn btn-secondary" @click.prevent="hideReplyForm()">Cancel</button>
            <button class="btn btn-primary" @click.prevent="reply()">Reply</button>
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
