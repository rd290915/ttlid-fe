var sidebarShow = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.btn = $('[j-direction="sidebar-show"]')
    this.place = $('.tl-header-menu-wrapper')
    this.sidebarStatus = false
  },
  eventList: function() {
    this.btn.on('click', this.sidebarShow.bind(this))
  },
  sidebarShow: function(e) {
    this.sidebarStatus = !this.sidebarStatus

    if (this.sidebarStatus) {
      this.btn.html('<i class="fa fa-times"></i>')
      this.place.addClass('show')
    } else {
      this.btn.html('<i class="fa fa-navicon"></i>')
      this.place.removeClass('show')
    }
  }
}

sidebarShow.init()
