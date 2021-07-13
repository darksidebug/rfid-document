@extends('layout.main')

@section('content')

<div class="container-fluid px-md-5 mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" class="mt-2">
                        <h4 class="ps-2 pb-3">ADD NEW DOCUMENT</h4>
                        <table class="table">
                            <tr>
                                <td class="py-1 border-0"><span>Tag ID Number: </span></td>
                                <td class="py-1 border-0"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td class="py-1 border-0"><span>Document Type: </span></td>
                                <td class="py-1 border-0"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td class="py-1 border-0"><span>Document Date: </span></td>
                                <td class="py-1 border-0"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td class="py-1 border-0"><span>Document Date: </span></td>
                                <td class="py-1 border-0"><input type="date" class="form-control"></td>
                            </tr>
                            <tr>
                                <td class="py-1 border-0"><span>Folder ID: </span></td>
                                <td class="py-1 border-0"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td class="py-1 border-0"><span>Folder Name: </span></td>
                                <td class="py-1 border-0"><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td class="py-2 border-0"></td>
                                <td class="py-1 border-0"><button class="btn btn-primary w-25">Save</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <select name="" id="" class="form-control">
                        <option value="">Select Folder</option>
                    </select>
                </div>
                <div class="col-md-8" align="right">
                    <button class="btn btn-secondary">New Cabinet</button>
                    <button class="btn btn-secondary">New Document Type</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive border mt-2" style="min-height: 24rem; max-height: 24rem;">
                        <table class="table">
                            <tr>
                                <td class="py-2">Tag ID</td>
                                <td class="py-2">Type</td>
                                <td class="py-2">Owner</td>
                                <td class="py-2">Doc Date</td>
                                <td class="py-2">Status</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection