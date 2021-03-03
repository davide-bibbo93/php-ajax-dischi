// Vue Settings

new Vue({

  el: '#root',

  data: {
    discs: [],

    select: '',

    genres: [],
  },

  mounted(){

    const self=this;

    // chiamata axios a server.php
    axios.get('app/server.php')
    .then(function(resp){
      self.discs = resp.data;
      console.log(self.discs);

      // creo array di generi
      self.discs.forEach((element)=>{
        if(!self.genres.includes(element.genre)){
          self.genres.push(element.genre)
        }
      })
    });
  },

  methods: {
    genreSelect: function(){

      const self = this;

      console.log(self.select);
      if (self.select === 'Tutti') {
        axios.get('app/server.php')
        .then((resp)=>{
          self.discs = resp.data;
          console.log(self.discs);
        });

      }else {
        axios.get('app/server.php?genre=' + self.select)
        .then((resp)=>{
          self.discs = resp.data;
          console.log(self.discs);
        });
      }
    }
  }
});
Vue.config.devtools=true;
