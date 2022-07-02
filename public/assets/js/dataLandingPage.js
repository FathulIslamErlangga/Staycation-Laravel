function landingPage(){
    // console.log('http://127.0.0.1:8000/api/data1')
    fetch('http://staycation.infinityfreeapp.com/')
    .then(response => response.json())
    .then(response => {
        console.log(response.category[0])
        const data = response.category;
        let cardData = '';
        data.forEach(responseData => cardData += showData(responseData));
        const content = document.querySelector('.content');
        content.innerHTML = cardData;
    })

    function showData(responseData){
        return `
            <h4 class='text-center'>${responseData.name}</h4>
            <div class="data">
                <h2>${responseData.items[0].name}</h2>
                <img src="storage/${responseData.items[0].gallery[0].image}" alt="">
                <h2>${responseData.items[1].name}</h2>
                <img src="storage/${responseData.items[1].gallery[0].image}" alt="">
                <h2>${responseData.items[2].name}</h2>
                <img src="storage/${responseData.items[2].gallery[0].image}" alt="">
                <h2>${responseData.items[3].name}</h2>
                <img src="storage/${responseData.items[3].gallery[0].image}" alt="">
            
            </div>
        `
    }
}
landingPage()