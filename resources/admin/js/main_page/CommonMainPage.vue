<template>


    <!-- /****************************************
         * Modal
         ****************************************/ -->
    <div id="myModal" class="modal fade ls-example-modal-lg" ref="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Large Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input
                            type="text"
                            class="form-control todo-field"
                            v-model="mainPageElement.title"
                            placeholder="New "
                    >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</template>


<script>


    export default {
        props: {

        },
        data () {
            return {
                mainPageElement: {
                    id: '',
                    title: 'azta',
                },
                mainPageElements: []
            }
        },
        mounted () {
        },
        methods: {
            showMainPageElementModal(element) {

                let currentObj = this;
                let url = '/admin/pages/get_main_page_elemet';
                axios.post(url, element)
                .then(function (response) {
                    vm.mainPageElement.title = response.data.title
                })
                .catch(function (error) {
                    console.log('<DEBUG>  error', error);
                });
                $('#myModal').modal()
            },
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                this.axios.post('http://localhost:8000/yourPostApi', {
                    name: this.name,
                    description: this.description
                })
                .then(function (response) {
                    currentObj.output = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            },
            showModal() {
                let vm = this;
                let url = '/admin/pages/get_main_page_elemet/1';
                axios.get(url).then((response)=>{
                    console.log('<DEBUG>  response', response);
                    vm.mainPageElement.title = response.data.title
                })

                $('#myModal').modal()
            },
        }
    }
</script>