@extends('layout.app')

@section('title', 'Movies')

@section('content')

<main>
    <div class="container">
         <h1 class="text-center mt-3">Movies</h1>
         <div class="row row-cols-1 row-cols-md-2 g-4 my-3"></div>
        
                    <div class="col">

                        <div class="card shadow h-100">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <p><strong>Original title: </strong></p>
                                <p><strong>Nationality: </strong></p>
                                <p><strong>Released on: </strong></p>
                                <p><strong>Vote on: </strong></p>
                            </div>
                        </div>

                    </div>

                

                    <div class="col">
                        <h2>No Movies in the database! 😥</h2>
                    </div>
                    

            </div>
    </div>
</main>