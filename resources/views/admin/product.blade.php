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
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
                    </button>
                    {{session()->get('message')}}
                </div>
                @endif


                <div class="div_center">
                    <h2 class="h2_font">Add Product</h2>
                    <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="div_design">

                            <label>Product title:</label>
                            <input class="input_color" type="text" name="title" placeholder="wirite a title">

                        </div>
                        <div class="div_design">

                            <label>Product Description:</label>
                            <input class="input_color" type="text" name="description" placeholder="wirite a product description">

                        </div>

                        <div class="div_design">

                            <label>Product price:</label>
                            <input class="input_color" type="number" name="price" placeholder="wirite a product price">

                        </div>

                        <div class="div_design">

                            <label>Product quantity:</label>
                            <input class="input_color" type="number" name="quantity" min="0" placeholder="wirite a product quantity">

                        </div>
                        <div class="div_design">

                            <label>Product Discount:</label>
                            <input class="input_color" type="number" name="discount_price" placeholder="wirite product discount">

                        </div>


                        <div class="div_design">


                            <label>Product Category:</label>

                            <select class="input_color" name="category">

                                <option value="" selected="">Add a selected here</option>

                                @foreach( $data as $datas )

                                <option>{{ $datas->category_name }}</option>

                                @endforeach
                            </select>

                        </div>

                        <div class="div_design">

                            <label>Product Image:</label>
                            <input class="input_color" name="image" type="file" placeholder="Choose file">

                        </div>

                        <div class="div_design">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Product">

                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('admin.script');
</body>

</html>