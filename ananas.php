<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="css/style.css">
        <script src="opanki.js" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poiret+One&display=swap" rel="stylesheet">
</head>
<body>
   
    
        <div class="header">
            <a href="./main.html">Главная</a>
            <a href="./news.html">Новости</a>
            <a href="./trends.html">В тренде</a>
            <a href="./skoro.html">Что посмотреть?</a>
            <a href=""><ins>О нас</a>
        </div>
        <div class="trr">

            <div class="textnews">
                Информация о нас
            </div>

            <div class="textabout">
                Спасибо, что посетили Scenario. Наш сайт был создан в ходе<br>
                изучения курса по web-безопасности. Здесь вы можете<br>
                познакомиться с командой разработчиков.
            </div>
            
            <div class="aboutpic1">
                <img src="css/YSTU.png">
            </div>

            <div class="textpic1">
                Мы —  студенты 2-го курса <br>
                Ярославского Государственного <br>
                Технического Университета,<br>
                обучающиеся на направлении<br>
                «Информационная безопасность» <br>
            </div>

            <div class="pic2">
                <img src="css/Алексей.png">
            </div>

            <div class="textfam1">
                Бекетов 
            </div>

            <div class="textname1">
                Алексей Дмитриевич
            </div>

            <div class="kodalex1">
                <img src="css/QRALEX1.png">
            </div>

            <div class="kodalex2">
                <img src="css/QRALEX2.png">
            </div>

            <div class="textpochta1">
                leha.2003.27.09@mail.ru
            </div>

             <div class="pic3">
                <img src="css/Aleksandra.png">
            </div>

            <div class="textfam2">
                Постнова 
            </div>

             <div class="textname2">
                Александра Евгеньевна
            </div>

             <div class="kodsasha1">
                <img src="css/QRAleksandra.png">
            </div>

             <div class="kodsasha2">
                <img src="css/QRAleksandra2.png">
            </div>

            <div class="textpochta2">
                aleksandrapostnova264@gmail.com
            </div>

            <div class="pic4">
                <img src="css/Елизавета.png">
            </div>

            <div class="textfam3">
                Белавина 
            </div>

            <div class="textname3">
                Елизавета Андреевна
            </div>

            <div class="kodliza1">
                <img src="css/QRElizaveta.png">
            </div>

             <div class="kodliza2">
                <img src="css/QRElizaveta2.png">
            </div>

            <div class="textpochta3">
                blvnlza@yandex.ru
            </div>
             
            <div class="form">
    <div class="form-title">Введите капчу</div>
    <div class="captcha">
        <div class="preview"></div>
        <div class="captcha-form">
            <input type="text" id="captcha-form" placeholder="Введите текст капчи">
            <button class="captcha-refresh">
                <i class="fa fa-refresh"></i>
            </button>
            
        </div> 
          
        </div>
        <div class="form-input">
            <button id="enter-captcha" onclick="initcaptcha()">Ввести</button>


        </div> 
         
            </div>
                <div class="formsend">
<form enctype="multipart/form-data" method="post" id="form" onsubmit="submitForm(event)" action="send.php">
    <n id="abc" class="formsenda"</n>
    <p>Имя</p>
    <input placeholder="Укажите имя" name="name" type="text" >
    <p>Email</p>
    <input placeholder="Укажите почту" name="email" type="text" >
    <p>Сообщение</p>
    <textarea style="width: 650px; height: 100px;" name="text"></textarea>
    <p>Прикрепить файлы</p></boba>
    <input type="file" name="myfile[]" multiple id="myfile">

     <div class="formbutton">
    <p><input value="Отправить" id="cap"  type="submit" ></p>
    </div>
</form>
</div>



        </div>
                   
        <script>
        

        
        (function(){
            
    const fonts = ["cursive", "sans-serif", "serif", "monospace"];
    let captchaValue = "";

    function generateCaptcha(){
        let value = btoa(Math.random()*1000000000);
         value = value.substr(0,5+Math.random()*5);
        captchaValue = value;
    }
    function setCaptcha(){
        
        let html = captchaValue.split("").map((char)=>{
            const rotate = -20 + Math.trunc(Math.random()*30);
            const font = Math.trunc(Math.random()*fonts.length);
            return `<span
                style = "
                    transform: rotate(${rotate}deg);
                    font-family:${fonts[font]}
                    "
                >${char}</span>`;
        }).join("");
        document.querySelector(".form .captcha .preview").innerHTML = html;
    } 

    function initCaptcha(){
        document.querySelector(".form .captcha .captcha-refresh").addEventListener("click", function(){
            generateCaptcha();
            setCaptcha();
        });
        generateCaptcha();
        setCaptcha();
    }
    initCaptcha();
    
    
    
    document.querySelector(".form #enter-captcha").addEventListener("click",function(){
        let inputCaptchaValue=document.querySelector(".form .captcha input").value;
        if(inputCaptchaValue===captchaValue){
        
            event.preventDefault();
            alert("Молодец!"); 
             a=2;
             

            let search = document.getElementById('abc').className;
            let button = document.getElementsByTagName('n')[0];
            
            if (search == 'formsenda'){
                button.classList.add('formsendb');
                console.log('Первый шаг');
            } else{
                button.classList.remove('formsendb');
                console.log('Второй шаг');
            }
                    
        
        
             
        }
        
        if(inputCaptchaValue===""){
        
            event.preventDefault();
            alert("Введите капчу!"); 
             a=0;
        }
        
                if(inputCaptchaValue!=""){
                    if(inputCaptchaValue!=captchaValue){
            event.preventDefault();
            alert("Иди учи уроки, дебил!");
             a=1;
            window.location.href = "https://teams.microsoft.com/_?culture=ru-ru&country=RU&lm=deeplink&lmsrc=homePageWeb&cmpid=WebSignIn#/school/teams-grid/General?ctx=teamsGrid.";
            
          
        
        }
                }

        
          
        

        

    });
    

})();

  document.querySelector(".form #enter-captcha").addEventListener("click", function(){
})
                async function submitForm(event) {

              event.preventDefault(); // отключаем перезагрузку/перенаправление страницы
              try {
                  // Формируем запрос
                const response = await fetch(event.target.action, {
                    method: 'POST',
                    body: new FormData(event.target)
                });
                // проверяем, что ответ есть
                if (!response.ok) throw (`Ошибка при обращении к серверу: ${response.status}`);
                // проверяем, что ответ действительно JSON
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                  throw ('Ошибка обработки. Ответ не JSON');
                }
                // обрабатываем запрос
                const json = await response.json();
                if (json.result === "success") {
                    // в случае успеха
                    
                    alert(json.info);
                } else { 
                    // в случае ошибки
                    console.log(json);
                    throw (json.info);
                }
              } catch (error) { // обработка ошибки
                alert(error);
              }
              
            }

               

                
            
                
            

            function addLink() {
            var body_element = document.getElementsByTagName('body')[0];
            var selection;
            selection = window.getSelection();
            var pagelink = "<br /><br /> Источник: <a href='"+document.location.href+"'>http://blvnlzgi.beget.tech/main.html</a><br />";
            var copytext = selection + pagelink;
            var newdiv = document.createElement('div');
            newdiv.style.position='absolute';
            newdiv.style.left='-99999px';
            body_element.appendChild(newdiv);
            newdiv.innerHTML = copytext;
            selection.selectAllChildren(newdiv);
            window.setTimeout(function() {
            body_element.removeChild(newdiv);
            },0);
            }
            document.oncopy = addLink;


            
            

            </script>
            


</div>
</body>

</html>