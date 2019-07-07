var contentMinHeight = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.window = $(window)
    this.header = $('#header')
    this.footer = $('#footer')
    this.body = $('#content-body')
  },
  eventList: function() {
    this.contentMinHeight()
  },
  contentMinHeight: function() {
    this.body.css({
      'min-height': this.window.height() - (this.header.height() + this.footer.height())
    })
  }
}

contentMinHeight.init()
