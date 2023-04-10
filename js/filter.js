const filterButton = document.querySelector('.filter-button');

filterButton.addEventListener('click', function() {
  const group = document.querySelector('.wp-block-group');
  group.classList.toggle('show-filtered-items');
});