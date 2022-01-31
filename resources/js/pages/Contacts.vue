<template>
    <div class="container">
        <h1>Pagina Contacts</h1>
        <form @submit.prevent="onSubmit" v-if="!formSubmit">
            <div class="col">
                <label for="Name">Name</label>
                <input
                    class="form-control"
                    type="text"
                    name="title"
                    v-model="form.name"
                />
            </div>
            <div class="col">
                <label for="email">Email</label>
                <input
                    class="form-control"
                    type="text"
                    name="title"
                    v-model="form.email"
                />
            </div>
            <div class="col">
                <label for="message">Messaggio</label>
                <textarea
                    class="form-control"
                    type="text"
                    name="title"
                    v-model="form.message"
                ></textarea>
            </div>
            <button class="btn btn-success">Invia</button>
        </form>
        <div class="alert alert-success" v-else>
            L'email è stata inviata con successo.
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            formSubmit: false,
            form: {
                name: "",
                email: "",
                message: "",
            },
        };
    },
    methods: {
        onSubmit() {
            window.axios.post("api/contatti", this.form).then((resp) => {
                this.formSubmit = true;
            });
        },
    },
};
</script>

<style></style>
