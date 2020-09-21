var apiUrl = "https://pokeapi.co/api/v2/pokemon/";

fetch(apiUrl)
.then( (data) => data.json())
.then( (data) => generateName(data));

const generateName = (data) => {
    // console.log(data)

    const divPokemon = document.querySelector(".pokemons");
    var nextUrl = data.next;

    fetch(nextUrl)
    .then( (data) => data.json())
    .then( (data) => generateName(data));

    for(i = 0; i < data.results.length; i++)
    {
        var pokemonUrl = data.results[i].url;

        fetch(pokemonUrl).then( (data) => data.json()).then( (data) => generateImage(data))
    }
}

const generateImage = (data) => {
    var divPokemon = document.querySelector(".pokemons");
    var html = `
        <article class="pokemon">
            <p class="name">${data.forms[0].name}</p>
            <img src="${data.sprites.back_default}">
            <img src="${data.sprites.front_default}">
            <img src="${data.sprites.back_shiny}">
            <img src="${data.sprites.front_shiny}">
            <p class="size">Height: ${data.height} / Weight: ${data.weight}</p>
        </article>
    `
    divPokemon.innerHTML += html;
}