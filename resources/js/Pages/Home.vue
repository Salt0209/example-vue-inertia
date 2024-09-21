<template>
    <div id="my-app">
        <h1>Welcome to the Home Page!</h1>
        <h2>Danh sách User</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
                <tr v-for="user in users" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.password }}</td>
                </tr>
            <tbody>

            </tbody>
        </table>
        <form @submit.prevent="submit">
            <label for="name">Name</label>
            <input type="text" id="name" v-model="form.name" placeholder="Name">

            <label for="email">Email</label>
            <input type="text" id="email" v-model="form.email" placeholder="Email">

            <label for="password">Password</label>
            <input type="text" id="password" v-model="form.password" placeholder="Password">
            <button>Submit</button>
        </form>
    </div>

</template>

<script>
import { router } from '@inertiajs/vue2'
export default {
    props: {
        users: Array,
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
            },
        }
    },
    methods: {
        submit() {
            router.post('/users', this.form)
        },
    },
}
</script>
