<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<div id="sidebarMenu" class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
  <div id="logo">
    <a href="" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom"><img src="assets/imgs/growsystem.png" width="160" height="110" alt=""></a>
  </div>
    <div id="menu" class="menu-v">
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#employee-list" aria-expanded="false">
            Employee
          </button>
          <div class="collapse" id="employee-list" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="./index1.php?page=display">List Of Employees</a></li>
              <li><a href="">Employee1</a></li>
              <li><a href="">Employee2</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#item-list" aria-expanded="false">
            Items
          </button>    
          <div class="collapse" id="item-list" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="">Item1</a></li>
              <li><a href="">Item2</a></li>
              <li><a href="">Item3</a></li>
            </ul>
          </div>
        </li>

        <li><a href="">Inventory</a>
          <ul>
            <li><a href="">Inventory1</a></li>
            <li><a href="">Inventory2</a></li>
            <li><a href="">Inventory3</a></li>
          </ul>
        </li>
        <li><a href="">Customer</a>
          <ul>
            <li><a href="">Customer1</a></li>
            <li><a href="">Customer2</a></li>
            <li><a href="">Customer3</a></li>
          </ul>
          <li><a href="">Settings</a>
            </li>
            <li><a href="">Helps</a>
              <ul>
              <li><a href="">Hepl1</a></li>
              <li><a href="">Help2</a></li>
              <li><a href="">Hep3</a></li>
            </ul>
        </li>
        <li><a href="db/logout.php">Logout</a></li>
      </ul>
    </div>
</div>
</div>