<template>
  <div class="main-container">
    <div class="flex">
      <div class="search-box">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search components" v-model="search" />
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
      <button class="button filter">Freebies</button>
      <div class="arrows">
        <i class="fas fa-arrow-left"></i>
        <i class="fas fa-arrow-right"></i>
      </div>
    </div>
    <div class="resource-container card-wrapper">
      <div class="card card-details" v-for="(post, index) in fiteredPost" :key="index">
        <div :style="`color: ${post.title_color}`">{{ post.title }}</div>
        <div
          class="image"
          @click="showDetails(post.id)"
          :style="
                        `backgroundImage:url('uploads/design/${post.image}')`
                    "
        ></div>
        <div class="author">
          <a :href="post.designer_link" target="_blank">@{{ post.designer }}</a>
          <ShareNetwork
            network="facebook"
            url="https://www.bybu.cc"
            :title="post.description"
            :description="post.description"
            :quote="post.description"
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
      posts: [],
      search: "",
      markupButtonText: "Copy",
      cssButtonText: "Copy",
      isActive: false,
      isActiveCss: false
    };
  },
  computed: {
    fiteredPost: function() {
      return this.posts.filter(post => {
        return post.title.match(this.search);
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
    showDetails(id) {
      this.$router.push("/post/" + id);
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
    margin-top: 1em;
    cursor: pointer;
    background-size: cover;
    height: 280px;
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
