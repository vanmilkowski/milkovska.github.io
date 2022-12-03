let btnSend = document.querySelector('button');
let message = document.querySelector('h1');

btnSend.addEventListener('click', () =>{
    btnSend.innerText = 'wysyłanie ...';

    setTimeout(()=>{
        btnSend.style.display = "none";
        message.innerText = 'Wiadomość wysłana';
    },5000);
});