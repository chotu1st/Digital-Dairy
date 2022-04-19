function showPreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");

        let uploadBtn = document.getElementById("btns");
        let wrapper = document.getElementById("upload-btn-wrapper");

        preview.src = src;
        preview.style.display = "block";


        uploadBtn.style.position = "absolute";
        uploadBtn.style.zIndex = "99";
        uploadBtn.style.transform = "translate(3em,-2.5em)";
        uploadBtn.style.boxShadow = "0px 0px 14px rgba(0, 0, 0, 0.38)";

        wrapper.style.position = "unset";
    }
}