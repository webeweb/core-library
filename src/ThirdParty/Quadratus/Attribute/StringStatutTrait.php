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
 * Statut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringStatutTrait {

    /**
     * Statut.
     *
     * @var string
     */
    private $statut;

    /**
     * Get the statut.
     *
     * @return string Returns the statut.
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Set the statut.
     *
     * @param string $statut The statut.
     */
    public function setStatut($statut) {
        $this->statut = $statut;
        return $this;
    }
}
