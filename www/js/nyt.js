var apiData = {
  url: 'https://api.nytimes.com/svc/books/v3/lists/',
  time: 'current',
  type: 'hardcover-fiction.json',
  key: '?api-key=9wTOnKx7BYvzWTKLJNjYk5IyqoP0guRJ'
}

const {url, time, type, key} = apiData;
const apiUrl = `${url}${time}/${type}${key}`

fetch(apiUrl)
.then( (data) => data.json())
.then( (promise) => generateHtml(promise.results))

const generateHtml = (data) => {
  console.log(data)

  for(i = 0; i < data.books.length; i++)
  {
    var html = `
      <article class="book">
        <img class='image' src='${data.books[i].book_image}'>
        <figcaption class='author'>${data.books[i].author}</figcaption>
        <figcaption class='description'>${data.books[i].description}</figcaption>
        <figcaption><a class="amazon" href=${data.books[i].amazon_product_url}>Amazon</a></figcaption>
      </article>
      `
    const bookDiv = document.querySelector('.container-book');
    bookDiv.innerHTML += html
  }
  

  
}