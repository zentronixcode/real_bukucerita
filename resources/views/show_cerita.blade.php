@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                {{$_SESSION['id']}}    
                <div class="card-body">
                    <h4>Read data</h4>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>product_name</th>
                            <th>amount</th>
                            <th>price</th>
                            <th>photo</th>
                            <th>category_name</th>
                            <th>Action</th>
                        </tr>
                        
                    </table>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection