@extends('admin.templateLogin')

@section('module', 'User')
@section('action', 'Login')

@section('content')
<div class="container">
  
  <form action="{{ route('login') }}" method="POST" class="form">
    @csrf
    <fieldset class="box_login">
      <legend>Log in</legend>
      <ul>
          <li class="js-checkInput">
              <div class="custom_input label "><div class="custom_inputBox">
                <input Class="" Icon="" Id="_email" Placeholder="" autocomplete="off" data-val="true" data-val-regex="Incorrect email format." data-val-regex-pattern="^([\w-.^]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" data-val-required="Please enter your email address." labelName="E-mail" name="email" type="text" value="" />
                <label for="email"><span>E-mail</span></label><span class='custom_line'></span></div><div class="input_validate error"><span class="field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span></div></div>
          </li>
          <li class="password_wrap js-capslockWrap js-checkInput">
              <div class="custom_input label "><div class="custom_inputBox">
                <input Class="password_view" Id="_password" Placeholder="" Type="password" autocomplete="off" data-val="true" data-val-maxlength="Incorrect password format." data-val-maxlength-max="100" data-val-minlength="Incorrect password format." data-val-minlength-min="8" data-val-required="Please enter your password." icon="icn_password_view js-passShow" labelName="Password" name="password" type="text" value="" />
                <label for="password"><span>Password</span></label><span class='custom_line'></span><i class="pi icn_password_view js-passShow"></i></div><div class="input_validate error"><span class="field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span></div></div>
              <div class="capslock_wrap">
                  <button type="button" class="btn_capslock icn_svg icn_capslock js-btnCapslock hide">
                      <span class="blind">Caps Lock</span>
                  </button>
                  <dl class="balloon_box js-capslockMsg">
                      <dd class="balloon_desc dot_hidden">Caps Lock is on.</dd>
                  </dl>
              </div>
          </li>
          <li>
              <button class="btn btn_blue btn_mid" id="btnLogin">Log in</button>
          </li>
      </ul>
      
      <div class="box_join">
          <a href="">Cannot log in?</a>
          <a href="{{ route('create') }}">Create a Pearl Abyss ID</a>
      </div>
    </fieldset>
  </form>
</div>

@endsection
