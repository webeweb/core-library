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
 * Compte debut subventions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteDebutSubventionsTrait {

    /**
     * Compte debut subventions.
     *
     * @var string
     */
    private $compteDebutSubventions;

    /**
     * Get the compte debut subventions.
     *
     * @return string Returns the compte debut subventions.
     */
    public function getCompteDebutSubventions() {
        return $this->compteDebutSubventions;
    }

    /**
     * Set the compte debut subventions.
     *
     * @param string $compteDebutSubventions The compte debut subventions.
     */
    public function setCompteDebutSubventions($compteDebutSubventions) {
        $this->compteDebutSubventions = $compteDebutSubventions;
        return $this;
    }
}
