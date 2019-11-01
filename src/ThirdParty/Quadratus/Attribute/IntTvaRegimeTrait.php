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
 * Tva regime trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTvaRegimeTrait {

    /**
     * Tva regime.
     *
     * @var int
     */
    private $tvaRegime;

    /**
     * Get the tva regime.
     *
     * @return int Returns the tva regime.
     */
    public function getTvaRegime() {
        return $this->tvaRegime;
    }

    /**
     * Set the tva regime.
     *
     * @param int $tvaRegime The tva regime.
     */
    public function setTvaRegime($tvaRegime) {
        $this->tvaRegime = $tvaRegime;
        return $this;
    }
}
