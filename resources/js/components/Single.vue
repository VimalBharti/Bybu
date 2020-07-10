<template>
  <div class="single-post">
    <div class="image-preview" :style="{ backgroundImage: `url('/uploads/design/${post.image}')` }">
      <router-link to="/" exact>
        <span class="fas fa-long-arrow-alt-left"></span>
      </router-link>
    </div>
    <div class="codes">
      <div class="text-box">
        <div class="actions">
          <h2>Markup</h2>
          <button
            type="button"
            v-clipboard:copy="post.markup"
            v-clipboard:success="onCopy"
            v-clipboard:error="onError"
            :class="{ active: isActive }"
          >{{ markupButtonText }}</button>
        </div>
        <pre v-highlightjs="post.markup"><code class="html"></code></pre>
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
          >{{ cssButtonText }}</button>
        </div>
        <pre v-highlightjs="post.css"><code class="css"></code></pre>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Single",
  data() {
    return {
      id: this.$route.params.id,
      post: {},
      markupButtonText: "Copy",
      cssButtonText: "Copy",
      isActive: false,
      isActiveCss: false
    };
  },
  created() {
    axios
      .get("/api/all-post/" + this.id)
      .then(res => {
        if (res.status == 200) {
          this.post = res.data;
        }
      })
      .catch(err => {
        console.log(err);
      });
  },
  methods: {
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
.single-post {
  width: 100%;
  display: flex;
}
.image-preview {
  width: 60%;
  height: 100vh;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
  img {
    width: 100%;
    height: 100%;
  }
  span {
    position: absolute;
    top: 1em;
    left: 1em;
    font-size: 2rem;
    color: #d34c64;
  }
}
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
.codes {
  width: 40%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  padding: 2rem;
  .text-box {
    margin-bottom: 1em;
    margin-top: 0.5em;
    .actions {
      margin-bottom: 12px;
      display: flex;
      justify-content: space-between;
      h2 {
        font-size: 1.2rem;
        font-weight: 600;
        text-transform: uppercase;
        color: #0a0a0a;
      }
    }
    p,
    pre {
      box-shadow: -1px 5px 5px 2px #ddd;
      font-size: 14px;
      line-height: 21px;
      height: 38vh;
      overflow-y: scroll;
      border-radius: 4px;
    }
    code {
      padding: 12px;
      height: 100%;
    }
  }
}
</style>