@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <b:if cond='data:blog.pageType == &quot;index&quot;'>
<div id='post_status-by-bacsiwindows'>
<div class='content'>
  <form  action='/post' target='blank'><input placeholder='content' type='text'/></form>
  </div>
  <a class='btn_status' href='' target='_blank'><i style='color:#5db98b' class="fa fa-picture-o" aria-hidden="true"></i>img/video</a>
  <a class='btn_status' href='' target='_blank'><span>...</span></a>
  <a class='btn_status' href='' target='_blank' style='float: right; color: #fff; background: #4267b2; border-radius: 4px;'>Post</a>
</div>
</b:if>
            <div class="card">
                <div class="card-header">Title</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
