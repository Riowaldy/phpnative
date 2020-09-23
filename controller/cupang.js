var cupang = function () {
    var getDataCupang = function(){
        var t = $('#cupang').DataTable({
            "order": [],
            "columnDefs": [
                { "orderable": false, "targets": [0,2] }
            ]
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            });
        }).draw();
    };

    var resetData = function(){
        $('#btn-reset-edit').click(function(){
            $("#nama_cupang_error").html("");
            $("#nama_cupang_tambah_error").html("");
            $('#nama_cupang_tambah').val("");
            $('#nama_cupang').val("");
        });
        $('#btn-reset-tambah').click(function(){
            $("#nama_cupang_error").html("");
            $("#nama_cupang_tambah_error").html("");
            $('#nama_cupang_tambah').val("");
            $('#nama_cupang').val("");
        });
    }

    var tambahData = function () {
        $('#btn-simpan-tambah').click(function(){
            swal({
                title: 'Apakah Anda Yakin?',
                text: 'Menyimpan Data Cupang Ini',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2196F3',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
                closeOnConfirm: false,
                closeOnCancel: true,
                showLoaderOnConfirm: true
            })
            .then((isConfirm) => {
                window.onkeydown = null;
                window.onfocus = null;
                if (isConfirm) {
                    var addData = {
                        nama: $('#nama_cupang_tambah').val(),
                    };
                    if(addData.nama == ""){
                        $("#nama_cupang_tambah_error").html("<strong>Data Nama Kosong</strong>");
                    }
                    else{
                        $("#nama_cupang_tambah_error").html("");
                        $.ajax({
                            url : "../model/createCupang.php",
                            type : "POST",
                            data : addData,
                            success: function(res){
                                swal({
                                    title: "Success!",
                                    text : "Data Berhasil Ditambahkan",
                                    confirmButtonColor: "#66BB6A",
                                    type : "success",
                                });
                                $('#form-tambah').modal('hide');
                                location.reload();
                            },
                            error : function(res){
                                swal({
                                    title: 'Error',
                                    text : "Data Gagal Ditambahkan",
                                    type : "error",
                                    confirmButtonColor: "#EF5350",
                                });
                                $('#form-tambah').modal('hide');
                            }
                        })
                    }
                } else {
                    swal("Aksi Dibatalkan!");
                    $('#form-tambah').modal('hide');
                }
            });
        });
    };

    var getDataEdit = function(){
        $('#cupang').on('click', '#btn-edit', function () {
            var baris = $(this).parents('tr')[0];
            var table = $('#cupang').DataTable();
            var data = table.row(baris).data();
            id = data[0];
            $('#nama_cupang').val(data[1]);
            $('#btn-simpan-edit').html('Simpan');
            $('#btn-reset-edit').html('Batal');
        });
    };

    var editData = function () {
        $('#btn-simpan-edit').click(function(){
            swal({
                title: 'Apakah Anda Yakin?',
                text: 'Menyimpan Data Cupang Ini',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2196F3',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
                closeOnConfirm: false,
                closeOnCancel: true,
                showLoaderOnConfirm: true
            })
            .then((isConfirm) => {
                window.onkeydown = null;
                window.onfocus = null;
                if (isConfirm) {
                    var update = {
                        id: id,
                        nama: $('#nama_cupang').val(),
                    };
                    if(update.nama == ""){
                        $("#nama_cupang_error").html("<strong>Data Nama Kosong</strong>");
                    }else{
                        $("#nama_cupang_error").html("");
                        $.ajax({
                            url : "../model/updateCupang.php",
                            type : "POST",
                            data : update,
                            success: function(res){
                                swal({
                                    title: "Success!",
                                    text : "Data Berhasil Diubah",
                                    confirmButtonColor: "#66BB6A",
                                    type : "success",
                                });
                                $('#form-edit').modal('hide');
                                location.reload();
                            },
                            error : function(res){
                                swal({
                                    title: "Error!",
                                    text : "Data Tidak Valid",
                                    confirmButtonColor: "#EF5350",
                                    type : "error",
                                });
                                $('#form-edit').modal('hide');
                            }
                        });
                    }
                } else {
                    swal("Aksi Dibatalkan!");
                    $('#form-edit').modal('hide');
                }
            });
        });
    };

    var deleteData = function () {
        $('#cupang').on('click', '#btn-hapus', function () {
            var baris = $(this).parents('tr')[0];
            var table = $('#cupang').DataTable();
            var data = table.row(baris).data();
            id = data[0];
            swal({
                title: 'Apakah Anda Yakin?',
                text: 'Menghapus Data Cupang Ini',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2196F3',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
                closeOnConfirm: false,
                closeOnCancel: true,
                showLoaderOnConfirm: true
            })
            .then((isConfirm) => {
                window.onkeydown = null;
                window.onfocus = null;
                if (isConfirm) {
                    var delData = {
                        id: id,
                    };
                    $.ajax({
                        url : "../model/deleteCupang.php",
                        type : "POST",
                        data : delData,
                        success: function(res){
                            console.log(res);
                            swal({
                                title: "Success!",
                                text : "Data Berhasil Dihapus",
                                confirmButtonColor: "#66BB6A",
                                type : "success",
                            });
                            location.reload();
                        },
                        error : function(res){
                            swal({
                                title: 'Error',
                                text : data.message,
                                type : "error",
                                confirmButtonColor: "#EF5350",
                            });
                        }
                    })
                } else {
                    swal("Aksi Dibatalkan!");
                }
            });
        });
    };
    return {
        init: function () {
            getDataCupang();
            resetData();
            tambahData();
            getDataEdit();
            editData();
            deleteData();
        }
    };
}();
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    cupang.init();
});