<?php get_header(); ?>
<header class="navbar">
      <div class="nav-container">
        <!-- Logo -->
        <div class="logo">
                <a href="<?php echo site_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/RRC-Long-logo.png">
                </a>
            </div>

        <!-- Hamburger -->
        <div class="hamburger" onclick="toggleMenu()">☰</div>

        <!-- Menu -->
        <nav class="menu" id="navMenu">
           <a href="<?php echo site_url('/'); ?>">Home</a>
    <a href="<?php echo site_url('/about'); ?>">About</a>
    <a href="<?php echo site_url('/services'); ?>">Services</a>
    <a href="<?php echo site_url('/contact'); ?>">Contact</a>
    <a href="<?php echo site_url('/rental'); ?>">Rental</a>
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/akshita-vault-1.png">

        ```
        <div class="card-body">
          <h3>Gaming Laptop</h3>

          <p class="specs">
            i7 / Ryzen 7 • 32GB RAM • 512GB SSD RTX 3060 / 4070
          </p>

          <div class="card-bottom">
            <span class="price">₹1499/day</span>
          <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>  
          </div>
        </div>
        ```
      </div>

      <div class="card">
        <img src="https://via.placeholder.com/400x250" />

        ```
        <div class="card-body">
          <h3>Dell Latitude 5400</h3>
          <p class="specs"><span class="Processor">Processor:</span> Typically features 7th or 8th Generation Intel Core processors
            <br>
          <span class="Display">Display:</span> 14-inch screen, with some models offering Full HD (1920 x 1080) resolution and touchscreen capabilities
            <br>
         <span class="Memory&Storage">Memory & Storage:</span> Commonly configured with 8GB Ram & 256GB SSD
            <br>
           <span class="Features">Features:</span>Often runs Windows 10 or 11 Pro and includes HDMI and USB ports for connectivity.
          </p>

          <div class="card-bottom">
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
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
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
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
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
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
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
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
            <a href="mailto:info@rrcomputers.net" target="_blank">info@rrcomputers.net</a>
          </p>

          <div class="footer-social">
            <a href="#" aria-label="Facebook" target = "_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook-logo"></a>
          <a href="https://www.instagram.com/" aria-label="Instagram" target = "_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram-logo"></a>
          <a href="#" aria-label="Twitter" target = "_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/1707222563twitter-logo-png.png" alt="twitter-logo"></a>
          </div>
        </div>

        <!-- Column 2: Pages -->
        <div class="footer-col">
          <h4>Qucik Links</h4>
          <ul>
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
           <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
           <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
           <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
           <li><a href="<?php echo site_url('/rental'); ?>">Rental</a></li>
          </ul>
        </div>

        <!-- Column 3: Services -->
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
          <li><a href="<?php echo site_url('/services'); ?>">Laptop Repair / Computer Repair</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">Cleaning Laptops / Replacing Thermal Paste</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">Data Recovery</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">OS Installation</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">Assembling a Personal Computer at Home</a></li>
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