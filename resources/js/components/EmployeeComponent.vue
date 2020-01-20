<template>
    <div>
        <h1>Empleados registrados</h1>


        <b-table striped hover :items="items">
            <template v-slot:cell(email)="data">
                <!-- `data.value` is the value after formatted by the Formatter -->
                <a v-on:click="onDetail(data.value)" href="#">{{ data.value }}</a>
            </template>

        </b-table>
    </div>
</template>

<script>
    var employees = [

    ]
    export default {
        mounted(){
            axios.get('http://127.0.0.1:8000/api/employee', {
            }).then(response => {
                (this.items = response.data)
            })
        },
        methods: {
            onDetail(value) {

                this.$router.push({ path: '/empleado/'+value.toString().toLowerCase()})
            }
        },

        data() {
            return {
                files: [
                    {key: 'id' },
                    {key: 'name'},
                    {key: 'email'}
                ],
                items: [
                ]
            }
        }
    }
</script>