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
 * Mois anniv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisAnnivTrait {

    /**
     * Mois anniv.
     *
     * @var string
     */
    private $moisAnniv;

    /**
     * Get the mois anniv.
     *
     * @return string Returns the mois anniv.
     */
    public function getMoisAnniv() {
        return $this->moisAnniv;
    }

    /**
     * Set the mois anniv.
     *
     * @param string $moisAnniv The mois anniv.
     */
    public function setMoisAnniv($moisAnniv) {
        $this->moisAnniv = $moisAnniv;
        return $this;
    }
}
