$(document).ready(function () {

    //load keranjang
    let idOrder = document.getElementById('Idorder').innerHTML;


    //request ajax
    loadAjax(idOrder);


    //jika button delete dipencet

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('hapusdetail')) {
            let orderDetailId = e.target.dataset.orderdetailid;

            //lakukan delete dengan ajax
            $.ajax({
                url: "hapusDetail.php",
                cache: false,
                data: {
                    id: orderDetailId
                },
                type: "POST",
                success: () => {
                    //console.log(JSON.parse(response));
                    loadAjax(idOrder);
                }
            })
        };

        if (e.target.id == "tombolCheckout") {
            //console.log("oke");
            let total = e.target.dataset.total;

            $.ajax({
                url: "reqSaldo.php",
                type: "POST",
                cache: false,
                success: (response) => {
                    let saldo = JSON.parse(response).saldo;

                    let el = `
                    <h3>Total yang harus dibayar adalah : Rp.${total}</h3>
                    <h3>Saldo anda saat ini adalah : Rp.${saldo} </h3>
                    <h3>Apakah anda ingin melanjutkan ?</h3>`

                    $('#isiModal').html(el);
                }


            })

        };

        if (e.target.id == "konfirm") {
            //ambil total belanja
            let totalHarga = parseInt($('#hargaTotal').html());
            //console.log(totalHarga);

            //ajax request untuk mengurangi saldo dengan harga total dan update

            $.ajax({
                url: "prosesBayar.php",
                type: "POST",
                cache: false,
                data: {
                    totalHarga: totalHarga
                },
                success: (response) => {
                    let hasil = JSON.parse(response);

                    if (hasil.statusCode == 200) {
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                        let el = `
                        <div class="alert alert-success" role="alert">
                        Pesanan berhasil dilakukan !
                        </div>`;
                        $('#alertSuccess').html(el);

                    }
                }
            })
        }
    })

});

function loadAjax(idOrder) {
    $.ajax({
        url: "loadTroli.php",
        cache: false,
        type: "POST",
        data: {
            idOrder: idOrder
        },
        success: (response) => {
            //console.log(JSON.parse(response));
            let troli = JSON.parse(response);

            let el = troli.map((t, i) => {
                return cetakTroli(t, i + 1);
            }).join('');

            $('#detailMenu').html(el);

            //tampilkan total harga 
            let totalHarga = troli.reduce((total, cur) => {
                return total + parseInt(cur.TotalPrice);
            }, 0);

            $('#hargaTotal').html(totalHarga);

            //tambahkan data-total pada buton checkout

            let tot = document.createAttribute('data-total');
            tot.value = totalHarga;

            document.getElementById('tombolCheckout').setAttributeNode(tot);
        }

    });

}


function cetakTroli({
    Photo,
    FoodName,
    Qty,
    TotalPrice,
    OrderDetailId
}, i) {
    return `
    <tr>
      <th scope="row">${i}</th>
        <td>
            <img src="images/menu/${Photo}" class="img-fluid img-thumbnail img-max">
        </td>
        <td>${FoodName}</td>
        <td>${Qty}</td>
        <td>${TotalPrice}</td>
        <td>
            <button data-orderdetailid="${OrderDetailId}" type="button" class="btn btn-danger btn-danger hapusdetail">X</button>
        </td>
     </tr>`


}