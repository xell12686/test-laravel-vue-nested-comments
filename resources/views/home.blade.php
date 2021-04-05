@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card panel-default">
                <div class="card-body">
                    <div class="card-header mb-3">
                        <h1 class="card-title">An Arbitraty Blog Post</h1>
                        <span class="text-muted"> by <a href="#">James Dev</a> </span> <br/>
                        <span class="text-muted"><em>Posted on April 2, 2021 at 12:00 PM</em></span>
                    </div>
                    <div class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan erat eu tellus viverra viverra a nec massa. Sed facilisis, tortor eu tincidunt pulvinar, est sem lobortis justo, quis fringilla sem risus sed justo. Nullam vel lorem justo. Vestibulum vel est arcu, a bibendum lacus. Mauris ut ipsum adipiscing lacus pretium semper. Cras luctus justo vel est malesuada sed pretium lectus congue.
                        </p>
                        <p>
                            Maecenas a lacus mauris. In at libero dolor, ut porta nunc. Nulla hendrerit varius sem id commodo. Sed nec posuere sem. Duis pellentesque mattis gravida. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse egestas hendrerit euismod. Phasellus ultrices porta sagittis. Vestibulum erat erat, faucibus id sagittis ac, porta nec quam. Sed nec sapien nec lorem scelerisque euismod quis a arcu.
                        </p>
                    </div>
                    COMMENT FORM HERE
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            COMMENT LIST HERE
        </div>
    </div>

</div>
@endsection
