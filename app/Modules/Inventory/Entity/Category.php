<?php

namespace App\Modules\Inventory\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property string code
 */

class Category extends Model
{
    // Provide Name
    protected $table="inv_category";
}
