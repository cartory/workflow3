<main>
  <center>
    <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
    <div class="section"></div>
    <h5 class="indigo-text">Please, login into your account</h5>
    <div class="container">
      <div class="z-depth-1 grey lighten-4 row"
        style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

        <form method="POST" action="{{ route('register') }}">
          @csrf
          {{-- NAME --}}
          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='text' name='name' id='name' placeholder="Enter your name" />
            </div>
          </div>
          {{-- EMAIL --}}
          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='email' name='email' id='email' placeholder="Enter your mail" />
            </div>
          </div>
          {{-- PASSWORD --}}
          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='password' name='password' id='password' placeholder="Enter your password" />
            </div>
          </div>
          {{-- CONFIRM PASSWORD --}}
          <div class="row">
            <div class="input-field col s12">
              <input id="password-confirm" type="password" 
                class="form-control" name="password_confirmation" required
                autocomplete="new-password"
                placeholder="Confirm Password">
            </div>
          </div>
          <center>
            <div class='row'>
              <button type='submit' name='btn_register' class='col s12 btn btn-large waves-effect'>
                Register
              </button>
            </div>
          </center>
        </form>
      </div>
    </div>
  </center>
  <br>
</main>