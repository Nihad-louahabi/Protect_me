<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
        .wishlisted{
            background-color: #F15412 !important;
            border: 1px solid transparent !important;
        }
        .wishlisted i{
            color:#fff !important;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> J'adopte
                </div>
            </div>
        </div>
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
               {{-- @foreach($slides as $slide)
                    <div class="single-hero-slider single-animation-wrap">
                         <div class="container">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="hero-slider-content-2">
                                            <h4 class="animated">{{$slide->top_title}}</h4>
                                            <h2 class="animated fw-900">{{$slide->title}}</h2>
                                            <h1 class="animated fw-900 text-7">{{$slide->sub_title}}</h1>
                                            <p class="animated">{{$slide->Offre}}</p>
                                            <a class="animated btn btn-brush btn-brush-2" href="{{$slide->link}}"> Shop Now </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="single-slider-img single-slider-img-1">
                                            <img class="animated slider-1-1" src="{{asset('assets/imgs/slider')}}/{{$slide->image}}"  alt="{{$slide->title}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
       {}}
    </main>
</div>
@push('scripts')
    <script>
         var sliderrange = $('#slider-range');
    var amountprice = $('#amount');
    $(function() {
        sliderrange.slider({
            range: true,
            min: 0,
            max: 1000,
            values: [0, 1000],
            slide: function(event, ui) {
                //amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
                @this.set('min_value',ui.values[0]);
                @this.set('max_value',ui.values[1]);
            }
        });
        amountprice.val("$" + sliderrange.slider("values", 0) +
            " - $" + sliderrange.slider("values", 1));
    });

    </script>
@endpush
