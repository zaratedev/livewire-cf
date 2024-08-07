<div>
    <input type="text" id="datepicker">
</div>

{{-- Assets carga al inicio, antes de script --}}
@assets
{{-- JS, CSS --}}
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

 {{-- $wire  --}}
@script
<script>
    console.log('log');
    new Pikaday({ field: document.getElementById('datepicker')});

    // $wire.on('')
    $wire.dispatch('post-created', {});
</script>
@endscript