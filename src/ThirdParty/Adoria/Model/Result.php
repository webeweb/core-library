<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Adoria\Model;

/**
 * Result.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Adoria\Model
 */
class Result {

    /**
     * Data.
     *
     * @var Line[]
     */
    private $data;

    /**
     * Errors.
     *
     * @var string[]
     */
    private $errors;

    /**
     * Return code.
     *
     * @var int
     */
    private $returnCode;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setData([]);
        $this->setErrors([]);
    }

    /**
     * Get the data.
     *
     * @return Line[] Returns the data.
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Get the errors.
     *
     * @return string[] Returns the errors.
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * Get the return code.
     *
     * @return int Returns the return code.
     */
    public function getReturnCode() {
        return $this->returnCode;
    }

    /**
     * Determines if this result has a data.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasData() {
        return 0 < count($this->getData());
    }

    /**
     * Determines if this result has an error.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function hasError() {
        return 0 === $this->returnCode;
    }

    /**
     * Set the data.
     *
     * @param Line[] $data The data.
     * @return Result Returns this result.
     */
    public function setData(array $data) {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the errors.
     *
     * @param string[] $errors The errors.
     * @return Result Returns this result.
     */
    public function setErrors(array $errors = []) {
        $this->errors = $errors;
        return $this;
    }

    /**
     * Set the return code.
     *
     * @param int $returnCode The return code.
     * @return Result Returns this result.
     */
    public function setReturnCode($returnCode) {
        $this->returnCode = $returnCode;
        return $this;
    }
}
