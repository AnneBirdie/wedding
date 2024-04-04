document.getElementById('submit_reg').addEventListener('click', e => {
    e.preventDefault();
    
    let name = document.getElementById('name').value;
    let surname = document.getElementById('surname').value;
    let registred = document.getElementById('registred').value;

    let checkboxData = [...document.querySelectorAll('input[type="checkbox"]:checked')]
    .map(checkbox => checkbox.value);
    let alc = '';
    for (let check in checkboxData){
        alc += checkboxData[check] + ',';
    }

    let comment = document.getElementById('comment').value;

    let data = {
        name: name,
        surname: surname,
        registred: registred,
        checkboxData: alc,
        comment: comment
    }

    if(data.name !== "" && data.surname !== "" && data.registred !== "Выберите"){
        sendRegForm(data);
    }else{
        alert('Заполните поля "Имя", "Фамилия" и "Я приду/я не приду"');
    }

    document.getElementById('name').value  = '';
    document.getElementById('surname').value = '';
    document.getElementById("registred").selectedIndex = 0;
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox =>{
        checkbox.checked = false;
    });
    document.getElementById('comment').value = '';
});

async function sendRegForm(data) {
    const res = await fetch('./guestsFeedBack.php', {
        method: 'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify(data)
    });

    const responseJson = await res.json();
    

    if (responseJson){
        alert('Done!');
    }
}
