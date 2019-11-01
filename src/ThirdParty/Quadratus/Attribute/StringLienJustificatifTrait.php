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
 * Lien justificatif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLienJustificatifTrait {

    /**
     * Lien justificatif.
     *
     * @var string
     */
    private $lienJustificatif;

    /**
     * Get the lien justificatif.
     *
     * @return string Returns the lien justificatif.
     */
    public function getLienJustificatif() {
        return $this->lienJustificatif;
    }

    /**
     * Set the lien justificatif.
     *
     * @param string $lienJustificatif The lien justificatif.
     */
    public function setLienJustificatif($lienJustificatif) {
        $this->lienJustificatif = $lienJustificatif;
        return $this;
    }
}
