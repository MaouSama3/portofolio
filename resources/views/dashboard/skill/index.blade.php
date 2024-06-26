@extends('dashboard/layout')

@section('content')

<form action="{{ route('skill.update')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="_language" class="form-label">Programing Language & Tools</label>
      <input type="text" class="form-control form-control-sm skill" name="_language" id="_language" aria-describedby="helpId" placeholder="Masukkan Programing Language & Tools" value="{{ get_meta_value('_language') }}">
  </div>

    <div class="mb-3">
        <label for="" class="form-label">Workflow</label>
        <textarea class="form-control summernote" name="_workflow" rows="10">{{ get_meta_value ('_workflow') }}</textarea>
      </div>

      <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
</form>

@endsection

@push('scrip')
<script>
  $(document).ready(function() {
      $('.skill').tokenfield({
          autocomplete: {
              source: [{!! $skill !!}],
              delay: 100
          },
          showAutocompleteOnFocus: true
      });
  });
</script>
    
@endpush