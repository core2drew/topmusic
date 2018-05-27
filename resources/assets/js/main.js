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

  function validateEmail(mail) {
    var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    return re.test(mail)
  }

  function contactUsInit(){
    let notif = $("#Notif")
    let contactUsForm = $("#ContactUsForm")
    let isSending = false
    let emailField = contactUsForm.find("#Email")
    let isEmailValid = false

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

    contactUsForm.find('#Fullname, #Message').on('change', function(){
      $(this).removeClass('is-danger')
    })

    emailField.on('change', function(e){
      let email = e.target.value
      let $this = $(this)
      let label = $this.siblings('.label')

      if(validateEmail(email)){
        $this.removeClass('is-danger')
        label.removeClass('active')
        emailField = true
        return
      }
      emailField = false
      label.addClass('active')
      $this.addClass('is-danger')
    })
    
    $('#SendMessage').on('click', function(e){
      e.preventDefault()
      let $this = $(this)
      let formData = {}
      let formErrors = []

      if(isSending && notif.hasClass('showing')) {
        return false
      }
      
      formErrors = contactUsForm.find('input[type=text], textarea').map(function(e, i){
        if(!i.value.trim()) {
          $(i).addClass('is-danger')
          return $(i)
        }
        $(i).removeClass('is-danger')
      })

      if(!formErrors.length && emailField) {
        isSending = true
        formData = contactUsForm.serialize()
        $this.addClass('is-loading')
        contactUsForm.find('input[type=text], textarea').attr('disabled','disabled')
        ga('send', 'event', 'Contact Form', 'send_form');
        $.ajax({
          url: 'inquiry',
          type: 'POST',
          data: formData,
          success: function(result) {
            notif.addClass('showing')
            $this.removeClass('is-loading')
            contactUsForm.find('input[type=text], textarea').removeAttr('disabled')
            contactUsForm.find('input[type=text], textarea').val("")
            contactUsForm.find('.label').removeClass('active')
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
      }
    })
  }

  contactUsInit()
  navbarInit()
})