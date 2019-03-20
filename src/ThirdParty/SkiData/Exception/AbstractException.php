<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\SkiData\Exception;

use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Abstract exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\SkiData\Exception
 * @abstract
 */
abstract class AbstractException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     */
    public function __construct($message) {
        parent::__construct($message);
    }
}
