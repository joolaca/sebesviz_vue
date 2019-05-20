
<template>


    <!-- Recommendation Admin-->
    <div class="card">
        <div class="card-body">
            <h3>Recommendation1 Admin Vagyok</h3>
            <laca_test message="req ből való vagyok"></laca_test>


            <button @click="showMainPageElementModal(recommendation1_1)">egyes Recommendation</button>
            <img  src="/assets/admin/img/front_sections/350x400/recommendation1_1.jpg" alt="">

        </div>
    </div>

</template>


<script>

    import CommonMainPage from './CommonMainPage.vue'

    import LacaTest from '@/front/main_page/Recommendation/recommendation_element.vue'


    export default {
        extends: CommonMainPage,LacaTest,
        data () {

            let recommendation1=[];;
            var i;
            for (i = 0; i < 6; i++) {
                recommendation1[i] = {
                    sequence: i,
                    type: 'recommendation_1'
                };
            }
            return {
                recommendation1,

            }
        },
        components: {
            'laca_test': LacaTest
        },
        created: function () {
            // Alias the component instance as `vm`, so that we
            // can access it inside the promise function
            var vm = this
            // Fetch our array of posts from an API
            fetch('https://jsonplaceholder.typicode.com/posts')
                .then(function (response) {
                    return response.json()
                })
                .then(function (data) {
                    vm.posts = data
                })
        }
    }

    

</script>