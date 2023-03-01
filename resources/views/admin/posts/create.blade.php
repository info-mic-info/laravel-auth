@extends('layouts.admin');
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <h2>Aggiungi un nuovo Post</h2>
            </div> 
            <div class="col-12">
                <form action="{{ route('admin.posts.store')}}" method="POST">
                    @csrf
            <div class="form-group">
                 <label class="control-label">
                    Titolo
                 </label>
                 <input type="text" class="form-control" placeholder="Titolo" id="title" name="title">
               </div>

               <div class="form-group">
                 <label class="control-label">
                    Contenuto
                 </label>
                 <textarea class="form-control" placeholder="Contenuto" id="content" name="content"></textarea>
                  <div class=form-group>
                    <button type="submit" class="btn">Salva post</button>
                  </div>
               </div>
                </form>
            </div>
          
           
        </div>
    </div>
</div>
@endsection

