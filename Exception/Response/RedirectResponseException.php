<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\Response;

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Redirect response exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\Response
 */
class RedirectResponseException extends AbstractCoreException {

    /**
     * Arguments.
     *
     * @var array
     */
    private $arguments;

    /**
     * Route
     *
     * @var string
     */
    private $route;

    /**
     * Constructor.
     *
     * @param string $route The route.
     * @param array $arguments The arguments.
     * @param string $message The message.
     * @param Exception $previous The previous exception.
     */
    public function __construct($route = "", $arguments = [], $message = "", Exception $previous = null) {
        parent::__construct($message, $previous);
        $this->arguments = $arguments;
        $this->route     = $route;
    }

    /**
     * Get the route.
     *
     * @return array Returns the arguments.
     */
    public function getArguments() {
        return $this->arguments;
    }

    /**
     * Get the route.
     *
     * @return string Returns the route.
     */
    public function getRoute() {
        return $this->route;
    }

}
