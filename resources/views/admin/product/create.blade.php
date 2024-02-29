@extends('layouts.master_backend')
@section('con')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-9">
                    <h5 class="card-header">Product</h5>
                    <div class="card-body">
                        <form action="{{ url('admin/product/insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="defaultFormControlInput"
                                    placeholder="กรุณากรอกชื่อสินค้า" aria-describedby="defaultFormControlHelp" />
                                <div class="mt-2">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <label for="defaultFormControlInput" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" id="defaultFormControlInput"
                                    placeholder="กรุณากรอกราคาสินค้า" aria-describedby="defaultFormControlHelp" />
                                    <div class="mt-2">
                                      @error('price')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                <label for="defaultFormControlInput" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" id="defaultFormControlInput"
                                    placeholder="กรุณากรอกรายละเอียดสินค้า" aria-describedby="defaultFormControlHelp" />
                                    <div class="mt-2">
                                      @error('description')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                <label for="defaultFormControlInput" class="form-label">Images</label>
                                <div class="input-group">
                                    <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                                <div class="mt-2">
                                  @error('image')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                              </div>

                                <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
                                <a href="{{ route('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
