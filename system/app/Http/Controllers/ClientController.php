<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Provinsi;

class ClientController extends Controller
{

 function showCheckout()
  {
    
    $data['list_produk'] = Produk::paginate(6);
    $data['list_provinsi'] = Provinsi::all();
    return view('client.checkout', $data);
  }

  function showshop()
  {
    
    $data['list_produk'] = Produk::paginate(3);
    return view('client.shop', $data);
  }

  function filter()
  {
    $nama = request('nama');
    $data['nama'] = $nama;
    $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

    return view('client.shop', $data);
  }

  function filter2()
  {
    $harga_min = request('harga_min');
    $harga_max = request('harga_max');
    $data['harga_min'] = $harga_min;
    $data['harga_max'] = $harga_max;

    $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
    return view('client.shop', $data);
  }

    function cart(){
    $data['list_cart'] = Cart::all();
    $data['list_provinsi'] = Provinsi::all();
    return view('customer.cart', $data);
  }


  function showhome()
  {
    return view('client.home');
  }
  function showcontact()
  {
    return view('client.contact');
  }
  function showabout()
  {
    return view('client.about');
  }

  function showproducts(Produk $produk)
  {

    $data['produk'] = $produk;
    return view('client.sayur', $data);
  }

}