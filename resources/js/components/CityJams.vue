<template>
    <section>
        <b-tabs position="is-centered" class="block">
            <b-tab-item label="Jam Sessions" icon="compress-arrows-alt">
              <div class="columns is-multiline">
                <div class="">
                  <div class="notification is-light column is-12 jam-notification">
                    Primar lorem ipsum dolor sit amet, consectetur
                    adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                    consectetur adipiscing elit
                  </div>
                </div>
                <div class="column is-12 jam-column" v-for="session in jam_sessions" :key="session.id">
                  <a :href="'/jam-sessions/'+session.slug" class="box columns">
                    <div class="column is-3">
                      <p class="has-text-right is-size-5">01.01.2020</p>
                      <figure class="image is-square">
                        <img src="" alt="jam_image">
                      </figure>
                    </div>
                    <div class="column is-9">
                      <div class="tags are-medium">
                        <span v-if="session.mode == 'public'" class="tag is-light">{{session.mode}}</span>
                        <span v-if="session.mode == 'public'" class="tag is-dark">secret</span>
                        <span v-if="session.mode == 'public'" class="tag is-warning is-light">indoor</span>
                        <span v-if="session.mode == 'public'" class="tag is-success is-light">outdoor</span>
                      </div>

                      <p class="title">{{session.title}}</p>
                      <p class="subtitle">{{session.descr}}</p>
                      <div class="columns is-multiline">
                        <div class="column is-6">
                          <a :href="'/artists/'+session.user.username" class="is-size-6 has-text-primary"> ~{{session.user.username}}<br></a>
                          <span class="is-size-7">[Rating]</span>

                        </div>
                        <div class="column is-6">
                          <nav class="level">
                            <div class="level-item has-text-centered">
                              <div>
                                <p class="heading">Likes</p>
                                <p class="title">3,456</p>
                              </div>
                            </div>
                            <div class="level-item has-text-centered">
                              <div>
                                <p class="heading">Artists</p>
                                <p class="title">123</p>
                              </div>
                            </div>
                            <div class="level-item has-text-centered">
                              <div>
                                <p class="heading">Jammers</p>
                                <p class="title">456K</p>
                              </div>
                            </div>
                          </nav>
                        </div>
                        <div class="column is-12">
                          <hr>
                        </div>
                        <div class="column is-4">
                          <b-icon icon="map"></b-icon>
                          <span>Location</span>
                        </div>
                        <div class="column is-4">
                          <b-icon icon="clock"></b-icon>
                          <span>Time</span>
                        </div>
                        <div class="column is-4">
                          <b-icon icon="star"></b-icon>
                          <span>Specials</span>
                        </div>
                      </div>

                    </div>
                  </a>
                </div>
              </div>
            </b-tab-item>
            <b-tab-item label="Open Mics" icon="microphone-alt">
              Test2
            </b-tab-item>
        </b-tabs>
    </section>
</template>
<script>
export default {
  props: ['jams'],
  computed: {
    jam_sessions: function() {
      return this.jams.filter(jam => jam.type == 'jam_session');
    },
    open_mics: function () {
      return this.jams.filter(jam => jam.type == 'open_mic');
    }
  }
}
</script>
<style lang="scss">
.jam-column {
  margin-bottom: 25px;
}

.jam-notification {
  margin-top: 25px;
  margin-bottom: 55px;
}
</style>
