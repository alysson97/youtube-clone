

<aside class="shadow">
  <?php echo yii\bootstrap5\Nav::widget([
    'options' => [
      'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
      [
        'label' => 'Dashboard',
        'url' => ['/site/index']
      ],
      [
        'label' => 'Videos',
        'url' => ['/video/index']
      ],
      [
        'label' => 'Comments',
        'url' => ['/comment/index']
      ]
    ]
  ]) ?>
</aside>








<!-- <div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100" style="width: 280px;">
    <span class="fs-4">Sidebar</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="#" class="nav-link active" aria-current="page">Home</a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">Dashboard</a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">Orders</a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">Products</a>
    </li>
    <li>
      <a href="#" class="nav-link link-dark">Customers</a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
  </div>
</div> -->