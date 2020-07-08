<template>
    <div class="main-container">
        <div class="logo">BYBU<span class="underscore">_</span></div>
        <img src="images/about.svg" />
        <p>
            You can use the resource in any project, commercial or personal
            <br />
            without attribution or any costs.
        </p>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.main-container {
    text-align: center;
}
img {
    max-width: 300px;
    width: 100%;
    margin-bottom: 1em;
}
p {
    color: #777;
    line-height: 2rem;
}
.logo {
    font-size: 3rem;
    font-weight: 600;
    margin-bottom: 1em;
    text-align: center;
    letter-spacing: 1px;
    span.underscore {
        font-weight: bold;
        color: #d34c64;
    }
}
</style>
