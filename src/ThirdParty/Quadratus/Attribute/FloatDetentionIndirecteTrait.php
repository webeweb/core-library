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
 * Detention indirecte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDetentionIndirecteTrait {

    /**
     * Detention indirecte.
     *
     * @var float
     */
    private $detentionIndirecte;

    /**
     * Get the detention indirecte.
     *
     * @return float Returns the detention indirecte.
     */
    public function getDetentionIndirecte() {
        return $this->detentionIndirecte;
    }

    /**
     * Set the detention indirecte.
     *
     * @param float $detentionIndirecte The detention indirecte.
     */
    public function setDetentionIndirecte($detentionIndirecte) {
        $this->detentionIndirecte = $detentionIndirecte;
        return $this;
    }
}
