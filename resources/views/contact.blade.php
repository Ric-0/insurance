@extends('layouts.app')

<div style="margin: 100px 100px">
    <h1>Contact</h1>
    <br>
    <form method="POST" action="{{ url('/contact') }}">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label class="form-group has-float-label">
                        <input type="text" class="form-control" id="firstname" name="firstname"
                            aria-describedby="firstname" required>
                        <span style="background-color:white;font-size: 15px">Prénom
                            *</span>
                    </label>

                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="form-group has-float-label">
                        <input type="text" class="form-control" id="lastname" name="lastname"
                            aria-describedby="lastname" required>
                        <span style="background-color:white;font-size: 15px">Nom *</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-group has-float-label">
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                    required>
                <span style="background-color:white;font-size: 15px">Email *</span>
            </label>
        </div>
        <div class="form-group">
            <label class="form-group has-float-label">
                <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phone"
                    required>
                <span style="background-color:white;font-size: 15px">Numéro de téléphone
                    *</span>
            </label>
        </div>

        <div class="form-group">
            <label class="form-group has-float-label">
                <input type="textarea" class="form-control" id="message" name="message" rows="5" cols="23"
                    required>
                <span style="background-color:white;font-size: 15px">Message
                    *</span>
            </label>
        </div>

        <small id="help" class="form-text text-muted">Les champs suivis d’une * sont
            obligatoires.</small>
        <div class="row" style="">
            <div class="col">
                <img class="img-modal" src="{{ asset('img/men_whith_letter.png') }}">
            </div>
            <div class="col">
                <button id="send-form" type="submit" class="btn btn-outline ">
                    <b>Valider</b>
                </button>
            </div>
            <div class="col">
                <img class="img-modal" src="{{ asset('img/post_box.png') }}">
            </div>
        </div>
    </form>
</div>
