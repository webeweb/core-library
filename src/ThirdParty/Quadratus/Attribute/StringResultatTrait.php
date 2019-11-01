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
 * Resultat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringResultatTrait {

    /**
     * Resultat.
     *
     * @var string
     */
    private $resultat;

    /**
     * Get the resultat.
     *
     * @return string Returns the resultat.
     */
    public function getResultat() {
        return $this->resultat;
    }

    /**
     * Set the resultat.
     *
     * @param string $resultat The resultat.
     */
    public function setResultat($resultat) {
        $this->resultat = $resultat;
        return $this;
    }
}
