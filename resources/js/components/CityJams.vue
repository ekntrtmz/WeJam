<template>
    <section>
        <b-tabs position="is-left is-toggle" class="block" :animated="false">
            <b-tab-item label="Jam Sessions">
              <div class="columns is-multiline">
                  <div class="notification is-light column is-12 jam-notification">
                    Primar lorem ipsum dolor sit amet, consectetur
                    adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                    consectetur adipiscing elit
                  </div>
                <div :class="{'secret-jam' : (session.mode == 'secret')}" class="column is-12 jam-column" v-for="session in jam_sessions" :key="session.id">
                  <div class="box columns has-shadow is-multiline">
                    <div class="column is-3">
                      <figure class="image is-square">
                        <div class="host-wrapper">
                          <div class="media">
                            <div class="media-left">
                              <figure class="image is-48x48">
                                <a :href="'/artists/'+session.user.username">
                                  <img class="is-rounded host-image" src="/img/96x96.png" alt="Placeholder image">
                                </a>
                              </figure>
                            </div>
                            <div class="media-content">
                              <a :href="'/artists/'+session.user.username" class="is-size-6 has-text-primary"> ~{{session.user.username}}<br></a>
                              <p class="subtitle is-6"><span class="is-size-7">Jam Host</span></p>
                            </div>
                          </div>
                        </div>
                        <img class="jam-image" src="/img/jam_placeholder.jpg" alt="jam_image">
                      </figure>
                    </div>
                    <div class="column is-5">
                      <div class="tags are-small jam-tags">
                        <span v-if="session.mode == 'public'" class="tag is-light">{{session.mode}}</span>
                        <span v-if="session.mode == 'secret'" class="tag is-primary">secret</span>
                        <span v-if="session.jam_session_space == 'indoor'" class="tag is-warning is-light">indoor</span>
                        <span v-if="session.jam_session_space == 'outdoor'" class="tag is-success is-light">outdoor</span>
                      </div>
                      <p class="title jam-title"><a :href="'/jam-sessions/'+session.slug">{{session.title}}</a></p>
                      <p class="subtitle">{{session.descr}}</p>
                    </div>
                    <div class="column is-4">
                      <div class="field has-addons jam-actions">
                        <p class="control">
                            <a href="#yaman" class="button yaman-button">
                              <span class="yaman-icon"></span>
                              <span>Yaman</span>
                            </a>
                        </p>
                        <p class="control">
                          <a href="#perform" class="button">
                            <span class="icon is-small">
                              <i class="fas fa-guitar"></i>
                            </span>
                            <span>Perform</span>
                          </a>
                        </p>
                        <p class="control is-last-addon">
                          <a href="#join" class="button is-fullwidth">
                            <span class="icon is-small">
                              <i class="fas fa-user-plus"></i>
                            </span>
                            <span>Join</span>
                          </a>
                        </p>
                      </div>
                      <nav class="level jam-info">
                        <div class="level-item has-text-centered">
                          <div>
                            <p class="heading">Yamen</p>
                            <p class="title">{{ session.yamen_count }}</p>
                          </div>
                        </div>
                        <div class="level-item has-text-centered">
                          <div>
                            <p class="heading">Instruments</p>
                            <p class="title"> -- </p>
                          </div>
                        </div>
                        <div class="level-item has-text-centered">
                          <div>
                            <p class="heading">Jammers</p>
                            <p class="title">{{ session.jammers_count }}</p>
                          </div>
                        </div>
                      </nav>
                      <div class="column is-12">
                        <div class="columns is-multiline is-mobile is-variable jam-meta-wrapper">
                          <div class="jam-meta-box column is-6">
                            <b-icon type="small" icon="calendar-day"></b-icon>
                            <span>{{ session.jam_session_date }}</span>
                          </div>
                          <div class="jam-meta-box column is-6">
                            <b-icon icon="clock" ></b-icon>
                            <span>{{ session.jam_session_time }}</span>
                          </div>
                          <div class="jam-meta-box column is-12">
                            <b-icon icon="map-marker-alt" ></b-icon>
                            <span>{{ session.jam_session_location }}</span>
                          </div>
                        </div>
                      </div>
                      <a :href="'/jam-sessions/'+session.slug" class="button is-fullwidth is-info is-rounded">Jam Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </b-tab-item>
            <b-tab-item label="Open Mics">
              <div class="columns is-multiline">
                <div class="notification is-light column is-12 jam-notification">
                  Primar lorem ipsum dolor sit amet, consectetur
                  adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                  consectetur adipiscing elit
                </div>
              </div>
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

  &.secret-jam {
    .box {
      border: 3px solid #ba1200;
      box-sizing: border-box;
    }

  }

}

.jam-notification {
  margin-top: 25px;
  margin-bottom: 55px;
}

.jam-tags {
  margin-bottom: 0px!important;
}

.jam-title {
  text-transform: uppercase;

  a {
    color: #363636;
    &:hover {
      text-decoration: underline;
    }
  }
}

.jam-image {
  object-fit: cover;
}

.host-wrapper {
  position: absolute;
  bottom: 0;
  z-index: 1;
  background:rgba(255,255,255,0.9);
  width: 100%;
  padding: 10px;
}

.host-image {
  border: 1px solid transparent;
  &:hover {
    border-color: #ba1200;
  }
}

.jam-info {
  background: whitesmoke;
  border-radius: 5px;
  padding: 5px;
  margin-bottom: 5px!important;
}

.jam-meta-box {
  background: whitesmoke;
  padding: 5px;
  margin-bottom: 7px;
  font-size: 14px;
  border-radius: 5px;

  .icon {
    color:#363636;
    font-size: 12px;
  }
}

.is-last-addon {
  width: 100%;
}

.yaman-icon {
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMS45NDggNTExLjk0OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTExLjk0OCA1MTEuOTQ4OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTUwMS44MDcsMjE4LjU2NWMtMC4wNDctMC4xNjEtMC4wOTUtMC4zMjItMC4xNTItMC40ODRjLTcuNzA4LTIyLjk1NS0xNy42MTctMzguNjc1LTMwLjE3LTQ4LjENCgkJCWMtMS42MzEtMTQuMzM2LTMuOTczLTI5LjQ0OS03LjA4My00Ni40ODhjMC0wLjAzOC0wLjAxLTAuMDY2LTAuMDE5LTAuMTA0Yy03LjUwOS0zOC41MTQtMzEuNzkxLTYzLjM5My02MS44NjctNjMuMzkzaC04LjY1Nw0KCQkJYy0xNC4xMDgsMC0zMi42MzUsNS42ODktNDUuOTc2LDMwLjYyNWMtOC4zNTMtMjguMTQxLTM0LjE2Mi00OS41ODgtNjIuNzc3LTQ5LjU4OGgtMS4zOTRjLTI4Ljg3MSwwLTU0Ljg4OCwyMS44MzYtNjIuOTk1LDUwLjM0Nw0KCQkJYy0xMS45MDktMjAuMzU3LTI5LjA2MS0zMS4zODQtNDkuMjk0LTMxLjM4NGgtMS41ODNjLTI5LjM3NCwwLTU1Ljc3LDIyLjYwNC02My4zMzYsNTEuODQ1Yy0xMC45NDItMTUuNTQtMjQuNDE1LTIzLjQtNDAuMTczLTIzLjQNCgkJCWMtMTcuOTg2LDAtNDIuMzgyLDkuOTQ2LTU2LjY2MSw1Ny45NzlDLTEuODM5LDE5OC4xNDItMy4wOTEsMjUwLjY5Nyw2LjAwMiwzMDIuODY1bDMuODIxLDE4LjkzNQ0KCQkJYzguMzYzLDI4Ljc3NiwyNS43OTksNDEuNjA1LDU2LjUxLDQxLjYwNWMxNy43MywwLDMzLjA4MS02LjkwMyw0My4zNDktMTguMTY3YzEwLjAxMiwyMi4wNTQsMzIuODkxLDM3LjEyOSw2MC4xNiwzNy4xMjloMS41ODMNCgkJCWMyMC44NTksMCwzOC44NTUtOC4zNTMsNTAuNjg4LTIxLjkwMmMzLjY5OCw5LjY5LDkuODQyLDE4LjExLDE3LjYyNiwyNC44MTNjLTEuMDMzLDEuMDcxLTEuODMsMi4zMzItMi4yNzYsMy43NTUNCgkJCWMtMy43OTMsMTIuMTkzLTMuNDUxLDI4LjE4OCwwLjg4Miw0MC43MzJjOC43ODksMjUuNTA1LDMyLjI0Niw0MS4xNSw1OC40ODIsNDEuMTVjNi4zMzQsMCwxMi44MjgtMC45MiwxOS4zMjMtMi44MTYNCgkJCWMwLDAsMTIxLjk1MS0zMy45MTUsMTIyLjMwMi0zNC4wMmM0My45MjgtMTIuOTE0LDU1LjU0My00OC44Miw2My4zMjctNzIuODg0QzUxNS4zMjgsMzEzLjk1OCw1MTUuMzM3LDI2Ny4yOTksNTAxLjgwNywyMTguNTY1eg0KCQkJIE00NTUuMTQsMjI5LjIyMmMtMC4wMzgsMS40ODktMC4wOTUsMi45OTYtMC4xNTIsNC41MDRjLTAuMDk1LDIuNzEyLTAuMjE4LDUuNDYxLTAuMzcsOC4yNjhjLTAuMDc2LDEuNTE3LTAuMTUyLDMuMDM0LTAuMjQ3LDQuNTcNCgkJCWMtMC4yNTYsNC4xNTMtMC41NTksOC4zODItMC45MiwxMi44Yy0wLjA3NiwwLjkyLTAuMTgsMS44ODctMC4yNTYsMi44MTZjLTAuMzQxLDMuOTQ0LTAuNzMsOC4wMTItMS4xNTcsMTIuMjEyDQoJCQljLTAuMTMzLDEuMjg5LTAuMjY2LDIuNTg4LTAuMzk4LDMuODk3Yy0wLjU1LDUuMTM5LTEuMTM4LDEwLjQxMS0xLjgxMSwxNi4wMTRsLTQuMDIsMjcuMTgzDQoJCQljLTMuMzc1LDE1LjY2My0xMy40ODMsNDEuOTE4LTQzLjI5Miw0MS45MThoLTguNjU3Yy0yNC40NDMsMC00Mi44NjYtMTctNDMuMDQ2LTM5LjU5NXYtOTMuMTQ2YzAtNS4yNDMtNC4yNDgtOS40ODItOS40ODItOS40ODINCgkJCWMtNS4yMzQsMC05LjQ4MSw0LjIzOC05LjQ4MSw5LjQ4MnY5Mi42NjJjMCwwLjA1Ny0wLjAzOCwwLjEwNC0wLjAzOCwwLjE2MXYxNC42M2MwLDI1LjIyMS0yMC4wNzIsNDQuMjUtNDYuNzA2LDQ0LjI1aC0xLjM5NA0KCQkJYy0yLjg2MywwLTUuNjMyLTAuMzIyLTguMzQ0LTAuNzY4Yy0wLjgyNS0wLjE0Mi0xLjY1LTAuMzAzLTIuNDc1LTAuNDg0Yy0yLjEzMy0wLjQ2NS00LjItMS4wNjItNi4yMDEtMS43OTINCgkJCWMtMC41NS0wLjE5OS0xLjEyOC0wLjMzMi0xLjY3OC0wLjU1OWMtMTYuNTI2LTYuNjY1LTI3Ljg0Ny0yMS45OTctMjcuOTgtNDAuMzM0di05OC4yODVjMC01LjI0My00LjI0OC05LjQ4MS05LjQ4Mi05LjQ4MQ0KCQkJYy01LjIzNCwwLTkuNDgxLDQuMjM4LTkuNDgxLDkuNDgxdjc5LjY0NGMwLDAuMDU3LTAuMDM4LDAuMTA0LTAuMDM4LDAuMTYxYzAsMjQuNzY2LTIwLjAzNCw0My40NTQtNDYuNjExLDQzLjQ1NGgtMS41ODMNCgkJCWMtMjYuNTc3LDAtNDYuNjItMTguNjg4LTQ2LjYyLTQzLjQ1NHYtMy43OTNjMC4wMS0wLjA1NywwLjAzOC0wLjEwNCwwLjAzOC0wLjE2MXYtNzUuODUyYzAtNS4yNDMtNC4yNDgtOS40ODEtOS40ODItOS40ODENCgkJCXMtOS40ODEsNC4yMzgtOS40ODEsOS40ODF2NjkuMzY3YzAsMC4wNTctMC4wMzgsMC4xMDQtMC4wMzgsMC4xNjFjMCwxOS44MjYtMTYuMjk5LDM0Ljc2OS0zNy45MjYsMzQuNzY5DQoJCQljLTIyLjU1NiwwLTMyLjIyOC03LjA0NS0zOC4xMDYtMjcuMTQ2bC0zLjU4NC0xNy45MmMtOC42MTktNDkuNDc0LTcuNDMzLTk5LjU0NiwzLjM3NS0xNDguMTg2DQoJCQljOC42NDctMjkuMDUxLDIxLjU0Mi00My43ODUsMzguMzE1LTQzLjc4NWMxMS40ODIsMCwyMS4xNjMsNy42NzEsMjkuNjAxLDIzLjQzOGMxLjY1LDMuMDgxLDQuODY0LDUuMDA2LDguMzYzLDUuMDA2aDkuNTY3DQoJCQljNS4wODIsMCw5LjI2My00LjAwMSw5LjQ3Mi05LjA4M2MxLjEtMjUuOTEzLDIyLjM5NS00Ny44MDYsNDYuNTA3LTQ3LjgwNmgxLjU4M2MyMC4zMTksMCwzMS44MiwxNy40NDYsMzcuODg4LDMyLjA3Ng0KCQkJYzEuNDcsMy41NDYsNC45Myw1Ljg1LDguNzYxLDUuODVoOS41NzZjNS4wNzMsMCw5LjI0NC0zLjk5Miw5LjQ3Mi05LjA2NGMxLjEzOC0yNS45MjIsMjIuNDgxLTQ3LjgyNSw0Ni41OTItNDcuODI1aDEuMzk0DQoJCQljMjQuMTIxLDAsNDUuNDU0LDIxLjkwMiw0Ni41OTIsNDcuODI1YzAuMjI4LDUuMDYzLDQuMzk5LDkuMDY0LDkuNDcyLDkuMDY0aDkuNjQzYzMuOTgyLDAsNy41NDctMi40OTQsOC45MTMtNi4yMzkNCgkJCWM3LjYzMy0yMS4wMywxOS4xMjQtMzEuNjg3LDM0LjEzMy0zMS42ODdoOC42NTdjMjQuOTkzLDAsMzguOTAzLDI1Ljg0Nyw0My4yNDUsNDguMDA1YzMuNDYxLDE4LjkzNSw1LjkzNSwzNS40MjMsNy41LDUxLjEyNA0KCQkJYzAuMDA5LDAuMDY2LTAuMDI4LDAuMTMzLTAuMDE5LDAuMTk5YzAuODUzLDguNjQ3LDEuNDUxLDE3LjAxLDEuNzczLDI1LjQyOWMwLjAwOSwwLjM4OSwwLjAyOCwwLjc3OCwwLjAzOCwxLjE3Ng0KCQkJYzAuMTMzLDMuNzY0LDAuMTk5LDcuNTQ3LDAuMjI4LDExLjM3OGMwLDAuNDY1LDAuMDA5LDAuOTEsMC4wMTksMS4zNzVDNDU1LjMwMSwyMjEuNDI4LDQ1NS4yNDQsMjI1LjI5Nyw0NTUuMTQsMjI5LjIyMnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==");
  display: block;
  width: 20px;
  height: 20px;
  background-size: contain;
  background-origin: content-box;
  background-position: center;
  background-repeat: no-repeat;
  margin-right: 5px;
}

</style>
