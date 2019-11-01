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
 * Es heures reelles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEsHeuresReellesTrait {

    /**
     * Es heures reelles.
     *
     * @var bool
     */
    private $esHeuresReelles;

    /**
     * Get the es heures reelles.
     *
     * @return bool Returns the es heures reelles.
     */
    public function getEsHeuresReelles() {
        return $this->esHeuresReelles;
    }

    /**
     * Set the es heures reelles.
     *
     * @param bool $esHeuresReelles The es heures reelles.
     */
    public function setEsHeuresReelles($esHeuresReelles) {
        $this->esHeuresReelles = $esHeuresReelles;
        return $this;
    }
}
