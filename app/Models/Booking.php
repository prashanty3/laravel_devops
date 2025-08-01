<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pickup_location',
        'dropoff_location',
        'pickup_time',
        'car_type',
        'phone',
        'email',
        'occasion',
        'status',
        'user_id' // If you want to associate bookings with users
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'pickup_time' => 'datetime',
    ];

    /**
     * Default attribute values
     *
     * @var array
     */
    protected $attributes = [
        'status' => 'pending',
    ];

    /**
     * Get the car type in a readable format
     */
    public function getCarTypeNameAttribute()
    {
        return match($this->car_type) {
            'standard' => 'Standard Taxi',
            'luxury' => 'Luxury Vehicle',
            default => ucfirst($this->car_type),
        };
    }

    /**
     * Get the status in a readable format
     */
    public function getStatusNameAttribute()
    {
        return match($this->status) {
            'pending' => 'Pending Confirmation',
            'confirmed' => 'Confirmed',
            'completed' => 'Completed',
            'cancelled' => 'Cancelled',
            default => ucfirst($this->status),
        };
    }

    /**
     * Scope for pending bookings
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope for upcoming bookings
     */
    public function scopeUpcoming($query)
    {
        return $query->where('pickup_time', '>', now())
                     ->where('status', 'confirmed');
    }

    /**
     * Relationship with User model (if you have user system)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Route notifications for the mail channel
     */
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }
}