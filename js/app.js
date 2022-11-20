document.querySelector('#openHeaderMenu').addEventListener('click', () => {
    document.querySelector('.main_menu_dropdown').style.display = 'block';
    document.querySelector('.main_menu_buttons .close_header_menu').style.display = 'inline-block';
    document.querySelector('.main_menu_buttons .open_header_menu').style.display = 'none';
})

document.querySelector('#closeHeaderMenu').addEventListener('click', () => {
    document.querySelector('.main_menu_dropdown').style.display = 'none';
    document.querySelector('.main_menu_buttons .close_header_menu').style.display = 'none';
    document.querySelector('.main_menu_buttons .open_header_menu').style.display = 'inline-block';
})
document.querySelector('#openSearchMobile').addEventListener('click', () => {
    document.querySelector('.search_mobile').style.display = 'block';
    document.querySelector('.search_mobile .close_search_mobile').style.display = 'inline-block';
    document.querySelector('.searchbox .open_search_mobile').style.display = 'none';
})

document.querySelector('#closeSearchMobile').addEventListener('click', () => {
    document.querySelector('.search_mobile').style.display = 'none';
    document.querySelector('.search_mobile .close_search_mobile').style.display = 'none';
    document.querySelector('.searchbox .open_search_mobile').style.display = 'inline-block';
})