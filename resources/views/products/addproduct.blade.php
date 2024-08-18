<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileImage" content="{{url('/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->

    <title>Add Products - Powered By NY-Tech</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <link href="{{url('/assets/img/favicons/nytech.png')}}" rel="nytech" sizes="180x180" >
    <link href="{{url('/assets/img/favicons/nytech.png')}}" rel="icon" type="image/png" sizes="32x32" >
    <link href="{{url('/assets/img/favicons/nytech.png')}}" rel="icon" type="image/png" sizes="16x16" >
    <link href="{{url('/assets/img/favicons/nytech.png')}}" rel="shortcut icon" type="image/x-icon" >
    <link href="{{url('/assets/img/favicons/manifest.json')}}" rel="manifest" >

    <script src="{{url('/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('/vendors/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('/assets/js/config.js')}}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link href="{{url('/vendors/dropzone/dropzone.min.css')}}" rel="stylesheet">
    <link href="{{url('/vendors/choices/choices.min.css')}}" rel="stylesheet">
    <link href="{{url('/vendors/flatpickr/flatpickr.min.css')}}" rel="stylesheet">
    <link href="{{url('/vendors/simplebar/simplebar.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/css/theme-rtl.min.css')}}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{url('/assets/css/theme.min.css')}}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{url('/assets/css/user-rtl.min.css')}}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{url('/assets/css/user.min.css')}}" type="text/css" rel="stylesheet" id="user-style-default">
    <script src="{{url('/assets/js/phoenixIsRTL.js')}}"></script>

  </head>

  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

    <main class="main" id="top">

        @include('navbar.nav')

      <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>

        <form class="mb-9" action="" method="post">
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Add a product</h2>
              <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5>
            </div>
            <div class="col-auto">
              <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button" style="display: none;">Discard</button>
              <button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0" type="button" style="display: none;">Save draft</button>
              <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish product</button>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="mb-3 col-xs-3 col-sm-3 col-m-3 col-l-3 col-xl-3 ">
                    <h4 class="mb-3">Code</h4>
                    <input class="form-control mb-5 " type="text" placeholder="Code"  disabled/>
                </div>
              <h4 class="mb-3">Product Title</h4>
              <input class="form-control mb-5" type="text" placeholder="Write title here..." />
              <div class="mb-6">
                <h4 class="mb-3"> Product Description</h4>
                <textarea class="form-control" name="content" data-tinymce='{"height":"15rem","placeholder":"Write a description here..."}'></textarea>
              </div>
              <h4 class="mb-3">Display images</h4>
              <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
                <div class="dz-preview d-flex flex-wrap">
                    <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;">
                        <img class="dz-image" src="{{asset('/assets/img/products/23.png')}}" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                        <a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a>
                    </div>
                </div>
                <div class="dz-message text-600" data-dz-message="data-dz-message">Drag your photo here<span class="text-800 px-1">or</span>
                    <button class="btn btn-link p-0" type="button">Browse from device</button>
                    <br />
                    <img class="mt-3 me-2" src="{{asset('/assets/img/icons/image-icon.png')}}" width="40" alt=""  />
                </div>
              </div>
              <h4 class="mb-3"> Active </h4>
              <div class="form-check mb-5">
                <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" checked="" />
                <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
              </div>

              <h4 class="mb-3">Inventory</h4>
              <div class="row g-0 border-top border-bottom border-300">
                <div class="col-sm-4">
                  <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true">
                      <span class="me-sm-2 fs-4 nav-icons" data-feather="tag"></span>
                      <span class="d-none d-sm-inline">Pricing</span>
                    </a>
                      <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false">
                        <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span>
                        <span class="d-none d-sm-inline">Restock</span>
                      </a>
                      <a style="display: none !important;" class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="shippingTab" data-bs-toggle="tab" data-bs-target="#shippingTabContent" role="tab" aria-controls="shippingTabContent" aria-selected="false">
                        <span class="me-sm-2 fs-4 nav-icons" data-feather="truck"></span>
                        <span class="d-none d-sm-inline">Shipping</span>
                      </a>
                      <a style="display: none !important;" class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="productsTab" data-bs-toggle="tab" data-bs-target="#productsTabContent" role="tab" aria-controls="productsTabContent" aria-selected="false">
                        <span class="me-sm-2 fs-4 nav-icons" data-feather="globe"></span>
                        <span class="d-none d-sm-inline">Global Delivery</span>
                      </a>
                      <a style="display: none !important;" class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent" role="tab" aria-controls="attributesTabContent" aria-selected="false">
                        <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders"></span>
                        <span class="d-none d-sm-inline">Attributes</span>
                      </a>
                      <a style="display: none !important;" class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="advancedTab" data-bs-toggle="tab" data-bs-target="#advancedTabContent" role="tab" aria-controls="advancedTabContent" aria-selected="false">
                        <span class="me-sm-2 fs-4 nav-icons" data-feather="lock"></span>
                        <span class="d-none d-sm-inline">Advanced</span>
                      </a>
                    </div>
                </div>
                <div class="col-sm-8">
                  <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                      <h4 class="mb-3 d-sm-none">Pricing</h4>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Regular price</h5><input class="form-control" type="text" placeholder="$$$" />
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Sale price</h5><input class="form-control" type="text" placeholder="$$$" />
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-1000">Add to Stock</h5>
                        <div class="row g-3 flex-1 mb-4">
                          <div class="col-sm-7"><input class="form-control" type="number" placeholder="Quantity" /></div>
                          <div class="col-sm"><button class="btn btn-primary" type="button"><span class="fa-solid fa-check me-1 fs--2"></span>Confirm</button></div>
                        </div>
                        <table>
                          <thead>
                            <tr>
                              <th style="width: 200px;"></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Product in stock now:</td>
                              <td class="text-700 fw-semi-bold py-1">$1,090<button class="btn p-0" type="button"><span class="fa-solid fa-rotate text-900 ms-1" style="--phoenix-text-opacity: .6;"></span></button></td>
                            </tr>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Product in transit:</td>
                              <td class="text-700 fw-semi-bold py-1">5000</td>
                            </tr>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Last time restocked:</td>
                              <td class="text-700 fw-semi-bold py-1">30th June, 2021</td>
                            </tr>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Total stock over lifetime:</td>
                              <td class="text-700 fw-semi-bold py-1">20,000</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="tab-pane fade h-100" id="shippingTabContent" role="tabpanel" aria-labelledby="shippingTab">
                      <div class="d-flex flex-column h-100"  >
                        <h5 class="mb-3 text-1000">Shipping Type</h5>
                        <div class="flex-1">
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledBySeller" /><label class="form-check-label fs-0 text-900" for="fullfilledBySeller">Fullfilled by Seller</label></div>
                            <div class="ps-4">
                              <p class="text-800 fs--1 mb-0">You’ll be responsible for product delivery. <br />Any damage or delay during shipping may cost you a Damage fee.</p>
                            </div>
                          </div>
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledByPhoenix" checked="checked" /><label class="form-check-label fs-0 text-900 d-flex align-items-center" for="fullfilledByPhoenix">Fullfilled by Phoenix <span class="badge badge-phoenix badge-phoenix-warning fs--2 ms-2">Recommended</span></label></div>
                            <div class="ps-4">
                              <p class="text-800 fs--1 mb-0">Your product, Our responsibility.<br />For a measly fee, we will handle the delivery process for you.</p>
                            </div>
                          </div>
                        </div>
                        <p class="fs--1 fw-semi-bold mb-0">See our <a class="fw-bold" href="#!">Delivery terms and conditions </a>for details.</p>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="productsTabContent" role="tabpanel" aria-labelledby="productsTab">
                      <h5 class="mb-3 text-1000">Global Delivery</h5>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="worldwideDelivery" /><label class="form-check-label fs-0 text-900" for="worldwideDelivery">Worldwide delivery</label></div>
                        <div class="ps-4">
                          <p class="fs--1 mb-0 text-800">Only available with Shipping method: <a href="#!">Fullfilled by Phoenix</a></p>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" checked="checked" id="selectedCountry" /><label class="form-check-label fs-0 text-900" for="selectedCountry">Selected Countries</label></div>
                        <div class="ps-4" style="max-width: 350px;"><select class="form-select ps-4" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Type Country name</option>
                            <option>United States of America</option>
                            <option>United Kingdom</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select></div>
                      </div>
                      <div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="localDelivery" /><label class="form-check-label fs-0 text-900" for="localDelivery">Local delivery</label></div>
                        <p class="fs--1 ms-4 mb-0 text-800">Deliver to your country of residence <a href="#!">Change profile address </a></p>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="attributesTabContent" role="tabpanel" aria-labelledby="attributesTab">
                      <h5 class="mb-3 text-1000">Attributes</h5>
                      <div class="form-check">
                        <input class="form-check-input" id="fragileCheck" type="checkbox" />
                        <label class="form-check-label text-900 fs-0" for="fragileCheck">Fragile Product</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="biodegradableCheck" type="checkbox" />
                        <label class="form-check-label text-900 fs-0" for="biodegradableCheck">Biodegradable</label>
                      </div>
                      <div class="mb-3">
                        <div class="form-check">
                          <input class="form-check-input" id="frozenCheck" type="checkbox" checked="checked" />
                          <label class="form-check-label text-900 fs-0" for="frozenCheck">Frozen Product</label>
                          <input class="form-control" type="text" placeholder="Max. allowed Temperature" style="max-width: 350px;" />
                        </div>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" id="productCheck" type="checkbox" checked="checked" />
                        <label class="form-check-label text-900 fs-0" for="productCheck">Expiry Date of Product</label>
                        <input class="form-control inventory-attributes datetimepicker" id="inventory" type="text" style="max-width: 350px;" placeholder="d/m/y" data-options='{"disableMobile":true}' />
                      </div>
                    </div>

                    <div class="tab-pane fade" id="advancedTabContent" role="tabpanel" aria-labelledby="advancedTab">
                      <h5 class="mb-3 text-1000">Advanced</h5>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Product ID Type</h5><select class="form-select" aria-label="form-select-lg example">
                            <option selected="selected">ISBN</option>
                            <option value="1">UPC</option>
                            <option value="2">EAN</option>
                            <option value="3">JAN</option>
                          </select>
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Product ID</h5><input class="form-control" type="text" placeholder="ISBN Number" />
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="row g-2">
                <div class="col-12 col-xl-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Organize</h4>
                      <div class="row gx-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-1000 me-2">Category</h5><a class="fw-bold fs--1" href="#!">Add new category</a>
                            </div><select class="form-select mb-3" aria-label="category">
                              <option value="men-cloth">Men's Clothing</option>
                              <option value="women-cloth">Womens's Clothing</option>
                              <option value="kid-cloth">Kid's Clothing</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-1000 me-2">Vendor</h5><a class="fw-bold fs--1" href="#!">Add new vendor</a>
                            </div>
                            <select class="form-select mb-3" aria-label="category">
                              <option value="men-cloth">Men's Clothing</option>
                              <option value="women-cloth">Womens's Clothing</option>
                              <option value="kid-cloth">Kid's Clothing</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <h5 class="mb-2 text-1000">Collection</h5><input class="form-control mb-xl-3" type="text" placeholder="Collection" />
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap mb-2">
                            <h5 class="mb-0 text-1000 me-2">Tags</h5><a class="fw-bold fs--1 lh-sm" href="#!">View all tags</a>
                          </div><select class="form-select" aria-label="category">
                            <option value="men-cloth">Men's Clothing</option>
                            <option value="women-cloth">Womens's Clothing</option>
                            <option value="kid-cloth">Kid's Clothing</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Variants</h4>
                      <div class="row g-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="border-bottom border-dashed border-sm-0 border-bottom-xl pb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="text-1000 me-2">Option 1</h5><a class="fw-bold fs--1" href="#!">Remove</a>
                            </div><select class="form-select mb-3">
                              <option value="size">Size</option>
                              <option value="color">Color</option>
                              <option value="weight">Weight</option>
                              <option value="smell">Smell</option>
                            </select>
                            <div class="product-variant-select-menu"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="size">4x6 in</option>
                                <option value="color">9x6 in</option>
                                <option value="weight">11x8 in</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap mb-2">
                            <h5 class="text-1000 me-2">Option 2</h5><a class="fw-bold fs--1" href="#!">Remove</a>
                          </div><select class="form-select mb-3">
                            <option value="size">Size</option>
                            <option value="color">Color</option>
                            <option value="weight">Weight</option>
                            <option value="smell">Smell</option>
                          </select>
                          <div class="product-variant-select-menu mb-3"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                              <option value="size">4x6 in</option>
                              <option value="color">9x6 in</option>
                              <option value="weight">11x8 in</option>
                            </select></div>
                        </div>
                      </div><button class="btn btn-phoenix-primary w-100" type="button">Add another option</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v1.13.0</p>
            </div>
          </div>
        </footer>
      </div>

      <div class="support-chat-container">
        <div class="container-fluid support-chat">
          <div class="card bg-white">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
              <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs--3"></span></h5>
              <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
              </div>
            </div>
            <div class="card-body chat p-0">
              <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a><a class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a></div>
                <div class="text-center mt-auto">
                  <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white" src="../../../assets/img/team/30.webp" alt="" /></div>
                  <h5 class="mt-2 mb-3">Eric</h5>
                  <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
              <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs--1"></span></button>
            </div>
          </div>
        </div><button class="btn p-0 border border-200 btn-support-chat"><span class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span class="fa-solid fa-circle text-success fs--1 ms-2"></span><span class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
      </div>

    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header align-items-start border-bottom flex-column">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
          <div>
            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
            <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
          </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
        </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
      </div>
      <div class="offcanvas-body scrollbar px-card" id="themeController">
        <div class="setting-panel-item mt-0">
          <h5 class="setting-panel-item-title">Color Scheme</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/default-light.png" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label></div>
          </div>
        </div>
        <div class="border rounded-3 p-4 setting-panel-item bg-white">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">RTL </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
          </div>
          <p class="mb-0 text-700">Change text direction</p>
        </div>
        <div class="border rounded-3 p-4 setting-panel-item bg-white">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
          </div>
          <p class="mb-0 text-700">Toggle support chat</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Navigation Type</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionTopDouble"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/dual-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/dual-dark.png" alt=""/></span><span class="label-text"> Dual nav</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
      </div>
    </div>

    <a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->

    <script src="{{url('/vendors/popper/popper.min.js')}}"></script>
    <script src="{{url('/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('/vendors/anchorjs/anchor.min.js')}}"></script>
    <script src="{{url('/vendors/is/is.min.js')}}"></script>
    <script src="{{url('/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{url('/vendors/lodash/lodash.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{url('/vendors/list.js/list.min.js')}}"></script>
    <script src="{{url('/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{url('/vendors/dayjs/dayjs.min.js')}}"></script>
    <script src="{{url('/vendors/tinymce/tinymce.min.js')}}"></script>
    <script src="{{url('/vendors/dropzone/dropzone.min.js')}}"></script>
    <script src="{{url('/vendors/choices/choices.min.js')}}"></script>
    <script src="{{url('/assets/js/phoenix.js')}}"></script>

  </body>

</html>
