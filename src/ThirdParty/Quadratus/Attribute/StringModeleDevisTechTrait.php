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
 * Modele devis tech trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleDevisTechTrait {

    /**
     * Modele devis tech.
     *
     * @var string
     */
    private $modeleDevisTech;

    /**
     * Get the modele devis tech.
     *
     * @return string Returns the modele devis tech.
     */
    public function getModeleDevisTech() {
        return $this->modeleDevisTech;
    }

    /**
     * Set the modele devis tech.
     *
     * @param string $modeleDevisTech The modele devis tech.
     */
    public function setModeleDevisTech($modeleDevisTech) {
        $this->modeleDevisTech = $modeleDevisTech;
        return $this;
    }
}
