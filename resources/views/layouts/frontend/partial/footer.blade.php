
    <footer>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <a class="logo" href="#"><img src="{{ asset('public/assets/backend/images/easylogo.png') }}" alt="Logo Image"></a>
                        <p class="copyright">easylearning @ 2019. All rights reserved.</p>
                        
                        <ul class="icons">
                            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                        <div class="footer-section">
                        <h4 class="title"><b>CATAGORIES</b></h4>
                        <ul>

                            @foreach($categories as $category)
                            <li><a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                            
                        </ul>
                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <h4 class="title"><b>SUBSCRIBE</b></h4>
                @if(session('successMsg'))

                     <div class="alert alert-success" roles="alert">
                     {{ session('successMsg') }} 

                     </div> 
                     @endif             
  
                  @if($errors->any())
                    @foreach($errors->all() as $error)

                   <div class="alert alert-danger" roles="alert">
                     {{ $error }} 

                     </div> 

                    @endforeach

                    @endif


                        <div class="input-area">
                            <form method="POST" action="{{ route('subscriber.store') }}">
                                @csrf
                                <input class="email-input" type="email" name="email" placeholder="Enter your email">
                                <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                            </form>
                        </div>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

            </div><!-- row -->
        </div><!-- container -->
    </footer>