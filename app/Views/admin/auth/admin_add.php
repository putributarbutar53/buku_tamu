<div class="modal-header">
    <h5 class="modal-title"><?= $title ?></h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body text-left">
    <form id="add_submit">
        <input type="hidden" name="action" value="<?= $action ?>" />
        <input type="hidden" name="id" value="<?php if (isset($detail['id'])) echo $detail['id']; ?>" />

        Username:<br />
        <input type="text" name="username" value="<?php if (isset($detail['username'])) echo $detail['username']; ?>" class="form form-control form-50" size="40" />
        <br />


        Password:<br />
        <input type="password" name="password" class="form form-control form-50" size="40" />
        <i class="fs--1"><?= $alert ?></i>
        <br />

        Name:<br />
        <input type="text" name="name" value="<?php if (isset($detail['name'])) echo $detail['name']; ?>" class="form form-control form-50" size="40" />
        <br />

        Email:<br />
        <input type="text" name="email" value="<?php if (isset($detail['email'])) echo $detail['email']; ?>" class="form form-control form-50" size="40" />
        <br />
        Role: <br>
        <select name="role" class="selectpicker form-control">
            <option value="admin">Admin</option>
            <option <?php if (isset($detail['role']) && $detail['role'] == 'superadmin') { ?>selected<?php } ?> value="superadmin">Super Admin</option>
        </select>
        <br>
        Foto Profile:
        <div class="custom-file">
            <input class="custom-file-input" id="customFile" name="picture" type="file">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <br>
        <span id="report"></span>

        <input type="submit" name="submit" value="<?= $tombol ?>" class="btn btn-primary mt-3" />
    </form>
</div>
<script>
    $(document).ready(function() {
        $('.custom-file-input').on('change', function(e) {
            var $this = $(e.currentTarget);
            var fileName = $this.val().split('\\').pop();
            $this.next('.custom-file-label').addClass('selected').html(fileName);
        });

        $('#add_submit').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var form = $(this)[0]; // Get the raw HTML form element
            var formData = new FormData(form); // Create a new FormData object

            $.ajax({
                type: 'POST',
                url: "<?= site_url('admin2053/admin/submitdata') ?>",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData, // Use the FormData object as the data
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting the content type
                success: function(response) {
                    $('#add_submit input[type="text"]').val('');
                    $('#add_submit textarea').val('');
                    $('#add').modal('hide');
                    dataindex();
                    showToast("success", response.message);
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    showToastError('Error', response);
                }
            });
        });

        $('#add').on('hidden.bs.modal', function() {
            dataindex();
            $('#report_edit').html('');
        });

        $('#kecamatan').change(function() {
            var kodeKecamatan = $(this).find(':selected').data('kode'); // Mendapatkan kode_kecamatan dari atribut data
            console.log("Selected Kecamatan Kode:", kodeKecamatan); // Debugging

            if (kodeKecamatan != '') {
                $.ajax({
                    url: '<?= site_url('admin2053/admin/getDesaByKecamatan') ?>',
                    method: 'POST',
                    data: {
                        kode_kecamatan: kodeKecamatan
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log("Data received:", data); // Debugging

                        $('#desa').empty();
                        $('#desa').append('<option value="">Pilih Desa</option>');

                        if (data.error) {
                            console.error(data.error);
                        } else {
                            $.each(data, function(key, value) {
                                $('#desa').append('<option value="' + value.nama_desa + '">' + value.nama_desa + '</option>');
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                $('#desa').empty();
                $('#desa').append('<option value="">Pilih Desa</option>');
            }
        });
    });
</script>