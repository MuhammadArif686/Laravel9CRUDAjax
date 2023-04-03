<script>
    
    $('body').on('click', '#btn-delete-post', function () {

        let post_id = $(this).data('id');
        let token   = $("meta[name='csrf-token']").attr("content");

        Swal.fire({
            title: 'Ente Yakin?',
            text: "ingin menghapus data ini !",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'JANGAN NJER',
            confirmButtonText: 'HAPUS APA NJER !'
        }).then((result) => {
            if (result.isConfirmed) {

                console.log('test');

                $.ajax({

                    url: `/posts/${post_id}`,
                    type: "DELETE",
                    cache: false,
                    data: {
                        "_token": token
                    },
                    success:function(response){ 

                        Swal.fire({
                            type: 'success',
                            icon: 'success',
                            title: `${response.message}`,
                            showConfirmButton: false,
                            timer: 3000
                        });

                        $(`#index_${post_id}`).remove();
                    }
                });

                
            }
        })
        
    });
</script>