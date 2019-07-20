var heightWidhtEqual = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.wrapper = document.querySelectorAll('[j-height-width-equal]')
  },
  eventList: function() {
    this.heightWidhtEqual()
  },
  heightWidhtEqual: function() {
    for (var i = 0; i < this.wrapper.length; i++) {
      var width = this.wrapper[i].offsetWidth

      this.wrapper[i].style.height = width + 'px'
    }
  }
}

heightWidhtEqual.init()
