@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>


                <div class="panel-body">
                    <p>Count referrals: <strong>{{ Auth::user()->referral_count }}</strong></p>
                    @if(Auth::user()->affiliate_id)
			<div class="row">
			<input class="form-control" type="text" value="{{url('/').'/?ref='.Auth::user()->affiliate_id}}" readonly=readonly>
			</div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
