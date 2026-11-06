<form class="mt-5" enctype="multipart/form-data" wire:submit.prevent="articleStore">
    @csrf
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Nome:</label>
        <input type="text" id="title" wire:model="title" class="form-control">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Descrizione:</label>
        <textarea id="body" wire:model="body" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label for="img">Inserisci un'immagine:</label>
        <input type="file" id="img" wire:model="img" class="form-control">
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">Crea</button>
    </div>
</form>