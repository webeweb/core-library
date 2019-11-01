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
 * Premiere annee facturee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPremiereAnneeFactureeTrait {

    /**
     * Premiere annee facturee.
     *
     * @var int
     */
    private $premiereAnneeFacturee;

    /**
     * Get the premiere annee facturee.
     *
     * @return int Returns the premiere annee facturee.
     */
    public function getPremiereAnneeFacturee() {
        return $this->premiereAnneeFacturee;
    }

    /**
     * Set the premiere annee facturee.
     *
     * @param int $premiereAnneeFacturee The premiere annee facturee.
     */
    public function setPremiereAnneeFacturee($premiereAnneeFacturee) {
        $this->premiereAnneeFacturee = $premiereAnneeFacturee;
        return $this;
    }
}
