<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'password',
        'phone',
        'birthday',
        'city',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getPhotoAttribute()
    {
        if (is_null($this->avatar)) {
            return asset('images/cody.jpg');
        }

        return Storage::url($this->avatar);
    }

    public function updateProfilePhoto(UploadedFile $photo)
    {
        // $this->avatar = image.png
        tap($this->avatar, function ($previous) use ($photo) {
            // $previous = 'image.png';
            $this->forceFill([
                'avatar' => $photo->store('avatars', ['disk' => 'public'])
            ]);

            // $this->avatar = 'nueva-image.png';
            if($previous) {
                Storage::disk('public')->delete($previous);
            }
        });
    }
}
