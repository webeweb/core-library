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
 * Autre statut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutreStatutTrait {

    /**
     * Autre statut.
     *
     * @var string
     */
    private $autreStatut;

    /**
     * Get the autre statut.
     *
     * @return string Returns the autre statut.
     */
    public function getAutreStatut() {
        return $this->autreStatut;
    }

    /**
     * Set the autre statut.
     *
     * @param string $autreStatut The autre statut.
     */
    public function setAutreStatut($autreStatut) {
        $this->autreStatut = $autreStatut;
        return $this;
    }
}
