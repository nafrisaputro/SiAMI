
<!-- --------------------------problem----------------- -->
<!-- <div class="modal fade" id="editform1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 600px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Form 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/form1form2/{{$form1->id_form1}}/update" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleFormControlSelect1">Ruang Lingkup</label>
            <select name="lingkup" class="form-control" id="lingkup">
              <option value="">Pilih Ruang Lingkup</option>
              <option value="A.KONDISI EKSTERNAL">A.KONDISI EKSTERNAL</option>
              <option value="B.PROFIL INSTITUSI">B.PROFIL INSTITUSI</option>
              <option value="C.KRITERIA">C.KRITERIA</option>
              <option value="D.ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN">D.ANALISIS DAN PENETAPAN PROGRAM PENGEBANGAN</option>
            </select>
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">No Sub Ruang Lingkup</label>
            <input id="no" name="no" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukan Nomor Sub Ruang Lingkup" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Sub Ruang Lingkup</label>
            <select name="sub" class="form-control" id="sub">
              <option value="">Pilih Sub Ruang Lingkup</option>
              <option value="-">-</option>
              <option value="1.VISI, MISI, TUJUAN, STRATEGI">1.VISI, MISI, TUJUAN, STRATEGI</option>
              <option value="2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA">2.TATA PAMONG, TATA KELOLA, DAN KERJASAMA</option>
              <option value="3.MAHASISWA">3.MAHASISWA</option>
              <option value="4.SUMBER DAYA MANUSIA">4.SUMBER DAYA MANUSIA</option>
              <option value="5.KEUANGAN, SARANA PRASARANA">5.KEUANGAN, SARANA PRASARANA</option>
              <option value="6.PENDIDIKAN">6.PENDIDIKAN</option>
              <option value="7.PENELITIAN">7.PENELITIAN</option>
              <option value="8.PENGABDIAN KEPADA MASYARAKAT">8.PENGABDIAN KEPADA MASYARAKAT</option>
              <option value="9.LUARAN DAN CAPAIAN TRIDHARMA">9.LUARAN DAN CAPAIAN TRIDHARMA</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <textarea id="pertanyaan" name="pertanyaan" class="ckeditor" placeholder="Masukan Pertanyaan" required>
          
            </textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div> -->