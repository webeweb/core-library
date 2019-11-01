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
 * Retraite obligatoire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRetraiteObligatoireTrait {

    /**
     * Retraite obligatoire.
     *
     * @var bool
     */
    private $retraiteObligatoire;

    /**
     * Get the retraite obligatoire.
     *
     * @return bool Returns the retraite obligatoire.
     */
    public function getRetraiteObligatoire() {
        return $this->retraiteObligatoire;
    }

    /**
     * Set the retraite obligatoire.
     *
     * @param bool $retraiteObligatoire The retraite obligatoire.
     */
    public function setRetraiteObligatoire($retraiteObligatoire) {
        $this->retraiteObligatoire = $retraiteObligatoire;
        return $this;
    }
}
