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
 * Nb h repo r dues trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRepoRDuesTrait {

    /**
     * Nb h repo r dues.
     *
     * @var float
     */
    private $nbHRepoRDues;

    /**
     * Get the nb h repo r dues.
     *
     * @return float Returns the nb h repo r dues.
     */
    public function getNbHRepoRDues() {
        return $this->nbHRepoRDues;
    }

    /**
     * Set the nb h repo r dues.
     *
     * @param float $nbHRepoRDues The nb h repo r dues.
     */
    public function setNbHRepoRDues($nbHRepoRDues) {
        $this->nbHRepoRDues = $nbHRepoRDues;
        return $this;
    }
}
