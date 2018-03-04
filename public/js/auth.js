  var app = new Vue({
    el: '#container',
    data: {
      state: '__signingin'
    },
    methods: {
      goToRegistration () {
        this.state = '__registration'
      },
      goToLogin () {
        this.state = '__signingin'
      }
    }
  });
