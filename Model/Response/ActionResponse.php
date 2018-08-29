<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Response;

use JsonSerializable;

/**
 * Action response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Response
 */
class ActionResponse implements JsonSerializable {

    /**
     * Notify.
     *
     * @var string
     */
    private $notify;

    /**
     * Status.
     *
     * @var int
     */
    private $status;

    /**
     * Constructor.
     *
     * @param int $status The status.
     * @param string $notify The notify.
     */
    public function __construct($status = null, $notify = null) {
        $this->setNotify($notify);
        $this->setStatus($status);
    }

    /**
     * Get the notify.
     *
     * @return string Returns the notify.
     */
    public function getNotify() {
        return $this->notify;
    }

    /**
     * Get the status.
     *
     * @return int Returns the status.
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize() {
        return $this->toArray();
    }

    /**
     * Set the notify.
     *
     * @param string $notify The notify.
     * @return ActionResponse Returns this action response.
     */
    public function setNotify($notify) {
        $this->notify = $notify;
        return $this;
    }

    /**
     * Set the satuts.
     *
     * @param int $status The status.
     * @return ActionResponse Returns this action response.
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Convert into an array representing this instance.
     *
     * @return array Returns an array representing this instance.
     */
    public function toArray() {
        return [
            "status" => $this->getStatus(),
            "notify" => $this->getNotify(),
        ];
    }

}
