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
 * Numero reclamation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroReclamationTrait {

    /**
     * Numero reclamation.
     *
     * @var int
     */
    private $numeroReclamation;

    /**
     * Get the numero reclamation.
     *
     * @return int Returns the numero reclamation.
     */
    public function getNumeroReclamation() {
        return $this->numeroReclamation;
    }

    /**
     * Set the numero reclamation.
     *
     * @param int $numeroReclamation The numero reclamation.
     */
    public function setNumeroReclamation($numeroReclamation) {
        $this->numeroReclamation = $numeroReclamation;
        return $this;
    }
}
