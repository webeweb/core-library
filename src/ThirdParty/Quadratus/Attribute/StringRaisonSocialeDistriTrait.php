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
 * Raison sociale distri trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRaisonSocialeDistriTrait {

    /**
     * Raison sociale distri.
     *
     * @var string
     */
    private $raisonSocialeDistri;

    /**
     * Get the raison sociale distri.
     *
     * @return string Returns the raison sociale distri.
     */
    public function getRaisonSocialeDistri() {
        return $this->raisonSocialeDistri;
    }

    /**
     * Set the raison sociale distri.
     *
     * @param string $raisonSocialeDistri The raison sociale distri.
     */
    public function setRaisonSocialeDistri($raisonSocialeDistri) {
        $this->raisonSocialeDistri = $raisonSocialeDistri;
        return $this;
    }
}
