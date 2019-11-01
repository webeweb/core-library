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
 * Reclamation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReclamationTrait {

    /**
     * Reclamation.
     *
     * @var string
     */
    private $reclamation;

    /**
     * Get the reclamation.
     *
     * @return string Returns the reclamation.
     */
    public function getReclamation() {
        return $this->reclamation;
    }

    /**
     * Set the reclamation.
     *
     * @param string $reclamation The reclamation.
     */
    public function setReclamation($reclamation) {
        $this->reclamation = $reclamation;
        return $this;
    }
}
