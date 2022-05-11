<template>
    <div>
        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">id</th>-->
<!--                <th scope="col">Имя</th>-->
<!--                <th scope="col">Возраст</th>-->
<!--                <th scope="col">Работа</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr v-for="person in persons">-->
<!--                <th scope="row">{{ person.id }}</th>-->
<!--                <td>{{ person.name }}</td>-->
<!--                <td>{{ person.age }}</td>-->
<!--                <td>{{ person.job }}</td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

export default {
    name: "PostComponent",

    data() {
        return {
            persons: null
        }
    },

    mounted() {

    },

    methods: {
        parentLog() {
            console.log('this is parent component');
        }
    },

    computed: {

    },

    components: {
        CreateComponent,
        IndexComponent,
    }
}
</script>

<style scoped>

</style>
