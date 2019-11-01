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
 * Num objet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumObjetTrait {

    /**
     * Num objet.
     *
     * @var string
     */
    private $numObjet;

    /**
     * Get the num objet.
     *
     * @return string Returns the num objet.
     */
    public function getNumObjet() {
        return $this->numObjet;
    }

    /**
     * Set the num objet.
     *
     * @param string $numObjet The num objet.
     */
    public function setNumObjet($numObjet) {
        $this->numObjet = $numObjet;
        return $this;
    }
}
