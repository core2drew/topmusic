$(function(){

  function navbarInit(){
    let navbarBurgers = $('.navbar-burger')
    if (navbarBurgers.length > 0) {
      navbarBurgers.on('click', function () {
        let $this = $(this)
        $this.toggleClass('is-active')
        $('#navbarMenuHeroC').toggleClass('is-active')
        $('#Navbar').toggleClass('is-active')
      })
    }
  }

  function contactUsInit(){
    let notif = $("#Notif")
    let contactUsForm = $("#ContactUsForm")
    let isSending = false

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      } 
    });

    let notifTimeout = function(){
      setTimeout(function(){
        notif.removeClass('showing').removeClass('is-danger').addClass('is-success')
        isSending = false
      }, 5000)
    }

    notif.find(".delete").on('click', function(){
      notif.removeClass('showing').removeClass('is-danger').addClass('is-success')
      isSending = false
    })
    
    $('#SendMessage').on('click', function(e){
      e.preventDefault()
      let $this = $(this)
      let formData = contactUsForm.serialize()
      
      if(isSending && notif.hasClass('showing')) {
        return false
      }

      isSending = true
      $this.addClass('is-loading')
      contactUsForm.find('input[type=text], textarea').attr('disabled','disabled')
      $.ajax({
        url: 'inquiry',
        type: 'POST',
        data: formData,
        success: function(result) {
          notif.addClass('showing')
          $this.removeClass('is-loading')
          contactUsForm.find('input[type=text], textarea').removeAttr('disabled')
          contactUsForm.find('input[type=text], textarea').val("")
          notifTimeout()
        },
        error: function(data){
          var errors = data
          notif.find('.header').text("Message not sent.")
          notif.find('.content').text("Something went wrong. Please try again or message us directly to info@topmusicmanagement.com")
          notif.addClass('showing').removeClass('is-success').addClass('is-danger')
          notifTimeout()
        }
      });
    })
  }

  contactUsInit()
  navbarInit()
})