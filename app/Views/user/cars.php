<?= $this->include('layout/header') ?>

<style>
  .car-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    grid-gap: 20px;
    margin-top: 20px;
  }

  .featured-car-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
    width: 200px; /* Adjust the width */
  }

  .featured-car-card:hover {
    transform: translateY(-5px);
  }

  .card-banner {
    margin: 0;
    overflow: hidden;
  }

  .card-content {
    padding: 10px; /* Adjust padding */
  }

  .card-title-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 5px; /* Adjust margin */
  }

  .card-title-wrapper a {
    color: #333;
    text-decoration: none;
    font-size: 14px; /* Adjust font size */
  }

  .card-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .card-list-item {
    display: flex;
    align-items: center;
    margin-bottom: 3px; /* Adjust margin */
    font-size: 12px; /* Adjust font size */
  }

  .card-list-item ion-icon {
    margin-right: 3px; /* Adjust margin */
    font-size: 14px; /* Adjust font size */
  }

  .card-price-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px; /* Adjust margin */
  }

  .btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 5px 10px; /* Adjust padding */
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 12px; /* Adjust font size */
  }

  .btn:hover {
    background-color: #0056b3;
  }

  .fav-btn {
    background-color: transparent;
    border: none;
    cursor: pointer;
  }

  .fav-btn ion-icon {
    color: #ff0000;
  }
</style>

<div class="car-grid">
  <!-- Repeat this block for each car -->
  <?php for ($i = 0; $i < 10; $i++) { ?>
    <div class="featured-car-card">
      <figure class="card-banner">
        <img src="images/car-<?= $i % 3 + 1 ?>.jpg" alt="Car <?= $i ?>" loading="lazy" width="200" height="150" class="w-100">
      </figure>
      <div class="card-content">
        <div class="card-title-wrapper">
          <h3 class="h3 card-title"><a href="#">Car <?= $i ?></a></h3>
          <data class="year" value="2019">2019</data>
        </div>
        <ul class="card-list">
          <li class="card-list-item"><ion-icon name="people-outline"></ion-icon><span class="card-item-text">4 People</span></li>
          <li class="card-list-item"><ion-icon name="flash-outline"></ion-icon><span class="card-item-text">Gasoline</span></li>
          <li class="card-list-item"><ion-icon name="speedometer-outline"></ion-icon><span class="card-item-text">8.2km / 1-litre</span></li>
          <li class="card-list-item"><ion-icon name="hardware-chip-outline"></ion-icon><span class="card-item-text">Automatic</span></li>
        </ul>
        <div class="card-price-wrapper">
          <p class="card-price"><strong>$<?= rand(200, 600) ?></strong> / month</p>
          <button class="btn fav-btn" aria-label="Add to favourite list"><ion-icon name="heart-outline"></ion-icon></button>
          <button class="btn">Rent now</button>
          <a href="/shop" class="featured-car-link"><ion-icon name="storefront-outline" style="font-size: 20px;"></ion-icon></a>
        </div>
      </div>
    </div>
  <?php } ?>
  <!-- End of car block -->
</div>

<?= $this->include('layout/footer') ?>
