document.getElementById('wish_button').addEventListener('click', e => {
    e.preventDefault();

    let c_wish = document.getElementById('comment_wish').value;
    let n_wish = document.getElementById('comment_wish').value;

    const data = {
        comment_wish: document.getElementById('comment_wish').value,
        name_wish: document.getElementById('name_wish').value
    }

    sendWishForm(data);
    document.getElementById('comment_wish').value = '';
    document.getElementById('name_wish').value = '';
});

async function sendWishForm(data) {
    const res = await fetch('./wishesFeedBack.php', {
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

    /*if (responseJson.status === 201) {
        alert('Done!');
    }else{
        alert('Oops! Something went wrong');
        console.log(data);
    }*/
}