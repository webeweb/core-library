<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validator\Status;

use JsonSerializable;
use WBW\Library\Core\Validator\API\ValidationStatusInterface;

/**
 * Abstract validation status.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validator\Status
 * @abstract
 */
abstract class AbstractValidationStatus implements ValidationStatusInterface, JsonSerializable {

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
     * @param int|null $code The code.
     * @param string|null $message The message.
     */
    protected function __construct(?int $code, ?string $message) {
        $this->setCode($code);
        $this->setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?int {
        return $this->code;
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return [
            "code"     => $this->getCode(),
            "message"  => $this->getMessage(),
            "ruleName" => $this->getRuleName(),
        ];
    }

    /**
     * Set the code.
     *
     * @param int|null $code The code.
     * @return ValidationStatusInterface Returns this validation status.
     */
    public function setCode(?int $code): ValidationStatusInterface {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the message.
     *
     * @param string|null $message The message.
     * @return ValidationStatusInterface Returns this validation status.
     */
    public function setMessage(?string $message): ValidationStatusInterface {
        $this->message = $message;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setRuleName(?string $ruleName): ValidationStatusInterface {
        $this->ruleName = $ruleName;
        return $this;
    }
}
