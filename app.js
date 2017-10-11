var cards = document.getElementsByClassName('card');
var deleteProperty = document.getElementById('deleteProperty');
var noButton = document.getElementById('noButton');

for (let i = 0; i < cards.length; i++) {
  cards[i].addEventListener('mouseover', (e) => {
    cards[i].children[cards[i].children.length-1].style.display = 'block';
  });
  cards[i].addEventListener('mouseout', (e) => {
    cards[i].children[cards[i].children.length-1].style.display = 'none';
  });
  cards[i].addEventListener('click', (e) => {
    if (e.target.className == 'delete') {
      var id = e.target.id;
      deleteProperty.style.display = 'inline-block';
      deleteProperty.children[1].children[0].value = id;
    }
  });
}

noButton.addEventListener('click', (e) => {
  e.preventDefault();
  deleteProperty.style.display = 'none';
});
