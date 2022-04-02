@extends('admin.admin_master')
@section('admin')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update Product</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('product.update',$editData->id)}}">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <h5>Product Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="product_name" class="form-control"
                                                    value="{{$editData->product_name}}" required="">

                                            </div>
                                        </div>

                                   





                                    </div>


                                    <div class="col-md-6">






                                        <div class="form-group">
                                            <h5>Product Category<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="product_category" class="form-control" required="true"
                                                    aria-invalid="false">

                                                    <option value="" selected="" disabled="">Select Category</option>

                                                    @foreach ($productcategory as $key => $product_categories)
                                                    <option value="{{ $product_categories->category_name }}" {{($editData->product_category==
                                                        "$product_categories->category_name" ?"selected":"")}}>{{ $product_categories->category_name
                                                        }}</option>
                                                    @endforeach




                                                </select>
                                            </div>
                                        </div>








                                        <div class="text-xs-right">
                                            <input type="submit" value="Update" style="float: right"
                                                class="btn btn-outline btn-rounded btn-success mb-5">
                                        </div>

                                    </div>









                                </div>














                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>












    </div>
</div>
<!-- /.content-wrapper -->












@endsection