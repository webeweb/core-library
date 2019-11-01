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
 * Nb h repo comp dues trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRepoCompDuesTrait {

    /**
     * Nb h repo comp dues.
     *
     * @var float
     */
    private $nbHRepoCompDues;

    /**
     * Get the nb h repo comp dues.
     *
     * @return float Returns the nb h repo comp dues.
     */
    public function getNbHRepoCompDues() {
        return $this->nbHRepoCompDues;
    }

    /**
     * Set the nb h repo comp dues.
     *
     * @param float $nbHRepoCompDues The nb h repo comp dues.
     */
    public function setNbHRepoCompDues($nbHRepoCompDues) {
        $this->nbHRepoCompDues = $nbHRepoCompDues;
        return $this;
    }
}
