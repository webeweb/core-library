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
 * Centre payeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCentrePayeurTrait {

    /**
     * Centre payeur.
     *
     * @var string
     */
    private $centrePayeur;

    /**
     * Get the centre payeur.
     *
     * @return string Returns the centre payeur.
     */
    public function getCentrePayeur() {
        return $this->centrePayeur;
    }

    /**
     * Set the centre payeur.
     *
     * @param string $centrePayeur The centre payeur.
     */
    public function setCentrePayeur($centrePayeur) {
        $this->centrePayeur = $centrePayeur;
        return $this;
    }
}
