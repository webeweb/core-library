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
 * Code pays corres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePaysCorresTrait {

    /**
     * Code pays corres.
     *
     * @var string
     */
    private $codePaysCorres;

    /**
     * Get the code pays corres.
     *
     * @return string Returns the code pays corres.
     */
    public function getCodePaysCorres() {
        return $this->codePaysCorres;
    }

    /**
     * Set the code pays corres.
     *
     * @param string $codePaysCorres The code pays corres.
     */
    public function setCodePaysCorres($codePaysCorres) {
        $this->codePaysCorres = $codePaysCorres;
        return $this;
    }
}
