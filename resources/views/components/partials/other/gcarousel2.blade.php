
    <div class="container-fluid p-0" style="position:relative; width:100%;">
        <div style="position: absolute; left: -100px; top: --2px; right:-16px; buttom:0px z-index:1;" class="d-none d-sm-block">
            <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/foto-gratis/blur-cafe-cafeteria-restaurante-bokeh-fondo_1421-472.jpg?w=740&t=st=1673736073~exp=1673736673~hmac=213b553fd13c5cc3a9f0058410b5449ed5793fed6df0431a0ad42c5744ac4254" class="d-block w-100 " alt="..."height="650vmax">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/foto-gratis/camion-alimentos_1339-3329.jpg?w=740&t=st=1673732970~exp=1673733570~hmac=2ae30470c77cc0a5f85524dfcb76a080d750f03ad4fc23eb20941a5cacf4ff09" class="d-block w-100" alt="..." height="650vmax">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/foto-gratis/resumen-desenfoque-defocused-restaurante-cafeteria-interior-cafe_1203-9267.jpg?w=740&t=st=1673752959~exp=1673753559~hmac=6b93bf7d33dcb64556d459a82d9deb3cd4ceb807dedf25b5f59fc45748a563fe" class="d-block w-100" alt="..." height="650vmax">
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute; left: 1px;right:1px; top:5%; buttom:10%; z-index:2;" class="text-center  ">
            <div class="row m-1 justify-content-center">
                <div class="d-none d-sm-block col-sm-2 col-lg-3 col-xl-4"></div>
                <div class="col-12 col-sm-7 col-lg-6 col-xl-4 p-3 align-items-center" style="background-color: rgba(0, 0, 0, 0.76)">
                    <h3 class="text-light text-center">{{$title2}}</h3>

                    {{$slot}}
                    <br>
                </div>
                <div class="d-none d-sm-block col-sm-2 col-lg-3 col-xl-4"></div>
            </div>
        </div>
        <div style="position: absolute; left: 1px;right:100px; top:30px; z-indice:3;" class="d-none d-md-block">
            <h1>{{$page}}</h1>
        </div>
    </div>
    <br>
