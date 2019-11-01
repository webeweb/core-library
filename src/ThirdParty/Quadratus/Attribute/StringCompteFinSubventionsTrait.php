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
 * Compte fin subventions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteFinSubventionsTrait {

    /**
     * Compte fin subventions.
     *
     * @var string
     */
    private $compteFinSubventions;

    /**
     * Get the compte fin subventions.
     *
     * @return string Returns the compte fin subventions.
     */
    public function getCompteFinSubventions() {
        return $this->compteFinSubventions;
    }

    /**
     * Set the compte fin subventions.
     *
     * @param string $compteFinSubventions The compte fin subventions.
     */
    public function setCompteFinSubventions($compteFinSubventions) {
        $this->compteFinSubventions = $compteFinSubventions;
        return $this;
    }
}
