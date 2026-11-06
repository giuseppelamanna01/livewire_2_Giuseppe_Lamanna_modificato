<div>
    @if(session()->has('success'))
    <div class="alert alert-success">
        <h3 class="text-center">
            {{session('success')}}
        </h3>
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger">
        <h3 class="text-center">
            {{session('error')}}
        </h3>
    </div>
    @endif
</div>