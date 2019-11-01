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
 * Reference facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReferenceFactureTrait {

    /**
     * Reference facture.
     *
     * @var string
     */
    private $referenceFacture;

    /**
     * Get the reference facture.
     *
     * @return string Returns the reference facture.
     */
    public function getReferenceFacture() {
        return $this->referenceFacture;
    }

    /**
     * Set the reference facture.
     *
     * @param string $referenceFacture The reference facture.
     */
    public function setReferenceFacture($referenceFacture) {
        $this->referenceFacture = $referenceFacture;
        return $this;
    }
}
