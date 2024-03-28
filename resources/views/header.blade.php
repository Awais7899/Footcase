<header class="header_area sticky-header">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
          <div class="container">
            <a class="navbar-brand logo_h"  href="{{ url('/') }}"
              ><img
                width="180px"
                height="70px"
                src="{{ asset('img/Screenshot (508).png') }}"
                alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/') }}" >Home</a>
                </li>
              
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Collection</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link">Dress Shoes</a>
                    </li>
                    <li class="nav-item"><a class="nav-link">Sneakers</a></li>
                    <li class="nav-item"><a class="nav-link">Loafers</a></li>
                    <li class="nav-item">
                      <a class="nav-link">Hiking Boots</a>
                    </li>
                    <li class="nav-item"><a class="nav-link">Brogues</a></li>
                    <li class="nav-item"><a class="nav-link">Flip Flops</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('contact') }}" 
                    >Sale</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('contact') }}" 
                    >Men</a
                  >
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Women</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link">History</a></li>
                    <li class="nav-item"><a class="nav-link">About Us</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('contact') }}" 
                    >Kids</a
                  >
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Register</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('login') }}" 
                        >Login</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  href="{{ url('register') }}" 
                        >Sign Up</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                  <a href="{{ url('cart') }}" class="cart"><span class="ti-bag"></span></a>
                </li>
                <li class="nav-item">
                  <button class="search">
                    <span class="lnr lnr-magnifier" id="search"></span>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between">
            <input
              type="text"
              class="form-control"
              id="search_input"
              placeholder="Search Here"
            />
            <button type="submit" class="btn"></button>
            <span
              class="lnr lnr-cross"
              id="close_search"
              title="Close Search"
            ></span>
          </form>
        </div>
      </div>
    </header>