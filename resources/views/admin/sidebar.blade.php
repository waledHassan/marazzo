<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="index.html">
        <img src="admin/assets/images/logo/logo.svg" alt="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>

        <li class="nav-item">
          <a href="{{url('/')}}">
            <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                    <path
                      d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                    />
                  </svg>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>


        <span class="divider"><hr /></span>

        <li class="nav-item nav-item-has-children">
          <a
            href="#0"
            class="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#ddmenu_1"
            aria-controls="ddmenu_1"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon">
              <i class="lni lni-user"></i>
            </span>
            <span class="text">Users </span>
          </a>
          <ul id="ddmenu_1" class="collapse dropdown-nav">
            <li>
              <a href="{{url('show_users')}}"> All users </a>
            </li>
            {{-- <li>
              <a href="buttons.html"> Add User </a>
            </li> --}}
          </ul>
        </li>

        <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3.66675 4.58325V16.4999H19.2501V4.58325H3.66675ZM5.50008 14.6666V6.41659H8.25008V14.6666H5.50008ZM10.0834 14.6666V11.4583H12.8334V14.6666H10.0834ZM17.4167 14.6666H14.6667V11.4583H17.4167V14.6666ZM10.0834 9.62492V6.41659H17.4167V9.62492H10.0834Z"
                  />
                </svg>
              </span>
              <span class="text">Products </span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a href="{{url('show_products')}}"> All Products </a>
              </li>
              <li>
                <a href="{{url('add_product_form')}}"> Add product </a>
              </li>
            </ul>
          </li>

          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_3"
              aria-controls="ddmenu_3"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3.66675 4.58325V16.4999H19.2501V4.58325H3.66675ZM5.50008 14.6666V6.41659H8.25008V14.6666H5.50008ZM10.0834 14.6666V11.4583H12.8334V14.6666H10.0834ZM17.4167 14.6666H14.6667V11.4583H17.4167V14.6666ZM10.0834 9.62492V6.41659H17.4167V9.62492H10.0834Z"
                  />
                </svg>
              </span>
              <span class="text">Categories </span>
            </a>
            <ul id="ddmenu_3" class="collapse dropdown-nav">
              <li>
                <a href="{{url('show_categories')}}"> All Categories </a>
              </li>
              <li>
                <a href="{{url('add_category_form')}}"> Add Category </a>
              </li>
            </ul>
          </li>


          {{-- <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_4"
              aria-controls="ddmenu_4"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M3.66675 4.58325V16.4999H19.2501V4.58325H3.66675ZM5.50008 14.6666V6.41659H8.25008V14.6666H5.50008ZM10.0834 14.6666V11.4583H12.8334V14.6666H10.0834ZM17.4167 14.6666H14.6667V11.4583H17.4167V14.6666ZM10.0834 9.62492V6.41659H17.4167V9.62492H10.0834Z"
                  />
                </svg>
              </span>
              <span class="text">Brands </span>
            </a>
            <ul id="ddmenu_4" class="collapse dropdown-nav">
              <li>
                <a href="alerts.html"> All Brands </a>
              </li>
              <li>
                <a href="buttons.html"> Add Brand </a>
              </li>
            </ul>
          </li> --}}

          <span class="divider"><hr /></span>

        <li class="nav-item">
          <a href="tables.html">
            <span class="icon">
                <i class="lni lni-cart-full"></i>
            </span>
            <span class="text">Orders</span>
          </a>
        </li>


        <li class="nav-item">
            <a href="tables.html">
              <span class="icon">
                <i class="lni lni-comments"></i>
              </span>
              <span class="text">Comments</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="tables.html">
              <span class="icon">
                <i class="lni lni-comments"></i>
              </span>
              <span class="text">Replies</span>
            </a>
          </li>


        {{-- <li class="nav-item">
          <a href="notification.html">
            <span class="icon">
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.16667 19.25H12.8333C12.8333 20.2584 12.0083 21.0834 11 21.0834C9.99167 21.0834 9.16667 20.2584 9.16667 19.25ZM19.25 17.4167V18.3334H2.75V17.4167L4.58333 15.5834V10.0834C4.58333 7.24171 6.41667 4.76671 9.16667 3.94171V3.66671C9.16667 2.65837 9.99167 1.83337 11 1.83337C12.0083 1.83337 12.8333 2.65837 12.8333 3.66671V3.94171C15.5833 4.76671 17.4167 7.24171 17.4167 10.0834V15.5834L19.25 17.4167ZM15.5833 10.0834C15.5833 7.51671 13.5667 5.50004 11 5.50004C8.43333 5.50004 6.41667 7.51671 6.41667 10.0834V16.5H15.5833V10.0834Z"
                />
              </svg>
            </span>
            <span class="text">Notifications</span>
          </a>
        </li> --}}
      </ul>
    </nav>

  </aside>