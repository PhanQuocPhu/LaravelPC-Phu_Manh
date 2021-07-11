 <!-- Begin alert -->
 @if (\Session::has('success'))
     <div class="alert alert-success" role="alert" style="position: fixed; right:20px; z-index: 99999999999999;">
         <strong>Success!</strong> {{ \Session::get('success') }}
     </div>
 @endif
 @if (\Session::has('error'))
     <div class="alert alert-danger" role="alert" style="position: fixed; right:20px; z-index: 99999999999999;">
         <strong>Error</strong> {{ \Session::get('error') }}
     </div>
 @endif
