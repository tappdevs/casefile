

<div class="content-area">
  <h3 class="mb-2">মামলা খুজুন</h3>
  <div class="course-locator alert-warning px-3 pb-3 pt-2 mb-4 shadow-sm">
    <form action="">
      <div class="row">
        <div class="col-md-4 mb-3">
          <?= $this->Form->control('ashami_name', ['class' => 'form-control','placeholder'=>'আসামীর নাম']); ?>
        </div>
        <div class="col-md-4 mb-3">
          <?= $this->Form->control('ashami_father', ['class' => 'form-control','placeholder'=>'আসামীর বাবার নাম']); ?>
        </div>
        <div class="col-md-4 mb-3">
          <?= $this->Form->control('mamla_no', ['options' => ['ashami', 'ashami', 'ashami', 'ashami', 'ashami', 'ashami'], 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-4 mb-3">
          <?= $this->Form->control('mamla_daterange', ['data-date' => 'daterange', 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-4 mb-3">
          <?= $this->Form->control('mamla_dhara', ['options' => ['১২৩', 'ashami', 'ashami', 'ashami', 'ashami', 'ashami'], 'class' => 'form-control', 'multiple']); ?>
        </div>
        <div class="col-md-4 mb-3">
          <?= $this->Form->control('mamla_thana', ['options' => ['১২৩', 'ashami', 'ashami', 'ashami', 'ashami', 'ashami'], 'class' => 'form-control']); ?>
        </div>
        <div class="col-md-12">
          <label for="search_by">Keyword</label>
          <div class="input-group mb-0">
            <input type="text" class="form-control" placeholder="Type to search courses" autofocus>
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" id="button-addon2">
                <i class="fa fa-search"></i>
              </button>
              <button class="btn btn-danger" type="reset" title="Reset" data-toggle="tooltip">
                <i class="fa fa-refresh"></i>
              </button>
            </div>
          </div>

        </div>
      </div>
    </form>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card alert-info shadow-sm">

          <div class="card-body">
            <h6 class="card-title text-truncate fw-semibold">
              <a href="#">TAPPWARE Solutions Limited</a>
            </h6>
            <h6 class="card-subtitle mb-2 text-info">
              <i class="far fa-calendar-alt"></i> January 2nd, 2019
            </h6>
            <p class="card-text mb-0">
              Probashi Kalyan Bhaban (Level-16), 71-72 Old Elephant Road,
              <br> Eskaton Garden, Dhaka-1000.
            </p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="line-height-12">
                <p class="mb-0">Md. Rahman Sadik</p>
                <small>Senior Instructor, It Executive</small>
              </div>
              <p class="mb-0"><i class="fa fa-phone text-primary mr-1"></i> 02-9121212, 01912451547</p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>