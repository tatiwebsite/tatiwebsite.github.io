(()=>{"use strict";const e=[{id:"main-page",title:"Главная"},{id:"login-page",title:"Войди/Зарегистрируйся"},{id:"studies-page",title:"Давай научу",image:"./public/check-card-1.png"},{id:"test-capital-page",title:"Тест на столицы",image:"./public/check-card-2.png"},{id:"test-flag-page",title:"Тест на флаги",image:"./public/check-card-3.png"}],t=e=>e.sort((()=>Math.random()-.5)),n=[{short:"gn",nameRus:"Гвинея"},{short:"de",nameRus:"Германия"},{short:"lt",nameRus:"Литва"},{short:"bj",nameRus:"Бенин"},{short:"bo",nameRus:"Боливия"},{short:"au",nameRus:"Австралия"},{short:"cn",nameRus:"Китай"},{short:"gr",nameRus:"Греция"},{short:"br",nameRus:"Бразилия"},{short:"be",nameRus:"Бельгия"},{short:"cg",nameRus:"Конго"},{short:"cu",nameRus:"Куба"},{short:"ee",nameRus:"Эстония"},{short:"hu",nameRus:"Венгрия"},{short:"ke",nameRus:"Кения"},{short:"jm",nameRus:"Ямайка"},{short:"nl",nameRus:"Нидерланды"},{short:"pt",nameRus:"Португалия"},{short:"se",nameRus:"Швеция"},{short:"uy",nameRus:"Уругвай"},{short:"it",nameRus:"Италия"}],s=class{constructor(e,t){this.container=document.createElement("div"),this.container.id=e,this.text=t}render(){document.querySelector("main").innerHTML="";const e=document.createElement("h1");e.classList.add("section-title");const t=document.querySelector("main");return e.textContent=`${this.text}`,this.container.append(e),t.append(this.container),this.container}};class a{constructor(e,t){this.item=e,this.container=t}render(e){const t=document.createElement("div");t.classList.add("check-card"),t.innerHTML=`\n            <div class="card-image">\n                <img src="${this.item.image}" alt="points">\n            </div>\n            <div class="card-info">\n                <h2 class="card-title">${this.item.title}</h2>\n                <a class="card-button" href="#${this.item.id}">Перейти</a>\n            </div>\n        `,this.container.append(t)}}const i=class extends s{constructor(){super("main-page","Главная страница")}showCards(e,t){(t=(t=t).filter((e=>"login-page"!==e.id&&"main-page"!==e.id))).forEach((t=>{new a(t,e).render()})),this.container.append(e)}},o=async function(e){try{let t=await fetch(e);if(!t.ok)throw new Error(`Could not fetch ${e}, status: ${t.status}`);return await t.json()}catch(e){console.log("Возникла проблема с вашим fetch запросом: ",e.message)}};class r{constructor(e,t,n,s,a,i){this.container=e,this.shortName=t,this.currency=i,this.title=n,this.descr=s,this.capital=a}render(){if(document.querySelector(".studies-wrapper")){this.container=document.querySelector(".studies-wrapper");const e=document.createElement("div");e.classList.add("studies-card"),e.innerHTML=`\n                <div class="studies-front">\n                    <h2 class="studies-subtitle">${this.title}</h2>\n                    <div class="studies-photo">\n                        <img src="https://www.countryflags.io/${this.shortName}/shiny/64.png">\n                    </div>\n                    <div class="studies-touch">Наведи на меня</div>\n\n                </div>\n                <div class="studies-back">\n                    <h3 class="studies-subtitle">Столица - ${this.capital}</h3>\n                    <p class="studies-descr">${this.descr}</p>\n                    <p class="studies-currency">Государственная валюта - ${this.currency}</p>\n                </div>\n            `,this.container.append(e)}}}const c=class extends s{constructor(){super("studies-page","Давай учиться вместе!")}showCards(e){e&&(o("https://it-academy-project-fe695-default-rtdb.firebaseio.com/coutries.json").then((t=>{t.forEach((({shortname:t,title:n,descr:s,capital:a,currency:i})=>{new r(e,t,n,s,a,i).render()}))})),this.container.append(e))}};class l{constructor(e){this.container=e}getData(){o("https://it-academy-project-fe695-default-rtdb.firebaseio.com/coutries.json").then((e=>this.createArray(e)))}createArray(e){let n=Object.values(e),s=t(n);this.createEntry(s)}createEntry(e){const t=document.createElement("h2");let n=localStorage.getItem("user"),s=JSON.parse(n);console.log(s),t.classList.add("entry-title"),t.textContent=`Привет, ${s.loginName}!!! Нажимай "Старт" и покажи свои знания!`;const a=document.createElement("button");a.classList.add("entry-button"),a.textContent="Старт",a.addEventListener("click",(()=>{this.render(e)})),this.container.append(t),this.container.append(a)}render(e){this.container.innerHTML="";const t=document.createElement("div");t.classList.add("test-inner");const n=document.createElement("div");n.classList.add("test-results"),this.renderNextTest(e,e[0],t,n),this.createNextTest(e,t,n)}createNextTest(e,t,n){console.log(this.container);const s=document.createElement("button");s.classList.add("button-next"),s.textContent="Следующий вопрос";const a=document.createElement("div");a.classList.add("test-points");let i=(o=0,function(){return++o});var o;s.disabled=!0,s.addEventListener("click",(()=>{let o=e[i()];o?(s.disabled=!0,this.renderNextTest(e,o,t,n)):this.showResults(t,a,s)})),n.append(a),n.append(s),this.container.append(n),this.container.append(t)}renderNextTest(e,n,s,a){s.innerHTML=" ";const i=document.createElement("div");i.classList.add("test-answers");const o=document.createElement("div");o.classList.add("test-header");let r=[];e.forEach((e=>{r.push(e.capital)}));let c=t(r),l=[];l.push(n.capital),c.forEach((e=>{if(!(l.length<4))return l;e!==n.capital&&l.push(e)}));const d=t(l).map((e=>e===n.capital?`<button class="button-answer" data-answer="yes">${e}</button>`:`<button class="button-answer" data-answer="no">${e}</button>`)),u=document.createElement("div");u.classList.add("test-buttons"),u.innerHTML=`${d.join("")}`,o.innerHTML=`\n            <h2 class="test-question">Отметьте правильно столицу следующего государства/страны: <dr><span>${n.title}</span></h2>\n            <div class="test-photo"><img src="./public/${n.shortname}.jpg" alt="capital"></div> \n            `,i.innerHTML=`\n            <div class="test-variants">Варианты ответов:</div> \n            <div class="test-buttons">${d.join("")}</div>  \n        `,s.append(o),s.append(i),this.container.append(s),this.findEvents(i,a)}findEvents(e,t){e.addEventListener("click",(n=>{const s=e.querySelectorAll(".button-answer"),a=t.querySelector(".test-points"),i=t.querySelector(".button-next");n.target&&n.target.classList.contains("button-answer")&&("yes"===n.target.getAttribute("data-answer")?(i.disabled=!1,n.target.textContent="Правильно!",a.innerHTML+='<span class="point_yes"></span>',s.forEach((e=>{e.disabled="true"})),new Audio("./public/true-answer.mp3").play()):(i.disabled=!1,n.target.textContent="ОЙ! Ошибочка!",a.innerHTML+='<span class="point_no"></span>',s.forEach((e=>{e.disabled="true"})),window.navigator.vibrate(1e3),new Audio("./public/wrong-answer.mp3").play()))}),{once:!0})}showResults(e,t,n){n.textContent="Смотреть результат",n.addEventListener("click",(()=>{e.innerHTML="",n.disabled=!0;const s=document.createElement("button");s.classList.add("test-btn-statistic"),s.textContent="Рейтинг";const a=document.createElement("div");a.classList.add("total-results");const i=t.querySelectorAll("span");let o=[];i.forEach((e=>{e.classList.contains("point_yes")&&o.push(e)}));let r=o.length;r<=4?a.innerHTML=`\n                    <div class="total-inner">\n                        <span class="true-answers">Такс, верных ответов у тебя <br> ${r} из ${i.length}</span>\n                        <div class="total-answer" >Ты что? Совсем не проходил обучение? Кликай "Пройти обучение" и возвращайся</div>\n                        <a class="total-link" href="#studies-page">Пройти обучение</a> \n                    </div>     \n                `:r>4&&r<=7?a.innerHTML=`\n                    <div class="total-inner">\n                        <span class="true-answers">Такс, верных ответов у тебя <br> ${r} из ${i.length}</span>\n                        <div class="total-answer">Неплохо! Видно, что ты не новичок. Кликай "Пройти обучение" и возвращайся за ${i.length} из ${i.length}</div>\n                        <a class='total-link' href="#studies-page">Пройти обучение</a> \n                    </div>\n                `:r>7&&(a.innerHTML=`\n                    <div class="total-inner">\n                        <span class="true-answers">Такс, верных ответов у тебя <br> ${r} из ${i.length}</span>\n                        <div class="total-answer">Вот это поворот!!! Поздравляю!</div>\n                        <a class='total-link' href="#main-page">Главная страница</a> \n                    </div>\n                `),e.append(a),e.append(s),this.showStatistic(e,s,r)}))}showStatistic(e,t,n){t.addEventListener("click",(()=>{let t=localStorage.getItem("user"),s=JSON.parse(t);!function(e,t,n){const s={email:t.email,loginName:t.loginName,count:n};fetch(`https://it-academy-project-fe695-default-rtdb.firebaseio.com/users/${s.loginName}.json`,{method:"PATCH",body:JSON.stringify(s),headers:{"Content-Type":"application/json"}}).then((e=>e.json())).then(function(e){o("https://it-academy-project-fe695-default-rtdb.firebaseio.com/users.json").then((t=>function(e,t){let n=Object.values(t),s=document.createElement("div");s.classList.add("statistic-block"),n.forEach((({count:e,loginName:t})=>{s.innerHTML+=`\n            <div class="user-statistic">Пользователь ${t} набрал ${e} баллов</div>\n        `})),e.append(s),console.log(s)}(e,t)))}(e))}(e,s,n)}))}}const d=class extends s{constructor(){super("test-capital-page","")}showTests(){const e=document.createElement("div");e.classList.add("test-wrapper"),new l(e).getData(),this.container.append(e)}};class u{constructor(e){this.container=e}render(){this.container.innerHTML="";const e=document.createElement("button");e.classList.add("flag-btn"),e.textContent="Проверить!";const s=document.createElement("button");s.classList.add("flag-help"),s.textContent="Подсказка!";const a=document.createElement("button");a.classList.add("flag-btn-new"),a.textContent="Новый уровень!",t(n).slice(1,5).forEach((({short:e,nameRus:t})=>{this.renderCards(e,t)})),this.container.append(a),this.container.append(e),this.container.append(s),this.checkAnswersAndHelp(e,s,a)}renderCards(e,t){const n=document.createElement("div");return n.classList.add("flags-inner"),this.container&&(n.innerHTML+=`\n                <div class="flag-block" data-short="${e}">\n                    <div class="flag-choice" data-short="${e}">\n                        <img src="https://www.countryflags.io/${e}/shiny/64.png" alt="">\n                    </div>\n                    <div class="flag-name" data-short="${e}">${t}</div>\n                </div>\n                <div class="flag-enter">\n                    <input class="flag-input" type="text" placeholder="Чей флаг?">\n                </div>\n            `),this.container.append(n),this.container}checkAnswersAndHelp(e,t,n){this.checkBtn=e,this.helpBtn=t,this.newBtn=n;let s=this.container.querySelectorAll(".flags-inner");this.container.querySelector(".flag-input"),this.checkBtn.addEventListener("click",(()=>{s.forEach((e=>{let t=e.querySelector(".flag-input").value.toLowerCase(),n=e.querySelector(".flag-name"),s=n.textContent.toLowerCase();n.classList.add("open"),t!==s&&e.classList.add("mistake")}))})),this.helpBtn.addEventListener("click",(()=>{s.forEach((e=>{let t=e.querySelector(".flag-name"),n=setInterval((function(){t.classList.toggle("open")}),1e3);setTimeout((()=>{clearInterval(n)}),4e3)}))})),this.newBtn.addEventListener("click",(()=>{this.render()}))}}const p=class extends s{constructor(){super("test-flag-page","Тест на флаги")}showCards(e){e&&(new u(e).render(),this.container.append(e))}};function h(e){e.preventDefault();const t={email:document.querySelector("#email").value,loginName:document.querySelector("#login-name").value};let n=document.querySelector("#password").value;return fetch("https://identitytoolkit.googleapis.com/v1/accounts:signInWithPassword?key=AIzaSyDpoezvXv_8t-KhaBxBKOF9PWe2Mur4wCc",{method:"POST",body:JSON.stringify({email:t.email,password:n,returnSecureToken:!0}),headers:{"Content-Type":"application/json"}}).then((e=>e.json())).then((e=>function(e,t){e.idToken&&(localStorage.setItem("user",JSON.stringify(t)),window.location.hash="#main-page",console.log(localStorage.getItem(`${t.loginName}`)))}(e,t)))}function m(e){e.preventDefault();const t=document.querySelector("#email").value,n=document.querySelector("#password").value;return fetch("https://identitytoolkit.googleapis.com/v1/accounts:signUp?key=AIzaSyDpoezvXv_8t-KhaBxBKOF9PWe2Mur4wCc",{method:"POST",body:JSON.stringify({email:t,password:n,returnSecureToken:!0}),headers:{"Content-Type":"application/json"}}).then((e=>e.json())).then(function(){const e={email:document.querySelector("#email").value,loginName:document.querySelector("#login-name").value,count:""};return fetch(`https://it-academy-project-fe695-default-rtdb.firebaseio.com/users/${e.loginName}.json`,{method:"PATCH",body:JSON.stringify(e),headers:{"Content-Type":"application/json"}}).then((e=>e.json())).then((document.querySelector("#email").value="",document.querySelector("#password").value="",void(document.querySelector("#login-name").value="")))}())}const g=class extends s{constructor(){super("login-page","")}showLoginCard(){const e=document.createElement("div");e.classList.add("login-wrapper"),e.innerHTML='\n            <h2 class="login-title">Ну что? Поехали?</h2>\n            <form action="" id="login-form" class="login-form">\n                <input type="text" id="login-name" class="login-input" placeholder="Твоё имя" required>\n                <input type="email" id="email" class="login-input" placeholder="Электронная почта" required>\n                <input type="password" id="password" class="login-input" autocomplete="on" placeholder="Пароль" required>\n                <div class="login-btns">\n                    <button type="submit" id="loginBtn" class="login-enter">Вход</button>\n                    <button type="submit" id="regBtn" class="login-register">Регистрация</button>\n                </div>\n            </form>\n        ';const t=e.querySelector(".login-form");this.container.append(e),this.authForm(t)}authForm(e){const t=e.querySelector(".login-register");e.querySelector(".login-enter").addEventListener("click",h),t.addEventListener("click",m)}},v=class extends s{constructor(){super("404-page","Ошибочка вышла 404")}},f=()=>!localStorage.getItem("user");window.addEventListener("DOMContentLoaded",(function(){const t=document.querySelector("body"),n=document.createElement("div");n.classList.add("main-container");const s=document.createElement("header");s.classList.add("header");const a=document.createElement("footer");a.classList.add("footer");const o=document.createElement("main"),r=document.createElement("div");r.classList.add("studies-wrapper");const l=document.createElement("div");l.classList.add("flags-wrapper");const u=document.createElement("div");function h(t){if("studies-page"===t.slice(1)){r.innerHTML="";const e=new c;e.render(),e.showCards(r)}else if("test-capital-page"===t.slice(1)){const e=new d;e.render(),e.showTests()}else if("test-flag-page"===t.slice(1)){const e=new p;e.render(),e.showCards(l)}else if("main-page"===t.slice(1)){u.innerHTML="";const t=new i;t.render(),t.showCards(u,e)}else if("login-page"===t.slice(1)){const e=new g;e.render(),e.showLoginCard()}else(new v).render()}u.classList.add("main-wrapper"),t.append(s),t.append(n),t.append(a),n.append(o),function(e,t){t=t.filter((e=>"login-page"!==e.id));const n=document.createElement("div");n.classList.add("header-wrapper");const s=t.map((e=>`\n        <li><a class='${e.id}' href="#${e.id}">${e.title}</a> </li>\n        `)).join(" ");n.innerHTML=`\n        <div class="burger">\n            <div class="burger-inner">\n                <img src="./public/points.svg" alt="points">\n            </div>\n        </div>\n        <div class="logo">GEOGRAPHY OF THE WORLD</div>\n        <div class="navigation">\n            <span class="navigation-close">&#10006;</span>\n            <ul class="menu">\n                ${s}\n            </ul>\n        </div>\n        <div class="login">\n            <img src="./public/login.svg" alt="login">\n        </div>\n    `,e.append(n),n.querySelector(".burger").addEventListener("click",(()=>{n.querySelector(".navigation").classList.add("open")})),n.querySelector(".navigation-close").addEventListener("click",(()=>{n.querySelector(".navigation").classList.remove("open")})),n.querySelector(".login").addEventListener("click",(()=>{localStorage.removeItem("user"),window.location.hash="#login-page",window.addEventListener("hashchange",(()=>{}))}))}(s,e),function(e){const t=document.createElement("div");t.classList.add("footer-wrapper"),t.innerHTML='\n        <a href="https://www.linkedin.com/in/tatsiana-khatskevich-70a0021a4/" target="blank" class="footer-link">Created by Tatsiana Khatskevich</a>\n    ',e.prepend(t)}(a),window.addEventListener("hashchange",(()=>{f()?(window.location.hash="#login-page",h("#login-page")):h(window.location.hash)})),window.addEventListener("load",(()=>{if(f())window.location.hash="#login-page",h("#login-page");else{let e=window.location.hash;""===e&&(window.location.hash="#main-page"),h(e)}})),s.querySelectorAll("li a").forEach((e=>{e.addEventListener("click",(()=>{f()?h("#login-page"):h(e.getAttribute("href"))}))}))}))})();