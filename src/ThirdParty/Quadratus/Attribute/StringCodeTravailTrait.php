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
 * Code travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTravailTrait {

    /**
     * Code travail.
     *
     * @var string
     */
    private $codeTravail;

    /**
     * Get the code travail.
     *
     * @return string Returns the code travail.
     */
    public function getCodeTravail() {
        return $this->codeTravail;
    }

    /**
     * Set the code travail.
     *
     * @param string $codeTravail The code travail.
     */
    public function setCodeTravail($codeTravail) {
        $this->codeTravail = $codeTravail;
        return $this;
    }
}
