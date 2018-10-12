<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use App\Book;
use App\BorrowLog;
use App\Exceptions\BookException;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;


    public function roles()
    {
        return $this->belongsToMany('App\Role','user_role', 'user_id', 'role_id');
    }

    public function hasAnyRole($roles)
    {
        if(is_array($roles)){
            foreach ($roles as $role) {
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else {
            if ($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  

    public function borrow(Book $book)
    {
        // cek apakah masih ada stok buku
        if ($book->stock < 1) {
            throw new BookException("Buku $book->title sedang tidak tersedia.");
        }

        // cek apakah buku ini sedang dipinjam oleh user
        if($this->borrowLogs()->where('book_id',$book->id)->where('is_returned', 0)->count() > 0 ) {
            throw new BookException("Buku $book->title sedang Anda pinjam.");
        }

        $borrowLog = BorrowLog::create(['user_id'=>$this->id, 'book_id'=>$book->id]);
        return $borrowLog;
    }

    public function borrowLogs()
    {
        return $this->hasMany('App\BorrowLog');
    }

    // public function bahan()
    // {
    //     return $this->hasOne('App\Bahan');
    // }

    // public function customer()
    // {
    //     return $this->hasOne('App\Customer');
    // }

    // public function stok()
    // {
    //     return $this->hasOne('App\Stok');
    // }

    // public function komposisi()
    // {
    //     return $this->hasOne('App\Komposisi');
    // }

    // public function perencanaan()
    // {
    //     return $this->hasOne('App/Perencanaan');
    // }

   
}
