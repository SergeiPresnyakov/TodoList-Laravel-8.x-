@if(session('success'))
    <div class="container">
        <div class="row">   
            <div class="col-md-11">
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            </div>
        </div>
    </div>
@endif

@if(session('info'))
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="alert alert-info" role="alert">
                    {{ session()->get('info') }}
                </div>
            </div>
        </div>
    </div>
@endif