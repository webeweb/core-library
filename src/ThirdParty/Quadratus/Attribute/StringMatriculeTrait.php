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
 * Matricule trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMatriculeTrait {

    /**
     * Matricule.
     *
     * @var string
     */
    private $matricule;

    /**
     * Get the matricule.
     *
     * @return string Returns the matricule.
     */
    public function getMatricule() {
        return $this->matricule;
    }

    /**
     * Set the matricule.
     *
     * @param string $matricule The matricule.
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;
        return $this;
    }
}
