<div class="modal fade ms-8" id="modalcreate" tabindex="1" aria-labelledby="modalEdit" aria-hidden="true">
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
                                <form action="{{ route('mahasiswa.store') }}" method="POST" class="d-grid gap-5">
                                    @csrf
                                    <div class="d-flex flex-column">
                                        <label for="name" class="fs-6 fw-base mx-1">Nama</label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="npm" class="fs-6 fw-base mx-1">NPM</label>
                                        <input type="text" name="npm" id="npm">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="email" class="fs-6 fw-base mx-1">Email</label>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <label for="phone" class="fs-6 fw-base mx-1">No. HP</label>
                                        <input type="text" name="phone" id="phone">
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
