if(document.querySelector('.glide')) {
    new Glide('.glide', {
        perView: 1,
        type: 'carousel',
        autoplay: 4000,         
    }).mount()
}