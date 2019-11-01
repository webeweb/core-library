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
 * Vir comptable centre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVirComptableCentreTrait {

    /**
     * Vir comptable centre.
     *
     * @var string
     */
    private $virComptableCentre;

    /**
     * Get the vir comptable centre.
     *
     * @return string Returns the vir comptable centre.
     */
    public function getVirComptableCentre() {
        return $this->virComptableCentre;
    }

    /**
     * Set the vir comptable centre.
     *
     * @param string $virComptableCentre The vir comptable centre.
     */
    public function setVirComptableCentre($virComptableCentre) {
        $this->virComptableCentre = $virComptableCentre;
        return $this;
    }
}
