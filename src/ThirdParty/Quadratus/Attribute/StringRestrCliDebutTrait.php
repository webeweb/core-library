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
 * Restr cli debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliDebutTrait {

    /**
     * Restr cli debut.
     *
     * @var string
     */
    private $restrCliDebut;

    /**
     * Get the restr cli debut.
     *
     * @return string Returns the restr cli debut.
     */
    public function getRestrCliDebut() {
        return $this->restrCliDebut;
    }

    /**
     * Set the restr cli debut.
     *
     * @param string $restrCliDebut The restr cli debut.
     */
    public function setRestrCliDebut($restrCliDebut) {
        $this->restrCliDebut = $restrCliDebut;
        return $this;
    }
}
