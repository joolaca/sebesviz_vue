
<template>
    <!-- Recommendation Admin-->
    <div class="card">
        <div class="card-body">
            <h1>Recommendation Admin Vagyok</h1>
            <img style="width:100%" src="/assets/admin/img/front_sections/recommendation.jpg" alt="">

            <div id="svg-container">
                <svg width='100%' height='100%' viewBox="0 0 100 100"
                     preserveAspectRatio="none">


                    <polygon points="0,0 0,100 33,100 33,0"></polygon>
                </svg>
            </div>
        </div>
    </div>

</template>

<style>

    #svg-container {
        width: 100%;
        height: 400px;

        background-image:url("/assets/admin/img/front_sections/recommendation.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    polygon {
        stroke: black;
        stroke-width:1;
        fill: #8FF;
        vector-effect: non-scaling-stroke;
    }
</style>

<script>
    import CommonMainPage from './CommonMainPage.vue'
    export default {
        extends: CommonMainPage,

    }
</script>