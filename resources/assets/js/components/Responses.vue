<template>
    <div class="row">
        <a href="#" class="btn btn-outline-primary" v-on:click="load">Ver respuestas</a>

        <div class="col-12 mt-2" v-for="response in responses">
            <div class="card-text">
                <div class="card-text">
                    {{ response.message }}
                </div>
                <div class="card-footer text-muted">
                    {{ response.created_at }} - ({{ response.user.name}})
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['message'],
        data() {
            return {
                responses: []
            }
        },

        methods: {
            load() {
                axios.get('/api/messages/' + this.message + '/responses')
                    .then(res => {
                        this.responses = res.data;
                    });
            }
        }
    }
</script>
