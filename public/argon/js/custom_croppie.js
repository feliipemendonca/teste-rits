

// FUNÇÃO PARA O BOTÂO DE UPLOAD
function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
           if($(input).attr('id') == 'upload'){
                crop_element.croppie('bind', {
                    url: e.target.result
                });
            } else if($(input).attr('id') == 'upload-mobile'){
                console.log('oi');
                mobile_element.croppie('bind', {
                    url: e.target.result
                });
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$('.actionUpload input').on('change', function () {
    readFile(this);
});

$('.actionUploadMobile input').on('change', function () {
    readFile(this);
});

//ADICIONAR A AREA DE CROP AO CAMPO ESCONDIDO
$('.form').on('submit', function (event) {

    crop_element.croppie('result', {
        type: 'canvas',
        size: 'original',
        format: '*'
    }).then(function (resp) {
        $('#image-hidden').val(resp);
    });
// } else if($('#type_mobile').val() == 'image-mobile') {
    if(typeof mobile_element !== 'undefined'){
        mobile_element.croppie('result', {
            type: 'canvas',
            size: 'original',
            format: '*'
        }).then(function (resp) {
            $('#image-hidden-mobile').val(resp);
        });
    }
});

//HABILITAR AREA DE CROP/ EVITAR ZOOM AO PASSAR POR CIMA
$('#edit-image').click(function() {
    if(this.checked)
        $('.edit-check-text', this).html('Desabilitar edição de imagem');
    else
        $('.edit-check-text', this).html('Habilitar edição de imagem');

    $(".image-container .protect-image-container").toggle(!this.checked);
});

$('#edit-image-mobile').click(function() {
    if(this.checked)
        $('.edit-check-text', this).html('Desabilitar edição de imagem');
    else
        $('.edit-check-text', this).html('Habilitar edição de imagem');

    $(".image-container-mobile .protect-image-container").toggle(!this.checked);
});