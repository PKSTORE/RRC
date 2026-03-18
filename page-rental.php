<?php get_header(); ?>
der class="navbar">
      <div class="nav-container">
        <!-- Logo -->
        <div class="logo">
          <a href="index.html">
            <img src="img/RRC Long logo.png" alt="" />
          </a>
        </div>

        <!-- Hamburger -->
        <div class="hamburger" onclick="toggleMenu()">☰</div>

        <!-- Menu -->
        <nav class="menu" id="navMenu">
          <a href="index.html">Home</a>
          <a href="about.html">About Us</a>
          <a href="services.html">Services</a>
          <a href="Contact.html">Contact Us</a>
          <a href="rental.html">Rental</a>
          <!-- <a href="#ticket" class="mobile-btn">Complaint Ticket</a> -->
        </nav>

        <!-- Desktop Button -->
        <!-- <div class="nav-btn">
                <a href="#ticket">Complaint Ticket</a>
            </div> -->
      </div>
    </header>
    <!-- rental 1-->
    <div class="cards">
      <div class="card">
        <img src="https://via.placeholder.com/400x250" alt="Laptop" />

        ```
        <div class="card-body">
          <h3>Gaming Laptop</h3>

          <p class="specs">
            i7 / Ryzen 7 • 32GB RAM • 512GB SSD RTX 3060 / 4070
          </p>

          <div class="card-bottom">
            <span class="price">₹1499/day</span>
          <a href="index.html"><button class="btn">Rent Now</button></a>  
          </div>
        </div>
        ```
      </div>

      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Business Laptop</h3>

          <p class="specs">i5 • 16GB RAM • SSD Perfect for Office Work</p>

          <div class="card-bottom">
            <span class="price">₹899/day</span>
            <button class="btn">Rent Now</button>
          </div>
        </div>
        ```
      </div>

      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Basic Laptop</h3>

          <p class="specs">i3 • 8GB RAM • SSD Ideal for Students</p>

          <div class="card-bottom">
            <span class="price">₹499/day</span>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Basic Laptop</h3>

          <p class="specs">i3 • 8GB RAM • SSD Ideal for Students</p>

          <div class="card-bottom">
            <span class="price">₹499/day</span>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Basic Laptop</h3>

          <p class="specs">i3 • 8GB RAM • SSD Ideal for Students</p>

          <div class="card-bottom">
            <span class="price">₹499/day</span>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Basic Laptop</h3>

          <p class="specs">i3 • 8GB RAM • SSD Ideal for Students</p>

          <div class="card-bottom">
            <span class="price">₹499/day</span>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Basic Laptop</h3>

          <p class="specs">i3 • 8GB RAM • SSD Ideal for Students</p>

          <div class="card-bottom">
            <span class="price">₹499/day</span>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Basic Laptop</h3>

          <p class="specs">i3 • 8GB RAM • SSD Ideal for Students</p>

          <div class="card-bottom">
            <span class="price">₹499/day</span>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer-->
    <footer class="site-footer">
      <div class="footer-container">
        <!-- Column 1: Address & Contact -->
        <div class="footer-col">
          <p>
            G-9/ 85 RATIYA MARG SANGAM VIHAR <br />
            NEW DELHI
          </p>

          <p class="footer-email">
            Email:
            <a href="mailto:info@rrcomputers.net">info@rrcomputers.net</a>
          </p>

          <div class="footer-social">
            <a href="#" aria-label="Facebook"
              ><img src="img/facebook.png" alt=""
            /></a>
            <a href="#" aria-label="Twitter"
              ><img src="img/1707222563twitter-logo-png.png" alt=""
            /></a>
            <a href="#" aria-label="Instagram"
              ><img src="img/instagram.png" alt=""
            /></a>
          </div>
        </div>

        <!-- Column 2: Pages -->
        <div class="footer-col">
          <h4>Qucik Links</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="Contact.html">Contacts</a></li>
            <li><a href="rental.html">Rental</a></li>
          </ul>
        </div>

        <!-- Column 3: Services -->
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="services.html">Laptop Repair / Computer Repair</a></li>
            <li>
              <a href="services.html"
                >Cleaning Laptops / Replacing Thermal Paste</a
              >
            </li>
            <li><a href="services.html">Data Recovery</a></li>
            <li><a href="services.html">OS Installation</a></li>
            <li>
              <a href="services.html">Assembling a Personal Computer at Home</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Bottom -->
      <div class="footer-bottom">© 2026 RR COMPUTERS.</div>
    </footer>
      <!-- script 1-->
  <script>
    function toggleMenu() {
      document.getElementById("navMenu").classList.toggle("show");
    }
  </script>
  <?php get_footer(); ?>