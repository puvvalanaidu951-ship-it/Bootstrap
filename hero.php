
    <style>
        /* body{
            background-color: rgb(25, 92, 217);
        } */
        .heroo{
            color:rgb(133, 132, 131); 
        }
        /* body{
        background-color: #991b1b;
         background: url('https://blooddonor.in/assets/images/hero-blood-donation.svg') no-repeat center center;
       } */
    .hero-section {
    
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="3" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
}

.min-vh-75 { min-height: 100vh; }

.floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none; 
    overflow: hidden;
}

.floating-element {
    position: absolute;
    font-size: 2rem;
    animation: float-random 8s infinite linear;
    opacity: 0.7;
}


.search-card {
    background: linear-gradient(135deg, #dc2626, #991b1b);
    border: none;
}

.stat-card {
    background: white;
    padding: 2rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #e5e7eb;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

.stat-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #dc2626;
    display: block;
    line-height: 1;
}

.stat-label {
    font-size: 1rem;
    color: #6b7280;
    margin-top: 0.5rem;
}

.blood-group-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #e5e7eb;
}
    </style>
    
    <section class="hero-section position-relative">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-title text-white mb-4">
                        Be a <span class="text-warning heroo">Hero</span><br>
                        <span style="color: #ffcdd2;">Donate Blood</span><br>
                        Save Lives
                    </h1>
                    <p class="hero-subtitle text-white mb-4">
                        Join India's largest blood donation community. Connect with verified donors, 
                        find blood in emergencies, and be the reason someone smiles today.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="Register.php" class="btn btn-warning btn-lg px-4 py-3 rounded-pill">
                            <i class="bi bi-heart"></i> Become a Donor
                            
                        </a>
                        <a href="findblood.php" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill">
                            <i class="bi bi-search"></i> Find Blood
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="hero-image-container">
                    <img src="https://blooddonor.in/assets/images/hero-blood-donation.svg" alt="Blood Donation Hero" class="img-fluid animate-float">
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="floating-elements">
        <div class="floating-element floating-heart">❤️</div>
        <div class="floating-element floating-drop">🩸</div>
        <div class="floating-element floating-plus">➕</div>
    </div>
</section>
    <div class="container bg-danger  d-flex flex-column align-items-center p-5 mt-5 rounded-3 " style="width: 70%;height: 350px;">
                <h2 class="text-white">Emergency Blood Search </h2>
        <span class="" style=" color:rgb(212, 214, 215); ">Find blood donors near you in seconds</span>
        <form action="" class="mt-5">
            <div class="mt-2">
            <select name="" id="" class="w-20 p-2 rounded-1" style="width: 200px; margin-right: 10px;height: 50px;">
                <option value="">Select Blood Group</option>
                <option value="">A</option>
                <option value="">A+</option>
                <option value="">A-</option>
                <option value="">AB+</option>
                <option value="">AB-</option>
                <option value="">O+</option>
                 <option value="">O-</option>

            </select>
            <select name="" id="" class="w-20 p-2 rounded-1" style="width: 200px; margin-right: 10px;height: 50px;">
                <option value="">Select State</option>
                <option value="">AP</option>
                <option value="">TS</option>
                <option value="">TG</option>
                <option value="">OG</option>
                <option value="">BG</option>
                <option value="">CG</option>
                 <option value="">DG</option>

            </select>
            <select name="" id="" class="w-40 p-2 rounded-1" style="width: 200px;margin-right: 10px;height: 50px;">
                <option value="">Select City</option>
                <option value="">AP</option>
                <option value="">TS</option>
                <option value="">TG</option>
                <option value="">OG</option>
                <option value="">BG</option>
                <option value="">CG</option>
                 <option value="">DG</option>

            </select>
            <button class="btn bg-warning text-dark" style="width: 200px; padding: 10px; font-size: 20px;font-weight: bold;">Find Donors</button>
        </form>
       
</div>
 <button class="btn btn-light mt-5 btn-outline-light text-white bg-danger" style="padding-left: 50px; padding-right: 50px;">Location</button>


    </div>
    <div class="row ">
    <div class="col-sm-3 text-white p-5">
        <div class="container bg-light text-danger border  w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
          
            <h1>1,250</h1>
            <span>Registered Donors</span>
    </div>
</div>
    <div class="col-sm-3  text-white p-5">
        <div class="container bg-light text-danger border w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
             <h1>380</h1>
            <span>Lives Saved</span>
    </div>
</div>
    <div class="col-sm-3  text-white p-5">
        <div class="container bg-light text-danger border w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
             <h1>450</h1>
            <span>Blood Requests</span>
    </div>
</div>
    <div class="col-sm-3  text-white p-5">
        <div class="container bg-light text-danger border w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
             <h1>64</h1>
            <span>Cities Covered</span>
    </div>
</div>
    
  </div>
 
    <div class="d-flex flex-column align-items-center">
    <h1>Find Donors by Blood Group</h1>
    <span>Discover available donors for each blood type in your area</span>
    </div>
     <div class="row p-5">
    <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-warning text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>22 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-warning border rounded-5 mt-2 text-warning">Find Donor</button>
    </div></div>
   <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-danger text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>18 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-danger border rounded-5 mt-2 text-danger">Find Donor</button>
    </div></div>
   <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-info text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>25 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-info border rounded-5 mt-2 text-info">Find Donor</button>
    </div></div>
    <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-success text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>20 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-success border rounded-5 mt-2 text-success">Find Donor</button>
    </div></div>
  </div>
   <div class="row p-1">
     <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-info text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>19 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-info border rounded-5 mt-2 text-info">Find Donor</button>
    </div></div>
     <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-warning text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>20 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-warning border rounded-5 mt-2 text-warning">Find Donor</button>
    </div></div>
     <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-success text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>20 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-success border rounded-5 mt-2 text-success">Find Donor</button>
    </div></div>
      <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-danger text-white" style="width: 70px;height: 70px;">
        <h5>A+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>22 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-warning border rounded-5 mt-2 text-warning">Find Donor</button>
    </div></div>

    
  </div>
  <div class="d-flex flex-column align-items-center justify-content-center mb-5">
    <button class="btn w-30 bg-light p-4 mt-5 d-flex flex-column align-items-center justify-content-center border border-primary text-primary rounded-5" style="height: 70px;"><h5>Blood Compataibility Guide</h5></button>
  </div>
  
    
