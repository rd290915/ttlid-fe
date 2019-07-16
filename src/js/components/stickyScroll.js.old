var stickyScroll = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.window = $(window)
    this.header = $('#header')
    this.body = $('#content-body')
  },
  eventList: function() {
    this.stickyScroll()
    this.window.on('scroll', this.stickyScroll.bind(this))
  },
  stickyScroll: function() {
    if (this.window.scrollTop() > 50) {
      this.header.removeClass('bg-black').addClass('bg-white')
    } else {
      this.header.removeClass('bg-white').addClass('bg-black')
    }
  }
}

stickyScroll.init()
