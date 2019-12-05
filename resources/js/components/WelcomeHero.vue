<template>
    <div
        :style="{backgroundImage:`url(/img/wejammin-${slides[slideIndex].slug}.jpg)`}"
        class="flex-center position-ref full-height">
            <slot name="welcome-navigation"></slot>
            <div class="content">
                <div class="title ">
                    wejammin`
                </div>
                <div
                    class="city typewriter"
                    v-on:animationend="resetAnim()"
                    :class="{'typing':classIsActive}" >
                    {{ slides[slideIndex].city }}
                </div>
                <div class="slogan m-b-md">
                    <slot name="welcome-slogan"></slot>
                </div>
                <a href="/bcn" class="button is-primary is-large-desktop">
                    JAM in {{slides[slideIndex].slug | toUpperCase }}
                </a>
            </div>
        </div>
</template>
<script>
export default {
    data() {
        return {
            slides: [
                {
                    city: 'Barcelona',
                    slug: 'bcn'
                },
                {
                    city: 'Paris',
                    slug: 'par'
                },
                {
                    city: 'London',
                    slug: 'ldn'
                },
                {
                    city: 'Rome',
                    slug: 'rme'
                }
            ],
            slideIndex: 0,
            classIsActive: false,
        }
    },
    methods: {
        changeSlideIndex: function () {
            const slideDelay = 5000;
            this.classIsActive = true;

            setInterval( () => {
                this.classIsActive = true;

                if(this.slideIndex == 3) {
                    this.slideIndex = 0;
                }
                else {
                    this.slideIndex++
                }
            }, slideDelay)
        },
        resetAnim: function () {
            this.classIsActive = false;
            //this.classIsActive = true;
        }
    },
    mounted(){

        this.changeSlideIndex();
    },
    filters: {
        toUpperCase: function (value) {
            if (!value) return ''
            value = value.toString()
            return value.toUpperCase()
        }
    }

}
</script>
<style lang="scss" scoped>
            .full-height {
                height: 100vh;
                background: rgba(0,0,0,0.65);
                background-blend-mode: overlay;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: #fff!important;
            }

            .title {
                font-size: 94px;
                font-family: 'Dr Sugiyama', cursive;
                color: #fff!important;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            .links > a:hover {
                color: #c0392b;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            .city {
                font-family: 'Nunito', sans-serif;
                font-size: 100px;
                letter-spacing: 10px;
                text-transform: uppercase;
                margin-top: 35px;
                margin-bottom: 35px;
            }

            .city-slug {
                text-transform: uppercase;
            }

            .slogan{
                font-size: 34px;
            }

            .typewriter {
                overflow: hidden; /* Ensures the content is not revealed until the animation */
                border-right: 3px solid #ffffff; /* The typwriter cursor */
                white-space: nowrap; /* Keeps the content on a single line */
                margin: 0 auto; /* Gives that scrolling effect as the typing happens */
                letter-spacing: .15em; /* Adjust as needed */
                animation:
                    blink-caret 1.5s step-end infinite;
            }

            .typing {
                animation:
                    typing .75s steps(20, end),
            }

            /* The typing effect */
            @keyframes typing {
                from { width: 0 }
                to { width: 100% }
            }

            /* The typewriter cursor effect */
            @keyframes blink-caret {
                from, to { border-color: transparent }
                50% { border-color: #ffffff; }
            }

            @keyframes blurring {
                0% {filter: blur(2px);}
                50% {filter: blur(0px);}
                100% {filter: blur(2px);}
            }

            .top-right {
                display: none;
            }

            @media only screen and (max-width:48em) {
                .title {
                    font-size: 42px;
                    margin-bottom: 0px !important;
                }

                .city {
                    font-size: 42px;
                }

                .slogan {
                    font-size: 18px;
                }

                .typewriter {
                    border-right: 1px solid #ffffff;
                }
            }

</style>
