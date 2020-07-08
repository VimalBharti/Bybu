<template>
  <div class="main-container">
    <div class="flex">
      <div class="search-box">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search everything" />
      </div>
      <div class="join-us">
        <a href="https://www.patreon.com/bePatron?u=18533842" target="_blank">
          <i class="fas fa-link"></i>
          &nbsp;
          join us
        </a>
      </div>
    </div>

    <div class="flex my-6">
      <h1>Cards</h1>
      <div class="arrows">
        <i class="fas fa-arrow-left"></i>
        <i class="fas fa-arrow-right"></i>
      </div>
    </div>
    <div class="resource-container card-wrapper">
      <div class="card card-details">
        <div class="tite">Soft UI Element</div>
        <div
          class="image"
          style="backgroundImage:url('images/data.png');backgroundSize:cover;height:200px"
        ></div>
        <div class="author">
          <a href="#">@alexunderhess</a>
        </div>
      </div>
      <div class="card card-details">
        <div
          class="tite"
          :style="{ color: hex }"
        >Additionally, should you choose to style any of the headers</div>
        <div
          class="image"
          style="backgroundImage:url('images/1.jpg');backgroundSize:cover;height:200px"
        ></div>
        <div class="author">
          <a href="#">@alexunderhess</a>
        </div>
      </div>
      <div class="card card-details">
        <div
          class="tite"
          :style="{ color: hex }"
        >Additionally, should you choose to style any of the headers</div>
        <div
          class="image"
          style="backgroundImage:url('images/3.svg');backgroundSize:cover;height:200px"
        ></div>
        <div class="author">
          <a href="#">@alexunderhess</a>
        </div>
      </div>
    </div>

    <!-- catefory2 -->
    <div class="flex my-6">
      <h1>Phone and Tablets</h1>
      <div class="arrows">
        <i class="fas fa-arrow-left"></i>
        <i class="fas fa-arrow-right"></i>
      </div>
    </div>
    <div class="resource-container card-wrapper">
      <div class="card card-details">
        <div class="tite">Soft UI Element</div>
        <div
          class="image"
          style="backgroundImage:url('images/data.png');backgroundSize:cover;height:200px"
        ></div>
        <div class="author">
          <a href="#">@alexunderhess</a>
        </div>
      </div>
      <div class="card card-details">
        <div
          class="tite"
          :style="{ color: hex }"
        >Additionally, should you choose to style any of the headers</div>
        <div
          class="image"
          style="backgroundImage:url('images/1.jpg');backgroundSize:cover;height:200px"
        ></div>
        <div class="author">
          <a href="#">@alexunderhess</a>
        </div>
      </div>
      <div class="card card-details">
        <div
          class="tite"
          :style="{ color: hex }"
        >Additionally, should you choose to style any of the headers</div>
        <div
          class="image"
          style="backgroundImage:url('images/3.svg');backgroundSize:cover;height:200px"
        ></div>
        <div class="author">
          <a href="#">@alexunderhess</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      hex: "#" + ((Math.random() * 0xffffff) << 0).toString(16)
    };
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
    a {
      font-size: 14px;
      color: #bcc8d0;
      transition: 0.8s all;
      &:hover {
        color: #34343e;
      }
    }
  }
  .image {
    margin-bottom: 1em;
    margin-top: 2em;
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
