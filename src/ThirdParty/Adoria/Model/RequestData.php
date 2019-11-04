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

use DateTime;

/**
 * Request data.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Adoria\Model
 */
class RequestData {

    /**
     * Analytic code.
     *
     * @var string
     */
    private $analyticCode;

    /**
     * Buy date max.
     *
     * @var DateTime
     */
    private $buyDateMax;

    /**
     * Identification key.
     *
     * @var string
     */
    private $identificationKey;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the analytic code.
     *
     * @return string Returns the analytic code.
     */
    public function getAnalyticCode() {
        return $this->analyticCode;
    }

    /**
     * Get the buy date max.
     *
     * @return DateTime Returns the buy date max.
     */
    public function getBuyDateMax() {
        return $this->buyDateMax;
    }

    /**
     * Get the identification key.
     *
     * @return string Returns the identification key.
     */
    public function getIdentificationKey() {
        return $this->identificationKey;
    }

    /**
     * Set the analytic code.
     *
     * @param string $analyticCode The analytic code.
     * @return RequestData Returns this request data.
     */
    public function setAnalyticCode($analyticCode) {
        $this->analyticCode = $analyticCode;
        return $this;
    }

    /**
     * Set the buy date max.
     *
     * @param DateTime|null $buyDateMax The buy date max.
     * @return RequestData Returns this request data.
     */
    public function setBuyDateMax(DateTime $buyDateMax = null) {
        $this->buyDateMax = $buyDateMax;
        return $this;
    }

    /**
     * Set the identification key.
     *
     * @param string $identificationKey The identification key.
     * @return RequestData Returns this request data.
     */
    public function setIdentificationKey($identificationKey) {
        $this->identificationKey = $identificationKey;
        return $this;
    }
}
