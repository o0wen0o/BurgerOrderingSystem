const breakfastRadio = document.getElementById('breakfastRadio');
const regularRadio = document.getElementById('regularRadio');

const bf_limitedTimeOnly = document.getElementById('bf_limitedTimeOnly');
const rg_limitedTimeOnly = document.getElementById('rg_limitedTimeOnly');
const bf_boxMeals = document.getElementById('bf_boxMeals');
const rg_boxMeals = document.getElementById('rg_boxMeals');
const bf_burgerNTwister = document.getElementById('bf_burgerNTwister');
const rg_burgerNTwister = document.getElementById('rg_burgerNTwister');
const bf_beverages = document.getElementById('bf_beverages');
const rg_beverages = document.getElementById('rg_beverages');

breakfastRadio.addEventListener('click', function () {
    bf_limitedTimeOnly.style.display = 'block';
    bf_boxMeals.style.display = 'block';
    bf_burgerNTwister.style.display = 'block';
    bf_beverages.style.display = 'block';

    rg_limitedTimeOnly.style.display = 'none';
    rg_boxMeals.style.display = 'none';
    rg_burgerNTwister.style.display = 'none';
    rg_beverages.style.display = 'none';
});

regularRadio.addEventListener('click', function () {
    rg_limitedTimeOnly.style.display = 'block';
    rg_boxMeals.style.display = 'block';
    rg_burgerNTwister.style.display = 'block';
    rg_beverages.style.display = 'block';

    bf_limitedTimeOnly.style.display = 'none';
    bf_boxMeals.style.display = 'none';
    bf_burgerNTwister.style.display = 'none';
    bf_beverages.style.display = 'none';
});