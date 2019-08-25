let nickname = document.querySelector("#user");
let message = document.querySelector("#msg");
let form = document.querySelector("#form");
let lbChat = document.querySelector("#lbChat");
let divChat = document.querySelector("#divChat");

form.addEventListener("submit", function (event) {
    event.preventDefault();

    let mensagem = {
        nick: nickname.textContent,
        msg: msg.value
    };

    jQuery.ajax({
        type: "POST",
        url: "sendMessage.php",
        data: mensagem,
        success: function (mensagem) {

        }
    });
    document.getElementById("msg").value = "";
});

function refreshChat() {
    jQuery.ajax({
        url: "getMessage.php",
        success: function (mensagem) {
            mensagem = jQuery.parseJSON(mensagem);

            let item = document.createElement("table");
            item.setAttribute("id", "tbChat");
            tbChat = document.getElementById("tbChat");

            mensagem.forEach(msg => {
                item.innerHTML += '<tr><td><span>' + msg.nick + ': </span><span>' + msg.msg + '</span></td></tr>';
            });

            lbChat.removeChild(tbChat);
            lbChat.appendChild(item);
        }
    });
    setTimeout(refreshChat, 500);
};

window.onload = function () {
    refreshChat();
};