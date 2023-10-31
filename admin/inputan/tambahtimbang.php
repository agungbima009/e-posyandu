<div style="width: 600px;">
    <h2>Form<b> Data Penimbangan</b></h2>
    <form>
    <div class="form-group">
        <!-- <label>Input orang tua:</label> -->
                    <p style="font-size: 10px;"> cari nama anak di search.  Jika nama anak tidak muncul lakuan register data anak </p>
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
                <label for="nama_ayah">Nama Ayah:</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                <label for="nama_ibu">Nama Ibu:</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col">
                <div class="form-group">
                    <label for="tempat_lahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tempat_lahir">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tempat_lahir">Tanggal Timban:</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tempat_lahir">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col">
                <div class="form-group">
                <label for="nama_ayah">BBL(kg):</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                <label for="nama_ibu">Hasil timbang:</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                </div>
            </div>
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