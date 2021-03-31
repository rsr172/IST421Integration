const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
});
function searchCars () {
    var x = document.getElementById("CarMake").value;
    var y = document.getElementById("CarYear").value;

    $.getJSON('https://vpic.nhtsa.dot.gov/api/vehicles/getmodelsformakeyear/make/' + x + '/modelyear/' + y + '?format=json', function(data) {
        console.log(data); 
        var z  = JSON.stringify(data);
        console.log(z);
    });

  }