liked = url = ("images/like.png");
unliked = url = ("images/likee.png")

unlikedp = url = ("images/heartp.png");
likedp = url = ("images/cuoreviola.png");

pic = url= ("images/defaultpropic.jpg")
obj = {
    'Kamisato-Ayaka': "ayaka",
    'Raiden-Shogun': "raiden",
    'Kujou-Sara': "sara",
    'Sangonomiya-Kokomi': "kokomi",
    'Traveler': "traveler-anemo",
    'Kaedehara-Kazuha': "kazuha"
};




function onResponse(response) {
    if (!response.ok) {
        return null;
    }
    else
        return response.json();

}




function deleteCharacter(event) {

    event.currentTarget.parentNode.parentNode.remove();


    const card = event.currentTarget.parentNode;
    const formData = new FormData();

    formData.append('name', card.dataset.name);
    formData.append('vision', card.dataset.vision);
    formData.append('nation', card.dataset.nation);
    formData.append('birthday', card.dataset.birthday);
    formData.append('affiliation', card.dataset.affiliation);
    formData.append('description', card.dataset.description);
    formData.append('weapon', card.dataset.weapon);
    formData.append('card', card.parentNode.dataset.card);
    formData.append('_token', CSRF_TOKEN);

    fetch(DELETE_CHAR + 'characters/delete', { method: 'POST', body: formData }).then(dispatchResponse, dispatchError);



    event.stopPropagation();
}

function dispatchResponse(response) {



    return (response.json()).then(databaseResponse);
}

function dispatchError(error) {
    console.log("Errore");
}

function databaseResponse(json) {
    if (!json.ok) {

        dispatchError();
        return null;
    }
}


function deleteStream(event) {



    event.currentTarget.parentNode.remove();

    const card = event.currentTarget.parentNode;

    const formData = new FormData();
    formData.append('thumbnail_url', card.dataset.thumbnail_url);
    formData.append('user_login', card.dataset.user_login);
    formData.append('user_name', card.dataset.user_name);
    formData.append('language', card.dataset.language);
    formData.append('_token', CSRF_TOKEN);
    fetch(DELETE_STREAM + 'twitch/delete', { method: 'POST', body: formData }).then(dispatchResponse, dispatchError);
    event.stopPropagation();
}

function onJsonStreams(json) {

    const previous = document.querySelector('#preferences');
    previous.innerHTML = '';

    const container = document.querySelector('#results');



    if (json.length === 0) {
        const noresults = document.createElement('h1');
        noresults.classList.add('error');
        noresults.textContent = ("You don't have any preferences yet");
        container.appendChild(noresults);
        return;

    }

    for (let res in json) {

        const elem = document.createElement('div');


        elem.dataset.thumbnail_url = json[res].thumbnail_url;
        elem.dataset.user_login = json[res].user_login;
        elem.dataset.user_name = json[res].user_name;
        elem.dataset.language = json[res].language;

        const thumbnail_url = document.createElement('img');
        thumbnail_url.src = elem.dataset.thumbnail_url

        const user_login = document.createElement('h1');
        user_login.textContent = elem.dataset.user_login;

        const user_name = document.createElement('h2');
        user_name.textContent = "User name: " + elem.dataset.user_name;

        const language = document.createElement('span');
        language.textContent = "Language: " + elem.dataset.language;


        const save = document.createElement('img');
        save.src = likedp;
        save.classList.add("save")
        elem.appendChild(save);
        save.addEventListener('click', deleteStream);


        elem.appendChild(user_login);
        elem.appendChild(thumbnail_url);
        elem.appendChild(user_name);
        elem.appendChild(language);
        container.appendChild(elem);

    }


}
function loadStreams(event) {
    event.preventDefault();

    document.querySelector('#chars').classList.remove('chosen');
    document.querySelector('#streams').classList.add('chosen');
    document.querySelector('#streams').removeEventListener('click', loadStreams);
    document.querySelector('#chars').addEventListener('click', loadPreferences);

    fetch(FAV_STREAM + 'twitch/fav').then(onResponse).then(onJsonStreams);


}



function saveModify() {
    const card = document.createElement('img')
    card.setAttribute('id', 'propic');
    const tipo = document.querySelector('#tipo').value;
    card.dataset.propic = tipo;


    return card.dataset.propic;
}

function saveChanges(event) {

    document.querySelector('#modify').removeEventListener('click', close)


    const elem = document.querySelector('#modifyProfile');
    elem.classList.add('hidden');

    const result = saveModify();


    const card = document.querySelector('#propic');




    const formData = new FormData();
    formData.append('propic', result);
    formData.append('_token', CSRF_TOKEN);

    fetch(SAVE_URL + 'profile/save', { method: 'POST', body: formData }).then(dispatchResponse, dispatchError);

    card.src = "https://api.genshin.dev/characters/" + result + '/card';






}
function close(event) {
    event.currentTarget.addEventListener('click', modify)
    event.currentTarget.removeEventListener('click', close)

    const elem = document.querySelector('#modifyProfile');

    elem.classList.add('hidden');
}

function modify(event) {
    event.preventDefault();
    event.currentTarget.addEventListener('click', close)
    const elem = document.querySelector('#modifyProfile');

    elem.classList.remove('hidden');
    const element = document.querySelector('#savechanges');
    element.addEventListener('click', saveChanges);




}
function onJsonCharacters(json) {



    const previous = document.querySelector('#results');

    previous.innerHTML = '';

    const container = document.querySelector('#preferences');
    if (json.length === 0) {

        const noresults = document.createElement('h1');
        noresults.classList.add('error');
        noresults.textContent = ("You don't have any preferences yet");
        container.appendChild(noresults);
        return;

    }


    for (let res in json) {

        const result = document.createElement('div');


        result.dataset.name = ((json[res].name).split(" ")).join("-");
        result.dataset.nation = json[res].nation;
        result.dataset.birthday = json[res].birthday;
        result.dataset.vision = json[res].vision;
        result.dataset.affiliation = json[res].affiliation;
        result.dataset.description = json[res].description
        result.dataset.weapon = json[res].weapon;
        let nsplit = json[res].name




        const big = document.createElement('section');



        const card = document.createElement('img');
        card.src = "https://api.genshin.dev/characters/" + result.dataset.name.toLowerCase() + '/card';

        big.dataset.card = card.src;
        big.appendChild(card);

        const name = document.createElement('h1');
        name.textContent = (result.dataset.name).split("-").join(" ");
        result.appendChild(name);

        const vision = document.createElement('h3');
        vision.textContent = 'Vision: ' + result.dataset.vision;
        result.appendChild(vision);

        const nation = document.createElement('span');
        nation.textContent = 'Nation: ' + result.dataset.nation;
        result.appendChild(nation);

        const birthday = document.createElement('span');
        birthday.textContent = 'Birthday: ' + result.dataset.birthday;
        result.appendChild(birthday);

        const affiliation = document.createElement('span');
        affiliation.textContent = 'Affiliation: ' + result.dataset.affiliation;
        result.appendChild(affiliation);

        const desription = document.createElement('span');
        desription.textContent = 'Description: ' + result.dataset.description;
        result.appendChild(desription);

        const weapon = document.createElement('span');
        weapon.textContent = 'Weapon: ' + result.dataset.weapon;
        result.appendChild(weapon);

        const save = document.createElement('img');
        save.src = liked;
        save.classList.add("save");
        result.appendChild(save);
        save.addEventListener('click', deleteCharacter)


        big.appendChild(result);
        container.appendChild(big);


    }

}
function loadPreferences() {
    document.querySelector('#streams').classList.remove('chosen');
    document.querySelector('#chars').classList.add('chosen');
    document.querySelector('#streams').addEventListener('click', loadStreams);
    document.querySelector('#chars').removeEventListener('click', loadPreferences);

    fetch(FAV_CHAR + 'characters/fav').then(onResponse).then(onJsonCharacters);
}

function onJsonProfile(json) {
console.log(json)

    if ('ok' in json) {
       
        const propic = document.querySelector("#propic");
        propic.src = pic;
    }

    else {
        const propic = document.querySelector("#propic");
        propic.src = "https://api.genshin.dev/characters/" + json.propic + '/card';

    }

}

function loadProfile() {
    fetch(PROFILE_URL + 'profile/load').then(onResponse).then(onJsonProfile);

}


loadProfile();
loadPreferences();



document.querySelector('#modify').addEventListener('click', modify)

document.querySelector('#streams').addEventListener('click', loadStreams);

document.querySelector('#chars').addEventListener('click', loadPreferences);

