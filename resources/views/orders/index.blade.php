<!-- <!DOCTYPE html>
<html lang="en">
  <head>
  @extends('admin')
  @section('content')
  
  <style>
    table,th,td{
      border: 1px solid white;
    }
  </style>
  </head>
  <body>

        <div class="main-panel">
          <div class="content-wrapper">

            <h1 style="text-align: center; font-size:40px; padding-top: 20px;">All Orders</h1>

            <table style=" margin: auto;
            text-align: center;
            margin-top: 40px;">
               <tr style="background: skyblue;" >
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Product Title</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Payment Status</th>
                  <th>Delivery Status</th>
                  <th>Image</th>
                  <th>Delivered</th>
                
            </tr>
@forelse($order as $order)
            <tr>
               <td>name</td>
               <td>email</td>
               <td>address</td>
               <td>phone</td>
               <td>product_title</td>
               <td>quantity</td>
               <td>price</td>
               <td>payment_status</td>
               <td>delivery_status</td>
               <td>
                <img height="60px" width="60px" src="/images/products/{{$order->image}}" alt="product Image">
               </td>
               <td>
                @if($order->delivery_status=='processing')
                <a href="" onclick="return confirm('Are you sure this product is delivered !!!')" class="btn btn-primary">Delivered</a>
                @else
                <p style="font-size: 30px; color:green"><b>&#10003</b></p>
                @endif
               </td>

              
            </tr>

            @empty
           <tr>
            <td colspan="13">
              No Data Found!!
            </td>
             </tr>
            

            @endforelse

            </table>


@endsection



            </div>
            </div>





        
 
  </body>
</html> -->