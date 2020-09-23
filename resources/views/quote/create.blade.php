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
                                            <p>We provide high quality business cards, postcards, flyers, brochures,
                                                stationery and other premium online print products...</p>
                                            <div class="quote-section">
                                                <h5>Contact Information</h5>
                                                <div>
                                                    <input type="text" name="name" placeholder="Enter Name*"
                                                           required>
                                                    <input type="text" name="phone"
                                                           placeholder="Enter Phone Number*"
                                                           required>
                                                </div>
                                                <div>
                                                    <input type="email" name="email" placeholder="Enter Email*"
                                                           required>
                                                    <input type="text" name="company"
                                                           placeholder="Enter Company Name">
                                                </div>
                                                <div>
                                                    <input type="text" name="address" placeholder="Enter Address*"
                                                           required>
                                                </div>
                                            </div>


                                            <div class="quote-section">
                                                <h5>Project Details</h5>
                                                <div>
                                                    <input type="number" name="num_of_cover_page"
                                                           placeholder="Number of Cover Pages">
                                                    <input type="number" name="num_of_text_page"
                                                           placeholder="Number of Text Pages">
                                                </div>
                                                <div>
                                                    <input type="text" name="cover_type" placeholder="Cover Type"
                                                           required>
                                                    <input type="text" name="trim_size" placeholder="Trim Size">
                                                </div>
                                                <div>
                                                    <input type="number" name="qtty" placeholder="Quantity">
                                                </div>
                                                <div class="project-details-sub">
                                                    <h6>Colour Option</h6>
                                                    <div>
                                                        <label for="colour_option_cover">Cover</label>
                                                        <select class="custom-select" id="colour_option_cover"
                                                                name="colour_option_cover" required>
                                                            <option value="one colour">One Colour</option>
                                                            <option value="two colour">Two Colour</option>
                                                            <option value="three colour">Three Colour</option>
                                                            <option value="four colour">Four Colour (CYMK)</option>
                                                        </select>

                                                        <label for="colour_option_inner">Inner</label>
                                                        <select class="custom-select" id="colour_option_inner"
                                                                name="colour_option_inner" required>
                                                            <option value="one colour">One Colour</option>
                                                            <option value="two colour">Two Colour</option>
                                                            <option value="three colour">Three Colour</option>
                                                            <option value="four colour">Four Colour (CYMK)</option>
                                                        </select>

                                                        <label for="colour_option_insert">Insert</label>
                                                        <select class="custom-select" id="colour_option_insert"
                                                                name="colour_option_insert" required>
                                                            <option value="one colour">One Colour</option>
                                                            <option value="two colour">Two Colour</option>
                                                            <option value="three colour">Three Colour</option>
                                                            <option value="four colour">Four Colour (CYMK)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="project-details-sub">
                                                    <h6>Paper Stock</h6>
                                                    <div>
                                                        <label for="paper_stock_cover">Cover</label>
                                                        <select class="custom-select" id="paper_stock_cover"
                                                                name="paper_stock_cover" required>
                                                            <option value="one colour">One Colour</option>
                                                            <option value="two colour">Two Colour</option>
                                                            <option value="three colour">Three Colour</option>
                                                            <option value="four colour">Four Colour (CYMK)</option>
                                                        </select>

                                                        <label for="paper_stock_inner">Inner</label>
                                                        <select class="custom-select" id="paper_stock_inner"
                                                                name="paper_stock_inner" required>
                                                            <option value="one colour">One Colour</option>
                                                            <option value="two colour">Two Colour</option>
                                                            <option value="three colour">Three Colour</option>
                                                            <option value="four colour">Four Colour (CYMK)</option>
                                                        </select>

                                                        <label for="paper_stock_insert">Insert</label>
                                                        <select class="custom-select" id="paper_stock_insert"
                                                                name="paper_stock_insert" required>
                                                            <option value="one colour">One Colour</option>
                                                            <option value="two colour">Two Colour</option>
                                                            <option value="three colour">Three Colour</option>
                                                            <option value="four colour">Four Colour (CYMK)</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <input type="text" name="paper_stock_text"
                                                               placeholder="Paper Stock Additional Info">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="quote-section">
                                                <h5>Finishing Info</h5>
                                                <div class="finishing-info-sub">
                                                    <h6>Cover Finish*</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="cover_finishing"
                                                               id="glossy_lamination" value="Glossy Lamination"
                                                               required>
                                                        <label class="form-check-label" for="glossy_lamination">
                                                            Glossy Lamination
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="cover_finishing"
                                                               id="matt_lamination" value="Matt Lamination">
                                                        <label class="form-check-label" for="matt_lamination">
                                                            Matt Lamination
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="cover_finishing"
                                                               id="spot_lamination" value="Spot Lamination">
                                                        <label class="form-check-label" for="spot_lamination">
                                                            Spot Lamination
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="cover_finishing"
                                                               id="vanish" value="Vanish">
                                                        <label class="form-check-label" for="vanish">
                                                            Vanish
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="cover_finishing"
                                                               id="uv" value="UV">
                                                        <label class="form-check-label" for="uv">
                                                            UV
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="finishing-info-sub">
                                                    <h6>Complete Job Finishing*</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="complete_job_finishing"
                                                               id="perfect_bind" value="Perfect Bind" required>
                                                        <label class="form-check-label" for="perfect_bind">
                                                            Perfect Bind
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="complete_job_finishing"
                                                               id="saddle_stitched" value="Saddle Stitched">
                                                        <label class="form-check-label" for="saddle_stitched">
                                                            Saddle Stitched
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="complete_job_finishing"
                                                               id="spiral_wire_o" value="Spiral Wire-O">
                                                        <label class="form-check-label" for="spiral_wire_o">
                                                            Spiral Wire-O
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="finishing-info-sub">
                                                    <h6>Packaging*</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="packaging"
                                                               id="heat_seal" value="Heat Seal" required>
                                                        <label class="form-check-label" for="heat_seal">
                                                            Heat Seal
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="packaging"
                                                               id="peal_seal" value="Peal Seal">
                                                        <label class="form-check-label" for="peal_seal">
                                                            Peal Seal
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="finishing-info-sub">
                                                    <h6>Other Packaging*</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="other_packaging"
                                                               id="boxed" value="Boxed" required>
                                                        <label class="form-check-label" for="boxed">
                                                            Boxed
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="other_packaging"
                                                               id="wrapped" value="Wrapped">
                                                        <label class="form-check-label" for="wrapped">
                                                            Wrapped
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="quote-section">
                                                <h5>Project Details</h5>
                                                <div class="other-information-sub">
                                                    <input type="text" name="special_instruction"
                                                           placeholder="Special Note & Instruction">
                                                    <input type="text" name="delivery_instruction"
                                                           placeholder="Delivery Instruction">
                                                </div>
                                                <div class="other-information-sub">
                                                    <label for="date">Estimated Day of Job Completion*</label>
                                                    <input type="date" id="date" name="date" required>
                                                </div>
                                                <div class="other-information-sub">
                                                    <h6>How did you get to know/hear about GPP?</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="awareness"
                                                               id="media" value="Media">
                                                        <label class="form-check-label" for="media">
                                                            Media
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="awareness"
                                                               id="friend" value="Friends">
                                                        <label class="form-check-label" for="friend">
                                                            Friend
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="awareness"
                                                               id="advert" value="Advert">
                                                        <label class="form-check-label" for="advert">
                                                            Advert Publication
                                                        </label>

                                                        <input class="form-check-input" type="radio"
                                                               name="awareness"
                                                               id="other_medium" value="Vanish">
                                                        <label class="form-check-label" for="other_medium">
                                                            Other
                                                        </label>
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
