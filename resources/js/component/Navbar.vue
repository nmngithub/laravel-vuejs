<template>
    <nav class="bg-secondary text-light text-center p-2">
        <h1>My Project Laravel With Vuejs</h1> <br>
        <ul class="d-flex justify-content-around align-items-center list-unstyled p-0">
            <li class="btn btn-warning"><a class="text-decoration-none fw-bold" href="/company">Companies</a></li>
            <li class="btn btn-warning"><a class="text-decoration-none fw-bold" href="/customer">Customers</a></li>
            <li class="btn btn-warning"><a class="text-decoration-none fw-bold" href="/employee">Employees</a></li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: 'Navbar'
    }
</script>

<style>
</style>
