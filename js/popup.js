// Inline popups
$('.random').magnificPopup({
  delegate: 'div img',
  removalDelay: 500, 
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true 
});

