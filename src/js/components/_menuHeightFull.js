var menuHeightFull = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.window = $(window)
    this.header = $('#header')
    this.wrapper = $('.tl-header-menu-wrapper')
  },
  eventList: function() {
    if (this.window.width() <= 768) {
      this.menuHeightFull()
    }
  },
  menuHeightFull: function() {
    console.log(this.header.height())
    this.wrapper.css('height', this.window.height() - this.header.height())
  }
}

menuHeightFull.init()
