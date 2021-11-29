//////////Banner Area
var BaseURL = "http://192.168.1.37/EComDemo/Backend/Services/";


function getAllImages(){

    axios({
        method: 'get',
        url: BaseURL + "getbannerImages.php"
        
        })
.then(res =>{
    var data = res.data;
    
    for(let i = 0; i<data.output.images.length; i++){
        console.log(data.output.images[i].banner_name);
    }

    document.getElementById("banner").innerHTML = `<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item ">
        <img  style="height: 500px; width:"100%" src="${data.output.images[0].banner_name}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>${data.output.images[0].name}</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
    </div>
    <div class="carousel-item active">
        <img  style="height: 500px;" src="${data.output.images[1].banner_name}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>${data.output.images[1].name}</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
    </div>
    <div class="carousel-item">
        <img style="height: 500px;" src="${data.output.images[2].banner_name}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>${data.output.images[2].name}</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
    </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
    </div>`

    
    
}, err=>{
    console.log(err)
});
}

window.onload = getAllImages();