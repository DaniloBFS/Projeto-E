const form = document.querySelector('.contact_form');

function sendMsg(e){
    e.preventDefault();

const nome = document.querySelector('.nome'),
      email = document.querySelector('.email'),
      assunto = document.querySelector('.assunto'),
      message = document.querySelector('.message');

      Email.send({
        SecureToken : "4d772d0a-c30d-424d-b12f-47a76b66b70e",
        To : 'nocaminhodoexitoti@gmail.com',
        From : email.value,
        Subject : assunto.value,
        Body : message.value
        }).then(
        message => alert(message)
        );

    }

    form.addEventListener('submit', sendMsg);