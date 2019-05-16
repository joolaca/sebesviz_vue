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
            showModal() {
                let vm = this;
                let url = '/admin/pages/get_main_page_elemet/1';
                axios.get(url).then((response)=>{
                    console.log('<DEBUG>  response', response);
                    vm.mainPageElement.title = response.data.title
                })


                /*axios.post(url, vm.newTodo).then(
                    function (request) {
                        // toastr['success'](request.data, "Success");

                        vm.todos.push({
                            id: request.data.todo.id,
                            title: request.data.todo.title,
                            completed: false
                        })
                        vm.newTodo = {
                            id: '',
                            title: '',
                            completed: false
                        }
                    },
                    function (error) {
                        alert(error)
                    }
                )*/

                // let element = this.$refs.modal.$el
                // $(element).modal('show')
                $('#myModal').modal()
            }
        }
    }
</script>