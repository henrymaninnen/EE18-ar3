// local reviews data
const reviews = [
  {
    id: 1,
    name: "Elefterios Sfetsios",
    job: "IT - Tekniker",
    img:
      "https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-0/s206x206/117647707_3378735548830200_9090954288599445380_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=da31f3&_nc_ohc=75oUVz2td_EAX8EVHXy&_nc_ht=scontent-arn2-2.xx&tp=7&oh=2e6c2d1d93459339686dead7cf661e80&oe=6078E7E3",
    text:
      "I'm baby meggings twee health goth +1. Bicycle rights tumeric chartreuse before they sold out chambray pop-up. Shaman humblebrag pickled coloring book salvia hoodie, cold-pressed four dollar toast everyday carry",
  },
  {
    id: 2,
    name: "Elham Hashem",
    job: "CISCO",
    img:
      "https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883409/person-2_np9x5l.jpg",
    text:
      "Helvetica artisan kinfolk thundercats lumbersexual blue bottle. Disrupt glossier gastropub deep v vice franzen hell of brooklyn twee enamel pin fashion axe.photo booth jean shorts artisan narwhal.",
  },
  {
    id: 3,
    name: "Henry Cantwell",
    job: "Web Designer",
    img:
      "https://scontent-arn2-1.xx.fbcdn.net/v/t31.0-0/c0.55.206.206a/p206x206/265230_10150281281873223_4401239_o.jpg?_nc_cat=110&ccb=1-3&_nc_sid=da31f3&_nc_ohc=Rx1PKvwyOIQAX8uKZkk&_nc_ht=scontent-arn2-1.xx&tp=27&oh=f3c4243c7b4f3f35e2943c4f1704464b&oe=6078EE03",
    text:
      "Sriracha literally flexitarian irony, vape marfa unicorn. Glossier tattooed 8-bit, fixie waistcoat offal activated charcoal slow-carb marfa hell of pabst raclette post-ironic jianbing swag.",
  },
];
// select items
const img = document.getElementById("person-img");
const author = document.getElementById("author");
const job = document.getElementById("job");
const info = document.getElementById("info");

const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
const randomBtn = document.querySelector(".random-btn");

// set starting item
let currentItem = 0;

// load initial item
window.addEventListener("DOMContentLoaded", function () {
  const item = reviews[currentItem];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
});

// show person based on item
function showPerson(person) {
  const item = reviews[person];
  img.src = item.img;
  author.textContent = item.name;
  job.textContent = item.job;
  info.textContent = item.text;
}
// show next person
nextBtn.addEventListener("click", function () {
  currentItem++;
  if (currentItem > reviews.length - 1) {
    currentItem = 0;
  }
  showPerson(currentItem);
});
// show prev person
prevBtn.addEventListener("click", function () {
  currentItem--;
  if (currentItem < 0) {
    currentItem = reviews.length - 1;
  }
  showPerson(currentItem);
});
// show random person
randomBtn.addEventListener("click", function () {
  console.log("hello");

  currentItem = Math.floor(Math.random() * reviews.length);
  showPerson(currentItem);
});
