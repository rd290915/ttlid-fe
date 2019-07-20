var stickyScroll = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.window = $(window)
    this.header = $('#header')
  },
  eventList: function() {
    this.stickyScroll('stop')
    this.window.on('scroll', $.debounce(100, true, this.stickyScroll.bind(this, 'scroll')))
    this.window.on('scroll', $.debounce(100, this.stickyScroll.bind(this, 'stop')))
  },
  stickyScroll: function(params) {
    if (params === 'stop') {
      this.header.addClass('show')
    } else if (params === 'scroll') {
      this.header.removeClass('show')
    }
  }
}

stickyScroll.init()
