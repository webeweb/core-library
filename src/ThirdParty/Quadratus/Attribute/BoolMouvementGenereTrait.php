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
 * Mouvement genere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMouvementGenereTrait {

    /**
     * Mouvement genere.
     *
     * @var bool
     */
    private $mouvementGenere;

    /**
     * Get the mouvement genere.
     *
     * @return bool Returns the mouvement genere.
     */
    public function getMouvementGenere() {
        return $this->mouvementGenere;
    }

    /**
     * Set the mouvement genere.
     *
     * @param bool $mouvementGenere The mouvement genere.
     */
    public function setMouvementGenere($mouvementGenere) {
        $this->mouvementGenere = $mouvementGenere;
        return $this;
    }
}
