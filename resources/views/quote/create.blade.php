@extends('layouts.template')
@section('main')
    <!--Main category : Begin-->
    <main id="main" class="account dashboard">
        <section class="header-page">
            @include('layouts.message')
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
            <div class="container">
                <div class="row acc-dashboard wishlist-custom">
                    <section id="wishlist" class="account-main col-md-9 col-sm-9 col-xs-12 wishlist-custom"
                             style="padding: 0; margin:30px 0;">
                        <h3 class="acc-title lg">Request for Quote</h3>
                        <div class="row db-content">
                            <form id="place-order" action="{{route('quote.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div style="display: flex; flex-flow: row wrap;">
                                    <div class="img"><img
                                            src="{{asset('template/images/img-wishlist.png')}}"/></div>
                                    <div class="data">
                                        <div style="display: flex; flex-flow: column wrap">
                                            <h4>Get Affordable Price For Quality Printing</h4>
                                            <p>We provide high quality business cards, postcards, flyers, brochures,
                                                stationery and other premium online print products...</p>
                                            <div class="contact-info">
                                                <h5>Contact Information</h5>
                                                <input type="text" name="name" placeholder="Enter Name" required>
                                                <input type="text" name="phone" placeholder="Enter Phone Number" required>
                                                <input type="email" name="email" placeholder="Enter Email" required>
                                                <input type="text" name="company" placeholder="Enter Company Name" >
                                                <input type="text" name="address" placeholder="Enter Address" required>
                                            </div>
                                            <div class="project-details">
                                                <h5>Project Details</h5>
                                                <input type="number" name="num_of_cover_page" placeholder="Number of Cover Pages">
                                                <input type="number" name="num_of_text_page" placeholder="Number of Text Pages">
                                                <input type="text" name="cover_type" placeholder="Cover Type" required>
                                                <input type="text" name="trim_size" placeholder="Trim Size">
                                                <input type="text" name="qtty" placeholder="Quantity">
                                                <h6>Colour Option</h6>
                                                <label for="colour_option_cover">Cover</label>
                                                <select class="custom-select" id="colour_option_cover" name="colour_option_cover" required>
                                                    <option value="one colour">One Colour</option>
                                                    <option value="two colour">Two Colour</option>
                                                    <option value="three colour">Three Colour</option>
                                                    <option value="four colour">Four Colour (CYMK)</option>
                                                </select>

                                                <label for="colour_option_inner">Inner</label>
                                                <select class="custom-select" id="colour_option_inner"  name="colour_option_inner" required>
                                                    <option value="one colour">One Colour</option>
                                                    <option value="two colour">Two Colour</option>
                                                    <option value="three colour">Three Colour</option>
                                                    <option value="four colour">Four Colour (CYMK)</option>
                                                </select>

                                                <label for="colour_option_insert">Insert</label>
                                                <select class="custom-select" id="colour_option_insert" name="colour_option_insert" required>
                                                    <option value="one colour">One Colour</option>
                                                    <option value="two colour">Two Colour</option>
                                                    <option value="three colour">Three Colour</option>
                                                    <option value="four colour">Four Colour (CYMK)</option>
                                                </select>

                                                <h6>Paper Stock</h6>
                                                <label for="paper_stock_cover">Cover</label>
                                                <select class="custom-select" id="paper_stock_cover" name="paper_stock_cover" required>
                                                    <option value="one colour">One Colour</option>
                                                    <option value="two colour">Two Colour</option>
                                                    <option value="three colour">Three Colour</option>
                                                    <option value="four colour">Four Colour (CYMK)</option>
                                                </select>

                                                <label for="paper_stock_inner">Inner</label>
                                                <select class="custom-select" id="paper_stock_inner"  name="paper_stock_inner" required>
                                                    <option value="one colour">One Colour</option>
                                                    <option value="two colour">Two Colour</option>
                                                    <option value="three colour">Three Colour</option>
                                                    <option value="four colour">Four Colour (CYMK)</option>
                                                </select>

                                                <label for="paper_stock_insert">Insert</label>
                                                <select class="custom-select" id="paper_stock_insert" name="paper_stock_insert" required>
                                                    <option value="one colour">One Colour</option>
                                                    <option value="two colour">Two Colour</option>
                                                    <option value="three colour">Three Colour</option>
                                                    <option value="four colour">Four Colour (CYMK)</option>
                                                </select>
                                                <input type="text" name="paper_stock_text" placeholder="Paper Stock Additional Info">
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-flow:row wrap;" class="total submit-quote">
                                            <input type="file" name="attachment">
                                            <div style="flex-grow: 1;"></div>
                                            <button type="submit" class="addcart">Submit</button>
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
