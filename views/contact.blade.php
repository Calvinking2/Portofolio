@extends('/layout/main')


@section('judul','About')
  
@section('isi')

<div class="container">
    <div class="container text-white" style="margin-left: 230px;width: 90%;">
        <div class="container">
          <div class="row row-cols-2">
            <div class="col mt-5">
                <form method="POST" action="/store">
                       @csrf
                    <div class="card bg-dark" style="height: 500px;width: 350px;">
                        <div class="row mt-0">
                            <div class="col-md-12 ">
                                <h4 class="">Contact Me</h4>
                                <p>Use the form below to share your questions,and comment and i will reply it to your email</p>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-12 mb-0">
                                <p class="mb-1">Email</p> <input id="e-mail" name="email" type="e" placeholder="Enter your email" name="email" class="form-control input-box rm-border" required="">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-12 mb-0">
                                <p class="mb-1">Name</p> <input id="name" name="name" type="text" placeholder="Enter your name" name="name" class="form-control input-box rm-border" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 mb-2">
                                <p class="mb-1">Message</p> <textarea id="message" name="massage" type="text" placeholder="Enter your message" name="message" class="form-control input-box rm-border" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center mb-0">
                            <div class="col-md-12 px-3"> <input type="submit" value="Submit" class="btn text-white btn-block rm-border" style="background-color: #8739F9"></div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col mt-5">
                <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;"><div id="display-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=SMK+TELKOM+JAKARTA&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemap-code-enabler" rel="nofollow" href="https://www.embed-map.com" id="grabmaps-authorization">https://www.embed-map.com</a><style>#display-googlemap img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
                </div>
            </div>
            
          </div>
        </div>
    </div>
</div>

@endsection