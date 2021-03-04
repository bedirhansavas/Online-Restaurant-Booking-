const phone1 = document.getElementById('phone');
const name1 = document.getElementById('name');
const surname1 = document.getElementById('surname');
const month1 = document.getElementById('months');
const day1 = document.getElementById('days');
const person1 = document.getElementById('person');
const food1 = document.getElementById('food1');
const note1 = document.getElementById('note');

const submitButton = document.getElementById('submit');

submitButton.addEventListener('click', () => {
const a =" PHONE -> " + phone1.value ;
const b =" NAME -> " + name1.value + " ";
const c =" SURNAME -> " + surname1.value + " " ;
const d =" MONTH -> " + month1.value + " " ;
const e =" DAY -> " + day1.value + " " ;
const f =" # OF PERSON -> " + person1.value + " ";
const g =" FOOD -> " + food1.value + " ";
const h =" NOTE -> " + note1.value + " ";

alert(a+"\n"+b+"\n"+c+"\n"+d+"\n"+e+"\n"+f+"\n"+g+"\n"+h);
})


