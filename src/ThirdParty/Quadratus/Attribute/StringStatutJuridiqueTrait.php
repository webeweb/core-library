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
 * Statut juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringStatutJuridiqueTrait {

    /**
     * Statut juridique.
     *
     * @var string
     */
    private $statutJuridique;

    /**
     * Get the statut juridique.
     *
     * @return string Returns the statut juridique.
     */
    public function getStatutJuridique() {
        return $this->statutJuridique;
    }

    /**
     * Set the statut juridique.
     *
     * @param string $statutJuridique The statut juridique.
     */
    public function setStatutJuridique($statutJuridique) {
        $this->statutJuridique = $statutJuridique;
        return $this;
    }
}
