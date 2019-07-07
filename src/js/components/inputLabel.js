var inputLabel = {
  init: function() {
    this.dom()
    this.eventList()
  },
  dom: function() {
    this.field = $('.tl-field .tl-field-input')
  },
  eventList: function() {
    this.field.on('click', this.inputLabel.bind(this))
    this.field.on('keyup', this.inputLabel.bind(this))
    this.field.on('change', this.inputLabel.bind(this))
  },
  inputLabel: function(e) {
    var value = e.target.value

    if (value && value !== '' && value !== undefined) {
      e.target.classList.add('not-empty')
    } else {
      e.target.classList.remove('not-empty')
    }
  }
}

inputLabel.init()
