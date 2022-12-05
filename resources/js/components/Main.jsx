import React,{useState, useEffect} from 'react';
import ReactDOM from 'react-dom';
/* import Axios from 'axios';
import Button from './Button';
import Articles from './Articles'; */
import Header from './Header';


    // State to store the quote
    
  /*   const option = {
      method: 'GET',
      url: 'https://news-on-education.p.rapidapi.com/',
      headers: {
        'X-RapidAPI-Key': '7a344da9f5mshe2dffd98b2fd006p15a7c5jsn9dbe5cb9631d',
        'X-RapidAPI-Host': 'news-on-education.p.rapidapi.com'
      }
    }; */

     function App(){

      const [articles, setArticles] = useState("");

      useEffect(() => {
        const getArticles = async () => {
          const articlesFormServer = await fetchArticles() 
          setArticles(articlesFormServer)

        }

        getArticles();

      })

      //fetch articles 
      const fetchArticles = async () => {
        const res = await fetch('https://news-on-education.p.rapidapi.com/', {
          method: 'GET',
          headers: {
            'X-RapidAPI-Key': '7a344da9f5mshe2dffd98b2fd006p15a7c5jsn9dbe5cb9631d',
            'X-RapidAPI-Host': 'news-on-education.p.rapidapi.com'
          }
        })
        const data = await res.json()
        console.log(data)
        //return data
      }
      //fetch article
      


      return (

        <Header />
       /*  <div className="container tex-center mx-5">
            <button className="btn btn-primary" onClick={() => fetchArticles()}>Get Random Article</button>
            {articles}
        </div> */ )

    }



   /*  const Newsletter = () => {
      
      const [articles, setArticles] = useState("");


      useEffect(() => {
        Axios.request(option).then(function (response) {
          console.log(response.data);
          setArticles(response.data.setup);
        }).catch(function (error) {
          console.error(error);
        });
      }, []);

     return (
        <div className="container tex-center mx-5">
            <button className="btn btn-primary" onClick={() => Newsletter()}>Get Random Article</button>
            {articles}
        </div>
                          
    );
  }  */

  //In every click of the button access the title from json to display on screen

export default App;

if (document.getElementById('article')) {
    ReactDOM.render(<App />, document.getElementById('article'));
}
