var popupVideo = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.btnPopupVideo = $('[j-direction="popup-video-show"]')
    this.btnClose = $('[j-direction="popup-video-hide"]')
  },
  eventList: function() {
    this.btnPopupVideo.on('click', this.popupVideo.bind(this))
    this.btnClose.on('click', this.closePopupVideo.bind(this))
  },
  popupVideo: function(e) {
    var target = e.currentTarget.getAttribute('j-popup-video-target')
    var embedUrl = e.currentTarget.getAttribute('j-popup-video-embed')
    var place = $('[j-popup-video-place="' + target + '"]')

    place.addClass('in')
    place.find('.tl-popup-video-inner').append('<iframe width="100%" height="100%" src="' + embedUrl + '?&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')
    setTimeout(function() {
      place.removeClass('in').addClass('active')
    }, 50)
  },
  closePopupVideo: function(e) {
    var target = e.currentTarget.getAttribute('j-popup-video-hide-target')
    var place = $('[j-popup-video-place="' + target + '"]')


    place.removeClass('active').addClass('in')
    setTimeout(function() {
      place.removeClass('in')

      setTimeout(function() {
        place.find('iframe').remove()
      }, 50)
    }, 350)
  }
}

popupVideo.init()
