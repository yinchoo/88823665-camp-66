@extends('layouts.default_with_menu')   


@section('content')
    <form action="{{ url('/product') }}" method="post">
        @csrf
        <div class="row mt-3">
            <div class="col-6 ">
                    <label>Category Name</label>
                    <input type="text" name="category_name" class="form-control " />
            </div>
        </div>
        <button type="button" id="btn-add-product-list" class="btn btn-primary mt-2"> + เพิ่ม product </button>
        <div class="row mt-3 " id = "product-list">
            <div class = "col-6">
                <label> Product name <button type = "button" 
                                            class = "btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list"> ลบ </button></label>
                <input name="product_name[]" type = "text" class = "form-control" /> 
            </div>
        </div>
            <button class="btn btn-success mt-3" type="submit">บันทึก</button>
    </form>
    <table class="mt-3 table">
        <thead>
            <tr>
                <td>#</td>
                
                <td>Category Name</td>

                <td>Product Name</td>

                <td>User Name</td>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td> print_r($req-> $category_name); </td>
                <td> print_r($category_name);</td>
                <td> $product_name </td>
                <td> session(['user' => $user]); </td>
            </tr>
        </tbody>
    </table>
@endsection

@section('scripts')
<script>
     $('#btn-add-product-list').on('click', function(){
                $("#product-list").append(`
                    <div class="col-6">
                        <label>
                            Product name
                            <button type="button" class="btn btn-danger ml-3 mt-2 mb-2 btn-del-product-list">ลบ</button>
                        </label>
                        <input name="product_name[]" type="text" class="form-control" />
                    </div>
                `);
            });
    $(document).on('click', '.btn-del-product-list', function(){
                $(this).parent().parent().remove();
            });
</script>
@endsection
