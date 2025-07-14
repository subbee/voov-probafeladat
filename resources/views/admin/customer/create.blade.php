@extends("admin.layout.app")

@section("title", "Új ügyfél hozzáadása")
@section("content")
    <form action="{{route("customers.store")}}" method="post" class="needs-validation" novalidate>
        @csrf
        <div class="rounded-container">

            <div class="mw-340 m-auto">
                <div class="form-group">
                    <label for="name-input">Név</label>
                    <input type="text" name="name" id="name-input" class="form-control" placeholder="Add meg a teljes nevet" required>
                    <div class="invalid-feedback">
                        Adj meg nevet!
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-input">Email</label>
                    <input type="email" name="email" id="email-input" class="form-control" placeholder="Add meg az email címet" required>
                    <div class="invalid-feedback">
                        Adj meg email címet!
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone-input">Telefonszám</label>
                    <input type="text" name="phone" id="phone-input" class="form-control" placeholder="Add meg a telefonszámot" required>
                    <div class="invalid-feedback">
                        Adj meg telefonszámot!
                    </div>
                </div>
                <div class="form-group">
                    <label>Profilkép</label>
                    <div>
                        <div class="row">

                        @for($i=1; $i<=3; $i++)
                            <div class="col-4">
                                <label>
                                    <input type="radio" name="avatar" value="/assets/images/avatar_0{{$i}}.png"  class="avatar" @if($i==1) checked @endif >
                                    <img src="/assets/images/avatar_0{{$i}}.png" alt="Avatar {{$i}}" class=" rounded-circle img-fluid">
                                </label>
                            </div>

                        @endfor
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="mt--24 text-center">
            <button class="btn btn-primary mw-340">Ügyfél mentése</button>
        </div>


    </form>

@endsection

@push("scripts")
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endpush
