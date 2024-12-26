<template>
    <!-- NA POTOM -->
    <div>
        <h2>Playlist</h2>
        <div v-if="tracks.length === 0">
            <p>TUT PU5T0...</p>
        </div>

        <ul v-else>
            <li v-for="track in tracks" :key="track.id">
                <strong> {{ track.title }} </strong><br>
                Artist: {{ track.artist }} <br>
                Duration: {{ track.duration }} sec. <br>
                <audio :src="track.file_path" controls></audio>
            </li>
        </ul>

    </div>
</template>

<script>
export default {
    name: 'Playlist',
    data() {
        return {
            tracks: []
        }
    },
    methods: {
        async fetchTracks() {
            try {
                const res = await this.$axios.get('/tracks');
                this.tracks = res.data;
                console.log(res);


            } catch(e) {
                console.e('pizdec: ', e);

            }
        }
    },
    mounted(){
        this.fetchTracks();
    }
}
</script>
