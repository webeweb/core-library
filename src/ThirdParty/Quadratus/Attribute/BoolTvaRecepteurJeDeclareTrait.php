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
 * Tva recepteur je declare trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaRecepteurJeDeclareTrait {

    /**
     * Tva recepteur je declare.
     *
     * @var bool
     */
    private $tvaRecepteurJeDeclare;

    /**
     * Get the tva recepteur je declare.
     *
     * @return bool Returns the tva recepteur je declare.
     */
    public function getTvaRecepteurJeDeclare() {
        return $this->tvaRecepteurJeDeclare;
    }

    /**
     * Set the tva recepteur je declare.
     *
     * @param bool $tvaRecepteurJeDeclare The tva recepteur je declare.
     */
    public function setTvaRecepteurJeDeclare($tvaRecepteurJeDeclare) {
        $this->tvaRecepteurJeDeclare = $tvaRecepteurJeDeclare;
        return $this;
    }
}
