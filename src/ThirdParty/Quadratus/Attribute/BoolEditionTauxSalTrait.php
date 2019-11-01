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
 * Edition taux sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionTauxSalTrait {

    /**
     * Edition taux sal.
     *
     * @var bool
     */
    private $editionTauxSal;

    /**
     * Get the edition taux sal.
     *
     * @return bool Returns the edition taux sal.
     */
    public function getEditionTauxSal() {
        return $this->editionTauxSal;
    }

    /**
     * Set the edition taux sal.
     *
     * @param bool $editionTauxSal The edition taux sal.
     */
    public function setEditionTauxSal($editionTauxSal) {
        $this->editionTauxSal = $editionTauxSal;
        return $this;
    }
}
