<div class="container space-login">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Success:</strong> {{ Session::get('success') }}
            </div>


            @endif  
        </div>
    </div>
</div>     