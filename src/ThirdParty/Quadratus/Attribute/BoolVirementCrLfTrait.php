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
 * Virement cr lf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVirementCrLfTrait {

    /**
     * Virement cr lf.
     *
     * @var bool
     */
    private $virementCrLf;

    /**
     * Get the virement cr lf.
     *
     * @return bool Returns the virement cr lf.
     */
    public function getVirementCrLf() {
        return $this->virementCrLf;
    }

    /**
     * Set the virement cr lf.
     *
     * @param bool $virementCrLf The virement cr lf.
     */
    public function setVirementCrLf($virementCrLf) {
        $this->virementCrLf = $virementCrLf;
        return $this;
    }
}
