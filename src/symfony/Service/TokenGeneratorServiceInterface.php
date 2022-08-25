<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Service;

use Exception;

/**
 * Token generator service interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
interface TokenGeneratorServiceInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.service.token_generator";

    /**
     * Generate a token.
     *
     * @return string Returns the generated token.
     * @throws Exception Throws an exception if an error occurs.
     */
    public function generateToken(): string;
}
