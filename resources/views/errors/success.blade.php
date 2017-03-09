
@if(Session::has('success')))
<div class="vlaign-wrapper">
    <div class="row">
        <div class="col s12">
          <div class="card" style="background-color: #26A69A">
            <div class="card-content white-text">
              <span class="card-title">{{ Session::get('success')}}</span>
              <p></p>
            </div>
          </div>
        </div>
      </div>
  </div>
@endif
@if(Session::has('success1')))
<div class="vlaign-wrapper">
    <div class="row">
        <div class="col s12">
          <div class="card" style="background-color: #26A69A">
            <div class="card-content white-text">
              <span class="card-title">{{ Session::get('success1')}}</span>
              <p></p>
            </div>
          </div>
        </div>
      </div>
  </div>
@endif