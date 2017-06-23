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

//popup for other events

$('.color-list').magnificPopup({
  delegate: '.color',
  removalDelay: 500, 
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true 
});

// popup for color run 

$('.colorrun').magnificPopup({
  delegate: '.mybutton',
  removalDelay: 500, 
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true 
});
