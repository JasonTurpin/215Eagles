<?php
/**
 * Model Represents the system's images
 * File : /api/app/Image.php
 *
 * PHP version 5.5
 *
 * @package  Troop 215
 * @author   Jason Turpin <jasonaturpin@gmail.com>
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Image Settings - Base model for an image
 *
 * @author   Jason Turpin <jasonaturpin@gmail.com>
 * @see      Illuminate\Database\Eloquent\Model
 */
class Image extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'image';

    /**
     * Primary key
     *
     * @var string
     */
    protected $primaryKey = 'img_id';

    /**
     * Adds a WHERE for a User ID
     *
     * @param \Illuminate\Database\Query\Builder $query  Query object
     * @param string                             $usr_id User ID
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeUser($query, $usr_id) {
        return $query->where('img_user', '=', $usr_id);
    }
}
/*
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| img_id             | int(11)      | NO   | PRI | NULL    | auto_increment |
| img_user           | int(11)      | YES  |     | NULL    |                |
| img_file           | varchar(255) | YES  |     | NULL    |                |
| img_description    | varchar(255) | YES  |     | NULL    |                |
| img_ishidden       | tinyint(4)   | YES  |     | 0       |                |
| img_hiddendatetime | datetime     | YES  |     | NULL    |                |
| created_at         | datetime     | YES  |     | NULL    |                |
| updated_at         | datetime     | YES  |     | NULL    |                |
+--------------------+--------------+------+-----+---------+----------------+
*/
