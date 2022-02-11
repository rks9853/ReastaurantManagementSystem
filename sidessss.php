<!doctype html>
<html>
    <head>

</head>
<style>
    
.slideshow{
    background:   linear-gradient(
        rgba(35, 43, 56, 0.9),
        rgba(35, 43, 56, 0.9)
    ), url(./images/food-table.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    height: 700px;
    margin:0 auto;
    padding-top:50px;
    box-sizing:border-box;
}

.section-heading{
    font-family: "Raleway-bold";
    color: rgb(247,241,241);
    font-size: 2rem;
    text-align: center;
    position: relative;
    margin-bottom: 6rem;
 
}
.section-heading:after{
    content:'';
    display: block;
    width:100%;
    height: 10px;
    background-image: url(./icons/hr.svg);
    background-repeat: no-repeat;
    background-position: center;
    position: relative;
    bottom: -40px;
}

.content{
    margin:auto;
    width:190px;
    perspective: 1000px;
    position: relative;
    padding-top: 80px;
}
.content-carrousel{
    width:100%;
    position: absolute;
    float: right;
    animation: rotate 15s infinite linear;
    transform-style: preserve-3d;
}
.content-carrousel:hover{
    animation-play-state: paused;
    cursor: pointer;
}
.content-carrousel figure{
    width:100%;
    height: 120px;
    border:1px solid #4d4d4d;
    overflow: hidden;
    position: absolute;

}
.content-carrousel figure:nth-child(1){
    transform:rotateY(0deg) translateZ(300px);
}
.content-carrousel figure:nth-child(2){
    transform:rotateY(40deg) translateZ(300px);
}
.content-carrousel figure:nth-child(3){
    transform:rotateY(80deg) translateZ(300px);
}
.content-carrousel figure:nth-child(4){
    transform:rotateY(120deg) translateZ(300px);
}
.content-carrousel figure:nth-child(5){
    transform:rotateY(160deg) translateZ(300px);
}
.content-carrousel figure:nth-child(6){
    transform:rotateY(200deg) translateZ(300px);
}
.content-carrousel figure:nth-child(7){
    transform:rotateY(240deg) translateZ(300px);
}
.content-carrousel figure:nth-child(8){
    transform:rotateY(280deg) translateZ(300px);
}
.content-carrousel figure:nth-child(9){
    transform:rotateY(320deg) translateZ(300px);
}
.shadow{
    position:absolute;
    box-shadow:0px 0px 20px 0px #000;
    border-radius:2px;
}
.content-carrousel img{
    image-rendering:auto;
    transition:all 300ms;
    width:100%;
    height:100%;
}
.content-carrousel img:hover{
    transform:scale(1.2);
    transition:all 300ms;
}


@keyframes rotate {
  from{
    transform: rotateY(0deg);
  }
  to{
      transform: rotateY(360deg);
  }
}
    </style>

<body>
<section class="slideshow">
                        <div class="content">
                            <h1 class="section-heading">Top products</h1>
                            <div class="content-carrousel">
                                <figure class="shadow"><img src="./images/chicken lollipop.jpeg"></figure>
                                <figure class="shadow"><img src="./images/allo kobi bhaja.jpeg"></figure>
                                <figure class="shadow"><img src="./images/jeera rice.jpeg"></figure>
                                <figure class="shadow"><img src="./images/egg biriyani.jpeg"></figure>
                                <figure class="shadow"> <img src="./images/suji kekera.jpeg"></figure>
                                <figure class="shadow"> <img src="./images/suji kekera.jpeg"></figure>
                                <figure class="shadow"> <img src="./images/suji kekera.jpeg"></figure>
                                <figure class="shadow"><img src="./images/suji kekera.jpeg"></figure>
                                <figure class="shadow"><img src="./images/suji kekera.jpeg"></figure>
                            </div>
                            </div>
                          </section>

</body>
    </html>