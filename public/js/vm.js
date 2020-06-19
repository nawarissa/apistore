
Vue.component('rest-table', {
  props: ['name', 'position', 'count', 'imgUrl'],
  template: '<div><img :src="imgUrl" :alt="name" /><h2>{{ name }}</h2><p>{{ position }} - {{ count }}</p></div>'
})

var vm = new Vue({
  el: "#app",
  data: {
    page: "booking",
    tables: []
  },
  computed: {
    groupedTables() {
      return _.chunk(this.tables, 3);
    }
  }
})

axios({
  url: "/api/tables",

  method: "GET",

  headers: {
    "Accept": "application/json",
    "Content-Type": "application/json"
  },

  responseType: 'json',
}).then(function(response) {
  vm.tables = response.data

})
