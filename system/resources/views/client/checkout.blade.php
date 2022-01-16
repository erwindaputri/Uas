<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Vegetables</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{url('public')}}/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('public')}}/css/responsive.css" rel="stylesheet" />

</head>

<body>
   @include('client.section.header')

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{ url('shoes') }}">Home</a> <span class="mx-2 mb-0">/</span> <a href="{{ url('cart') }}">Add to Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"> <a href="{{ url('checkout') }}">Checkout</a> </strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Returning customer? <a href="{{ url('login') }}">Click here</a> to login
            </div>
          </div>
<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="card-body">
				                        <div class="row">
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Provinsi</label>
				                            <select name="" id="" class="form-control" onchange="gantiProvinsi(this.value)">
				                              <option value="">Pilih Provinsi</option>
				                              @foreach ($list_provinsi as $provinsi)
				                                  <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
				                              @endforeach
				                            </select>
				                          </div>
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Kabupaten</label>
				                            <select name="" id="kabupaten" class="form-control" onchange="gantiKabupaten(this.value)">
				                              <option value="">Pilih Provinsi terlebih dahulu</option>
				                            </select>
				                          </div>
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Kecamatan</label>
				                            <select name="" id="kecamatan" class="form-control" onchange="gantiKecamatan(this.value)">
				                              <option value="">Pilih Kabupaten terlebih dahulu</option>
				                            </select>
				                          </div>
				                          <div class="col-md-3">
				                            <label for="" class="control-label">Desa</label>
				                            <select name="" id="desa" class="form-control">
				                              <option value="">Pilih Kecamatan terlebih dahulu</option>
				                            </select>
				                          </div>                
				                        </div>
				                    </div>
						</div>
					</div>

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">
                  
                  <label for="c_code" class="text-black mb-3">Masukkan kode kupon Anda jika ada</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Kode Kupon" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Ok</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Socious <strong class="mx-2">x</strong> 1</td>
                        <td>RP.500.000</td>
                      </tr>
                      <tr>
                        <td>Fila<strong class="mx-2">x</strong>   1</td>
                        <td>RP.469.000</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">RP.969.000</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>RP.969.000</strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Transfer Bank Langsung</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana dicairkan di rekening kami.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Pembayaran cek</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana dicairkan di rekening kami.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Lakukan pembayaran langsung ke rekening bank kami. Silakan gunakan ID Pesanan Anda sebagai referensi pembayaran. Pesanan Anda tidak akan dikirim sampai dana dicairkan di rekening kami.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='thankyou'">Place Order</button>
                    <br>
                    <a href="{{ url('/') }}"><button class="btn btn-primary btn-lg btn-block"></span> </span> <strong class="text-black"> Send </strong></button></a> 
                  </div>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
<!-- info section -->
  <!-- info section -->
  @include('client.section.info')
  <!-- end info section -->

  <!-- footer section -->
  @include('client.section.footer')
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>