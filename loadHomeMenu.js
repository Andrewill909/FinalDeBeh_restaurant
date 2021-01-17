$(document).ready(function () {


    $.ajax({
        url: "loadMenu.php",
        type: "POST",
        cache: false,
        success: (response) => {

            //retrieve menu dan menampilkan
            let menu = JSON.parse(response);
            //console.log(menu);
            let menuFilter = menu.map((m) => {
                let makanan = new Object();
                makanan.FoodId = m.FoodId;
                makanan.FoodName = m.FoodName;
                makanan.Size = m.Size;
                makanan.Price = m.Price;
                makanan.Photo = m.Photo;
                makanan.Description = m.Description;
                makanan.CategoryId = m.CategoryId;
                makanan.DetailFoodId = m.DetailFoodId;

                return makanan;
            });



            let el = semuaMenu(menuFilter);

            $('#dynamicMenuAll').html(el);

            //olah add to cart
            let fromsub = Array.from(document.querySelectorAll('.formatc'));
            fromsub.forEach((f) => {
                f.addEventListener('submit', function (e) {
                    e.preventDefault();
                    //console.log('oke');
                    //return false;

                    $.ajax({
                        url: "atc.php",
                        cache: false,
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                        success: (response) => {
                            console.log(JSON.parse(response));
                        }
                    })

                })
            })
            //retrieve kategori menu dan menampilkan

            $.ajax({
                url: "loadMenuKategori.php",
                type: "POST",
                cache: false,
                success: (response) => {
                    let hasil = JSON.parse(response);
                    //console.log(hasil);

                    let ele = semuaKategori(hasil);
                    //console.log(ele);
                    $('#loadKategori').html(ele);
                }

            })


        }
    })


    //jika tab kategori menu di klik maka akan 
    document.addEventListener('click', function (e) {

        if (e.target.classList.contains('kategoriMenu')) {
            //highlight pada tombol
            let tombol = Array.from(document.querySelectorAll('.kategoriMenu'));
            // console.log(tombol);
            tombol.forEach((t) => {

                t.classList.remove('active');
                t.classList.remove('show');

            });
            e.target.classList.add('active');
            e.target.classList.add('show');



            //console.log(e.target.dataset.kategoriid);
            let kategori = e.target.dataset.kategoriid;
            let menu = Array.from(document.getElementsByClassName('listMakanan'));


            if (kategori == "semua") {


                //console.log(menu);
                //lanjutkan dengan menghapus semua class hidden
                tampilkanMenu(menu);

            } else {

                let menuKategori = Array.from(document.querySelectorAll(`.${kategori}`));

                //console.log(menuKategori);
                //display sesuai kategori yang dipilih selain yang semua
                //logikanya dengan meng hidden semua variabel menu kemudian me dleete hidden pada menuKategori
                sembunyikanMenu(menu);
                tampilkanMenu(menuKategori);
            };



        };

    });



});


function tampilkanMenu(menu) {
    //console.log('berhasil');
    menu.forEach((m) => {
        m.classList.remove('hidden');
    });


}

function sembunyikanMenu(menu) {
    menu.forEach((m) => {
        m.classList.add('hidden');
    });

}

function semuaKategori(hasil) {
    return hasil.map((m) => {
        return `<a class="nav-link kategoriMenu"  data-kategoriid="${m.CategoryId}" aria-selected="false" data-toggle="pill">
        ${m.CategoryName}</a>`
    }).join('');
}


function semuaMenu(menuFilter) {
    return menuFilter.map((m) => {
        return `<div class="col-lg-4 col-md-6 special-grid ${m.CategoryId} listMakanan">
        <div class="gallery-single fix">
            <img src="images/menu/${m.Photo}" class="img-fluid" alt="Image">
            <div class="why-text">
                <h4>${m.FoodName}</h4>
                
                <p>Porsi: ${m.Size}</p>
                
                <h5 style="padding:0;margon-top:0;">Harga: Rp. ${m.Price}</h5>

                <div class="mb-2">
                <form class="formatc" action="atc.php" method="POST">
                    <input name = "foodId" type="hidden" value="${m.FoodId}">
                    <input name = "detailFoodId" type="hidden" value="${m.DetailFoodId}">
                    <input name="jumlah" id="counterMenu" type="number" style="width: 50px" value="0" min="0" max="10" >
                    <button type="button" onclick="increment(this)">+</button>
                    <button type="button" onclick="decrement(this)">-</button>
                    <button class="atcmakanan" type="submit">ATC</button>
                </form>
                </div>
                
            </div>
        </div>
    </div>`
    }).join('');
}

function increment(a) {
    //console.log(a);

    //document.getElementById('counterMenu').stepUp();
    a.previousElementSibling.stepUp();
}

function decrement(b) {
    //document.getElementById('counterMenu').stepDown();
    b.previousElementSibling.previousElementSibling.stepDown();
}