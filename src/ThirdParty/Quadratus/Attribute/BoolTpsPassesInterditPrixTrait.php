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
 * Tps passes interdit prix trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpsPassesInterditPrixTrait {

    /**
     * Tps passes interdit prix.
     *
     * @var bool
     */
    private $tpsPassesInterditPrix;

    /**
     * Get the tps passes interdit prix.
     *
     * @return bool Returns the tps passes interdit prix.
     */
    public function getTpsPassesInterditPrix() {
        return $this->tpsPassesInterditPrix;
    }

    /**
     * Set the tps passes interdit prix.
     *
     * @param bool $tpsPassesInterditPrix The tps passes interdit prix.
     */
    public function setTpsPassesInterditPrix($tpsPassesInterditPrix) {
        $this->tpsPassesInterditPrix = $tpsPassesInterditPrix;
        return $this;
    }
}
