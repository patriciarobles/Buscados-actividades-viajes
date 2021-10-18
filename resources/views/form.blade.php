<form class="search-form" method="post" action="{{ route('resultados')}}">
    {{ csrf_field() }}
    <div class="row">
    <div class="col-5">
      <label for="datepicker">¿Cuándo quieres realizar la actividad?</label>
      @error('date')
      <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <input required type="text" id="datepicker" name="date">
    </div>
    <div class="col-4">
        <label for="number_booking">¿Para cuántas personas?</label>
        @error('num')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input required type="number" id="number_booking" name="num" min=1 max=11>
    </div>
    <div class="col-3">
        <input type="submit" class="btn btn-primary" value="Buscar">
    </div>
</div>
  </form> 