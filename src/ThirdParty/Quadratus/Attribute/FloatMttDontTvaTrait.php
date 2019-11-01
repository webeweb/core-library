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
 * Mtt dont tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttDontTvaTrait {

    /**
     * Mtt dont tva.
     *
     * @var float
     */
    private $mttDontTva;

    /**
     * Get the mtt dont tva.
     *
     * @return float Returns the mtt dont tva.
     */
    public function getMttDontTva() {
        return $this->mttDontTva;
    }

    /**
     * Set the mtt dont tva.
     *
     * @param float $mttDontTva The mtt dont tva.
     */
    public function setMttDontTva($mttDontTva) {
        $this->mttDontTva = $mttDontTva;
        return $this;
    }
}
