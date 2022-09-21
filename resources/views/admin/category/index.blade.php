@extends('admin.master')

@section('title')
    Add New Category
@endsection

@section('body')
   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-md-9 mx-auto">
                   <div class="card">
                       <div class="card-header text-center"><h4>Add Category Form</h4></div>
                       <div class="card-body">
                           <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                           <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row mb-3">
                                   <label for="" class="col-md-3">Category Name</label>
                                   <div class="col-md-9">
                                       <input type="text" name="name" class="form-control">
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label for="" class="col-md-3">Category Description</label>
                                   <div class="col-md-9">
                                       <textarea name="description" class="form-control"></textarea>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label for="" class="col-md-3">Category Image</label>
                                   <div class="col-md-9">
                                       <input type="file" name="image" class="form-control">
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label for="" class="col-md-3">Publication Status</label>
                                   <div class="col-md-9">
                                       <label for=""><input type="radio" name="status" value="1" class="">Published</label>
                                       <label for=""><input type="radio" name="status" value="0" class="" checked>Unpublished</label>
                                   </div>
                               </div>
                               <div class="row mb-3">
                                   <label for="" class="col-md-3"></label>
                                   <div class="col-md-9">
                                       <input type="submit" class="btn btn-outline-success" value="Create New Category">
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection
