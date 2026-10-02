@extends('adminsection.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="">
                        <h1 class="fs-3 mb-1">Clinic</h1>
                        <p class="mb-0">Manage your clinic</p>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="btn btn-primary" onclick="addclinic()">Add Clinic</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card table-responsive ">
                    <table class="table mb-0 text-nowrap table-hover">
                        <thead class="table-light border-light">
                            <tr>
                                <th>Image</th>

                                <th>Code</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle ">
                                <td><a href=""><img src="./assets/images/product-1.png" alt=""
                                            class="avatar avatar-md rounded" /><span class="ms-3">Gaming Joy
                                            Stick</span></a>
                                </td>

                                <td>PRD001</td>
                                <td>Electronics</td>
                                <td>Brand Name</td>
                                <td>$99.99</td>
                                <td>pcs</td>
                                <td>150</td>
                                <td class="">
                                    <a href="#" class=""><i class="ti ti-edit "></i></a>
                                    <a href="#" class="link-danger"><i class="ti ti-trash ms-2"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="">

                            <tr>
                                <td class="border-bottom-0">Showing product per page</td>
                                <td colspan="9" class="border-bottom-0">
                                    <nav aria-label="Page navigation" class="d-flex justify-content-end">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </td>
                            </tr>

                        </tfoot>
                    </table>
                </div>


            </div>

        </div>

    </div>
    <div id="addclinic" class="modal fade" tabindex="-1" aria-hidden="true"></div>

    <script>
        function addclinic() {
            $.ajax({
                type: "GET",
                url: "/addclinic",
                success: function (result) {
                    $('#addclinic').html(result).modal({
                        backdrop: "static",
                        keyboard: false,
                    });
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                    alert('Something went wrong.');
                }
            });
        }
    </script>
@endsection
