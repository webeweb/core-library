<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Cum h service trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHServiceTrait {

    /**
     * Cum h service.
     *
     * @var float
     */
    private $cumHService;

    /**
     * Get the cum h service.
     *
     * @return float Returns the cum h service.
     */
    public function getCumHService() {
        return $this->cumHService;
    }

    /**
     * Set the cum h service.
     *
     * @param float $cumHService The cum h service.
     */
    public function setCumHService($cumHService) {
        $this->cumHService = $cumHService;
        return $this;
    }
}
