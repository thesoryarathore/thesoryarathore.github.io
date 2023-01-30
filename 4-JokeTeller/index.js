const button = document.getElementById('button');
const audioElement = document.getElementById('audio')   

// Disabled / Enable button
function toggleButton(){
    button.disabled = !button.disabled;
}

//Passing jokes to VoiceRSS API 
function tellMe(joke){
    const jokeString = joke.trim().replace(/ /g, '%20');
    VoiceRSS.speech({
        key:'c7215ab6224340e4ad49e70b8c7bec8b',
        src: `"The joke is " ${jokeString}`,
        hl: 'en-us',
        v: 'Linda',
        r: 0, 
        c: 'mp3',
        f: '44khz_16bit_stereo',
        ssml: false
    });
}

// Get Jokes from Joke API
async function getJokes(){
    let joke = '';
    const jokeApiUrl = 'https://sv443.net/jokeapi/v2/joke/Programming?blacklistFlags=nsfw,religious,political,racist,sexist';
    try {
        const response = await fetch(jokeApiUrl);
        const data = await response.json();

        if(data.setup){
            joke = `${data.setup} ... ${data.delivery}`
        } else {
            joke = data.joke;
        }
        //Text-to-Speech
        tellMe(joke);
        console.log(joke);

        // Disable button
        toggleButton();
    } catch (error) {
        console.log('whoops! something went wrong', error)
    }
}

//Add Event Listerns
button.addEventListener('click', getJokes );
audioElement.addEventListener('ended', toggleButton);
