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
 * Interdire modif depot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdireModifDepotTrait {

    /**
     * Interdire modif depot.
     *
     * @var bool
     */
    private $interdireModifDepot;

    /**
     * Get the interdire modif depot.
     *
     * @return bool Returns the interdire modif depot.
     */
    public function getInterdireModifDepot() {
        return $this->interdireModifDepot;
    }

    /**
     * Set the interdire modif depot.
     *
     * @param bool $interdireModifDepot The interdire modif depot.
     */
    public function setInterdireModifDepot($interdireModifDepot) {
        $this->interdireModifDepot = $interdireModifDepot;
        return $this;
    }
}
