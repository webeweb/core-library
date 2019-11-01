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
 * Code csg taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCsgTauxTrait {

    /**
     * Code csg taux.
     *
     * @var string
     */
    private $codeCsgTaux;

    /**
     * Get the code csg taux.
     *
     * @return string Returns the code csg taux.
     */
    public function getCodeCsgTaux() {
        return $this->codeCsgTaux;
    }

    /**
     * Set the code csg taux.
     *
     * @param string $codeCsgTaux The code csg taux.
     */
    public function setCodeCsgTaux($codeCsgTaux) {
        $this->codeCsgTaux = $codeCsgTaux;
        return $this;
    }
}
