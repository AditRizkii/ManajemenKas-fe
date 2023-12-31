<div class="modal fade ms-8" id="mahasiswaEdit{{ $item->id }}" tabindex="1" aria-labelledby="modalEdit"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content rounded-25">
            <div class="modal-body py-0 px-0">
                <div class="row">
                    <div class="col mx-5 my-3 margin-left-5 text-dark">
                        <div class="border-bottom border-2 px-3 d-flex justify-content-between">
                            <p class="fw-bold fs-6 d-flex align-items-center">
                                Edit Mahasiswa
                            </p>
                            <div class="d-flex justify-content-end">
                                <button type="button" class=" text-black" data-bs-dismiss="modal" aria-label="Close"
                                    style="border:none; background-color:transparent;">X</button>
                            </div>
                        </div>
                        <div class="p-3 py-4">
                            <div class="md-form flex">
                                <form action="#" method="#" class="d-grid gap-5">
                                    <div class="d-flex flex-column">
                                        <label for="nama" class="fs-6 fw-base mx-1">Nama</label>
                                        <input type="text" name="nama" id="nama" value="{{ $item->name }}">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="NPM" class="fs-6 fw-base mx-1">NPM</label>
                                        <input type="text" name="NPM" id="NPM" value="2208107010000">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="email" class="fs-6 fw-base mx-1">Email</label>
                                        <input type="text" name="email" id="email" value="nisa@nisa.com">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="noHP" class="fs-6 fw-base mx-1">No. HP</label>
                                        <input type="text" name="noHP" id="noHP" value="081234123409">
                                    </div>

                                    <div class="d-flex justify-content-end mx-5">
                                        <button type="submit" class="btn btn-primary my-4 ">Simpan</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
