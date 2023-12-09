@extends('components.stories')

@section('content')
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

      <!----------------------- Login Container -------------------------->
  
         <div class="row border rounded-5 p-3 bg-white shadow box-area">
  
      <!--------------------------- Left Box ----------------------------->
  
         <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
             <div class="featured-image mb-3">
              {{-- <img src="assets/img/TempImg/tmp2.png" alt="" class="img-fluid" style="width: 250px;"> --}}
             </div>
             <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be A Thenebit</p>
             <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Publish your tech news on this platform.</small>
         </div> 
  
      <!-------------------- ------ Right Box ---------------------------->
          
         <div class="col-md-6 right-box">
            <div class="row align-items-center">
                  <div class="header-text mb-4">
                    {{-- Add an emoji hello hand to h2 below --}}
                       <h2>Hello, Again</h2> 
                       <p>Let's Go Thenebits</p>
                  </div>
  
                  {{-- @if (session('success'))
                    <div class="header-text mb-4">
                      {{ session('success') }}
                    </div>                    
                  @endif --}}
  
                  <script>
                    @if(session('message'))
                        alert('{{ session('message') }}');
                    @endif
                </script>
  
                  <form action="{{ url('blog-update', $blogNum->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" value="{{ $blogNum->author }}" name="author" placeholder="Author" required>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control form-control-lg bg-light fs-6"  value="{{ $blogNum->postType }}" name="postType" placeholder="Content Type eg.Web" required>
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control form-control-lg bg-light fs-6" value="{{ $blogNum->title }}" name="title" placeholder="Title Of Blog" required>
                    </div>
                    <div class="input-group mb-3">
                      <textarea type="text" class="form-control form-control-lg bg-light fs-6" rows="5" name="description" placeholder="Drop Bombshells Here" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                      <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Publish</button>
                    </div>
  
                  </form>
                  
            </div>
         </div> 
  
        </div>
      </div>
@endsection