@extends('layouts.front_master')
@section('content')
<section id="error-404" class="parallax">
  <div data-parallax="scroll" data-image-src="images/bg/12.jpg" class="parallax-bg"></div>
  <div class="parallax-overlay">
    <div class="centrize">
      <div class="v-center">
        <div class="container">
          <div class="error-page"><i class="icon-sad"></i>
            <div class="title">
              <h2 class="mb-25 upper">Error 404<span class="red-dot"></span></h2>
              <h4 class="upper">The requested page was not found on this server. That’s all we know.              </h4>
            </div>
            <div class="inline-form center mb-50">
              <div class="input-group">
                <input type="text" placeholder="Search.." class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-light"><span><i class="ti-search"></i></span>
                </button>
                </span>
              </div>
            </div>
            <!-- end of inline form    --><a href="#" class="btn btn-color">Back to the home</a>
          </div>
          <!-- end of error page-->
        </div>
        <!-- end of container    -->
      </div>
    </div>
  </div>
</section>
@endsection
