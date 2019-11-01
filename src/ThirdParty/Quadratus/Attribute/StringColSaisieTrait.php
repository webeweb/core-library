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
 * Col saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringColSaisieTrait {

    /**
     * Col saisie.
     *
     * @var string
     */
    private $colSaisie;

    /**
     * Get the col saisie.
     *
     * @return string Returns the col saisie.
     */
    public function getColSaisie() {
        return $this->colSaisie;
    }

    /**
     * Set the col saisie.
     *
     * @param string $colSaisie The col saisie.
     */
    public function setColSaisie($colSaisie) {
        $this->colSaisie = $colSaisie;
        return $this;
    }
}
