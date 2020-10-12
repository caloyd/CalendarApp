const { default: Axios } = require('axios');
require('./bootstrap');
window.Vue = require('vue');

const app = new Vue({
  el: '#app',
  data: {
      newEvent: {'event_name': '', 'date_from': '', 'date_to': ''},
      hasError: true,
      events: []
  },
  mounted: function mounted(){
      this.getEvents();
  },
  
  methods: {
      getEvents: function getEvents(){
          var _this = this;
          axios.get('/index').then(function(response){
              _this.events = response.data;
          }).catch(error=>{
              console.log("Get All: "+error);
          });
      },
      createEvent: function createEvent() {
          var input = this.newEvent;
          var _this = this;
          if(input['event_name'] == '' || input['date_from'] == '' || input['date_to'] =='') {
              this.hasError = false;
          }
          else {
            this.hasError= true;
            axios.post('/create', input).then(function(response){
                _this.newEvent = {'event_name': '', 'date_from': '', 'date_to': ''}
                _this.getEvents();
                }).catch(error=>{
                    console.log("Insert: "+error);
                });
            }
      }
  }
});