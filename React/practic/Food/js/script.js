window.addEventListener('DOMContentLoaded', function() {

    // Tabs
    
	let tabs = document.querySelectorAll('.tabheader__item'),
		tabsContent = document.querySelectorAll('.tabcontent'),
		tabsParent = document.querySelector('.tabheader__items');

	function hideTabContent() {
        
        tabsContent.forEach(item => {
            item.classList.add('hide');
            item.classList.remove('show', 'fade');
        });

        tabs.forEach(item => {
            item.classList.remove('tabheader__item_active');
        });
	}

	function showTabContent(i = 0) {
        tabsContent[i].classList.add('show', 'fade');
        tabsContent[i].classList.remove('hide');
        tabs[i].classList.add('tabheader__item_active');
    }
    
    hideTabContent();
    showTabContent();

	tabsParent.addEventListener('click', function(event) {
		const target = event.target;
		if(target && target.classList.contains('tabheader__item')) {
            tabs.forEach((item, i) => {
                if (target == item) {
                    hideTabContent();
                    showTabContent(i);
                }
            });
		}
    });
    
    // Timer

    const deadline = '2022-08-30';

    function getTimeRemaining(endtime) {
        let days ,seconds, minutes, hours;
        const t = Date.parse(endtime) - Date.parse(new Date());
        if(t <= 0 ){
            days = seconds = minutes = hours = 0;

        }else{
            days = Math.floor( (t/(1000*60*60*24)) );
            seconds = Math.floor( (t/1000) % 60 );
            minutes = Math.floor( (t/1000/60) % 60 );
            hours = Math.floor( (t/(1000*60*60) % 24) );
        }
            

        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function getZero(num){
        if (num >= 0 && num < 10) { 
            return '0' + num;
        } else {
            return num;
        }
    }

    function setClock(selector, endtime) {

        const timer = document.querySelector(selector),
            days = timer.querySelector("#days"),
            hours = timer.querySelector('#hours'),
            minutes = timer.querySelector('#minutes'),
            seconds = timer.querySelector('#seconds'),
            timeInterval = setInterval(updateClock, 1000);

        updateClock();

        function updateClock() {
            const t = getTimeRemaining(endtime);

            days.innerHTML = getZero(t.days);
            hours.innerHTML = getZero(t.hours);
            minutes.innerHTML = getZero(t.minutes);
            seconds.innerHTML = getZero(t.seconds);

            if (t.total <= 0) {
                clearInterval(timeInterval);
            }
        }
    }

    setClock('.timer', deadline);

    //Modal

    const modalBtn = document.querySelectorAll('[data-modal]'),
          modal = document.querySelector('.modal'),
          modalCloseBtn = document.querySelector('[data-close]'),
          modalTimeId = setTimeout(openModal, 2000);
    
    function openModal() {
        modal.classList.add('show', 'fade');
        modal.classList.remove('hide');
        clearInterval(modalTimeId);
    }
    function closeModal(){
        modal.classList.remove('show');
        modal.classList.add('hide');
    }
    
    
    modalBtn.forEach(item =>{
        item.addEventListener('click', () =>{
            openModal();
        });
    });

    modalCloseBtn.addEventListener('click', () =>{
        closeModal();
    });

    modal.addEventListener('click', (e) =>{
        if(e.target === modal){
            closeModal();
        }
    });

    document.addEventListener('keydown', (e) =>{
        if(e.code === 'Escape' && modal.classList.contains('.show')){
            closeModal();
        }
    });

    function showModalByScroll(){
        if (window.pageYOffset + document.documentElement.clientHeight >= document.documentElement.scrollHeight - 1) {
            openModal();
            window.removeEventListener('scroll', showModalByScroll);
        }
    }

    window.addEventListener('scroll', showModalByScroll);


    //Menu components

    const menuContainer = document.querySelector('.menu__field .container');

    class MenuComponent{
        constructor(img, title, subtitle, price){
            this.img = img;
            this.title = title;
            this.subtitle = subtitle;
            this.price= price;
        }

        pushComponent(){
            menuContainer.innerHTML += `
                <div class="menu__item">
                    <img src="${this.img}" alt="vegy">
                    <h3 class="menu__item-subtitle">${this.title}</h3>
                    <div class="menu__item-descr">${this.subtitle}</div>
                    <div class="menu__item-divider"></div>
                    <div class="menu__item-price">
                        <div class="menu__item-cost">Цена:</div>
                        <div class="menu__item-total"><span>${this.price}</span> грн/день</div>
                    </div>
                </div>
            `;
        }
    }
    
    const componentMenu = new MenuComponent('img/tabs/vegy.jpg', 'Меню "Фитнес"', 'Меню "Фитнес" - это новый подход к приготовлению блюд: больше свежих овощей и фруктов. Продукт активных и здоровых людей. Это абсолютно новый продукт с оптимальной ценой и высоким качеством!', 229);

    componentMenu.pushComponent();
    componentMenu.pushComponent();
    componentMenu.pushComponent();  
});


const urlObj = {
    protocol: 'https',
    domain: 'mysite.com'
};
 
function showCurrentURL() {
    const extractCurrDomain = () => {
        return this.domain;
    };
    const extractCurrProtocol = () => {
        return this.protocol;
    };
 
    console.log(`${extractCurrProtocol()}://${extractCurrDomain()}`)
}
 
const url = showCurrentURL.bind(urlObj);
 
console.log(url);


