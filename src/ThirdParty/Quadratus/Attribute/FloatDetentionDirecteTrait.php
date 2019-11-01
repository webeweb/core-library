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
 * Detention directe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDetentionDirecteTrait {

    /**
     * Detention directe.
     *
     * @var float
     */
    private $detentionDirecte;

    /**
     * Get the detention directe.
     *
     * @return float Returns the detention directe.
     */
    public function getDetentionDirecte() {
        return $this->detentionDirecte;
    }

    /**
     * Set the detention directe.
     *
     * @param float $detentionDirecte The detention directe.
     */
    public function setDetentionDirecte($detentionDirecte) {
        $this->detentionDirecte = $detentionDirecte;
        return $this;
    }
}
