<template>
    <div class="join-us">
        <div class="card">
            <h2>Join Our Community</h2>
            <p>
                Just share you Behance, Dribbble or Instagram Page link. We will
                convert your design into code with attribution.
            </p>
            <form @submit.prevent="submit">
                <div class="input-group">
                    <i class="fab fa-instagram"></i>
                    <input
                        type="text"
                        placeholder="Instagram Page"
                        v-model="fields.instagram"
                    />
                </div>
                <div class="input-group">
                    <i class="fab fa-behance"></i>
                    <input
                        type="text"
                        placeholder="Behance Page"
                        v-model="fields.behance"
                    />
                </div>
                <div class="input-group">
                    <i class="fab fa-dribbble"></i>
                    <input
                        type="text"
                        placeholder="Dribbble Page"
                        v-model="fields.dribbble"
                    />
                </div>
                <button class="button" type="submit">{{ button }}</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fields: {},
            errors: {},
            button: "SEND"
        };
    },
    methods: {
        submit() {
            this.errors = {};
            axios
                .post("api/join", this.fields)
                .then(response => {
                    this.button = "Sent Successfully!";
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.error = error.response.data.error || {};
                    }
                });
        }
    }
};
</script>

<style lang="scss" scoped>
.join-us {
    width: 60%;
    margin: 0 auto;
    padding-top: 5%;
    text-align: center;
}
button {
    padding: 20px;
    background: #d34c64;
    color: #fff;
    cursor: pointer;
    margin-top: 2em;
    width: 100%;
    font-size: 1em;
}
.input-group {
    input {
        width: 90%;
        line-height: 2em;
        padding: 0.4em;
        border-radius: 8px;
        font-size: 1em;
        margin-top: 20px;
        &:focus {
            outline: none;
        }
    }
    i {
        font-size: 2em;
        color: #888;
        margin-right: 5px;
    }
}

p {
    color: #888;
    margin-bottom: 2em;
    margin-top: 1em;
    line-height: 25px;
}
.card {
    box-shadow: -1px 15px 30px -12px #ccc;
    border-radius: 2em;
    padding: 4em;
}
</style>
