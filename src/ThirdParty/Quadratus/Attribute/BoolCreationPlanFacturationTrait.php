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
 * Creation plan facturation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationPlanFacturationTrait {

    /**
     * Creation plan facturation.
     *
     * @var bool
     */
    private $creationPlanFacturation;

    /**
     * Get the creation plan facturation.
     *
     * @return bool Returns the creation plan facturation.
     */
    public function getCreationPlanFacturation() {
        return $this->creationPlanFacturation;
    }

    /**
     * Set the creation plan facturation.
     *
     * @param bool $creationPlanFacturation The creation plan facturation.
     */
    public function setCreationPlanFacturation($creationPlanFacturation) {
        $this->creationPlanFacturation = $creationPlanFacturation;
        return $this;
    }
}
