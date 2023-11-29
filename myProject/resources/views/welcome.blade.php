@include('layouts.nav')
<div class="container">
    @auth
     <h1>Welcome</h1>
     @else
     <h1>Login Before you continue</h1>
    @endauth
   

    <div class="row d-flex">
        <div class="col-sm img m-2 shadow p-3 mb-5 bg-body rounded">
            <h1>View Books</h1>
            <a href="/book">
                <img src="images/book.jpg" alt="BOOKS" class="books img-responsive mw-100 h-auto ">
            </a>
        </div>
        <div class="col-sm img m-2 shadow p-3 mb-5 bg-body rounded">
        <h1>View CDs</h1>
            <a href="/cd">
                <img src="images/cd.jpg" alt="CDS" class="cds img-responsive mw-100 h-auto ">
            </a>
        </div>
        <div class="col-sm img m-2 shadow p-3 mb-5 bg-body rounded">
        <h1>View Games</h1>
            <a href="/game">
                <img src="images/games.jpg" alt="CDS" class="cds img-responsive mw-100 h-auto ">
            </a>
        </div>
    </div>
</div>
