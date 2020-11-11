@extends('layouts.template')
@section('main')
    <!--Main category : Begin-->
    <main id="main" class="account dashboard">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Welcome to GPP</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <span>Request for Quote</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="account-content parten-bg">
            @include('layouts.message')
            <div class="container">
                <div class="row acc-dashboard wishlist-custom">
                    <section id="wishlist" class="account-main col-md-9 col-sm-9 col-xs-12 wishlist-custom">
                        <h3 class="acc-title lg">Request for Quote</h3>
                        <div class="row db-content">
                            <form id="place-order" action="{{route('quote.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="quote-info">
                                    <div class="img"><img
                                                src="{{asset('template/images/img-wishlist.png')}}"/></div>
                                    <div class="data">
                                        <div>
                                            <h4>Get Affordable Price For Quality Printing</h4>
                                            <p>We provide high quality business cards, flyers, brochures,
                                                stationery and other premium online print products...</p>
                                            <div class="quote-section">
                                                <h5>Contact Information</h5>
                                                <div>
                                                    <input type="text" name="name" placeholder="Enter Name*"
                                                           value="{{old('name')}}" required>
                                                    <input type="text" name="phone"
                                                           placeholder="Enter Phone Number*"
                                                           value="{{old('phone')}}" required>
                                                </div>
                                                <div>
                                                    <input type="email" name="email" placeholder="Enter Email*"
                                                           value="{{old('email')}}" required>
                                                    <input type="text" name="company"
                                                           value="{{old('company')}}" placeholder="Enter Company Name">
                                                </div>
                                                <div>
                                                    <input type="text" name="address" value="{{old('address')}}"
                                                           placeholder="Enter Address">
                                                </div>
                                            </div>


                                            <div class="quote-section">
                                                <h5>Project Details</h5>
                                                <div>
                                                    <input type="number" name="num_of_text_page"
                                                           value="{{old('num_of_text_page')}}"
                                                           placeholder="Number of Text Pages">
                                                    <input type="text" name="trim_size" value="{{old('trim_size')}}"
                                                           placeholder="Trim Size">
                                                </div>

                                                <div class="project-details-select">
                                                    <div>
                                                        <label for="num_of_cover_page">Number of Cover Pages</label>
                                                        <select id="num_of_cover_page" name="num_of_cover_page"
                                                                required>
                                                            <option value="">Select an option</option>
                                                            @foreach($data['numberOfCoverPages'] as $numberOfCoverPage)
                                                                <option value="{{$numberOfCoverPage}}" @php echo(old('num_of_cover_page') == $numberOfCoverPage)? 'selected':'';@endphp>{{$numberOfCoverPage}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="cover_type_div">
                                                        <label for="cover_type">Cover
                                                            Type</label>
                                                        <select id="cover_type" name="cover_type">
                                                            <option value="">Select Cover Type</option>
                                                            @foreach($data['coverTypes'] as $coverType)
                                                                <option value="{{$coverType}}" @php echo(old('cover_type') == $coverType)? 'selected':'';@endphp>{{$coverType}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <textarea name="qtty"
                                                              placeholder="Quantity">{{old('qtty')}}</textarea>
                                                </div>

                                                <div class="project-details-sub">
                                                    <h6>Colour Option</h6>
                                                    <div class="form-check">
                                                        <div>
                                                            <label for="colour_option_cover">Cover</label>
                                                            <select class="custom-select" id="colour_option_cover"
                                                                    name="colour_option_cover" required>
                                                                <option value="">Select an option</option>
                                                                @foreach($data['colourOptions'] as $colourOption)
                                                                    <option value="{{$colourOption}}" @php echo(old('colour_option_cover') == $colourOption)? 'selected':'';@endphp>{{$colourOption}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div>
                                                            <label for="colour_option_inner">Inner</label>
                                                            <select class="custom-select" id="colour_option_inner"
                                                                    name="colour_option_inner" required>
                                                                <option value="">Select an option</option>
                                                                @foreach($data['colourOptions'] as $colourOption)
                                                                    <option value="{{$colourOption}}" @php echo(old('colour_option_inner') == $colourOption)? 'selected':'';@endphp>{{$colourOption}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div>
                                                            <label for="colour_option_insert">Insert</label>
                                                            <select class="custom-select" id="colour_option_insert"
                                                                    name="colour_option_insert">
                                                                <option value="">Select an option</option>
                                                                @foreach($data['colourOptions'] as $colourOption)
                                                                    <option value="{{$colourOption}}" @php echo(old('colour_option_insert') == $colourOption)? 'selected':'';@endphp>{{$colourOption}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <textarea name="colour_option_text"
                                                                  placeholder="Specify pantone number if your colour choice is pantone">{{old('colour_option_text')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="project-details-sub">
                                                    <h6>Paper Stock</h6>
                                                    <div class="form-check">
                                                        <div>
                                                            <label for="paper_stock_cover">Cover</label>
                                                            <select class="custom-select" id="paper_stock_cover"
                                                                    name="paper_stock_cover" required>
                                                                <option value="">Select an option</option>
                                                                @foreach($data['paperStocks'] as $paperStock)
                                                                    <option value="{{$paperStock}}" @php echo(old('paper_stock_cover') == $paperStock)? 'selected':'';@endphp>{{$paperStock}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div>
                                                            <label for="paper_stock_inner">Inner</label>
                                                            <select class="custom-select" id="paper_stock_inner"
                                                                    name="paper_stock_inner" required>
                                                                <option value="">Select an option</option>
                                                                @foreach($data['paperStocks'] as $paperStock)
                                                                    <option value="{{$paperStock}}" @php echo(old('paper_stock_inner') == $paperStock)? 'selected':'';@endphp>{{$paperStock}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div>
                                                            <label for="paper_stock_insert">Insert</label>
                                                            <select class="custom-select" id="paper_stock_insert"
                                                                    name="paper_stock_insert">
                                                                <option value="">Select an option</option>
                                                                @foreach($data['paperStocks'] as $paperStock)
                                                                    <option value="{{$paperStock}}" @php echo(old('paper_stock_insert') == $paperStock)? 'selected':'';@endphp>{{$paperStock}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <textarea name="paper_stock_text"
                                                                  placeholder="Paper Stock Additional Information. Also specify if your option is others*">{{old('paper_stock_text')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="quote-section">
                                                <h5>Finishing Info</h5>
                                                <div class="finishing-info-sub">
                                                    <h6>Cover Finishing*</h6>
                                                    <div class="form-check">
                                                        @foreach($data['coverFinishes'] as $key => $coverFinish)
                                                            <div>
                                                                <input class="form-check-input" type="radio"
                                                                       name="cover_finishing"
                                                                       id="{{$key}}" value="{{$coverFinish}}"
                                                                        @php echo(old('cover_finishing') == $coverFinish)? 'checked':'';@endphp>
                                                                <label class="form-check-label" for="{{$key}}">
                                                                    {{$coverFinish}}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="finishing-info-sub">
                                                    <h6>Complete Job Finishing*</h6>
                                                    <div class="form-check">
                                                        @foreach($data['completeJobFinishes'] as $key => $completeJobFinish)
                                                            <div>
                                                                <input class="form-check-input" type="radio"
                                                                       name="complete_job_finishing"
                                                                       id="{{$key}}" value="{{$completeJobFinish}}"
                                                                       required @php echo(old('complete_job_finishing') == $completeJobFinish)? 'checked':'';@endphp>
                                                                <label class="form-check-label" for="{{$key}}">
                                                                    {{$completeJobFinish}}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="finishing-info-sub">
                                                    <h6>Packaging*</h6>
                                                    <div class="form-check">
                                                        @foreach($data['packaging'] as $key => $packaging)
                                                            <div>
                                                                <input class="form-check-input" type="radio"
                                                                       name="packaging"
                                                                       id="{{$key}}" value="{{$packaging}}"
                                                                        @php echo(old('packaging') == $packaging)? 'checked':'';@endphp>
                                                                <label class="form-check-label" for="{{$key}}">
                                                                    {{$packaging}}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="finishing-info-sub">
                                                    <h6>Other Packaging*</h6>
                                                    <div class="form-check">
                                                        @foreach($data['otherPackaging'] as $key => $packaging)
                                                            <div>
                                                                <input class="form-check-input" type="radio"
                                                                       name="other_packaging"
                                                                       id="{{$key}}" value="{{$packaging}}"
                                                                       required @php echo(old('other_packaging') == $packaging)? 'checked':'';@endphp>
                                                                <label class="form-check-label" for="{{$key}}">
                                                                    {{$packaging}}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="text" name="finishing_info_text"
                                                           value="{{old('finishing_info_text')}}"
                                                           placeholder="Additional Finishing Info">
                                                </div>
                                            </div>


                                            <div class="quote-section">
                                                <h5>Project Details</h5>
                                                <div class="other-information-sub">
                                                    <input type="text" name="special_instruction"
                                                           value="{{old('special_instruction')}}"
                                                           placeholder="Special Note & Instruction">

                                                    <label for="delivery_instruction"> Means of Delivery</label>
                                                    <select name="delivery_instruction" id="delivery_instruction">
                                                        <option value="">Select Delivery Option</option>
                                                        @foreach($data['delivery'] as $delivery)
                                                            <option value="{{$delivery}}" @php echo($delivery == old('delivery_instruction'))?'selected':''; @endphp >{{$delivery}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="other-information-sub">
                                                    <label for="date">Expected Delivery Date*</label>
                                                    <input type="date" id="date" name="date" value="{{old('date')}}"
                                                           required>
                                                </div>
                                                <div class="other-information-sub">
                                                    <h6>How did you get to know/hear about GPP?</h6>
                                                    <div class="form-check">
                                                        @foreach($data['awareness'] as $key => $medium)
                                                            <div>
                                                                <input class="form-check-input" type="radio"
                                                                       name="awareness"
                                                                       id="{{$key}}" value="{{$medium}}"
                                                                       required @php echo(old('awareness') == $medium)? 'checked':'';@endphp>
                                                                <label class="form-check-label" for="{{$key}}">
                                                                    {{$medium}}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="display: flex; flex-flow:row wrap;" class="total submit-quote">
                                                <div style="flex-grow: 1;"></div>
                                                <button type="submit" class="addcart">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
    <!-- Main Category: End -->
@endsection
