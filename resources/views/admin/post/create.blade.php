@extends('admin.layouts.admin_layout')

@section('title', 'Add news')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add news</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">The title of the news in English</label>
                                    <input type="text" name="title_en" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter the name of the news" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">The name of the news in Georgian</label>
                                    <input type="text" name="title_ge" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter the name of the news" required>
                                </div>


                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Select a category</label>
                                        <select name="cat_id" class="form-control" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Select the news language</label>
                                        <select name="language" class="form-control" required>
                                            <option value="en">English</option>
                                            <option value="ge">Georgian</option>
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <label>Text in English (The editor of filling out the article for the English version of
                                        the news.)</label>
                                    <textarea name="text_en" class="editor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Text in Georgian (editor filling out an article for the Georgian version of the
                                        news.)</label>
                                    <textarea name="text_ge" class="editor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Main news image</label>
                                    <img src="" alt="" class="img-uploaded"
                                        style="display: block; width: 300px">
                                    <input type="text" name="img" class="form-control" id="feature_image"
                                        name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Select an
                                        image</a>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
