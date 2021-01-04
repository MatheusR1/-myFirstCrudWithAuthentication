@extends('base')
@section('main')
    <div class="row"> 
        <div class="col-sm-8 offset-sm-2">  
            <p class="display-4"> novo contato</p> 
            
            <form method="post" action="{{ route('contacts.store') }}">     
                @csrf

                <div class="form-group">     
                    <label for="first_name">Nome:</label>      
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                    name="first_name"/>

                    @error('first_name')
                        <div class ='invalid-feedback'>
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">   
                    <label for="last_name">Sobre nome:</label>      
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                        name="last_name"/>

                        @error('last_name')
                        <div class ='invalid-feedback'>
                            {{$message}}
                        </div>
                    @enderror     
                </div>

                <div class="form-group">      
                    <label for="email">Email:</label>     
                    <input type="text" class="form-control @error('email') is-invalid @enderror" 
                    name="email"/>     

                    @error('email')
                        <div class ='invalid-feedback'>
                            {{$message}}
                        </div>
                    @enderror
                </div>   

                <div class="form-group">  
                    <label for="city">Cidade:</label>   
                    <input type="text" class="form-control @error('city') is-invalid @enderror" 
                    name="city"/>

                    @error('city')
                        <div class ='invalid-feedback'>
                            {{$message}}
                        </div>
                    @enderror     
                </div>    

                <div class="form-group">      
                    <label for="country">Estado:</label>    
                    <input type="text" class="form-control @error('country') @enderror" 
                    name="country"/>

                    @error('country')
                        <div class ='invalid-feedback'>
                            {{$message}}
                        </div>
                    @enderror
                </div> 

                <div class="form-group">       
                    <label for="job_title">Cargo:</label>        
                    <input type="text" class="form-control @error('job_title') @enderror" 
                    name="job_title"/>

                    @error('job_title')
                        <div class ='invalid-feedback'>
                            {{$message}}
                        </div>
                    @enderror    
                </div>    
                <button type="submit" class="btn btn-primary">adicione um contato</button>
            </form> 
        </div>
    </div>
@endsection
