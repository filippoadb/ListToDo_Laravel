<x-layout>
<div class="body1">
<div class="wrapper">
    <h2>Accedi</h2>
    <form method="POST" action="{{route('login')}}">
        @csrf
      <div class="input-box">
        <input name="email" type="text" placeholder="Inserisci la tua email" required>
      </div>
      <div class="input-box">
        <input name="password" type="password" placeholder="Inserisci la password" required>
      </div>
      <div class="input-box button">
        <input type="submit" value="Accedi">
      </div>
      <div class="text">
        <h3>Non hai un account? <a href="{{route('register')}}">Registrati</a></h3>
      </div>
    </form>
  </div>
</div>
</x-layout>