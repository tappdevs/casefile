<nav class="sidebar-nav">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= $this->request->webroot ?>">
        <i class="nav-icon icon-speedometer"></i> Dashboard
      </a>
    </li>
    <li class="nav-title">Theme</li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $this->Url->build(["controller" => "Mamlas","action" => "index"]); ?>">
        <i class="nav-icon icon-drop"></i> মামলা সমূহ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $this->Url->build(["controller" => "Dharas","action" => "index"]); ?>">
        <i class="nav-icon icon-drop"></i> ধারা সমূহ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $this->Url->build(["controller" => "Badis","action" => "index"]); ?>">
        <i class="nav-icon icon-drop"></i> অভিযোগকারী</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= $this->Url->build(["controller" => "Ashamis","action" => "index"]); ?>">
        <i class="nav-icon icon-drop"></i> ভুক্তভূগী</a>
    </li>
  </ul>
</nav>