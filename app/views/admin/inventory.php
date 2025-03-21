<?php require '../app/views/layouts/header.php';?>

<!--book inventory-->
<h3 class="book-inventory-heading">Book Inventory</h3>

<div class="book-inventory-header">
  <div class="inventory-filter-wrapper">
    <label for="category">Category:</label>
    <select name="category" id="category">
      <option value="mystery">Mystery</option>
      <option value="romance">Romance</option>
      <option value="comedy">Comedy</option>
      <option value="sci-fi">Sci-Fi</option>
      <option value="thriller">Thriller</option>
      <option value="horror">Horror</option>
      <option value="psychology">Psychology</option>
    </select>
  </div>

  <div class="inventory-filter-wrapper">
    <label for="author">Author:</label>
    <select name="author" id="author">
      <option value="author1">Ana Huang</option>
      <option value="author2">Lauren Roberts</option>
      <option value="author3">Freida McFadden</option>
      <option value="author4">Ali Hazelwood</option>
      <option value="author5">Rebecca Yaros</option>
    </select>
  </div>

  <div class="inventory-filter-wrapper">
    <label for="stocks">Stocks :</label>
    <select name="stocks" id="stock">
      <option value="in-stock">In-stock</option>
      <option value="out-of-stock">Out-of-Stock</option>
    </select>
  </div>

  <input type="text" placeholder="Quick Search" class="quick-search-bar" />

  <div class="add-stock-icon">
    <a href="admin-add-stock.html"><p>+</p></a>
  </div>
</div>

<!--learn from tutorial-->
<main class="table">
  <section class="table_body">
    <table class="styled-table">
      <thead>
        <tr class="header-box">
          <th>Book Cover</th>
          <th>Book Title</th>
          <th>ISBN-13</th>
          <th>Quantity</th>
          <th>Author</th>
        </tr>
      </thead>
      <tbody id="book-data">
        <!-- <tr>
        l<img src="bookcover/checkmate.jpg" alt="check&mate book"></td>
        <td>Check & Mate</td>
        <td>978-0-7432-7356-5</td>
        <td>34</td>
        <td>Ali Hazelwood</td>
      </tr>

      <div class="inventory-delemeter"></div>

      <tr>
        <td> <img src="bookcover/reckless.jpg" alt="reckless book"></td>
        <td>Reckless</td>
        <td>978-1-4028-9462-6</td>
        <td>13</td>
        <td>Lauren Roberts</td>
      </tr>

      <tr>
        <td> <img src="bookcover/twisted-love.png" alt="twisted love book"></td>
        <td>Twisted Love</td>
        <td>978-3-16-148410-0</td>
        <td>324</td>
        <td>Ana Huang</td>
      </tr>

      <tr>
        <td> <img src="bookcover/iron-flame.jpg" alt="iron flame book"></td>
        <td>Iron Flame</td>
        <td>978-0-395-36341-6</td>
        <td>31</td>
        <td>Rebecca Yaros</td>
      </tr>

      <tr>
        <td> <img src="bookcover/KOS.jpg" alt="king of sloth book"></td>
        <td>King of Sloth</td>
        <td>978-0-525-95038-8</td>
        <td>315</td>
        <td>Ana Huang</td>
      </tr>

      <tr>
        <td> <img src="bookcover/fourth-wing.jpg" alt="fourth wing book"></td>
        <td>Fourth Wing</td>
        <td>978-0-325-93238-5</td>
        <td>15</td>
        <td>Rebecca Yaros</td>
      </tr>

      <tr>
        <td> <img src="bookcover/HPbook1.jpg" alt="harry potter book1"></td>
        <td>Harry Potter</td>
        <td>978-0-905-24647-2</td>
        <td>31</td>
        <td>J.K. Rowling</td>
      </tr>

      <tr>
        <td> <img src="bookcover/never-lie.jpg" alt="never lie book"></td>
        <td>Never Lie</td>
        <td>978-0-230-29424-8</td>
        <td>90</td>
        <td>Freida McFadden </td>
      </tr>

      <tr>
        <td> <img src="bookcover/shatter-me.jpg" alt="shatter-me book"></td>
        <td>Heartstopper</td>
        <td>978-0-931-01931-1</td>
        <td>53</td>
        <td>Tahereh Mafi</td>
      </tr>

      <tr>
        <td> <img src="bookcover/heartstopper.jpg" alt="heartstopper book"></td>
        <td>Heartstopper</td>
        <td>978-0-023-19202-0</td>
        <td>0</td>
        <td>Alice Oseman</td>
      </tr> -->
      </tbody>
    </table>
  </section>
</main>

<div class="inventory-footer">
  <a href="home-page-admin.html" class="back-to-home">
    <img src="icon/left-icon.svg" />
    Back to home
  </a>

  <div>
    <div class="inventory-pages">
      <select name="page-selection" clas="page-selection">
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
      </select>
    </div>
  </div>
</div>

<?php require '../app/views/layouts/footer.php';?>
