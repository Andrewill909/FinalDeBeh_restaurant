$(document).ready(function () {

    //load file profil dari db

    $.ajax({
        url: "prosesProfil.php",
        type: "POST",
        cache: false,
        data: {
            tipe: "load"
        },
        success: (response) => {
            let detail = JSON.parse(response)[0];
            console.log(detail);
            //manipulasi DOM profil

            $('#username').val(detail.UserName);
            $('#usergender').val(detail.UserGender);
            $('#userphone').val(detail.UserPhone);

            if (detail.UserPicture != null) {

                $('#imgprofil').attr("src", `images/profil/${detail.UserPicture}`);
            }

        }
    })

    // let upload = document.getElementById('contactForm');
    // upload.addEventListener('submit',function(e){

    //     e.preventDefault();

    //     let dataForm = new FormData(this);

    //     $.ajax({
    //         url:"prosesProfil.php",
    //         type:"POST",
    //         data:dataForm,
    //         cache:false,
    //         contentType:false,
    //         processData:false,
    //         success:(response)=>{
    //             console.log(response);
    //         },
    //         error:(response)=>{
    //             console.log(response);
    //         }
    //     })

    // });

    let imageChange = document.getElementById('formfoto');
    imageChange.addEventListener('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: "prosesFotoProfil.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: (response) => {
                //console.log(response);
                $('#imageContainer').html(response);
            }

        })
    });


    let uploadall = document.getElementById('submit');
    uploadall.addEventListener('click', function (e) {
        e.preventDefault();

        let username = $('#username').val();
        let usergender = $('#usergender').val();
        let userphone = $('#userphone').val();

        let userimg = document.getElementById('imgprofil').getAttribute('src').split('/')[2];

        $.ajax({
            url: "prosesProfil.php",
            type: "POST",
            cache: false,
            data: {
                username: username,
                usergender: usergender,
                userphone: userphone,
                userimg: userimg,
                tipe: "edit"
            },
            success: (response) => {
                let hasil = JSON.parse(response);

                if (hasil.statusCode == 200) {
                    let el = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Selamat, data diri anda berhasil diubah !
                </div>`
                    $('#alert').html(el);
                }
            }
        })

    })
})