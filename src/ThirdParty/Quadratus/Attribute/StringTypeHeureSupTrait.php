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
 * Type heure sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeHeureSupTrait {

    /**
     * Type heure sup.
     *
     * @var string
     */
    private $typeHeureSup;

    /**
     * Get the type heure sup.
     *
     * @return string Returns the type heure sup.
     */
    public function getTypeHeureSup() {
        return $this->typeHeureSup;
    }

    /**
     * Set the type heure sup.
     *
     * @param string $typeHeureSup The type heure sup.
     */
    public function setTypeHeureSup($typeHeureSup) {
        $this->typeHeureSup = $typeHeureSup;
        return $this;
    }
}
