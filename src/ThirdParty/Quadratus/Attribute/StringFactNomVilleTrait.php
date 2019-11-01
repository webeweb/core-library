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
 * Fact nom ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactNomVilleTrait {

    /**
     * Fact nom ville.
     *
     * @var string
     */
    private $factNomVille;

    /**
     * Get the fact nom ville.
     *
     * @return string Returns the fact nom ville.
     */
    public function getFactNomVille() {
        return $this->factNomVille;
    }

    /**
     * Set the fact nom ville.
     *
     * @param string $factNomVille The fact nom ville.
     */
    public function setFactNomVille($factNomVille) {
        $this->factNomVille = $factNomVille;
        return $this;
    }
}
