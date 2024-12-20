<nav class="navbar" class="flex justify-between items-center mb-4" style="z-index: 11;">

  <ul class="navbar-nav">
    <!-- -->

    @guest
    <li class="navbar-item">
      <a href="/login" class="navbar-link">
      <span class="link-text"> Login </span>

      <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
        class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
        <g class="fa-group">
        <path fill="currentColor"
          d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
          class="fa-secondary"></path>
        <path fill="currentColor"
          d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
          class="fa-primary"></path>


        </g>
      </svg>
      </a>
    </li>


    <li class="navbar-item">
      <a href="/register" class="navbar-link">
      <span class="link-text">Register</span>
      <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
        class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
        <g class="fa-group">
        <path fill="currentColor"
          d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
          class="fa-secondary"></path>
        <path fill="currentColor"
          d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
          class="fa-primary"></path>
        </g>
      </svg>
      </a>
    </li>
  @endguest
    @auth


      <li class="navbar-item">
        <a href="" class="navbar-link">
        <span class="block mr-4 ml-4">Welcome {{auth()->user()->name}}</span>
        </a>
      </li>

      <li class="navbar-item">
        <form class="" method="POST" action="/logout">
        @csrf
        <button type="submit" class="navbar-link" style="align-items: center">
          <a class="navbar-link">
          <span class="mx-4 link-text"> Logout</span>
          <svg width="32px" height="32px" version="1.1" viewBox="144 144 512 512" xmlns="http://www.w3.org/2000/svg"
            class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
            <defs>
            <clipPath id="b">
              <path d="m446 306h205.9v183h-205.9z" />
            </clipPath>
            <clipPath id="a">
              <path d="m148.09 148.09h386.91v503.81h-386.91z" />
            </clipPath>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" style="stop-color:#FF5733;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#C70039;stop-opacity:1" />
            </linearGradient>
            <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" style="stop-color:#900C3F;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#581845;stop-opacity:1" />
            </linearGradient>
            </defs>
            <g class="fa-group">
            <g clip-path="url(#b) ">
              <path
              d="m638.77 366.03-53.352-53.352c-5.8711-5.7109-14.32-7.8906-22.223-5.7344-7.8984 2.1562-14.07 8.3281-16.223 16.23-2.1562 7.9023 0.027344 16.352 5.7383 22.219l28.695 28.695h-110.9c-6.25-0.18359-12.309 2.1719-16.793 6.5273-4.4844 4.3594-7.0156 10.344-7.0156 16.598 0 6.25 2.5312 12.238 7.0156 16.594 4.4844 4.3555 10.543 6.7109 16.793 6.5273h111.93l-28.695 28.703v0.003907c-5.8438 5.8398-8.125 14.355-5.9844 22.34 2.1367 7.9805 8.3711 14.215 16.352 16.352 7.9844 2.1406 16.5-0.14062 22.344-5.9844l52.32-52.32h-0.003906c8.4102-8.4102 13.137-19.816 13.137-31.711 0-11.891-4.7266-23.297-13.137-31.707z"
              fill="url(#grad1)" />
            </g>
            <g clip-path="url(#a)">
              <path
              d="m510.99 449.98c-5.8828 0.10156-11.523 2.375-15.832 6.3867-4.3086 4.0078-6.9844 9.4688-7.5078 15.332-0.85547 11.266-1.7109 15.055-2.7734 23.449-1.543 11.238-6.7266 21.66-14.762 29.668-8.0195 8.1406-18.473 13.449-29.773 15.133l-0.66797 0.089844c-6.8867 0.98438-13.285 1.8516-19.945 2.6367 1.3008-25.859 2.125-55.754 2.332-85.422 0.375-49.062-0.98438-99.68-3.6719-132.35-2.0117-22.844-8.793-45.012-19.906-65.074-10.992-19.758-25.277-35.285-40.254-43.504l-0.46094-0.24609c-13.059-7.1445-24.117-13.195-43.207-21.246 8.1289-0.26562 16.039-0.43359 26.566-0.43359 51.887 0.20703 70.246 3.3242 95.762 7.1719l0.62891 0.097656v0.007813c11.238 1.9141 21.566 7.3984 29.449 15.637 8.0117 8.1641 13.238 18.648 14.938 29.961 2.7266 19.77 4.9219 42.312 6.2383 74.852 0.48047 12.262 10.824 22.27 23.398 22.562 12.93 0.29688 23.172-9.5352 22.582-21.855-1.5156-32-4.0234-55.695-7.3008-77.086-3.2188-20.93-13.895-41.426-29.617-57.801-15.723-16.371-35.727-27.738-56.57-31.387l-0.64062-0.10938c-25.445-4.2305-45.457-8.0195-98.793-8.293-53.32 0.3125-72.078 4.043-97.562 8.2539l-0.64062 0.11719c-20.84 3.6406-40.895 15.035-56.641 31.379-15.742 16.348-26.398 36.871-29.617 57.801-4.7695 30.812-8.2266 79.047-8.5898 126.17-0.36328 47.125 2.0977 95.301 6.375 126.01 1.9102 13.082 6.457 25.641 13.375 36.91 1.918 3.9375 3.9844 7.8711 6.1992 11.633 11.484 19.59 26.234 35.484 41.426 44.398l0.46094 0.27734c18.52 10.824 33.199 19.57 71.469 35.918 38.16 16.137 52.152 19.387 69.992 23.617l0.44141 0.10938c14.582 3.3945 28.348-1.2891 39.016-12.949 10.332-11.297 17.309-28.613 19.582-48.797 9.3594-1.1133 17.711-2.3711 26.754-3.7773l0.64844-0.10938c21.246-3.3164 41.594-14.289 57.379-30.258 15.785-15.969 26.254-36.203 29.137-57.07 1.2383-9.0312 2.2031-13.473 3.168-25.074 1.0547-12.637-9.3164-23.008-22.582-22.742z"
              fill="url(#grad2)" />
            </g>
            </g>
          </svg>


          </a>
        </button>
        </form>
      </li>

      <li>
        <a href="/listings/manage" class="navbar-link">
        <span class="link-text mr-0 ml-4">Manage Listings</span>
        <!-- <svg
      aria-hidden="true"
      focusable="false"
      data-prefix="fad"
      data-icon="angle-double-right"
      role="img"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 448 512"
      class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
      <g class="fa-group">
      <path
      fill="currentColor"
      d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
      class="fa-secondary"></path>
      <path
      fill="currentColor"
      d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
      class="fa-primary"></path>
      </g>
      </svg>
       -->
        <svg width="32px" height="32px" version="1.1" viewBox="144 144 512 512" xmlns="http://www.w3.org/2000/svg"
          class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
          <defs>
          <clipPath id="a">
            <path d="m148.09 159h503.81v482h-503.81z" />
          </clipPath>
          </defs>
          <g class="fa-group">
          <path fill="currentColor" style="opacity: 0.6;"
            d="m202.08 159.54c-16.949 0-31.082 13.895-31.082 30.863v117.99h22.898v-117.99c0-4.5391 3.3867-7.9609 8.1836-7.9609h149.04l28 40.836h-0.003906c2.1367 3.1055 5.668 4.9648 9.4375 4.9648h217.55v45.801h-206.1c-3.9023 0-7.5352 1.9922-9.6406 5.2773l-33.254 51.973h-197.56c-6.3242 0-11.449 5.1289-11.449 11.449v263.36c0 18.832 15.52 34.352 34.352 34.352h435.11c18.832 0 34.352-15.52 34.352-34.352l-0.003906-297.7c0-14.816-9.6289-27.547-22.902-32.316l0.003906-59.285c0-6.3242-5.1289-11.453-11.453-11.453h-222.96l-28-40.836c-2.1367-3.1055-5.6641-4.9648-9.4375-4.9648zm3.2656 343.51h34.352v22.902l-34.352-0.003906z" />
          <path fill="orange"
            d="m57.25 343.51h103.05v22.902h-103.05zm-57.25 57.25h34.352v22.902h-34.352zm57.25 0h103.05v22.902h-103.05z" />
          </g>
        </svg>
        </a>
      </li>

      <li class="navbar-item">
        <a href="/listings/favorites" class="navbar-link">
        <span class="link-text mr-0 ml-4"> Favorites </span>

        <!-- <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img"
      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
      class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
      <g class="fa-group">
      <path fill="currentColor"
        d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
        class="fa-secondary"></path>
      <path fill="currentColor"
        d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
        class="fa-primary"></path>


      </g>
      </svg> -->
        <svg height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
          <path style="fill:#FF6647;" d="M474.655,74.503C449.169,45.72,413.943,29.87,375.467,29.87c-30.225,0-58.5,12.299-81.767,35.566
        c-15.522,15.523-28.33,35.26-37.699,57.931c-9.371-22.671-22.177-42.407-37.699-57.931c-23.267-23.267-51.542-35.566-81.767-35.566
        c-38.477,0-73.702,15.851-99.188,44.634C13.612,101.305,0,137.911,0,174.936c0,44.458,13.452,88.335,39.981,130.418
        c21.009,33.324,50.227,65.585,86.845,95.889c62.046,51.348,123.114,78.995,125.683,80.146c2.203,0.988,4.779,0.988,6.981,0
        c2.57-1.151,63.637-28.798,125.683-80.146c36.618-30.304,65.836-62.565,86.845-95.889C498.548,263.271,512,219.394,512,174.936
        C512,137.911,498.388,101.305,474.655,74.503z" />
          <path style="fill:#E35336;"
          d="M160.959,401.243c-36.618-30.304-65.836-62.565-86.845-95.889
        c-26.529-42.083-39.981-85.961-39.981-130.418c0-37.025,13.612-73.631,37.345-100.433c21.44-24.213,49.775-39.271,81.138-43.443
        c-5.286-0.786-10.653-1.189-16.082-1.189c-38.477,0-73.702,15.851-99.188,44.634C13.612,101.305,0,137.911,0,174.936
        c0,44.458,13.452,88.335,39.981,130.418c21.009,33.324,50.227,65.585,86.845,95.889c62.046,51.348,123.114,78.995,125.683,80.146
        c2.203,0.988,4.779,0.988,6.981,0c0.689-0.308,5.586-2.524,13.577-6.588C251.254,463.709,206.371,438.825,160.959,401.243z" />
        </svg>
        </a>
      </li>


  @endauth

    <li class="navbar-item">
      <a href="/listings" class="navbar-link">
        <svg width="72px" height="32px" version="1.1" viewBox="144 144 512 512" xmlns="http://www.w3.org/2000/svg"
          class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
          <defs>
            <clipPath id="a">
              <path d="m148.09 148.09h503.81v503.81h-503.81z" />
            </clipPath>
          </defs>
          <g class="fa-group">

            <path fill="currentColor" style="opacity: 0.4;"
              d="m399.95 148.18c-11.914-0.26953-24.156 3.625-34.207 13.012-66.391 57.488-132.89 115.15-199.21 172.55l-0.22266 0.20312c-0.058594 0.050782-0.12109 0.10547-0.17969 0.15625-21.562 19.109-24.125 52.637-5.8594 75.023 14.027 17.188 36.957 22.785 56.609 15.809v192.55c0 18.824 15.512 34.34 34.34 34.34h80.125v-137.36c0-18.824 15.512-34.34 34.34-34.34h68.68c18.824 0 34.34 15.512 34.34 34.34v137.36h80.125c18.824 0 34.34-15.512 34.34-34.34l-0.003906-192.55c20.086 7.1406 43.523 1.0742 57.41-16.812 17.609-22.691 14.336-55.809-7.3086-74.445-69.863-60.535-141.12-121.85-201.1-173.55-8.7109-7.2461-20.301-11.668-32.215-11.938zm17.57 29.555c66.875 57.652 133.77 115.33 200.65 172.99 13.844 11.805 15.762 31.289 4.3164 43.348-10.117 13.027-27.746 14.938-40.105 4.5156l-0.023437-0.023438c-0.12891-0.10937-0.16797-0.13672-0.11328-0.089843l-174.74-151.01c-4.3008-3.7188-10.68-3.7188-14.98 0-58.094 50.215-116.23 100.41-174.31 150.64-12.129 10.75-29.812 9.2852-40.219-3.4648-10.367-12.711-8.7773-32.637 3.2852-43.371 66.59-57.691 133.18-115.38 199.78-173.06 5.8477-5.3398 12.23-7.0664 18.914-6.9258s12.98 2.6562 17.551 6.4531z" />

            <path fill="currentColor"
              d="m366.5 503.03c-6.5391 0-11.445 4.9062-11.445 11.445v137.36h91.57v-137.36c0-6.5391-4.9062-11.445-11.445-11.445z" />
          </g>
        </svg>
        <span class="link-text">Home</span>
      </a>
    </li>


  </ul>
</nav>