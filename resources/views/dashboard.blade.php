@extends('layouts.master_backend')
@section('con')
 <div class="container-xxl flex-grow-1 container-p-y">
                        
                            <div class="col-lg-12 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-3 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png')}}"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                      
                                                </div>
                                                <span class="fw-semibold d-block mb-1">User</span>
                                                <h3 class="card-title mb-2"> {{ $user->count() }} คน</h3>
                                            </div>
                                        </div>
                                        
                                    </div>

                               

                                    <div class="col-lg-4 col-md-12 col-3 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="{{ asset('backend/assets/img/icons/unicons/chart-success.png')}}"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                      
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Product</span>
                                                <h3 class="card-title mb-2"> {{ $pro->count() }} ชิ้น</h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                 
                                </div>
                                
                            </div>
                         
                            
                       
                        </div>
                     
                    </div>

@endsection