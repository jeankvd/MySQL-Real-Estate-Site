var cards = document.getElementsByClassName('card');


for (let i = 0; i < cards.length; i++) {
  cards[i].addEventListener('mouseover', (e) => {
    cards[i].children[cards[i].children.length-1].style.display = 'block';
  });
  cards[i].addEventListener('mouseout', (e) => {
    cards[i].children[cards[i].children.length-1].style.display = 'none';
  });
}

console.log(window.innerHeight);
