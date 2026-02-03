
var dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
dropzonePreviewNode.id = "my-dropzone";
if (dropzonePreviewNode) {
  var previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
  dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
  new Dropzone(".dropzone", {
    url: "https://httpbin.org/post",
    method: "post",
    previewTemplate: previewTemplate,
    previewsContainer: "#dropzone-preview",
  });
}

flatpickr("#starting_date ", { defaultDate: null }),
flatpickr("#expiration_date", { defaultDate: null });
