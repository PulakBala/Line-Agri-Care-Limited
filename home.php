<?php include ('header.php');
include('home_slider.php');
?>

<style>
    .latest-products {
        margin-top: 20px;
        width: 100%;
    }
    .latest-products h2 {
        text-align: center;
        font-size: 36px;
        color: black;
    }
    .product-container {
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }
    .product-card {
        position: relative;
        flex: 1 1 200px;
        text-align: center;
        max-width: 250px;
        overflow: hidden;
    }
    .product-card img {
        width: 100%;
        transition: transform 0.3s ease;
    }
    .product-card h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin: 0;
        font-size: 26px;
        color: white;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 2;
    }
    .product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }
    .product-card:hover img {
        transform: scale(1.1);
    }
    .product-card:hover::before,
    .product-card:hover h1 {
        opacity: 1;
    }
    .product-name {
        margin-top: 10px;
        font-size: 18px;
        color: black;
    }
    .info-section {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        margin-top: 40px;
        padding: 20px;
        background-color: #f9f9f9;
    }
    .info-section img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        flex: 1 1 300px;
    }
    .info-content {
        max-width: 100%;
        padding: 20px;
        flex: 1 1 300px;
    }
    .info-content h3 {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
    }
    .info-content p {
        font-size: 16px;
        color: #666;
        line-height: 1.6;
    }
    .read-more-btn {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .read-more-btn:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        .product-card {
            max-width: 100%;
        }
        .info-section {
            flex-direction: column;
        }
        .info-content, .info-section img {
            flex: 1 1 100%;
        }
    }

    .card-image {
        width: 80px; /* Adjust size as needed */
        height: 80px; /* Adjust size as needed */
        border-radius: 50%; /* Makes the image rounded */
        margin: 0 auto 10px; /* Centers the image and adds margin below */
        display: flex;
    }
    .product-card h1, .product-card .product-name {
        text-align: center; /* Centers the text */
    }
   
</style>

<section class="latest-products">
    <h2>Latest Products</h2>
    <div class="product-container">
        <div class="product-card">
            <img src="assets/img/16368950201663.jpg" alt="Geolight Gold">
            <h1>Geolight Gold</h1>
            <div class="product-name">Geolight Gold</div>
        </div>
        <div class="product-card">
            <img src="assets/img/16368950201663.jpg" alt="OXY-CAL">
            <h1>OXY-CAL</h1>
            <div class="product-name">OXY-CAL</div>
        </div>
        <div class="product-card">
            <img src="assets/img/16368950201663.jpg" alt="Xpart Aqua">
            <h1>Xpart Aqua</h1>
            <div class="product-name">Xpart Aqua</div>
        </div>
        <div class="product-card">
            <img src="assets/img/16368950201663.jpg" alt="AC Zinc Mono">
            <h1>AC Zinc (Mono)</h1>
            <div class="product-name">AC Zinc (Mono)</div>
        </div>
    </div>
</section>

<section class="info-section">
    <img src="https://www.xpartagricareltd.com/img/about-us.png" alt="Sample Image">
    <div class="info-content">
        <h3>ABOUT US</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex ut rerum modi, in sapiente nobis ad totam veritatis maiores, odit nihil id quae ratione dolorum est hic officiis. Commodi quasi numquam tempore quibusdam facere veritatis obcaecati labore, eum, reiciendis cupiditate, fugit excepturi hic molestiae! Cupiditate incidunt recusandae ex et consequatur necessitatibus architecto sunt provident officia voluptatum animi accusamus dignissimos, quae distinctio ipsa adipisci hic perspiciatis natus, sequi ipsum repellat. Explicabo odit exercitationem voluptatum? Dignissimos commodi dolorem explicabo hic amet ducimus odio blanditiis officiis sint dolores aut architecto, sed eum molestias obcaecati alias ab veniam quas totam  </p>
        <a href="#" class="read-more-btn">Read More</a>
    </div>
</section>

<section class="contact-section py-5">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-4">
        <div class="product-card1 bg-light p-5 rounded shadow-sm h-100 position-relative overflow-hidden" style="transition: transform 0.3s ease;">
          <img src="assets/img/5.png" alt="Location" class="card-image img-fluid mb-3 mx-auto d-block" style="max-height: 200px; width: auto; object-fit: cover; transition: transform 0.3s ease;">
          <h2 class="h5 text-center">Where we are!!</h2>
          <div class="product-name">
            Xpart Agricare Import & Export Ltd. has established a state-of-the-art factory in Ishwardi for the production, manufacturing as well as repacking of products. To offer an all-inclusive product services focused on best customer care, Xpart Agricare Import & Export Ltd. has stationed 10 (Ten) sales service centers.
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="product-card1 middel-card bg-light p-5 rounded shadow-sm h-100 position-relative overflow-hidden middle-card" style="transition: transform 0.3s ease;">
          <img src="assets/img/5.png" alt="Fisheries" class="card-image img-fluid mb-3 mx-auto d-block" style="max-height: 200px; width: auto; object-fit: cover; transition: transform 0.3s ease;">
          <h2 class="h5 text-center">XPART Fisheries</h2>
          <div class="product-name">
            Aquatic animals provide a major source of animal protein in the Bangladeshi diet. Xpart Agricare Import & Export Ltd. is a pioneering company working with Aquaculture and Fisheries. We strive to produce the highest quality feed by incorporating the latest techniques.
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="product-card1 bg-light p-5 rounded shadow-sm h-100 position-relative overflow-hidden" style="transition: transform 0.3s ease;">
          <img src="assets/img/5.png" alt="Future" class="card-image img-fluid mb-3 mx-auto d-block" style="max-height: 200px; width: auto; object-fit: cover; transition: transform 0.3s ease;">
          <h2 class="h5 text-center">Feed Healthy, Feed Future</h2>
          <div class="product-name">
            Xpart Agricare Import & Export Ltd. has established a state-of-the-art factory in Ishwardi for the production, manufacturing as well as repacking of products. To offer an all-inclusive product services focused on best customer care, Xpart Agricare Import & Export Ltd. has stationed 10 (Ten) sales service centers.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Add Bootstrap CSS & Add Animation CSS -->
<style>
  .product-card1:hover {
    transform: scale(1.05);
  }
  .product-card1:hover .card-image {
    transform: scale(1.1);
  }
  .middel-card {
    background-color: #666; /* Change this to your desired color */
  }
</style>



<?php include('footer1.php')?>