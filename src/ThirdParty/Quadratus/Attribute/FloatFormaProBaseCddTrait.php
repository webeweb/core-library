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
 * Forma pro base cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatFormaProBaseCddTrait {

    /**
     * Forma pro base cdd.
     *
     * @var float
     */
    private $formaProBaseCdd;

    /**
     * Get the forma pro base cdd.
     *
     * @return float Returns the forma pro base cdd.
     */
    public function getFormaProBaseCdd() {
        return $this->formaProBaseCdd;
    }

    /**
     * Set the forma pro base cdd.
     *
     * @param float $formaProBaseCdd The forma pro base cdd.
     */
    public function setFormaProBaseCdd($formaProBaseCdd) {
        $this->formaProBaseCdd = $formaProBaseCdd;
        return $this;
    }
}
