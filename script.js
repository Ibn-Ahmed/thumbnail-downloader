const urlInput =document.getElementById('url-input');
const previewArea = document.getElementById('preview-areaa');
const imgThumbnail =document.getElementById('img-thumbnail');
const hiddenInput = document.getElementById('hidden-input');
const  submitBtn = document.getElementById('submit-button');

//https://youtu.be/9NQ8LehUWSE
//https://www.youtube.com/watch?v=9NQ8LehUWSE&ab_channel=Alertometer

//let ytThumbUrl= https://img.youtube.com/vi/$(vidId}/maxresdefault.jpg;

//else if(imgUrl.match(/\.(jpe?g|pnglgif|bmp|webp)$/i))


urlInput.onkeyup = ()=>{
    let url = urlInput.value;

imgThumbnail.classList.remove('none');

if(url.indexOf("https://youtu.be/")!= -1) {
let urlID = url.split(".be/")[1].substring(0, 11);
let ytThumbUrl= `https://img.youtube.com/vi/${urlID}/maxresdefault.jpg`;
imgThumbnail.src = ytThumbUrl;

}else if(url.indexOf("https://www.youtube.com/watch?v=") != -1) {
    let urlID = url.split("?v=")[1].substring(0, 11);
    let ytThumbUrl= `https://img.youtube.com/vi/${urlID}/maxresdefault.jpg`;
    imgThumbnail.src = ytThumbUrl;
}else if(url.match(/\.(jpe?g|png|gif|bmp|webp)$/i)) {
    imgThumbnail.src = url;
} else {
    imgThumbnail.src = "";
    imgThumbnail.classList.add('none');
}
hiddenInput.value = imgThumbnail.src;

}



