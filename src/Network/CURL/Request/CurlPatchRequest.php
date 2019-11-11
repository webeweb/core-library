<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Request;

use InvalidArgumentException;
use WBW\Library\Core\Network\CURL\Configuration\CurlConfiguration;

/**
 * cURL "PATCH" request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Request
 */
class CurlPatchRequest extends AbstractCurlRequest {

    /**
     * Constructor.
     *
     * @param CurlConfiguration $configuration The configuration.
     * @param string $resourcePath The resource path.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    public function __construct(CurlConfiguration $configuration, $resourcePath) {
        parent::__construct(self::HTTP_METHOD_PATCH, $configuration, $resourcePath);
    }
}
