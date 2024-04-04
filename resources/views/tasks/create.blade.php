<x-layout>
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                
                <div class="formbold-form-wrapper">
                    <form action="{{route('tasks.store')}}" method="POST">
                        @csrf
                        <div class="formbold-mb-5">
                        <label class="formbold-form-label formbold-form-label-2">Cosa hai da fare?</label>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <input type="text" name="title" placeholder="Inserisci l'attività" class="formbold-form-input"/>
                        </div>

                        <div class="formbold-mb-5">
                        @error('note')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <input type="text" name="note" placeholder="Inserisci una nota (opzionale)" class="formbold-form-input"/>
                        </div>

                        <div>
                            <button class="formbold-btn">Aggiungi attività</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-layout>