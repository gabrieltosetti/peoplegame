@extends('layouts.principal')

@section('title', 'Página Inicial')

@section('css')
      <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@stop

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <!--
            WIDGETS
        -->        
        <div class="row">            
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>League of Legends</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">10</h1>
                        <small>Inscrições</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>CS 1.6</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">10</h1>
                        <small>Inscrições</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Just Dance</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">10</h1>
                        <small>Inscrições</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>FIFA</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">10</h1>
                        <small>Inscrições</small>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <!--/WIDGETS-->

        <!--DATA TABLE-->
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Inscritos League os Legends</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td>
                                        <td class="center">X</td>
                                    </tr>
                                
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!--/table responsive-->               
                    </div> <!--/ibox content-->
                </div><!--/ibox-->
            </div><!--/col lg12-->
        </div><!--/row-->
        <!--/DATA TABLE-->
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [ ]

            });

        });

    </script>


@stop
