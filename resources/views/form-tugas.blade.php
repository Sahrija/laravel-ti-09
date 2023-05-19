<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="card" style="max-width: 500px;padding: 2rem;margin: 5rem auto;">
    <form>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label"> Nama</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                    <input id="text" name="text" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Tanggal Pemeriksan</label>
            <div class="col-8">
                <input id="tgl" name="tgl" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Tanggal Lahir/Usia</label>
            <div class="col-8">
                <input id="text2" name="text2" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="L" type="radio" class="custom-control-input"
                        value="rabbit">
                    <label for="L" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="P" type="radio" class="custom-control-input"
                        value="duck">
                    <label for="P" class="custom-control-label">Pempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>
