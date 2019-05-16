<template>
    <div class="card">
        <div class="card-body">
            <h5 class="todo-title">Main page gomb vagyok</h5>
            <p class="text-sm-center">úgy bizony</p>
            <button data-toggle="modal" data-target=".ls-example-modal-lg" class="btn btn-primary">Large modal</button>

            <button class="btn btn-info" @click="showModal">show modal</button>
        </div>
    </div>
</template>


<script>
    import CommonMainPage from './CommonMainPage.vue'
    export default {
        extends: CommonMainPage,

    }
</script>