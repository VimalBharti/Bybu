<template>
    <nav>
        <div class="navigation">
            <div class="logo">
                <img src="images/logo.png" alt="bybu-logo" />
                <!-- BYBU<span class="underscore">_</span> -->
            </div>
            <ul class="top-ul">
                <li>
                    <router-link to="/" exact>
                        Resources
                        <span class="fas fa-th"></span>
                    </router-link>
                </li>
                <li class="has-subnav">
                    <router-link to="/About" exact>
                        About
                        <span class="far fa-question-circle"></span>
                    </router-link>
                </li>
                <li class="has-subnav">
                    <router-link to="/join" exact>
                        Join Us
                        <span class="fas fa-users"></span>
                    </router-link>
                </li>
            </ul>

            <div class="coffee-button">
                <a
                    href="https://www.patreon.com/bePatron?u=18533842"
                    target="_blank"
                >
                    <i class="fab fa-patreon"></i>
                    &nbsp; Become A Patron
                </a>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            active: true
        };
    }
};
</script>

<style lang="scss" scoped>
.navigation {
    padding: 5em 3em;
}

nav {
    border-right: 1px solid #e5e5e5;
    position: fixed;
    width: 20%;
    height: 100vh;
    left: 0;
    bottom: 0;

    .logo {
        font-size: 25px;
        font-weight: 600;
        margin-bottom: 2em;
        text-align: center;
        letter-spacing: 1px;
        span.underscore {
            font-weight: bold;
            color: #d34c64;
        }
        img {
            width: 50%;
            max-height: 30px;
        }
    }

    ul.top-ul {
        height: 100%;
        width: 100%;
        list-style: none;
        padding: 0px;

        li {
            line-height: 60px;
            a {
                text-decoration: none;
                font-size: 16px;
                color: #bcc8d0;
                position: relative;
                display: block;
                width: 100%;
                &:hover {
                    color: #34343e;
                }

                span {
                    position: absolute;
                    top: 35%;
                    right: 0;
                }
            }
        }
    }
    .coffee-button {
        position: absolute;
        bottom: 3em;
        left: 0;
        right: 0;
        width: 100%;
        text-align: center;

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
}
</style>
