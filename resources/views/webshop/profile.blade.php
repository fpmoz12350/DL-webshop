@extends('webshop.template.head')
@extends('webshop.template.navbar')

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <br />
            <br />
            <div class="card h-100 text-center">
                <img class="card-img-top"
                    src="https://t4.ftcdn.net/jpg/03/46/93/61/360_F_346936114_RaxE6OQogebgAWTalE1myseY1Hbb5qPM.jpg"
                    alt="">
                <div class="card-body">
                        <form method="POST" action="{{ route('profile-update', $user->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">Ime:</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail:</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
        
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Lozinka</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <label for="password-confirm">Potvrdite lozinku</label>
    
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
    
                            <button type="submit" class="btn btn-primary">Pošalji</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <table class="table table-striped table-bordered">
                <br />
                <br />
                <thead>
                    <tr>
                        <th scope="col">
                            Broj narudžbe
                        </th>
                        <th scope="col">
                            Artikli
                        </th>
                        <th scope="col">
                            Cijena
                        </th>
                        <th scope="col">
                            Isporučeno
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->

<br>
<br>
<br>
<br>
<br>

<!-- /.row -->

</div>

@extends('webshop.template.foot')
@extends('webshop.template.footer')