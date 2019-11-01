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
 * Gestion pointeuse q fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPointeuseQFactTrait {

    /**
     * Gestion pointeuse q fact.
     *
     * @var bool
     */
    private $gestionPointeuseQFact;

    /**
     * Get the gestion pointeuse q fact.
     *
     * @return bool Returns the gestion pointeuse q fact.
     */
    public function getGestionPointeuseQFact() {
        return $this->gestionPointeuseQFact;
    }

    /**
     * Set the gestion pointeuse q fact.
     *
     * @param bool $gestionPointeuseQFact The gestion pointeuse q fact.
     */
    public function setGestionPointeuseQFact($gestionPointeuseQFact) {
        $this->gestionPointeuseQFact = $gestionPointeuseQFact;
        return $this;
    }
}
