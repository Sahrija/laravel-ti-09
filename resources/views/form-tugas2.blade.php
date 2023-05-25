<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="margin: auto;">
    
<div class="card p-5" style="">
    <form action="/hasil2" method="POST">
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                    <input id="text" name="Nama" type="text" class="form-control"
                        value="{{ old('nama') }}">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="text1" name="text1" type="text" class="form-control" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Lokasi</label>
            <div class="col-8">
                <select id="select" name="select" class="custom-select">
                    <option value="Jakarta Utara">Jakarta Utara</option>
                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                    <option value="Jakarta Barat">Jakarta Barat</option>
                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="Jenis_Kelamin" id="radio_0" type="radio" class="custom-control-input"
                        value="Pria">
                    <label for="radio_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="Jenis_Kelamin" id="radio_1" type="radio" class="custom-control-input"
                        value="Wanita">
                    <label for="radio_1" class="custom-control-label">Wanita</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label">Skill</label>
            <div class="col-8">
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-radio">
                        <input name="skill" id="radio1_0" type="radio" class="custom-control-input" value="Html">
                        <label for="radio1_0" class="custom-control-label">Html</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-radio">
                        <input name="skill" id="radio1_1" type="radio" class="custom-control-input" value="Mysql">
                        <label for="radio1_1" class="custom-control-label">Mysql</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-radio">
                        <input name="skill" id="radio1_2" type="radio" class="custom-control-input" value="Css">
                        <label for="radio1_2" class="custom-control-label">Css</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-radio">
                        <input name="skill" id="radio1_3" type="radio" class="custom-control-input"
                            value="JavaScript">
                        <label for="radio1_3" class="custom-control-label">JavaScrript</label>
                    </div>
                </div>
                <div class="custom-controls-stacked">
                    <div class="custom-control custom-radio">
                        <input name="skill" id="radio1_4" type="radio" class="custom-control-input"
                            value="PHP">
                        <label for="radio1_4" class="custom-control-label">PHP</label>
                    </div>
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

</div>