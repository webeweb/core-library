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
 * Num idcc employeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumIdccEmployeurTrait {

    /**
     * Num idcc employeur.
     *
     * @var string
     */
    private $numIdccEmployeur;

    /**
     * Get the num idcc employeur.
     *
     * @return string Returns the num idcc employeur.
     */
    public function getNumIdccEmployeur() {
        return $this->numIdccEmployeur;
    }

    /**
     * Set the num idcc employeur.
     *
     * @param string $numIdccEmployeur The num idcc employeur.
     */
    public function setNumIdccEmployeur($numIdccEmployeur) {
        $this->numIdccEmployeur = $numIdccEmployeur;
        return $this;
    }
}
