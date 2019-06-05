let moveRight = 0;
let moveLeft = 0;
setInterval(function() {
    moveRight+=1;
    moveLeft-=1;
    document.getElementById('comedy').style.backgroundPosition = moveRight + 'px';
    document.getElementById('adventure').style.backgroundPosition = moveLeft + 'px';
    document.getElementById('animation').style.backgroundPosition = moveRight + 'px';
    document.getElementById('crime').style.backgroundPosition = moveLeft + 'px';
}, 40)

let baseURL = 'https://api.themoviedb.org/3/';
let imageBaseURL = 'https://image.tmdb.org/t/p/w300';
let apiKey = 'api_key=0f83a7ece2b8d927ef50f01fc2286ed1';
let movieURL = 'https://www.themoviedb.org/movie/';

const searchBtn = document.getElementById('search-btn');
const search = document.getElementById('searchText');
const tip = document.getElementById('tip');

let i = 0;
let message = "Search for a movie...";
let speed = 100;

searchBtn.addEventListener('click', () => {
    search.style.width = '80%';
    search.style.paddingLeft = '60px';
    search.style.cursor = 'text';
    search.focus();

    typeWriter();
})

function typeWriter() {
    if (i < message.length) {
        msg = search.getAttribute('placeholder') + message.charAt(i);
        search.setAttribute('placeholder', msg);
        i++;
        setTimeout(typeWriter, speed);
    }
}

search.addEventListener('keydown', () => {
    tip.style.visibility = 'visible';
    tip.style.opacity = 1;
})

document.getElementById('searchText').addEventListener('keypress', function(e) {
    let key = e.keyCode;

    if (key === 13) {
        let searchText = document.getElementById('searchText').value;
        document.getElementById('container').style.display = 'flex';
        getMovies(searchText);
        document.getElementById('movie-container').style.display = 'none';
        
        e.preventDefault();
    }
});

function getMovies(searchText) {
    document.getElementById('container').innerHTML = '';
    let markup;
    let node;
    let youtube_ids = [];
    let youtube_key;

    fetch('https://api.themoviedb.org/3/search/movie?api_key=0f83a7ece2b8d927ef50f01fc2286ed1&query=' + searchText)
        .then((result) => {
            return result.json();
        })
        .then((data) => {
            data.results = data.results.filter(function(movie) {
                return movie.original_language === "en" && movie.vote_average !== 0;
            })
            
            data.results.sort((a, b) => (a.release_date < b.release_date) ? 1 : -1);

            markup = `
                <h1>${data.results.length} results found!</h1>
            `;

            if (document.querySelectorAll('.search-results-count').length > 0) {
                let element = document.querySelectorAll('.search-results-count');
                Array.prototype.forEach.call( element, function( node ) {
                    node.parentNode.removeChild( node );
                });
            }
            node = document.createElement('div');
            node.classList.add('search-results-count');
            node.innerHTML = markup;
            document.getElementById('search_bar').appendChild(node);
            document.getElementById('search_bar').style.paddingBottom = '0';

            for(let i = 0; i < data.results.length; i++) {
                if(data.results[i].poster_path !== null) {
                    let overview = `${data.results[i].overview}`; //replace with your string.
                    let maxLength = 400 // maximum number of characters to extract
                    // let maxLength = 469 // maximum number of characters to extract
                    if(overview.length > maxLength) {
                        
                        let trimmedOverview = overview.substr(0, maxLength); //trim the string to the maximum length

                        //re-trim if we are in the middle of a word
                        trimmedOverview = trimmedOverview.substr(0, Math.min(trimmedOverview.length, trimmedOverview.lastIndexOf(".")))
                        trimmedOverview += '.';
                    } else {
                        trimmedOverview = overview;
                    }

                    youtube_ids.push(data.results[i].id);
                    
                    markup = `
                        <div class="img-box">
                            <img src=${imageBaseURL + data.results[i].poster_path} alt="">
                        </div>
                        <div class="content" id="button-${i}">
                            <h2>${data.results[i].title}<br><span>Rating ${data.results[i].vote_average}</span></h2>
                            <h2>Overview</h2>
                            <p>${trimmedOverview}</p>
                            <div class="buttons" id="button-${i}">
                                <a target="_blank" href=${movieURL + data.results[i].id}>
                                    <button class="details-button">Details</button>
                                </a>
                            </div>
                        </div>
                    `;
                    node = document.createElement('div');
                    node.classList.add('card');
                    node.innerHTML = markup;
                    document.getElementById('container').appendChild(node);
                }
            }

            let content = document.querySelectorAll('.content');

            for(let j = 0; j < content.length; j++) {
                fetch(`https://api.themoviedb.org/3/movie/${youtube_ids[j]}/videos?api_key=0f83a7ece2b8d927ef50f01fc2286ed1&language=en-US`)
                .then((result) => {
                    return result.json();
                })
                .then((data) => {
                    
                    youtube_key = data.results[0].key;

                    markup = `
                        <button class="trailer-button">Trailer</button>
                    `;
                    node = document.createElement('a');
                    node.target="_blank";
                    node.href=`https://www.youtube.com/embed/${youtube_key}?autoplay=1&origin=https%3A%2F%2Fwww.themoviedb.org&hl=en&modestbranding=1&fs=1&autohide=1`;
                    node.innerHTML = markup;
                    document.getElementById(`button-${j}`).appendChild(node);
                });
            }
        })            
}