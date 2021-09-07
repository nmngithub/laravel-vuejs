<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title"><h1 class="text-center">Companies</h1></span> <br>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Company Id</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="showEmployee in employees">
                        <th>{{showEmployee.id}}</th>
                        <th>{{showEmployee.firstname}}</th>
                        <th>{{showEmployee.lastname}}</th>
                        <th>{{showEmployee.company_id}}</th>
                        <th>{{showEmployee.email}}</th>
                        <th>{{showEmployee.phone}}</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-footer">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item" v-bind:class="[{ disabled: !pagination.prev_page_url}]">
                        <a class="page-link" @click="fetchEmployees(pagination.prev_page_url)" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">{{pagination.current_page}}</a></li>
                    <li class="page-item" v-bind:class="[{ disabled: !pagination.next_page_url}]">
                        <a class="page-link" @click="fetchEmployees(pagination.next_page_url)" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Employee',
        data() {
            return {
                employees:[],
                employee: {
                    id: '',
                    firstname: '',
                    lastname: '',
                    company_id: '',
                    email: '',
                    phone: ''
                },
                id: '',
                pagination: {},
                edit:false,


            }
        },
        mounted(){
            this.fetchEmployees()
        },
        methods:{
            fetchEmployees(page_url){
                page_url = page_url || 'http://laravel-vuejs.test/api/employee';
                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                        this.employees = res.data;
                        this.makePagination(res);
                    })
                    .catch(error => 'Error')
            },
            makePagination(res){
                let pagination = {
                    current_page: res.current_page,
                    last_page: res.last_page,
                    next_page_url: res.next_page_url,
                    prev_page_url: res.prev_page_url,
                };
                this.pagination = pagination
            }
        }
    }
</script>

<style>

</style>
