@extends('layout.main2')

@section('container-fluid')
<div class="main-page" id="content" style="margin:20px;">
        <div class="container-fluid">
            <div class="button-row" >
                <a href="/detailWorkshop" class="btn btn-outline-success btn-md mt-2 mb-5"  role="button" style="border-radius: 1rem;" ><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i><b>  Back</b></a>
            </div>
        </div>

        <div class="container" style="margin: auto;">
        <div class="judul">
            <h2 class="text-center mt-3"><b>Judul Workshop</b></h2>
            <hr class="soft my-3 bg-black">
        </div>
        <div class="card mt-5 mb-5">
            <div class="form-header p-3 bg-success text-black text-center"><span class="bi bi-plus" style ="font-size: 1.3rem; color:rgb(255, 255, 255);" name="edit"> Pendaftaran Workshop</span></div> 

            <div class="body-form">
                <form>

                    <div class="form-group row mt-1 p-3">
                        <label class="col-form-label col-sm-2 text-left">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="disabled form-control" value="namaorangnya" required disabled>
                        </div>
                    </div>

                    <div class="form-group row mt-1 p-3">
                        <label class="col-form-label col-sm-2 text-left">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="disabled form-control" value="emailorangnya" required disabled>
                        </div>
                    </div>

                    <div class="row mt-1 p-3">
                        <label class="col-form-label col-sm-2 text-left">No.HP</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="number" class="form-control" value="06817491794" required disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label class="col-form-label col-sm-2 text-left"></label>
                        <div class="col-sm-3 mt-3 mb-3 g-3 ">
                            <li class="d-inline p-3 ">
                                <button type="submit" class="btn btn-success" ><i class="bi bi-send-fill"></i><b class="text-light"> Daftar</b></a>
                            </li>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection