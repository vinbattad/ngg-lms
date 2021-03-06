@extends('layouts.app')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-flex">
            <div>
                <h2 style="color:#008349;"><i class="fas fa-file-contract"></i> Bills</h2>
            </div>
            <div class="ml-auto">

                
                <a class="btn btn-success" href="{{url('PropertyListing/'.$id.'/Units/Bills/'.$ids.'/Create')}}"> <i
                        class="fas fa-plus-circle"></i>
                    Create New Bills</a>
                

            </div>
        </div>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home" style="color:darkgoldenrod">&nbsp;</i><a
                    href="{{'/home'}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-network-wired"></i> Property Leasing
            </li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-building"></i> Units
            </li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-receipt"></i> Bills
                </li>
            </ol>
        </nav>

        <div class="row mb-2">
            <div class="col">
                <a class="btn btn-primary" id="createNewProduct" href="{{url('PropertyListing/'.$id.'/Units')}}"> <i
                        class="fas fa-arrow-circle-left"></i> Go Back</a>
            </div>
        </div>

        <hr>

        <div class="row mb-5">
            <div class="col-lg-12  table-responsive-lg">
                <table class="table table-bordered text-center" id="PropertyTable">
                    <thead>
                        <tr>

                            <th>#</th>
                            <th>Water Bill</th>
                            <th>Electricity Bill</th>
                            <th>HouseKeeping</th>
                            <th>Association Dues</th>
                            <th colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>

                </table>
            </div>
        </div>






        <script>
            $(document).ready(function () {
                $('#PropertyTable').DataTable({

                });
            });

        </script>

        <script>
            $(document).ready(function () {
                $('[rel="tooltip"]').tooltip({
                    trigger: "hover"
                });
            });

        </script>






    </div>
</div>


@endsection
