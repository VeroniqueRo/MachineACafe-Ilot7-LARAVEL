@extends('template.template')
@include('template.menu')
<div class="content">
  <div class="title m-b-md">
      Séléction des boissons !
  </div>
</div>

<div class="titreBoisson">
  @foreach ($drinkChoice as $key)
  <option> {{$key}} </option>
  @endforeach
</div>

<div class="choixBoisson">
  <h1>Faites votre choix !</h1>
<form method="post">
            <select name="choixBoisson">
                <option>Choissisez votre boisson</option>
                <option>Café au lait</option>
                <option>Thé</option>
                <option>Expresso</option>
                <option>Café long</option>

            </select>
            <input type="number" min="0" max="5" name="choixSucre" placeholder="Combien de sucres ?"/>
            <input type="submit" value="Valider"/>
</form>
</div>
