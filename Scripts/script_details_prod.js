const itemList = document.querySelector('.item_list');
const gridViewBtn = document.getElementById('grid_active_btn');
const detailsViewBtn = document.getElementById('details_active_btn');

gridViewBtn.classList.add('active_btn');

gridViewBtn.addEventListener('click', () => {
    gridViewBtn.classList.add('active_btn');
    detailsViewBtn.classList.remove('active_btn');
    itemList.classList.remove('details_active');
});

detailsViewBtn.addEventListener('click', () => {
    detailsViewBtn.classList.add('active_btn');
    gridViewBtn.classList.remove('active_btn');
    itemList.classList.add('details_active');
});