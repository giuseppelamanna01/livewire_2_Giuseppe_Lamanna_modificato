<x-layout>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1>Modifica il tuo articolo!</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <livewire:article-edit :article="$article">
            </div>
        </div>
    </div>
</x-layout>