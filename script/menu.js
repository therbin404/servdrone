document.querySelector('#menu').addEventListener('click', function (e) { //Show first menu
  if (document.querySelector('#firstLevel').style.display == 'block') {
      document.querySelector('#firstLevel').style.display = 'none';
  } else {
      document.querySelector('#firstLevel').style.display = 'block';
  }
})

document.querySelector('#menuSecondLevel').addEventListener('click', function (e) { //Show second menu (stages)
  e.preventDefault();
  if (document.querySelector('#secondLevel').style.display == 'block') {
      document.querySelector('#secondLevel').style.display = 'none';
  } else {
      document.querySelector('#secondLevel').style.display = 'block';
  }
})

document.querySelector('#menuThirdLevel').addEventListener('click', function (e) { //Show third menu (events)
  e.preventDefault();
  if (document.querySelector('#thirdLevel').style.display == 'block') {
      document.querySelector('#thirdLevel').style.display = 'none';
  } else {
      document.querySelector('#thirdLevel').style.display = 'block';
  }
})