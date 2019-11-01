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
 * Emploi evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmploiEvoTrait {

    /**
     * Emploi evo.
     *
     * @var string
     */
    private $emploiEvo;

    /**
     * Get the emploi evo.
     *
     * @return string Returns the emploi evo.
     */
    public function getEmploiEvo() {
        return $this->emploiEvo;
    }

    /**
     * Set the emploi evo.
     *
     * @param string $emploiEvo The emploi evo.
     */
    public function setEmploiEvo($emploiEvo) {
        $this->emploiEvo = $emploiEvo;
        return $this;
    }
}
