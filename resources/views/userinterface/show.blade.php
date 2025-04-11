 @extends('layouts.user')
 @section('usersidebar')
     @include('layouts.usersidebar',[])
 @endsection
@section('content')
<div class="row">
            <main class="col-md-9 offset-md-3 content" id="content">
                <h4>Available Firms</h4>
                <div id="firmList">
                    @foreach($data as $frm)
                    @php 
                        $frm= $frm->toArray();
                        $frm= array_map(fn($val)=>ucwords(strtolower($val)),$frm);
                    @endphp
                    <div class="firm-card">
                        <div><b class="h4">  {{ ucfirst($frm['firm_name']) }}</b> <span class=" h6 text-muted">(Since: {{ date('Y',strtotime($frm['since'])) }})</span> <a class="btn btn-warning" href="tel:+91{{ $frm['firm_mobile'] }}">Call Now</a> </div>
                        <div class="text-primary mb-2">
                            {{$frm['street']}},
                            {{$frm['landmark']}}
                        </div>
                        <p>
                            +91 {{$frm['firm_mobile']}},
                            {{$frm['address']}},
                            {{$frm['city']}} - 
                            {{$frm['pincode']}},
                        {{$frm['state']}},
                        {{$frm['country']}}
                        
                        </p>
                        <button class="book-btn">Book Appointment</button>
                    </div>
                    @endforeach
                </div>
            </main>
        </div>
@endsection 

       
