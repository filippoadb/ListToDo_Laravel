<x-layout>
<div class="body1">
<div class="wrapper">
    <h2>Registrati</h2>
    <form method="POST" action="{{route('register')}}">
      @csrf
      <div class="input-box">
        <input name="name" type="text" placeholder="Inserisci il tuo nome" required>
      </div>
      <div class="input-box">
        <input name="email" type="email" placeholder="Inserisci la tua email" required>
      </div>
      <div class="input-box">
        <input name="password" type="password" placeholder="Inserisci una password" required>
      </div>
      <div class="input-box">
        <input name="password_confirmation" type="password" placeholder="Conferma la password" required>
      </div>
      <div class="input-box button">
        <input type="submit" value="Registrati">
      </div>
      <div class="text">
        <h3>Hai già un account? <a href="{{route('login')}}">Accedi ora</a></h3>
      </div>
    </form>
  </div>
</div>
</x-layout>