
<style>
       
    .heroo{
        color:rgb(133, 132, 131); 
    }

    .hero-section {

    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);

    }

    .hero-section::before { 
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="3" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
    }
    .hero-title{
        font-size: 3rem;
        font-weight: bold;
    }
    .hero-subtitle {
        font-size: 1.25rem;
        line-height: 1.5;
    }
    .min-vh-75 { min-height: 100vh; }

</style>
    
    <section class="hero-section position-relative d-flex  flex-row justify-content align-items-center">
    <div class="container  d-flex  flex-row justify-content align-items-center">
        <div class="row align-items-center min-vh-75  d-flex  flex-row justify-content align-items-center">
            <div class="col-lg-6">
                <div class="hero-content ">
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
    <div class="container bg-light text-danger border w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
        <h1 class="counter" data-target="1250">0</h1>
        <span>Registered Donors</span>
    </div>
</div>

<div class="col-sm-3 text-white p-5">
    <div class="container bg-light text-danger border w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
        <h1 class="counter" data-target="380">0</h1>
        <span>Lives Saved</span>
    </div>
</div>

<div class="col-sm-3 text-white p-5">
    <div class="container bg-light text-danger border w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
        <h1 class="counter" data-target="450">0</h1>
        <span>Blood Requests</span>
    </div>
</div>

<div class="col-sm-3 text-white p-5">
    <div class="container bg-light text-danger border w-100 p-5 rounded-3 mt-5 d-flex flex-column align-items-center border-danger">
        <h1 class="counter" data-target="64">0</h1>
        <span>Cities Covered</span>
    </div>
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
        <h5 class="mt-2 text-primary">A+ Blood Group</h5>
        <h6>22 <span style="font-size: 15px;">Donor Available</span></h6>
     <button class="btn btn-light w-50 h-20 border-warning border rounded-5 mt-2 text-warning"><a href="guids.php?blood_group=A_positive" class="text-decoration-none text-warning">Find Donor</a></button>
    </div></div>
   <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-danger text-white" style="width: 70px;height: 70px;">
        <h5>B+</h5>
    </div>
        <h5 class="mt-2 text-primary">B+ Blood Group</h5>
        <h6>18 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-danger border rounded-5 mt-2 text-danger"><a href="guids.php?blood_group=B_positive" class="text-decoration-none text-danger">Find Donor</a></button>
    </div></div>
   <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-info text-white" style="width: 70px;height: 70px;">
        <h5>O+</h5>
    </div>
        <h5 class="mt-2 text-primary">O+ Blood Group</h5>
        <h6>25 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-info border rounded-5 mt-2 text-info"><a href="guids.php?blood_group=O_positive" class="text-decoration-none text-info">Find Donor</a></button>
    </div></div>
    <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-success text-white" style="width: 70px;height: 70px;">
        <h5>O-</h5>
    </div>
        <h5 class="mt-2 text-primary">O- Blood Group</h5>
        <h6>20 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-success border rounded-5 mt-2 text-success"><a href="guids.php?blood_group=O_negative" class="text-decoration-none text-success">Find Donor</a></button>
    </div></div>
  </div>
   <div class="row p-1">
     <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-info text-white" style="width: 70px;height: 70px;">
        <h5>AB+</h5>
    </div>
        <h5 class="mt-2 text-primary">AB+ Blood Group</h5>
        <h6>19 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-info border rounded-5 mt-2 text-info"><a href="guids.php?blood_group=AB_positive" class="text-decoration-none text-info">Find Donor</a></button>
    </div></div>
     <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-warning text-white" style="width: 70px;height: 70px;">
        <h5>AB-</h5>
    </div>
        <h5 class="mt-2 text-primary">AB- Blood Group</h5>
        <h6>15 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-warning border rounded-5 mt-2 text-warning"><a href="guids.php?blood_group=AB_negative" class="text-decoration-none text-warning">Find Donor</a></button>
    </div></div>
     <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-success text-white" style="width: 70px;height: 70px;">
        <h5>A-</h5>
    </div>
        <h5 class="mt-2 text-primary">A- Blood Group</h5>
        <h6>20 <span style="font-size: 15px;">Donor Available</span></h6>
<button class="btn btn-light w-50 h-20 border-success border rounded-5 mt-2 text-success"><a href="guids.php?blood_group=A_negative" class="text-decoration-none text-success">Find Donor</a></button>
    </div></div>
      <div class="col-sm-3 text-white " ><div class="container bg-light  p-3 rounded-3 mt-5 text-dark d-flex flex-column align-items-center justify-content-center" style="height:300px ; width: 300px;">
        <div class="container  border rounded-circle d-flex flex-column align-items-center justify-content-center bg-danger text-white" style="width: 70px;height: 70px;">
        <h5>B-</h5>
    </div>
        <h5 class="mt-2 text-primary">B- Blood Group</h5>
        <h6>18 <span style="font-size: 15px;">Donor Available</span></h6>
        <button class="btn btn-light w-50 h-20 border-danger border rounded-5 mt-2 text-danger"><a href="guids.php?blood_group=B_negative" class="text-decoration-none text-danger">Find Donor</a></button>
    </div></div>

    
  </div>
  <div class="d-flex flex-column align-items-center justify-content-center mb-5">
    <button class="btn btn-outline-primary w-30  p-4 mt-5 d-flex flex-column align-items-center justify-content-center border border-primary rounded-5" style="height: 70px;"><a href="compatibility.php" class="text-decoration-none text-black"><h5>Blood Compataibility Guide</h5></a></button>
  </div>
  
    <script>
const counters = document.querySelectorAll(".counter");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains("counted")) {
            entry.target.classList.add("counted");

            const counter = entry.target;
            const target = +counter.dataset.target;
            const increment = Math.ceil(target / 100);

            function update() {
                const current = +counter.innerText.replace(/,/g, '');

                if (current < target) {
                    counter.innerText = Math.min(current + increment, target).toLocaleString();
                    requestAnimationFrame(update);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            }

            update();
        }
    });
}, { threshold: 0.5 });

counters.forEach(counter => observer.observe(counter));
</script>
