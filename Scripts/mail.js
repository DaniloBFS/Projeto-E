
const form = document.querySelector('.contact_form');

function sendMsg(e){
    e.preventDefault();

const nome = document.querySelector('.nome'),
      email = document.querySelector('.email'),
      assunto = document.querySelector('.assunto'),
      message = document.querySelector('.message');

      Email.send({
        SecureToken : "C973D7AD-F097-4B95-91F4-40ABC5567812",
        To : 'nocaminhodoexitoti@gmail.com',
        From : email.value,
        Subject : assunto.value,
        Body : message.value,
        Attachments : [
            {
                name : "smtpjs.png",
                path : "https://networkprogramming.files.wordpress.com/2017/11/smtpjs.png"
            }]
        }).then(
        message => alert(message)
        );

    }

    form.addEventListener('submit', sendMsg);