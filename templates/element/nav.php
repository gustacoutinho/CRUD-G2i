<nav class="navbar navbar-expand-lg navbar-light ">

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item active">
          <a class="nav-link" href=<?= $this->Url->build(['controller'=>'brands','action'=>'index']);?>>Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href=<?= $this->Url->build(['controller'=>'cars','action'=>'index']);?>>Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?= $this->Url->build(['controller'=>'brands','action'=>'index']);?>>Brands</a>
        </li>
      </ul>
    </div>

  </nav>