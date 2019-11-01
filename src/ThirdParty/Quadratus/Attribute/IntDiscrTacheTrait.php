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
 * Discr tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDiscrTacheTrait {

    /**
     * Discr tache.
     *
     * @var int
     */
    private $discrTache;

    /**
     * Get the discr tache.
     *
     * @return int Returns the discr tache.
     */
    public function getDiscrTache() {
        return $this->discrTache;
    }

    /**
     * Set the discr tache.
     *
     * @param int $discrTache The discr tache.
     */
    public function setDiscrTache($discrTache) {
        $this->discrTache = $discrTache;
        return $this;
    }
}
