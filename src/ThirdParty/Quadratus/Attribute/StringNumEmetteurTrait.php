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
 * Num emetteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumEmetteurTrait {

    /**
     * Num emetteur.
     *
     * @var string
     */
    private $numEmetteur;

    /**
     * Get the num emetteur.
     *
     * @return string Returns the num emetteur.
     */
    public function getNumEmetteur() {
        return $this->numEmetteur;
    }

    /**
     * Set the num emetteur.
     *
     * @param string $numEmetteur The num emetteur.
     */
    public function setNumEmetteur($numEmetteur) {
        $this->numEmetteur = $numEmetteur;
        return $this;
    }
}
