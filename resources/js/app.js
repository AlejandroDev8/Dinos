import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
  dictDefaultMessage: 'Sube aquí tu imagen',
  acceptedFiles: '.png,.jpg,.jpeg,.gif',
  addRemoveLinks: true,
  dictRemoveFile: 'Eliminar archivo',
  maxFiles: 1,
  uploadMultiple: false,
})

// file: es el dropzone file, xhr: es el objeto XMLHttpRequest, formData: es el objeto FormData

dropzone.on('sending', function(file, xhr, formData) {
  console.log(formData)
})

dropzone.on('success', function(file, xhr) {
  console.log(xhr)
})