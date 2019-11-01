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
 * Retraite autre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRetraiteAutreTrait {

    /**
     * Retraite autre.
     *
     * @var string
     */
    private $retraiteAutre;

    /**
     * Get the retraite autre.
     *
     * @return string Returns the retraite autre.
     */
    public function getRetraiteAutre() {
        return $this->retraiteAutre;
    }

    /**
     * Set the retraite autre.
     *
     * @param string $retraiteAutre The retraite autre.
     */
    public function setRetraiteAutre($retraiteAutre) {
        $this->retraiteAutre = $retraiteAutre;
        return $this;
    }
}
