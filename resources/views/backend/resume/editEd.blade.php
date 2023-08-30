@extends('backend.layouts.app')
@section('menu', 'Education')
@section('title', 'Edit Education')
@section('content')
    <!-- Form basic -->
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="fw-bold">Edit Education</h6>
        </div>
        <form action="{{ route('education.update', ['id' => $education->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="card-body">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{ $education->name }}">
                </div>
                <div class="form-group mb-3">
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ $education->title }}">
                </div>
                <div class="form-group mb-3">
                    <label for="start">Start</label>
                    <input type="month" name="start" class="form-control" id="start" rows="3" value="{{ $education->start }}">
                </div>
                <div class="form-group mb-3">
                    <label for="end">End</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="end_option" id="end_now" value="Now">
                        <label class="form-check-label" for="end_now">
                            Now (Ongoing)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="end_option" id="end_date_option">
                        <label class="form-check-label" for="end_date_option">
                            Specify Date
                        </label>
                        <input class="form-control" type="month" name="end_date" id="end_date_input" value="{{ $education->end }}">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="edu_description">Description</label>
                    <textarea name="edu_description" class="form-control" id="edu_description" rows="3">{{ $education->description }}</textarea>
                </div>
                <div class="float-end mb-3">
                    <button class="btn btn-primary me-1 btn-md" type="submit">Update</button>
                    <button class="btn btn-secondary btn-md" type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection
{{-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        CKEDITOR.replace("edu_description"); // Inisialisasi CKEditor pada textarea dengan ID "editor"
        CKEDITOR.replace("exp_description"); // Inisialisasi CKEditor pada textarea dengan ID "editor2"
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Dapatkan elemen radio button dengan id "ex_now" dan "ex_date_option" (Experience)
    var endNowRadioButtonExp = document.getElementById("ex_now");
    var endDateRadioButtonExp = document.getElementById("ex_date_option");

    // Dapatkan elemen radio button dengan id "end_now" dan "end_date_option" (Education)
    var endNowRadioButtonEdu = document.getElementById("end_now");
    var endDateRadioButtonEdu = document.getElementById("end_date_option");

    // Dapatkan elemen input bulan "End" dengan id "ex_date_input" (Experience)
    var endDateInputExp = document.getElementById("ex_date_input");

    // Dapatkan elemen input bulan "End" dengan id "end_date_input" (Education)
    var endDateInputEdu = document.getElementById("end_date_input");

    // Fungsi untuk menangani perubahan pada radio button "Now" dan "Specify Date"
    function handleRadioButtonChange(endNowRadioButton, endDateRadioButton, endDateInput) {
        endNowRadioButton.addEventListener("change", function() {
            // Jika radio button "Now" dipilih
            if (endNowRadioButton.checked) {
                // Nonaktifkan input bulan "End"
                endDateInput.disabled = true;

                // Reset isi formulir untuk input bulan "End"
                endDateInput.value = ""; // Mengosongkan nilai
            } else {
                // Aktifkan kembali input bulan "End"
                endDateInput.disabled = false;
            }
        });

        endDateRadioButton.addEventListener("change", function() {
            // Jika radio button "Specify Date" dipilih
            if (endDateRadioButton.checked) {
                // Aktifkan kembali input bulan "End"
                endDateInput.disabled = false;
            } else {
                // Nonaktifkan input bulan "End"
                endDateInput.disabled = true;

                // Reset isi formulir untuk input bulan "End"
                endDateInput.value = ""; // Mengosongkan nilai
            }
        });
    }

    // Terapkan fungsi handleRadioButtonChange() pada bagian Experience
    handleRadioButtonChange(endNowRadioButtonExp, endDateRadioButtonExp, endDateInputExp);

    // Terapkan fungsi handleRadioButtonChange() pada bagian Education
    handleRadioButtonChange(endNowRadioButtonEdu, endDateRadioButtonEdu, endDateInputEdu);
});


</script>