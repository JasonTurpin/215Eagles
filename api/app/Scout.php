<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * Eagle Scout
 * File : /app/Scout.php
 *
 * PHP version 5.5
 *
 * @package  Troop 215
 * @author   Jason Turpin <jasonaturpin@gmail.com>
 */

/**
 * Scout - Base model for an eagle scout
 *
 * @author   Jason Turpin <jasonaturpin@gmail.com>
 * @see      Illuminate\Database\Eloquent\Model
 */
class Scout extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table      = 'scouts';

    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'sc_id';

    /**
     * Builds a relationship with an image
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function image() {
        return $this->hasOne('\App\Image', 'img_id', 'sc_image');
    }
}
/*
+--------------+--------------+------+-----+---------+----------------+
| Field        | Type         | Null | Key | Default | Extra          |
+--------------+--------------+------+-----+---------+----------------+
| sc_id        | int(11)      | NO   | PRI | NULL    | auto_increment |
| sc_name      | varchar(255) | NO   |     | NULL    |                |
| sc_number    | tinyint(4)   | NO   |     | NULL    |                |
| sc_date      | date         | NO   |     | NULL    |                |
| sc_master_id | int(11)      | NO   |     | NULL    |                |
| created_at   | datetime     | YES  |     | NULL    |                |
| updated_at   | datetime     | YES  |     | NULL    |                |
+--------------+--------------+------+-----+---------+----------------+
*/
