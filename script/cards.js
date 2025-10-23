console.log("Cards Cargado");

const dataCards = [
    {
        "title": "Celulares",
        "url_image": "./img/Celulares.jpg",
        "desc": "Quieres saber cual celular te conviene mas? Cada uno de nuestros productos cuenta con una breve reseña.",
        "cta": "Mostrar más...",
        "link": "./celulares.php"
    },
    {
        "title": "Computadoras",
        "url_image": "./img/Computadoras.jpg",
        "desc": "En Electronics Store contamos con una amplia variedad de computadoras para todo tipo de usuario.",
        "cta": "Mostrar más...",
        "link": "./computadoras.php"
    },
{
  "title": "Tablets",
  "url_image": "./img/Tablets.jpg",
  "desc": "Contamos con una amplia variedad de tablets para todo tipo de usuario.",
  "cta": "Mostrar más...",
  "link": "./tablets.php"
}, 
{
  "title": "Smartwatch",
  "url_image": "./img/Smartwach.png",
  "desc": "Gran variedad de smartwatches para todo tipo de usuario.",
  "cta": "Mostrar más...",
  "link": "./smartwatch.php"
},
{
        "title": "Accesorios",
        "url_image": "./img/Accesorios.jpg",
        "desc": "Muchos accesosrios para complementar tus dispositivos.",
        "cta": "Mostrar más...",
        "link": "./accesorios.php"
    },
{
        "title": "Quienes somos",
        "url_image": "./img/Redes.jpg",
        "desc": "Conoce más sobre nosotros y nuestras redes sociales.",
        "cta": "Mostrar más...",
        "link": "./contacto.php"
    }

];

(function () {
    let CARD = {

        init: function() {
            let _self = this;
            this.insertData(_self);
        },

        insertData: function(_self) {
            dataCards.map(function (item, index) {
                document.querySelector('.card-list').insertAdjacentHTML('beforeend', _self.tplCardItem(item,index));
            })
        },

        tplCardItem: function(item, index) {
           return(`<div class='card-item' id='card-number-${index}'>
                <img src='${item.url_image}'>
                <div class='card-info'>
                    <p class='card-title'>${item.title}</p>
                    <p class='card-desc'>${item.desc}</p>
                    <a class='card-cta' target='_blank' href='${item.link}'>${item.cta}</a>
                </div>
                </div>`);

        },
    }
    CARD.init();
})();