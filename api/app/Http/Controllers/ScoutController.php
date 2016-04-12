<?php
namespace App\Http\Controllers;
use App\Scout;
use Laravel\Lumen\Routing\Controller as BaseController;
/**
 * ScoutController - Application controller
 * File : /api/app/Http/Controllers/ScoutController.php
 *
 * PHP version 5.5
 *
 * @package  Troop 215
 * @author   Jason Turpin <jasonaturpin@gmail.com>
 */

/**
 * ScoutController - Application controller
 *
 * @package  Troop 215
 * @author   Jason Turpin <jasonaturpin@gmail.com>
 */
class ScoutController extends BaseController {
    /**
     * Constructor Method
     */
    public function __construct() {}

    /**
     * Fetches all boy scouts
     *
     * @return Response
     */
    public function do_fetchScouts() {
        return Scout::orderBy('sc_number')->with('image')->get();
    }
}
