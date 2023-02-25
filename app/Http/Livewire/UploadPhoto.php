<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;

    protected $rules = [
        'photo' => 'mimes:jpg,jpeg,gif,png,bmp|max:1048',
    ];

    protected $messages = [
        'photo.required' => 'The image cannot be empty.',
        'photo.mimes' => 'The image must be one of type: jpg, jpeg, gif, png, bmp.',
        'photo.max' => 'The image has to be 2MB max.'
    ];

    protected $validationAttributes = [
        'photo' => 'image'
    ];

    public function updatedPhoto($propertyName)
    {
        $extension = pathinfo($propertyName->getFilename(), PATHINFO_EXTENSION);
        if (!in_array($extension, ['jpg', 'png', 'jpeg', 'bmp', 'gif'])) {
            $this->reset('photo');
        }

        $this->validate($this->rules);
    }

    public function save()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->validationAttributes);

        $new_file_name = time() . '-' . $this->photo->getClientOriginalName();
        $this->photo->storeAs('photos', $new_file_name, 'public');

        $this->reset('photo');

        session()->flash('message', 'Image has been successfully uploaded.');

        return redirect()->route('editor', ['image' => $new_file_name]);
    }
}
