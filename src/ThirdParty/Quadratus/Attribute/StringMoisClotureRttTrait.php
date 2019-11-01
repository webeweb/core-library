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
 * Mois cloture rtt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisClotureRttTrait {

    /**
     * Mois cloture rtt.
     *
     * @var string
     */
    private $moisClotureRtt;

    /**
     * Get the mois cloture rtt.
     *
     * @return string Returns the mois cloture rtt.
     */
    public function getMoisClotureRtt() {
        return $this->moisClotureRtt;
    }

    /**
     * Set the mois cloture rtt.
     *
     * @param string $moisClotureRtt The mois cloture rtt.
     */
    public function setMoisClotureRtt($moisClotureRtt) {
        $this->moisClotureRtt = $moisClotureRtt;
        return $this;
    }
}
