(()=>{"use strict";const e=[{id:"main-page",title:"Главная"},{id:"login-page",title:"Войди/Зарегистрируйся"},{id:"studies-page",title:"Давай научу",image:"../../public/check-card-1.png"},{id:"test-capital-page",title:"Тест на столицы",image:"../../public/check-card-2.png"},{id:"test-flag-page",title:"Тест на флаги",image:"../../public/check-card-3.png"}],t=e=>e.sort((()=>Math.random()-.5)),n=class{constructor(e,t){this.container=document.createElement("div"),this.container.id=e,this.text=t}render(){document.querySelector("main").innerHTML="";const e=document.createElement("h1");e.classList.add("section-title");const t=document.querySelector("main");return e.textContent=`${this.text}`,this.container.append(e),t.append(this.container),this.container}};class s{constructor(e,t){this.item=e,this.container=t}render(e){const t=document.createElement("div");t.classList.add("check-card"),t.innerHTML=`\n            <div class="card-image">\n                <img src="${this.item.image}" alt="points">\n            </div>\n            <div class="card-info">\n                <h2 class="card-title">${this.item.title}</h2>\n                <a class="card-button" href="#${this.item.id}">Перейти</a>\n            </div>\n        `,this.container.append(t)}}const a=class extends n{constructor(){super("main-page","Главная страница")}showCards(e,t){(t=(t=t).filter((e=>"login-page"!==e.id&&"main-page"!==e.id))).forEach((t=>{new s(t,e).render()})),this.container.append(e)}},i=async function(e){let t=await fetch(e);if(!t.ok)throw new Error(`Could not fetch ${e}, status: ${t.status}`);return await t.json()};class c{constructor(e,t){this.shortName=e}getData(){i("https://it-academy-project-fe695-default-rtdb.firebaseio.com/coutries.json").then((e=>this.render(e)))}render(e,t){if(document.querySelector(".studies-wrapper")){this.container=document.querySelector(".studies-wrapper");const t=document.createElement("div");t.classList.add("card");const n=document.createElement("div");n.classList.add("front"),n.innerHTML=`\n                <h2 class="title">${e[this.shortName].title}</h2>\n                <div class="photo">\n                    <img src="https://www.countryflags.io/${this.shortName}/shiny/64.png">\n                </div>\n            `;const s=document.createElement("div");s.classList.add("back"),s.innerHTML=`\n                <h3 class="title">Столица - ${e[this.shortName].capital}</h3>\n                <p class="photo">${e[this.shortName].descr}</p>\n                <p class="photo">Государственная валюта - ${e[this.shortName].currency}</p>\n            `,t.append(n),t.append(s),this.container.append(t)}}}const r=class extends n{constructor(){super("studies-page","Давай учиться вместе!")}showCards(e){e&&(["be","au","cn","cr","ge","gr","hr","jm","me","no"].forEach((e=>{new c(e).getData()})),this.container.append(e))}},d=function(e){return function(){return++e}};class o{constructor(e){this.container=e}getData(){i("https://it-academy-project-fe695-default-rtdb.firebaseio.com/coutries.json").then((e=>this.createArray(e)))}createArray(e){let n=Object.values(e),s=t(n);this.createEntry(s)}createEntry(e){const t=document.createElement("h2");t.textContent='Нажимай "Старт" и покажи, на что ты способен!';const n=document.createElement("button");n.textContent="Старт",n.addEventListener("click",(()=>{this.render(e)})),this.container.append(t),this.container.append(n)}render(e){this.container.innerHTML="";const t=document.createElement("div");t.classList.add("test-inner");const n=document.createElement("div");n.classList.add("test-results"),this.renderNextTest(e,e[0],t,n),this.createNextTest(e,t,n)}createNextTest(e,t,n){console.log(this.container);const s=document.createElement("button");s.classList.add("button-next"),s.textContent="Следующий вопрос";const a=document.createElement("div");a.classList.add("test-points");let i=d(0);s.disabled=!0,s.addEventListener("click",(()=>{let c=e[i()];c?(s.disabled=!0,this.renderNextTest(e,c,t,n)):this.showResults(t,a,s)})),n.append(a),n.append(s),this.container.append(n),this.container.append(t)}showResults(e,t,n){n.textContent="Смотреть результат",n.addEventListener("click",(()=>{e.innerHTML="",n.disabled=!0;const s=document.createElement("div");s.classList.add("total-results");let a=d(0);const i=t.querySelectorAll("span");console.log(i),i.forEach((e=>{if(console.log(e),e.classList.contains("point_yes")){let e=a();e<4?s.innerHTML=`\n                            <div class="total-inner">\n                                <span class="true-answers">Такс, верных ответов у тебя <br> ${e} из ${i.length}</span>\n                                <div class="total-answer" >Ты что? Совсем не проходил обучение? Кликай "Пройти обучение" и возвращайся</div>\n                                <a class="total-link" href="#studies-page">Пройти обучение</a> \n                            </div>     \n                        `:e>=4&&e<8?s.innerHTML=`\n                            <div class="total-inner">\n                                <span class="true-answers">Такс, верных ответов у тебя <br> ${e} из ${i.length}</span>\n                                <div class="total-answer">Неплохо! Видно, что ты не новичок. Кликай "Пройти обучение" и возвращайся за ${i.length} из ${i.length}</div>\n                                <a class='total-link' href="#studies-page">Пройти обучение</a> \n                            </div>\n                        `:e>=8&&(s.innerHTML=`\n                            <div class="total-inner">\n                                <span class="true-answers">Такс, верных ответов у тебя <br> ${e} из ${i.length}</span>\n                                <div class="total-answer">Вот это поворот!!! Поздравляю!</div>\n                                <a class='total-link' href="#main-page">Главная страница</a> \n                            </div>\n                        `)}else s.innerHTML=`\n                        <div class="total-inner">\n                            <span class="true-answers">Такс, верных ответов у тебя <br> 0 из ${i.length}</span>\n                            <div class="total-answer" >Ты серьезно? Кликай скорее "Пройти обучение" и возвращайся</div>\n                            <a class="total-link" href="#studies-page">Пройти обучение</a> \n                        </div>     \n                    `})),e.append(s)}))}findEvents(e,t){e.addEventListener("click",(n=>{const s=e.querySelectorAll(".button-answer"),a=t.querySelector(".test-points"),i=t.querySelector(".button-next");n.target&&n.target.classList.contains("button-answer")&&("yes"===n.target.getAttribute("data-answer")?(i.disabled=!1,n.target.textContent="Правильно!",a.innerHTML+='<span class="point_yes"></span>',s.forEach((e=>{e.disabled="true"})),new Audio("./../public/true-answer.mp3").play()):(i.disabled=!1,n.target.textContent="ОЙ! Ошибочка!",a.innerHTML+='<span class="point_no"></span>',s.forEach((e=>{e.disabled="true"})),window.navigator.vibrate(1e3),new Audio("./../public/wrong-answer.mp3").play()))}),{once:!0})}renderNextTest(e,n,s,a){s.innerHTML=" ";const i=document.createElement("div");i.classList.add("test-answers");const c=document.createElement("div");c.classList.add("test-header");let r=[];e.forEach((e=>{r.push(e.capital)}));let d=t(r),o=[];o.push(n.capital),d.forEach((e=>{if(!(o.length<4))return o;e!==n.capital&&o.push(e)}));const l=t(o).map((e=>e===n.capital?`<button class="button-answer" data-answer="yes">${e}</button>`:`<button class="button-answer" data-answer="no">${e}</button>`)),p=document.createElement("div");p.classList.add("test-buttons"),p.innerHTML=`${l.join("")}`,c.innerHTML=`\n            <div class="test-number">Вопрос номер</div>\n            <h2 class="test-question">Отметьте правильно столицу следующего государства/страны: <dr><span>${n.title}</span></h2>\n            <div class="test-photo"><img src="../../public/${n.image}.jpg" alt="capital"></div> \n            `,i.innerHTML=`\n            <div class="test-variants">Варианты ответов</div> \n            <div class="test-buttons">${l.join("")}</div>  \n        `,s.append(c),s.append(i),this.container.append(s),this.findEvents(i,a)}}const l=class extends n{constructor(){super("test-capital-page","")}showTests(){const e=document.createElement("div");e.classList.add("test-wrapper"),new o(e).getData(),this.container.append(e)}},p=class extends n{constructor(){super("test-flag-page","Тест на флаги")}},u=class extends n{constructor(){super("login-page","Войди/Зарегистрируйся")}},h=class extends n{constructor(){super("404-page","Ошибочка вышла 404")}};window.addEventListener("DOMContentLoaded",(function(){const t=document.querySelector("body"),n=document.createElement("div");n.classList.add("main-container");const s=document.createElement("header");s.classList.add("header");const i=document.createElement("main"),c=document.createElement("div");c.classList.add("studies-wrapper");const d=document.createElement("div");function o(t="login-page"){if("studies-page"===t.slice(1)){c.innerHTML="";const e=new r;e.render(),e.showCards(c)}else if("test-capital-page"===t.slice(1)){const e=new l;e.render(),e.showTests()}else if("test-flag-page"===t.slice(1))(new p).render();else if("main-page"===t.slice(1)){d.innerHTML="";const t=new a;t.render(),t.showCards(d,e)}else""===t.slice(1)?(new u).render():(new h).render()}d.classList.add("main-wrapper"),t.append(s),t.append(n),n.append(i),o(),function(e,t){t=t.filter((e=>"login-page"!==e.id));const n=document.createElement("div");n.classList.add("header-wrapper");const s=t.map((e=>`\n        <li><a class='${e.id}' href="#${e.id}">${e.title}</a> </li>\n        `)).join(" ");n.innerHTML=`\n        <div class="burger">\n            <div class="burger-inner">\n                <img src="../../public/points.svg" alt="points">\n            </div>\n        </div>\n        <div class="logo">GEOGRAPHY OF THE WORLD</div>\n        <div class="navigation">\n            <ul class="menu">\n                ${s}\n            </ul>\n        </div>\n        <div class="login">\n            <img src="../../public/login.svg" alt="login">\n        </div>\n    `,e.append(n)}(s,e),window.addEventListener("hashchange",(()=>{o(window.location.hash)})),window.addEventListener("load",(()=>{o(window.location.hash)})),s.querySelectorAll("li a").forEach((e=>{e.addEventListener("click",(()=>{o(e.getAttribute("href"))}))}))}))})();