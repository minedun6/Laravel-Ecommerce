<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Photo
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $path
 * @property integer $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereUpdatedAt($value)
 */
class Photo extends Model
{

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = array('path', 'product_id');

    /**
     * Returns the product associated to the photo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
