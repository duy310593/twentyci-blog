@extends('layouts.admin')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Posts</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-right">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="window.location='/admin/posts/create';">
                                    <i class="zmdi zmdi-plus"></i>add item</button>
                            </div>
                        </div>
                        @if ($posts->count())
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>description</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr class="tr-shadow">
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->description }}</td>
                                                <td>
                                                    @if ($post->status)
                                                        <span class="status--process">
                                                            Publish
                                                        </span>
                                                    @else
                                                        <span class="status--denied">
                                                            Unpublish
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" onclick="window.location='/admin/posts/{{ $post->id }}/edit';">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <form action="/admin/posts/{{ $post->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" type="submit">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        <!-- END DATA TABLE -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection