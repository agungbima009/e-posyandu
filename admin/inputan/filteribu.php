<h2>Form Filter</h2>
<form>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tanggal">Rt/Rw</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal">
            </div>
        </div>
        <div class="col">
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
    </div>
    <button type="submit" class="btn btn-primary nt-3 mb-4">Filter</button>
</form>