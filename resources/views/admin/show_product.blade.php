<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.style');

</head>

<body>

    <div class="container-scroller">
        @include('admin.sidebar');

        @include('admin.header');

        <div class="main-panel">
            <div class="content-wrapper">


                <div class="div_center">
                    <h2 class="h2_font">Show Product</h2>
                </div>
                <table class="center">
                    <tr class="th_color">
                        <th class="th_deg">Product Title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Category</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Discount Price</th>
                        <th class="th_deg">Product Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Edit</th>
                    </tr>
                      @foreach($data as $product)
                    <tr>
                      <td>{{ $product->title  }}</td>
                      <td>{{ $product->description  }}</td>
                      <td>{{ $product->quantity  }}</td>
                      <td>{{ $product->category  }}</td>
                      <td>{{ $product->price  }}</td>
                      <td>{{ $product->discount_price  }}</td>
                      <td><img class="img_size" src='/product/{{$product->image}}'></td>
                      <td><a onclick="return confirm('Are you want to sure delete')" class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a></td>
                      <td><a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a></td>
                    
                    </tr>
                        
                    @endforeach

                </table>


            </div>
        </div>
        @include('admin.script');
</body>

</html>