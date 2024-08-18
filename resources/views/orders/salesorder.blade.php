<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="msapplication-TileImage" content="{{url('/assets/img/favicons/mstile-150x150.png')}}"> --}}
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->

    <title>Sales Order - Powered By NY-Tech</title>

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
                        <h2 class="mb-2">Sales Order</h2>
                    </div>
                </div>

                <div class="row g-5">

                    <div class="col-6 col-xl-6">
                        <div class="mb-3 col-xs-3 col-sm-3 col-m-3 col-l-3 col-xl-3 ">
                            <label class="mb-3">Code</label>
                            <input class="form-control mb-5 " type="text" placeholder="Code"  disabled/>
                        </div>


                        <div class="mb-6">
                            <label class="mb-3">Customer Name</label>
                            <input class="form-control " type="text" placeholder="Write Customer Name here..." />
                        </div>

                        <div class="mb-6">
                            <label class="mb-3">Remarks</label>
                            <input class="form-control" type="text" placeholder="Write Remarks here..." />
                        </div>
                        {{-- ============================================================================================ --}}
                        <h4 class="mb-3">Customer images</h4>
                        <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                            <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
                            <div class="dz-preview d-flex flex-wrap">
                                <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;">
                                    <img class="dz-image" src="" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                                    <a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a>
                                </div>
                            </div>
                            <div class="dz-message text-600" data-dz-message="data-dz-message">Drag your photo here<span class="text-800 px-1">or</span>
                                <button class="btn btn-link p-0" type="button">Browse from device</button>
                                <br />
                                <img class="mt-3 me-2" src="" width="40" alt=""  />
                            </div>
                        </div>
                            {{-- ============================================================================================ --}}

                    </div>


                    <div class="col-6 col-xl-6">
                        <div class="mb-3 col-xs-3 col-sm-3 col-m-3 col-l-3 col-xl-3 ">
                            <label class="mb-3" for="">Start Date</label>
                            <input class="form-control datetimepicker mb-5" id="datepicker" type="text" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />

                        </div>

                        <div class="mb-6">
                            <label class="mb-3">Customer Name</label>
                            <input class="form-control " type="text" placeholder="Write Customer Name here..." />
                        </div>

                        <div class="mb-6">
                            <label class="mb-3">Vanue</label>
                            <select class="form-control " name="" id="">
                                <option value="">please select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>


                    </div>


                </div>

                {{-- ============================================== Child grid ============================================== --}}
                <table class="table table-bordered" id="productTable">
                    <thead>
                        <tr>
                            <th># no</th>
                            <th>Products</th>
                            <th>Rate</th>
                            <th>Qty</th>
                            <th>Desc%</th>
                            <th>Desc Amt</th>
                            <th>STax%</th>
                            <th>Sale Tax Amt</th>
                            <th>Amount</th>
                            <th>Add / Remove Row</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="srno" class="srno" style="width:3%;">1</td>
                            <td><input class="form-control form-control-sm autocomplete-trigger" type="text" name="Products[]" id="orders_products_1_products" placeholder="Products" /></td>
                            <td style="width:9%;"><input class="form-control form-control-sm" type="text" name="Rate[]" id="orders_products_1_Rate" placeholder="Rate" /></td>
                            <td style="width:9%;"><input class="form-control form-control-sm" type="text" name="Qty[]" id="orders_products_1_Qty" placeholder="Qty" /></td>
                            <td style="width:9%;"><input class="form-control form-control-sm" type="text" name="descount[]" id="orders_products_1_descount" placeholder="Desc%" /></td>
                            <td style="width:9%;"><input class="form-control form-control-sm" type="text" name="descountamt[]" id="orders_products_1_descountamt" placeholder="Desc Amt" /></td>
                            <td style="width:9%;"><input class="form-control form-control-sm" type="text" name="salestax[]" id="orders_products_1_salestax" placeholder="Sale Tax" /></td>
                            <td style="width:9%;"><input class="form-control form-control-sm" type="text" name="salestaxamt[]" id="orders_products_1_salestaxamt" placeholder="Sale Tax Amt" /></td>
                            <td style="width:9%;"><input class="form-control form-control-sm" type="text" name="Amount[]" id="orders_products_1_Amount" placeholder="Amount" /></td>
                            <td style="width:10%;">
                                <button type="button" id="addRowBtn" class="btn btn-primary btn-sm addRowBtn">Add</button>
                                <button type="button" id="RemoveRowBtn" class="btn btn-primary btn-sm RemoveRowBtn" style="display: none;">Remove</button>
                            </td>

                        </tr>
                    </tbody>
                </table>

                {{-- ============================================== Child grid ============================================== --}}

            </form>



            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with NY-Tech<span class="d-none d-sm-inline-block"></span>
                        <span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="#">NY-Tech</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">v1.13.0</p>
                    </div>
                </div>
            </footer>

        </div>

        {{-- <div class="support-chat-container"> --}}

        {{-- <div class="container-fluid support-chat">
        <div class="card bg-white">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
                <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs--3"></span></h5>
                <div class="btn-reveal-trigger">
                    <button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h text-900"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown">
                        <a class="dropdown-item" href="#!">Request a callback</a>
                        <a class="dropdown-item" href="#!">Search in chat</a>
                        <a class="dropdown-item" href="#!">Show history</a>
                        <a class="dropdown-item" href="#!">Report to Admin</a>
                        <a class="dropdown-item btn-support-chat" href="#!">Close Support</a>
                    </div>
                </div>
            </div>

            <div class="card-body chat p-0">
          <div class="d-flex flex-column-reverse scrollbar h-100 p-3">

              <div class="text-end mt-6">
                  <a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                      <p class="mb-0 fw-semi-bold fs--1">I need help with something</p>
                      <span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a>
                  <a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                      <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p>
                      <span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a>
                  <a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                      <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p>
                      <span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a>
                  <a class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                      <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p>
                      <span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a>
              </div>

              <div class="text-center mt-auto">
              <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white" src="" alt="" /></div>
              <h5 class="mt-2 mb-3">Eric</h5>
              <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
              </div>
          </div>
            </div>

            <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
                <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4">
                    <input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" />
                    <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span>
                    </label>
                    <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
                    <label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span>
                    </label>
                    <input class="d-none" type="file" id="supportChatAttachment" />
                </div>
                <button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs--1"></span></button>
            </div>

        </div>
        </div>

        <button class="btn p-0 border border-200 btn-support-chat">
            <span class="fs-0 btn-text text-primary text-nowrap">Chat demo</span>
            <span class="fa-solid fa-circle text-success fs--1 ms-2"></span>
            <span class="fa-solid fa-chevron-down text-primary fs-1"></span>
        </button> --}}

        {{-- </div> --}}

    </main>





    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <script src="{{url('/assets/js/autocompelete.js')}}"></script>
    <script src="{{url('/assets/js/tablerowsclone.js')}}"></script>
    <script src="{{url('/assets/js/flatpickr.js')}}"></>
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
