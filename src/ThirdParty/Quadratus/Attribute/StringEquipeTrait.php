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
 * Equipe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEquipeTrait {

    /**
     * Equipe.
     *
     * @var string
     */
    private $equipe;

    /**
     * Get the equipe.
     *
     * @return string Returns the equipe.
     */
    public function getEquipe() {
        return $this->equipe;
    }

    /**
     * Set the equipe.
     *
     * @param string $equipe The equipe.
     */
    public function setEquipe($equipe) {
        $this->equipe = $equipe;
        return $this;
    }
}
