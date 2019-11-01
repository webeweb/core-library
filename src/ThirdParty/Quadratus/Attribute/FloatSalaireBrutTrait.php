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
 * Salaire brut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireBrutTrait {

    /**
     * Salaire brut.
     *
     * @var float
     */
    private $salaireBrut;

    /**
     * Get the salaire brut.
     *
     * @return float Returns the salaire brut.
     */
    public function getSalaireBrut() {
        return $this->salaireBrut;
    }

    /**
     * Set the salaire brut.
     *
     * @param float $salaireBrut The salaire brut.
     */
    public function setSalaireBrut($salaireBrut) {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }
}
