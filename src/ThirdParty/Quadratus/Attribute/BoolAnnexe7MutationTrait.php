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
 * Annexe7 mutation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnexe7MutationTrait {

    /**
     * Annexe7 mutation.
     *
     * @var bool
     */
    private $annexe7Mutation;

    /**
     * Get the annexe7 mutation.
     *
     * @return bool Returns the annexe7 mutation.
     */
    public function getAnnexe7Mutation() {
        return $this->annexe7Mutation;
    }

    /**
     * Set the annexe7 mutation.
     *
     * @param bool $annexe7Mutation The annexe7 mutation.
     */
    public function setAnnexe7Mutation($annexe7Mutation) {
        $this->annexe7Mutation = $annexe7Mutation;
        return $this;
    }
}
