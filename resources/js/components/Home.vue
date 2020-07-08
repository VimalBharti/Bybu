<template>
    <div class="main-container">
        <div class="flex">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input
                    type="text"
                    placeholder="Search components"
                    v-model="search"
                />
            </div>
            <div class="join-us">
                <a href="https://www.instagram.com/bybu.cc/" target="_blank">
                    <i class="fab fa-instagram"></i>
                    &nbsp; follow
                </a>
            </div>
        </div>
        <div class="flex my-6">
            <h1>Design Resources</h1>
            <button class="button filter">
                Freebies
            </button>
            <div class="arrows">
                <i class="fas fa-arrow-left"></i>
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
        <div class="resource-container card-wrapper">
            <div
                class="card card-details"
                v-for="(post, index) in fiteredPost"
                :key="index"
            >
                <div :style="`color: ${post.title_color}`">
                    {{ post.title }}
                </div>
                <!-- Dialog Modal -->
                <div class="dialog-box" v-show="dialogBox">
                    <div class="modal" id="modal">
                        <div class="modal-inner">
                            <div class="modal__photo">
                                <img :src="`uploads/design/${post.image}`" />
                            </div>
                            <div class="modal__text">
                                <div class="text-box">
                                    <div class="actions">
                                        <h2>Markup</h2>
                                        <button
                                            type="button"
                                            v-clipboard:copy="post.markup"
                                            v-clipboard:success="onCopy"
                                            v-clipboard:error="onError"
                                            :class="{ active: isActive }"
                                        >
                                            {{ markupButtonText }}
                                        </button>
                                    </div>
                                    <pre
                                        v-highlightjs="post.markup"
                                    ><code class="html"></code></pre>
                                </div>
                                <div class="text-box">
                                    <div class="actions">
                                        <h2>CSS</h2>
                                        <button
                                            type="button"
                                            v-clipboard:copy="post.css"
                                            v-clipboard:success="onCopyCss"
                                            v-clipboard:error="onError"
                                            :class="{ active: isActiveCss }"
                                        >
                                            {{ cssButtonText }}
                                        </button>
                                    </div>
                                    <pre
                                        v-highlightjs="post.css"
                                    ><code class="css"></code></pre>
                                </div>
                            </div>
                            <a @click="closeDetails()" class="modal__close"
                                >X</a
                            >
                        </div>
                    </div>
                </div>
                <!-- Dialog Modal Ends -->
                <div
                    class="image"
                    @click="showDetails()"
                    :style="
                        `backgroundImage:url('uploads/design/${post.image}')`
                    "
                ></div>
                <div class="author">
                    <a :href="post.designer_link" target="_blank"
                        >@{{ post.designer }}</a
                    >
                    <ShareNetwork
                        network="facebook"
                        url="https://www.bybu.cc"
                        :title="post.title"
                        description="This week, I’d like to introduce you to 'Vite', which means 'Fast'. It’s a brand new development setup created by Evan You."
                        :quote="post.title"
                        hashtags="bybu"
                    >
                        <i class="fas fa-share-alt"></i>
                    </ShareNetwork>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dialogBox: false,
            titleColor: "",
            markupButtonText: "Copy",
            cssButtonText: "Copy",
            isActive: false,
            isActiveCss: false,
            posts: [],
            search: ""
        };
    },
    computed: {
        fiteredPost: function() {
            return this.posts.filter(post => {
                return post.description.match(this.search);
            });
        }
    },
    mounted() {
        this.loadData();
    },
    methods: {
        loadData: async function() {
            axios
                .get("api/all-post")
                .then(res => {
                    if (res.status == 200) {
                        this.posts = res.data;
                    }
                })
                .catch(err => {
                    console.log(err);
                });
        },
        showDetails() {
            this.dialogBox = true;
        },
        closeDetails() {
            this.dialogBox = false;
        },
        onCopy: function(e) {
            console.log("copied");
            this.markupButtonText = "Copied";
            this.isActive = !this.isActive;
            this.isActiveCss = false;
            this.cssButtonText = "Copy";
        },
        onCopyCss: function(e) {
            console.log("copied");
            this.cssButtonText = "Copied";
            this.isActiveCss = !this.isActiveCss;
            this.isActive = false;
            this.markupButtonText = "Copy";
        },
        onError: function(e) {
            console.log("failed");
        }
    }
};
</script>

<style lang="scss" scoped>
button {
    border: 1px solid #bcc8d0;
    color: #6b747a;
    font-size: 14px;
    padding: 4px 10px;
    border-radius: 5px;
    cursor: pointer;
    background: #fff;
}
button.active {
    border: 1px solid #d34c64;
    color: #fff;
    font-size: 14px;
    padding: 4px 10px;
    border-radius: 5px;
    background: #d34c64;
}
.flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.search-box {
    display: flex;
    justify-content: center;
    align-items: center;
    .fas {
        margin-right: 12px;
    }
}
.filter {
    background: transparent;
    border: 1px solid #bcc8d0;
    .fas {
        margin-left: 12px;
    }
}
.card-details {
    .author {
        display: flex;
        justify-content: space-between;
        a {
            font-size: 14px;
            color: #bcc8d0;
            transition: 0.8s all;
            &:hover {
                color: #34343e;
            }
        }
        i {
            color: #bcc8d0;
            cursor: pointer;
        }
    }
    .image {
        margin-bottom: 1em;
        margin-top: 2em;
        cursor: pointer;
        background-size: cover;
        height: 200px;
        background-position: center;
    }
    .title {
        color: #34343e;
    }
}

input {
    padding: 10px 0px;
    width: 400px;
    border: none;
    outline: none;
    border-bottom: 1px solid #bcc8d0;
    font-size: 0.9em;
    &:placeholder {
        color: #bcc8d0;
    }
}
.join-us {
    a {
        padding: 12px 15px;
        border-radius: 10px;
        border: 1px solid #bcc8d0;
        text-decoration: none;
        color: #34343e;
        font-size: 13px;
        text-transform: uppercase;
        .fab {
            color: #d34c64;
        }
    }
}
</style>
