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
 * Treso comptes a exclure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTresoComptesAExclureTrait {

    /**
     * Treso comptes a exclure.
     *
     * @var string
     */
    private $tresoComptesAExclure;

    /**
     * Get the treso comptes a exclure.
     *
     * @return string Returns the treso comptes a exclure.
     */
    public function getTresoComptesAExclure() {
        return $this->tresoComptesAExclure;
    }

    /**
     * Set the treso comptes a exclure.
     *
     * @param string $tresoComptesAExclure The treso comptes a exclure.
     */
    public function setTresoComptesAExclure($tresoComptesAExclure) {
        $this->tresoComptesAExclure = $tresoComptesAExclure;
        return $this;
    }
}
