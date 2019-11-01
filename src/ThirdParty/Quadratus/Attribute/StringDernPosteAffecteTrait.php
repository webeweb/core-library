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
 * Dern poste affecte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDernPosteAffecteTrait {

    /**
     * Dern poste affecte.
     *
     * @var string
     */
    private $dernPosteAffecte;

    /**
     * Get the dern poste affecte.
     *
     * @return string Returns the dern poste affecte.
     */
    public function getDernPosteAffecte() {
        return $this->dernPosteAffecte;
    }

    /**
     * Set the dern poste affecte.
     *
     * @param string $dernPosteAffecte The dern poste affecte.
     */
    public function setDernPosteAffecte($dernPosteAffecte) {
        $this->dernPosteAffecte = $dernPosteAffecte;
        return $this;
    }
}
