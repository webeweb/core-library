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
 * Contrat evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContratEvoTrait {

    /**
     * Contrat evo.
     *
     * @var string
     */
    private $contratEvo;

    /**
     * Get the contrat evo.
     *
     * @return string Returns the contrat evo.
     */
    public function getContratEvo() {
        return $this->contratEvo;
    }

    /**
     * Set the contrat evo.
     *
     * @param string $contratEvo The contrat evo.
     */
    public function setContratEvo($contratEvo) {
        $this->contratEvo = $contratEvo;
        return $this;
    }
}
