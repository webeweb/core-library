<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validation\Status;

use JsonSerializable;
use WBW\Library\Core\Validation\API\ValidationStatusInterface;

/**
 * Abstract validation status.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validation\Status
 * @abstract
 */
abstract class AbstractValidationStatus implements JsonSerializable, ValidationStatusInterface {

    /**
     * Get the code.
     *
     * @var int
     */
    private $code;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * Rule name.
     *
     * @var string
     */
    private $ruleName;

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
     * {@inheritdoc}
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * {@inheritdoc}
     */
    public function getRuleName() {
        return $this->ruleName;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize() {
        return $this->toArray();
    }

    /**
     * Set the code.
     *
     * @param int $code The code.
     * @return ValidationStatusInterface Returns this validation status.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string $message The message.
     * @return ValidationStatusInterface Returns this validation status.
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setRuleName($ruleName) {
        $this->ruleName = $ruleName;
        return $this;
    }

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns an array representing this instance.
     */
    public function toArray() {

        // Initialize the output.
        $output = [];

        $output["code"]     = $this->code;
        $output["message"]  = $this->message;
        $output["ruleName"] = $this->ruleName;

        // Return the output.
        return $output;
    }
}
