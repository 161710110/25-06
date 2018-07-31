<section class="service-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="section-title">
                <h3 class="text-white"></h3>
              </div>
            </div>
          </div>
          <div class="card">
          <div class="card-body">
              <h4 class="card-title">Rekap kelas </h4>
              <div class="default-select">
        <form action="{{ route('isirekap') }}" method="post">
        {{csrf_field()}}
        <label class="control-label">Dari Tanggal</label>
        <input type="date" name="a" required="">
        <label class="control-label">Sampai Tanggal</label>
        <input type="date" name="b" required="">
              <select name="c" required="">
                @foreach($kelas as $aa)
                <option value="{{$aa->id}}">{{$aa->nama}}
                </option>
                @endforeach
              </select>
        <input type="submit" name="submit" class="btn btn-light" value="Submit">
        </form> 
        </div>
      </div>
        </div>
      </section>