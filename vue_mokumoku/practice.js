
var home = Vue.extend({
  template:'#home',
  methods:{
    alert:function(){
      alert('Vue.jsへようこそ!!' + this.name);}
  }
})

var nextpage =Vue.extend({
  template:'#nextpage'
})
Vue.component('home',home)
Vue.component('nextpage',nextpage)

var top = new Vue({
  el:'#app',
  data:{
    current:'home'
  },
  methods:{
    route:function(page){
      this.current = page;
    }
  }
})
