<!-- /resources/assets/js/components/Leaderboard.vue -->
<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ user.name }}</td>
            <td>{{ user.candidate_id > 0 ? "Sudah Memilih" : "Belum Memilih" }}</td>
        </tr>
        </tbody>
     </table>
<!--
    <table class="table table-primary">
    <thead>
        <tr>
            <th scope="col">Peserta Voting</th>
            <th scope="col">Piihan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr class="{{ $user->candidate ? 'table-success' : 'table-danger' }}">
        <td>{{ $user->name }}</td>
        <td>{{ $user->candidate ? "Sudah Memilih" : "Belum Memilih" }}</td>
      </tr>
      @endforeach
      
    </tbody>
</table> -->

</template>

<script>
    export default {
        props: ['current'],
        data() {
            return {
                users: []
            }
        },
        created() {
            this.fetchTable();
            this.listenForChanges();
        },
        methods: {
            fetchTable() {
                axios.get('/commit').then((response) => {
                    this.users = response.data;
                })
            },
            listenForChanges() {
                Echo.channel('table')
                .listen('UserVote', (e) => {
                        // check if user exists on leaderboard
                        fetchTable();
                    })
            }
        }
    }

</script>

