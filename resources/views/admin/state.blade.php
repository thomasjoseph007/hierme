@extends('layouts.adminlay')
@section('content')
<title>states</title>
<div>
    <form id="slider">
    @csrf
        <center>
            <div class="col-xl-6 col-md-6">
                <h5>ADD STATE</h5>
                <br>
                <br>
                        <div class="section-headline margin-top-25 margin-bottom-12">
                            
                        </div>
                        <input type="text" name="state" class="with-border" placeholder="state">
                        @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                        @endif
                    </div>
            
                        <div class="section-headline margin-top-25 margin-bottom-12">
                            
                        </div>
                        <button class="button big ripple-effect" type="submit">
                            {{ __('SUBMIT') }}
                            <i class="icon-material-outline-arrow-right-alt"></i>
                        </button>
                       
                        
                    </div>
            </div> 
        </center>  
    </form>    
</div>               
@endsection