var stickyScroll = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.window = $(window)
    this.header = $('#header')
    this.position = this.window.scrollTop();
  },
  eventList: function() {
    this.stickyScroll()
    this.window.on('scroll', this.stickyScroll.bind(this))
  },
  stickyScroll: function() {
    var scroll = this.window.scrollTop()

    if(scroll > this.position) {
      console.log('scrollDown')
      this.header.removeClass('show')
    } else {
      console.log('scrollUp')
      this.header.addClass('show')
    }

    this.position = scroll
  }
}

stickyScroll.init()
