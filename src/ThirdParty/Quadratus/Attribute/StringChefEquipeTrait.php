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
trait StringChefEquipeTrait {

    /**
     * Chef equipe.
     *
     * @var string
     */
    private $chefEquipe;

    /**
     * Get the chef equipe.
     *
     * @return string Returns the chef equipe.
     */
    public function getChefEquipe() {
        return $this->chefEquipe;
    }

    /**
     * Set the chef equipe.
     *
     * @param string $chefEquipe The chef equipe.
     */
    public function setChefEquipe($chefEquipe) {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }
}
