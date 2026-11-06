<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="mt-5 mb-5">Vai alla registrazione!</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                        
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="row">
                        <div class="col-6 mt-3">
                            <button type="submit" class="btn btn-primary">Registrati</button>
                        </div>
                        <div class="col-6 mt-3">
                            <address>Hai già un account? <a href="{{route('login')}}" class="btn btn-outline-warning">Fai il login</a></address>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>