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
 * Statut part autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringStatutPartAutreTrait {

    /**
     * Statut part autre.
     *
     * @var string
     */
    private $statutPartAutre;

    /**
     * Get the statut part autre.
     *
     * @return string Returns the statut part autre.
     */
    public function getStatutPartAutre() {
        return $this->statutPartAutre;
    }

    /**
     * Set the statut part autre.
     *
     * @param string $statutPartAutre The statut part autre.
     */
    public function setStatutPartAutre($statutPartAutre) {
        $this->statutPartAutre = $statutPartAutre;
        return $this;
    }
}
