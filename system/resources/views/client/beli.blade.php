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

  <!-- header section strats -->
 @include('client.section.header')
  @section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Alamat
                    </div>
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
                            <label for="" class="control-label">Kota/Kabupaten</label>
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
@endsection

@push('script')
    <script>
      function gantiProvinsi(id) {
        $.get("api/provinsi/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/>`;
          }
          $("#kabupaten").html(option)
        });
      }
      function gantiKabupaten(id) {
        $.get("api/kabupaten/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/>`;
          }
          $("#kecamatan").html(option)
        });
      }
      function gantiKecamatan(id) {
        $.get("api/kecamatan/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}<option/>`;
          }
          $("#desa").html(option)
        });
      }
    </script>
@endpush

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