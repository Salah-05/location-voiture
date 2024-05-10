<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> All CAtegories
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        All Categories
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.category.add')}}" class="btn btn-success float-end">Add new category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i= ($categories->currentPage()-1)*$categories->perPage();
                                        @endphp
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>
                                                <a href="{{route('admin.category.edit',['category_id'=>$category->id])}}">Editer</a>
                                                {{-- <a href="{{route('admin.category.delete')}}">Supprimer</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            {{$categories->Links('pagination::bootstrap-4')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>