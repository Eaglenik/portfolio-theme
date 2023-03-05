// Theme
const themes = {
  light: {
    '--bg': '#ffffff',
    '--text': '#393F47',
    '--text-nav': '#ffffff',
    '--icon-color-light': '#2F343A',
    '--icon-color-dark': '#ffffff',
  },
  dark: {
    '--bg': '#1a1c1f',
    '--text': '#C8A35F',
    '--text-nav': '#C8A35F',
    '--icon-color-light': '#C8A35F',
    '--icon-color-dark': '#2F343A',
  }
};
jQuery(document).ready(function() {
  jQuery(".navbar-btn").click(function() {
    const navbarBtn = document.querySelector('.navbar-btn');
    if(navbarBtn.classList.contains('dark')){
      navbarBtn.classList.remove('dark')
      navbarBtn.classList.add('light')
      navbarBtn.setAttribute('data-theme', 'light')
    }else{
      navbarBtn.classList.remove('light')
      navbarBtn.classList.add('dark')
      navbarBtn.setAttribute('data-theme', 'dark')
    }
    const themeAttr = navbarBtn.getAttribute('data-theme')
    const myTheme = themes[themeAttr]
    let themeStr = ''
      for(const key in myTheme){
          themeStr += `${key}: ${myTheme[key]};`
      }
      document.documentElement.style = themeStr
      
      let localTheme;
      if(localStorage.getItem('theme') == null){
          localTheme = 'dark'
      }else{
          localTheme = JSON.parse(localStorage.getItem('theme'))
      }
      localTheme = themeAttr
      localStorage.setItem('theme', JSON.stringify(localTheme))
  });
});
// Theme end
// lang 
$(function() {
  const langArr = {
    en: {
      'pa':'My works',
      'sa':'Skills',
      'pa2':'My works',
      'sa2':'Skills',
      'ca':'Contact',
      'hh1':'about.',
      'hp1':'Hi. My name is Nikolay. Iʼm a Front-end Web developer from Tashkent.',
      'hp2':'This is my website business card.',
      "ch1": 'I have completed a nine-month web programming course at the educational institution "ProWeb".',
      "cp": 'My web development experience is 1.5 year.',
      "asa": 'My skills',
      "lan": 'En',
      "jh1": 'My works',
      "jp": '*In some layouts there may be shortcomings.',
      "sp": 'I also speak English at level B1 (intermidiate)',
    },
    ru: {
      'pa':'Мои работы',
      'sa':'Навыки',
      'pa2':'Мои работы',
      'sa2':'Навыки',
      'ca':'Контакты',
      'hh1':'about.',
      'hp1':'Здравствуйте. Меня зовут Николай. Я Front-end веб-разработчик из Ташкента.',
      'hp2':'Это мой сайт-визитка.',
      "ch1": 'Я завершил девятимесячный курс веб-программирования в учебном заведении "ProWeb".',
      "cp": 'Мой опыт веб разработки - 1.5 года',
      "asa": 'Мои навыки',
      "lan": 'Ру',
      "jh1": 'Мои работы',
      "jp": '*В некоторых макетах могут быть недоработки.',
      "sp": 'Также я владею английским языком уровня B1 (intermidiate)',
    }
  };
  const langEn = document.querySelector('#lang-en');
  const langRu = document.querySelector('#lang-ru');
  
  langEn.addEventListener('click', setLang.bind(null, 'en'));
  langRu.addEventListener('click', setLang.bind(null, 'ru'));
  
  function setLang(lang) {
    if(!langArr.hasOwnProperty(lang)) return;
    if(window.hasOwnProperty('localStorage'))
      window.localStorage.setItem('lang', lang);
    for (let key in langArr[lang]){
      let elem = document.querySelector('.lng-' + key);
      if(elem){
        elem.innerHTML = langArr[lang][key];
      }
    }
  };
  let lang = window.hasOwnProperty(localStorage);
  setLang(lang)
});
// lang end
// skills
$(function() {
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 6,
    margin: 10,
    smartSpeed: 2000,
    autoplayTimeout: 1500,
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    mouseDrag: false,
    touchDrag: false,
    margin: 0,
    responsive:{
      1200:{
        items:6
      },
      800:{
        items:5
      },
      400:{
        items:4
      },
      0:{
        items:3
      },
  }
  });
});
// skills end
// gsap
$(function () {
  gsap.registerPlugin(ScrollTrigger, ScrollSmoother)
  if(ScrollTrigger.isTouch !== 1){
    ScrollSmoother.create({
      wrapper: '.wrapper',
      content: '.content',
      smooth: 1,
      effects: true,
    })
  
    gsap.fromTo('.header', {opacity: 1}, {
      opacity: 0,
      scrollTrigger: {
        trigger: '.header',
        start: 'center',
        scrub: true
      }
    })
  
    let itemsL = gsap.utils.toArray('.certificates .scroll-left')
    let itemsR = gsap.utils.toArray('.certificates .scroll-right')
  
    itemsL.forEach(item => {
      gsap.fromTo(item, {x: -150, opacity: 0 }, {
        opacity: 1, x: 0,
        scrollTrigger: {
          trigger: item,
          scrub: true,
          start: 200,
        }
      })
    })
  
    itemsR.forEach(item => {
      gsap.fromTo(item, {x: 150, opacity: 0 }, {
        opacity: 1, x: 0,
        scrollTrigger: {
          trigger: item,
          scrub: true,
          start: 200,
        }
      })
    })
  
    gsap.fromTo('.skills', {opacity: 0}, {
      opacity: 1,
      scrollTrigger: {
        trigger: '.skills',
        scrub: true,
      }
    })
  
    gsap.fromTo('.jobs', {opacity: 0}, {
      opacity: 1,
      scrollTrigger: {
        trigger: '.jobs',
        scrub: true,
        end: 'skills'
      }
    })
  }
});