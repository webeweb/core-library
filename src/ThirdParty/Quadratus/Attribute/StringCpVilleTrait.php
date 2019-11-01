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
 * Cp ville trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCpVilleTrait {

    /**
     * Cp ville.
     *
     * @var string
     */
    private $cpVille;

    /**
     * Get the cp ville.
     *
     * @return string Returns the cp ville.
     */
    public function getCpVille() {
        return $this->cpVille;
    }

    /**
     * Set the cp ville.
     *
     * @param string $cpVille The cp ville.
     */
    public function setCpVille($cpVille) {
        $this->cpVille = $cpVille;
        return $this;
    }
}
