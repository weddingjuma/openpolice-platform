<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2007 - 2017 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/timble/openpolice-platform
 */

namespace Nooku\Library;

/**
 * Unauthorized Http Exception
 *
 * The request requires user authentication
 *
 * @author  Johan Janssens <https://github.com/johanjanssens>
 * @package Nooku\Library\Http
 */
class HttpExceptionUnauthorized extends HttpExceptionAbstract
{
    protected $code = HttpResponse::UNAUTHORIZED;
}