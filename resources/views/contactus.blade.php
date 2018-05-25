@extends('master')

@section('content')
<div id="ContactUs" class="wrapper">
  @include('navbar')
  <div id="Notif" class="column is-5-desktop is-6-tablet _margin-auto notification is-success has-text-centered">
    <button class="delete"></button>
    <h1 class="is-size-4 header">Thank you for getting in touch!</h1>
    <p class="content">We appreciate you contacting us. One of our colleagues will get back to you shortly.</p>
  </div>
  <div class="container is-fullhd">
    <div class="columns is-marginless is-centered is-multiline">
      <form id="ContactUsForm" method="POST" class="column is-5-widescreen is-5-desktop is-8-tablet">
        <div class="field">
          <div class="control">
            <input id="Fullname" class="input"type="text" name="name" placeholder="Full Name" autocomplete="off">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input id="Email" class="input" type="text" name="email" placeholder="Email" autocomplete="off">
            <label class="label has-text-right">Invalid Email</label>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <textarea id="Message" class="textarea" type="text" name="message" placeholder="Message" rows="8"></textarea>
          </div>
        </div>
        <button id="SendMessage" class="button is-success">Send</button>
      </form>
      <div id="Details" class="column is-5-widescreen is-5-desktop is-8-tablet">
        <div class="details level">
          <div class="level-left">
            <span class="level-item icon icon-location is-size-4 is-size-3-mobile _margin-auto-tablet"></span>
          </div>
          <p class="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
            Ceintuurbaan 25 I 1072 ES Amsterdam The Netherlands
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <span class="level-item icon icon-phone is-size-4 is-size-3-mobile _margin-auto-tablet"></span>
          </div>
          <p class="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
            +31 (0) 618 541 318
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <span class="level-item icon icon-mail is-size-4 is-size-3-mobile _margin-auto-tablet"></span>
          </div>
          <p class="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
            info@topmusicmanagement.com
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <strong>VAT number:</strong>
          </div>
          <p class="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
            NL451770924B01
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <strong>Registration number:</strong>
          </div>
          <p class="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
            71632352
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <strong>Brand Identity:</strong>
          </div>
          <p class="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
            Torvic Design
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <strong>Website Design:</strong>
          </div>
          <p class="level-item _flex-content-baseline-widescreen _flex-content-baseline-fullhd _flex-content-center-mobile _margin-leftless-mobile has-text-centered-mobile">
            Drew Calupe
          </p>
        </div>
        <div class="details level">
          <p>All images are copyrighted and property of their respective owners.</p>
        </div>
        <h3 class="is-size-5 is-uppercase has-text-weight-bold has-text-centered-mobile">Stay Connected</h3>
        <p class="has-text-centered-mobile">
          We are so looking forward to hearing from you,
          if you want to work with us, have some questions,
          or just want to send some love, please take the
          time to say hola!
        </p>
        <div id="Social" class="level is-hidden-mobile">
          <div class="level-item level-left social-media">
            <a href="https://www.facebook.com/topmusicmanagement" target="_blank" class="is-size-5 _padding-rightless social-link">
              <span class="icon-facebook icon is-medium"></span>
            </a>
            <a href="https://mobile.twitter.com/TopMusicMGMT?p=s" target="_blank" class="is-size-5 _padding-rightless social-link">
              <span class="icon-twitter icon is-medium"></span>
            </a>
            <a href="https://www.instagram.com/topmusicmanagement" target="_blank" class="is-size-5 _padding-rightless social-link">
              <span class="icon-instagram icon is-medium"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('footer', ['class'=>'default'])
</div>
@stop