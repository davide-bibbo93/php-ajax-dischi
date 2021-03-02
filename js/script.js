// Vue Settings

new Vue({

  el: '#root',

  data: {
    // array dischi
    disks:[],
  },

  mounted() {
    const self = this;
    // chiamata axios verso app/server.php
    axios.get("http://localhost/php-ajax-dischi/app/server.php")
    .then(function(resp) {
      self.disks = resp.data;
      console.log(self.disks);
    });
  },

  methods:{

  },
});
Vue.config.devtools = true
