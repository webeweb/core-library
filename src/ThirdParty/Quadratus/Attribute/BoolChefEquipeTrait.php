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
 * Chef equipe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChefEquipeTrait {

    /**
     * Chef equipe.
     *
     * @var bool
     */
    private $chefEquipe;

    /**
     * Get the chef equipe.
     *
     * @return bool Returns the chef equipe.
     */
    public function getChefEquipe() {
        return $this->chefEquipe;
    }

    /**
     * Set the chef equipe.
     *
     * @param bool $chefEquipe The chef equipe.
     */
    public function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }
}
