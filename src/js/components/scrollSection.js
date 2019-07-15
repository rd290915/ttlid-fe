var scrollSection = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.body = $('html, body')
    this.btn = $('[j-direction="scroll-section"]')
    this.header = $('#header')
  },
  eventList: function() {
    this.btn.on('click', this.scrollSection.bind(this))
  },
  scrollSection: function(e) {
    var target = e.currentTarget.getAttribute('j-target')
    var calc = $('#' + target + '').offset().top - this.header.height()

    this.body.animate({ scrollTop: calc }, 1000);
  }
}

scrollSection.init()
