<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validation\Status;

/**
 * Generic validation status.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validation\Status
 */
class GenericValidationStatus extends AbstractValidationStatus {

    /**
     * Constructor.
     *
     * @param int $code The code.
     * @param string $message The message.
     */
    public function __construct($code, $message) {
        parent::__construct($code, $message);
    }

}
