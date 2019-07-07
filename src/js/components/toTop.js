var toTop = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.btnToTop = $('#to-top')
    this.body = $('html, body')
  },
  eventList: function() {
    this.btnToTop.on('click', this.toTop.bind(this))
  },
  toTop: function() {
    this.body.animate({ scrollTop: 0 }, 1000);
  }
}

toTop.init()
