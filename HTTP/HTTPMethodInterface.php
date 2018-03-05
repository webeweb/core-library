<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\HTTP;

/**
 * HTTP method interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\HTTP
 */
interface HTTPMethodInterface {

    /**
     * Method "DELETE".
     *
     * @var string
     */
    const METHOD_DELETE = "DELETE";

    /**
     * Method "GET".
     *
     * @var string
     */
    const METHOD_GET = "GET";

    /**
     * Method "HEAD".
     *
     * @var string
     */
    const METHOD_HEAD = "HEAD";

    /**
     * Method "OPTIONS".
     *
     * @var string
     */
    const METHOD_OPTIONS = "OPTIONS";

    /**
     * Method "PATCH".
     *
     * @var string
     */
    const METHOD_PATCH = "PATCH";

    /**
     * Method "POST".
     *
     * @var string
     */
    const METHOD_POST = "POST";

    /**
     * Method "PUT".
     *
     * @var string
     */
    const METHOD_PUT = "PUT";

}
