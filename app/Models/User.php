<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Mentor;
use App\Models\Program;
use App\Models\Student;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];



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
    public function boughtPrograms()
    {
        return $this->belongsToMany(Program::class, 'bought_programs')->withTimestamps();
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function mentor()
    {
        return $this->hasOne(Mentor::class);
    }
    public function student()
    {
        return $this->hasOne(Student::class);
    }
    public function isMentor()
    {
        return $this->role === 'mentor';
    }

    public function isStudent()
    {
        return $this->role === 'student';
    }
}
