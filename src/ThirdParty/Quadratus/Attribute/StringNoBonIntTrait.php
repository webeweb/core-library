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
 * No bon int trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoBonIntTrait {

    /**
     * No bon int.
     *
     * @var string
     */
    private $noBonInt;

    /**
     * Get the no bon int.
     *
     * @return string Returns the no bon int.
     */
    public function getNoBonInt() {
        return $this->noBonInt;
    }

    /**
     * Set the no bon int.
     *
     * @param string $noBonInt The no bon int.
     */
    public function setNoBonInt($noBonInt) {
        $this->noBonInt = $noBonInt;
        return $this;
    }
}
