<h2>Form Filter</h2>
<form>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <label>Urutkan Nama:</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sort_name" id="sort_name_asc" value="asc">
                            <label class="form-check-label" for="sort_name_asc">A-Z</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sort_name" id="sort_name_desc" value="desc">
                            <label class="form-check-label" for="sort_name_desc">Z-A</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <label>Jenis Kelamin:</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sort_name" id="sort_name_asc" value="asc">
                            <label class="form-check-label" for="sort_name_asc">laki-laki</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sort_name" id="sort_name_desc" value="desc">
                            <label class="form-check-label" for="sort_name_desc">perempuan</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary nt-3 mb-4">Filter</button>
</form>