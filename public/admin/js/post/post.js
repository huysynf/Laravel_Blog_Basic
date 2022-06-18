ClassicEditor
    .create( document.querySelector( '.editor' ), {
        licenseKey: '',
        ckfinder: {
            openerMethod: 'popup',
            uploadUrl: '/ckfinder_php_3.5.3/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
            options: {
                resourceType: 'Images',
            }
        }
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( error => {

    } );
