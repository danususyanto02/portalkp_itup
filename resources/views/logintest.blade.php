<div class="log-form">
    <h2>Login to your account</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <input type="text" title="nomor_induk" name="nomor_induk" placeholder="username" />
      <input type="password" name="password" title="username" placeholder="password" />
      <button type="submit" class="btn">Login</button>
      <a class="forgot" href="#">Forgot Username?</a>
    </form>
  </div><!--end log form -->