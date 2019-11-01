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
 * Fact bureau distributeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactBureauDistributeurTrait {

    /**
     * Fact bureau distributeur.
     *
     * @var string
     */
    private $factBureauDistributeur;

    /**
     * Get the fact bureau distributeur.
     *
     * @return string Returns the fact bureau distributeur.
     */
    public function getFactBureauDistributeur() {
        return $this->factBureauDistributeur;
    }

    /**
     * Set the fact bureau distributeur.
     *
     * @param string $factBureauDistributeur The fact bureau distributeur.
     */
    public function setFactBureauDistributeur($factBureauDistributeur) {
        $this->factBureauDistributeur = $factBureauDistributeur;
        return $this;
    }
}
