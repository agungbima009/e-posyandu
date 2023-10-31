<div style="width: 600px;">
    <h2>Form<b> Data Anak</b></h2>
    <form>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" class="form-control" id="nik" name="nik">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="tanggal_lahir">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tanggal_lahir">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tempat_lahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tempat_lahir">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="usia">Usia:</label>
                    <input type="text" class="form-control" id="usia" name="usia">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="Pilih">Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
        <label>Input orang tua:</label>
                    <p style="font-size: 10px;"> cari nama ayah dan ibu di search.  Jika nama ayah dan ibu tidak muncul lakuan register data ibu </p>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <button type="button" class="btn btn-success text-white h-75" style="border-radius: 15px;">
                                     Register
                                </button>
                </div>
            </div>
            <div class="col">
                <div class="form-group ps-5 ms-3">
                <div class="search-box">
                                    <i class="material-icons">&#xE8B6;</i>
                                    <input type="text" class="form-control" placeholder="Search&hellip;">
                                </div>
                                <button type="button" class="btn btn-primary text-white h-75" style="border-radius: 15px;">
                                     cari
                                </button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="nama_ayah">Nama Ayah:</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
        </div>
        <div class="form-group">
            <label for="nama_ibu">Nama Ibu:</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
        </div>
        <div class="form-group">
            <label for="pos">Pos:</label>
            <select class="form-control" id="pos" name="pos">
                <option value="pos0">pilih Posyandu</option>
                <option value="pos1">Posyandu 1</option>
                <option value="pos2">Posyandu 2</option>
                <option value="pos3">Posyandu 3</option>
                <option value="pos4">Posyandu 4</option>
                <option value="pos5">Posyandu 5</option>
                <option value="pos6">Posyandu 6</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3 mb-4" style="float: right;">Simpan</button>
    </form>
</div>