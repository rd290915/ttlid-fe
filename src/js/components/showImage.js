var showImage = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.btnshowImage = $('[j-direction="show-image"]')
    this.btnCloseImage = $('#popup-show-img-close')
    this.placeWrapper = $('#popup-show-img-wrapper')
    this.placeImage = $('#popup-show-img-place')
  },
  eventList: function() {
    this.btnshowImage.on('click', this.showImage.bind(this))
    this.btnCloseImage.on('click', this.closeImage.bind(this))
  },
  showImage: function(e) {
    var self = this
    var dataImage = e.currentTarget.children[0].getAttribute('data-image')

    this.placeImage.find('img').attr('src', dataImage)
    this.placeWrapper.addClass('in')
    setTimeout(function() {
      self.placeWrapper.removeClass('in').addClass('active')
    }, 50)
  },
  closeImage: function() {
    var self = this

    this.placeWrapper.removeClass('active').addClass('in')
    setTimeout(function() {
      self.placeWrapper.removeClass('in')
    }, 350)
  }
}

showImage.init()
