<template>
    <div id="app">
        <form @submit.prevent="addEvent">
        <div class="heading">
            <h1>Calendar</h1>
        </div>
        <div>
            
            <label for="">Event</label>
            <input type="text" v-model="event.event_name">
            
        </div>
        <div>
            <label for="">From</label>
            <input type="date" v-model="event.date_from">
            <label for="">To</label>
            <input type="date" v-model="event.date_to">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save</button>
           
        </div>
        </form>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                event: {}
            }
        },
        methods: {
            addEvent() {
                this.axios
                    .post('http://localhost:8000/api/event/create', this.event)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>

