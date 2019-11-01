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
 * Inscrit rep metier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInscritRepMetierTrait {

    /**
     * Inscrit rep metier.
     *
     * @var bool
     */
    private $inscritRepMetier;

    /**
     * Get the inscrit rep metier.
     *
     * @return bool Returns the inscrit rep metier.
     */
    public function getInscritRepMetier() {
        return $this->inscritRepMetier;
    }

    /**
     * Set the inscrit rep metier.
     *
     * @param bool $inscritRepMetier The inscrit rep metier.
     */
    public function setInscritRepMetier($inscritRepMetier) {
        $this->inscritRepMetier = $inscritRepMetier;
        return $this;
    }
}
