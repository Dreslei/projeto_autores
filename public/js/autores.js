function deletarAutor(id,nome) {
    Swal.fire({
        title: `Tem certeza que deseja deletar o autor ${nome} ?`,
        text: "Você não poderá reverter isso!",
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`deletarForm_${id}`).submit();
        }
    })
}


