@extends('master')

@section('content')
<div id="ContactUs">
  @include('navbar')
  <div class="container is-fullhd">
    <div class="columns is-marginless">
      <div id="Form" class="column is-4 is-offset-2">
        <div class="field">
          <div class="control">
            <input class="input" type="text" placeholder="Name">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input class="input" type="text" placeholder="Email">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <textarea class="textarea" type="text" placeholder="Message" rows="7"></textarea>
          </div>
        </div>
        <a class="button is-success">Send</a>
      </div>
      <div id="Details" class="column is-4">
        <div class="details level">
          <div class="level-left">
            <span class="level-item icon icon-location is-size-4"></span>
          </div>
          <p class="level-item">
            Carolina MacGillavrylaan 357<br/>
            1098XA Amsterdam
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <span class="level-item icon icon-phone is-size-4"></span>
          </div>
          <p class="level-item">
            +49 176 832 03349
          </p>
        </div>
        <div class="details level">
          <div class="level-left">
            <span class="level-item icon icon-mail is-size-4"></span>
          </div>
          <p class="level-item">
            info@topmusicmanagement.com
          </p>
        </div>
        <h3 class="is-size-5 is-uppercase has-text-weight-bold">Stay Connected</h3>
        <p>
          We are so looking forward to hearing from you,<br/>
          if you want to work with us, have some questions,<br/>
          or just want to send some love, please take the<br/>
          time to say hola!
        </p>
        <div id="Social" class="level">
          <div class="level-item level-left social-media">
            <a class="is-size-5 _padding-rightless social-link">
              <span class="icon-facebook icon is-medium"></span>
            </a>
            <a class="is-size-5 _padding-rightless social-link">
              <span class="icon-twitter icon is-medium"></span>
            </a>
            <a class="is-size-5 _padding-rightless social-link">
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