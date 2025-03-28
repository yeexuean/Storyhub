<?php require '../app/views/layouts/header.php';?>

<!-- add stock page --> 
<div class="stock-form-title">
  <h3>Stock Form</h3>
  <a href="admin-inventory.html"><img src="icon/arrow-left.svg" /></a>
</div>

<div class="stock-form-container">
  <div class="add-book-details">
    <div class="add-book-title">
      <h2>Add Books</h2>
    </div>

    <div class="stock-content">
      <div class="add-image">
        <div class="add-image-details">
          <img src="icon/upload-icon.svg" alt="upload-image-icon" />
          <p class="upload-instruction">
            <span
              >Drop files to upload<br />
              or</span
            >
            <span class="green-text">browse</span>
          </p>
        </div>
      </div>

      <div class="publish-info">
        <h4>NAME</h4>
        <input type="text" placeholder="Enter the name of the book" />

        <h4>AUTHOR</h4>
        <input type="text" placeholder="Enter the name of the author" />

        <h4>PUBLISHED DATE</h4>
        <div class="publish-time">
          <!--year selection-->
          <select name="month">
            <option value="jan">January</option>
            <option value="feb">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="aug">August</option>
            <option value="sept">September</option>
            <option value="oct">Oct</option>
            <option value="nov">November</option>
            <option value="dec">Dec</option>
          </select>

          <select name="date">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>

          <select name="year">
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
          </select>
        </div>

        <h4>ISBN-13</h4>
        <input type="text" placeholder="Enter the ISBN - 13 number" />

        <h4>BOOK SYNOPSIS</h4>
        <input
          type="text"
          placeholder="Enter the description of the book"
        />

        <h4>TRADE PRICE</h4>
        <!--reference from -->
        <div class="price-slider">
          <div class="input-wrapper">
            <input
              type="range"
              name="min_val"
              class="range-slide"
              min="1"
              max="100"
              value="50"
              oninput="slidePrice()"
            />
            <div class="tooltip"></div>
          </div>
        </div>

        <div class="price-list">
          <p>$1</p>
          <p>$100</p>
        </div>

        <h4>RETAIL PRICE</h4>
        <div class="price-slider">
          <div class="input-wrapper">
            <input
              type="range"
              name="min_val"
              class="range-slide"
              min="1"
              max="100"
              value="50"
              oninput="slidePrice()"
            />
            <div class="tooltip"></div>
          </div>
        </div>

        <div class="price-list">
          <p>$1</p>
          <p>$100</p>
        </div>

        <h4>AMOUNT OF BOOKS</h4>
        <input type="text" placeholder="Enter the amount of books" />
        <!--need to limit the amount in one go, or set a maximum and minimum-->

        <a href="admin-inventory.html">
          <button class="add-to-stock-btn">Add to Stock</button>
        </a>
      </div>
    </div>
  </div>
</div>

<?php require '../app/views/layouts/footer.php';?>
