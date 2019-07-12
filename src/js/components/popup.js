var popup = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.btnPopup = $('[j-direction="popup-show"]')
    this.btnClose = $('[j-direction="popup-hide"]')
  },
  eventList: function() {
    this.btnPopup.on('click', this.popup.bind(this))
    this.btnClose.on('click', this.closePopup.bind(this))
  },
  popup: function(e) {
    var target = e.currentTarget.getAttribute('j-popup-target')
    var place = $('[j-popup-place="' + target + '"]')

    place.addClass('in')
    setTimeout(function() {
      place.removeClass('in').addClass('active')
    }, 50)
  },
  closePopup: function(e) {
    var target = e.currentTarget.getAttribute('j-popup-hide-target')
    var place = $('[j-popup-place="' + target + '"]')


    place.removeClass('active').addClass('in')
    setTimeout(function() {
      place.removeClass('in')
    }, 350)
  }
}

popup.init()
