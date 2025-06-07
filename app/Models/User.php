<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';  // Only specify if different from 'users'

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id'; // Only specify if different from 'id'

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // Add other casts like 'is_admin' => 'boolean' if needed
    ];

    /**
     * Custom accessor for the email attribute.
     * Allows Laravel to use 'university_email' as 'email'
     */
    public function getEmailAttribute()
    {
        return $this->email;
    }

    /**
     * Custom mutator for the email attribute.
     * Ensures both 'email' and 'university_email' stay in sync
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = $value;
    }

    /**
     * Relationship: User has many appointments
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     * Check if user has a specific role
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Scope for students
     */
    public function scopeStudents($query)
    {
        return $query->where('role', 'student');
    }

    /**
     * Scope for staff
     */
    public function scopeStaff($query)
    {
        return $query->where('role', 'staff');
    }
}
