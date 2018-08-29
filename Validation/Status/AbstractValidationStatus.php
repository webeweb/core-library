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

use WBW\Library\Core\Validation\API\ValidationStatusInterface;

/**
 * Abstract validation status.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validation\Status
 * @abstract
 */
abstract class AbstractValidationStatus implements ValidationStatusInterface {

    /**
     * Get the code.
     *
     * @var string
     */
    private $code;

    /**
     * Message.
     *
     * @var bool
     */
    private $message;

    /**
     * Constructor.
     *
     * @param int $code The code.
     * @param string $message The message.
     */
    protected function __construct($code, $message) {
        $this->setCode($code);
        $this->setMessage($message);
    }

    /**
     * Get the code.
     *
     * @return int Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the message.
     *
     * @return string Returns the message.
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set the code.
     *
     * @param int $code The code.
     * @return ValidationStatusInterface Returns this validation status.
     */
    protected function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return ValidationStatusInterface Returns this validation status.
     */
    protected function setMessage($message) {
        $this->message = $message;
        return $this;
    }

}
