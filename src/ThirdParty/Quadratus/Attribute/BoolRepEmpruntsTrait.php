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
 * Rep emprunts trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepEmpruntsTrait {

    /**
     * Rep emprunts.
     *
     * @var bool
     */
    private $repEmprunts;

    /**
     * Get the rep emprunts.
     *
     * @return bool Returns the rep emprunts.
     */
    public function getRepEmprunts() {
        return $this->repEmprunts;
    }

    /**
     * Set the rep emprunts.
     *
     * @param bool $repEmprunts The rep emprunts.
     */
    public function setRepEmprunts($repEmprunts) {
        $this->repEmprunts = $repEmprunts;
        return $this;
    }
}
