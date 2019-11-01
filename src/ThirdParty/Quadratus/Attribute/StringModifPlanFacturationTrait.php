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
 * Modif plan facturation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifPlanFacturationTrait {

    /**
     * Modif plan facturation.
     *
     * @var string
     */
    private $modifPlanFacturation;

    /**
     * Get the modif plan facturation.
     *
     * @return string Returns the modif plan facturation.
     */
    public function getModifPlanFacturation() {
        return $this->modifPlanFacturation;
    }

    /**
     * Set the modif plan facturation.
     *
     * @param string $modifPlanFacturation The modif plan facturation.
     */
    public function setModifPlanFacturation($modifPlanFacturation) {
        $this->modifPlanFacturation = $modifPlanFacturation;
        return $this;
    }
}
