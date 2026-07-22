
    <style>
        .card button {
            font-size: 0.7rem;
        }
        
        .card{
            transition: all 0.5s;
        }
        .card:hover{
            margin-top: -10px;
            border: 1px solid red;
            background-color: whitesmoke;
        }
        .card i{
            color: rgb(188, 5, 5);
        }
        .aa{
            text-decoration:none;
        }
    </style>
 <?php include "nav.php"; ?>
    <div class="d-flex flex-column align-items-center" >
        <h1><b>Popular Cities</b></h1>
        <p>Find blood donors in major cities across India</p>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row row-gap-3">
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Delhi</strong>
                        <span>Delhi</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">6 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Bengaluru</strong>
                        <span>karnataka</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">5 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Hyderabad</strong>
                        <span>Telangana</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">5 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Coimbatore</strong>
                        <span>Tamil Nadu</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">4 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Chennai</strong>
                        <span>Tamil Nadu</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">4 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>New Delhi</strong>
                        <span>Delhi</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">3 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Villupuram</strong>
                        <span>Tamil Nadu</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">6 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Lucknow</strong>
                        <span>Uttar Pradesh</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">6 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Malur</strong>
                        <span>Karnataka</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">6 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>ATTILI</strong>
                        <span>Andhra Pradesh</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">6 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Hshs</strong>
                        <span>Assam</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">6 donors</button>
                    </div> 
                </a>  
            </div>
            <div class="col-2">
                <a href="" class="aa">
                    <div class="card  rounded d-flex flex-column align-items-center gap-2 p-3">
                        <i class="bi bi-building fs-2"></i>
                        <strong>Dausa</strong>
                        <span>Rajasthan</span>
                        <button class="rounded-4 border-0 bg-danger text-white fw-bold px-2">6 donors</button>
                    </div> 
                </a>  
            </div>
        </div>
    </div>

    <div class="d-flex flex-row justify-content-center align-items-center gap-2 mt-5">
        <button class="btn btn-outline-danger rounded-2 py-2">
            <i class="bi bi-map"></i>
            Browse all states
        </button>
        <button class="btn btn-outline-primary  rounded-2 py-2">
            View all cities
            <i class="fa-solid fa-arrow-right-long"></i>
        </button>
    </div>
    <?php include "footer.php"; ?>
