<div class="container mt-5">
    <div class="row">
        <div class="col-sm-7">
            <div>
                <h2>Image Editor</h2>
                <p>Laravel 10 image editor. Upload your image, draw free shapes on it, and then, download it!</p>
            </div>

            <!-- Photo -->
            <form id="form-photo-upload" class="form-inline mt-5" method="post" enctype="multipart/form-data" wire:submit.prevent="save">
                @csrf

                <!-- File Input -->
                <div class="row">
                    <div class="col">Image File:</div>
                </div>
                <div class="row">
                    <div class="col">
                        <input id="photo" type="file" name="photo" class="form-control" wire:model="photo">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col h6 text-muted"><small>Filetypes: jpg, jpeg, gif, png, bmp. Size: 2MB Max</small></div>
                </div>

                <div class="row">
                    <div class="col">
                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <!-- Success upload -->
                @if (session()->has('message'))
                <div class="alert alert-success mt-2">
                    {{ session('message') }}
                </div>
                @endif

                <!-- Image preview -->
                @if ($photo)
                <hr>
                <div class="text-muted"><small>Preview only (Not yet uploaded)</small></div>
                <img src="{{ $photo->temporaryUrl() }}" width="100" class="mt-2">
                @endif
            </form>
        </div>

        <!-- Result -->
        <!-- <div class="col-sm-4 ms-auto">
            <div class="card">
                <div class="card-header">
                    Results
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>

                </div>
            </div>
        </div> -->
    </div>
</div>