<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use STS\JWT\Facades\JWT;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;

class Account extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'account';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'account_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['username', 'name', 'email', 'password', 'phone', 'role', 'accessToken', 'avatar', 'userRecap'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        $userClaims = [
            'account_id' => $this->account_id,
            'username' => $this->username,
            'email' => $this->email,
            'role' => $this->role,
        ];
    
        // Custom payload data without default claims
        $customClaims = JWTFactory::customClaims($userClaims)->make();
    
        // Encode the custom payload into a token
        $token = JWTAuth::encode($customClaims);
    
        return $token;
    }

    public function updateAccessTokenIfNeeded()
    {
        if ($this->accessToken == null && $this->role == 'ADMIN') {
            $claims = $this->getJWTCustomClaims();
            $this->accessToken = $claims ?? null;
            $this->update(['accessToken' => $this->accessToken]);
        }
    }
}
