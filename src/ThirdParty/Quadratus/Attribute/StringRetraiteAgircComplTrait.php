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
 * Retraite agirc compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRetraiteAgircComplTrait {

    /**
     * Retraite agirc compl.
     *
     * @var string
     */
    private $retraiteAgircCompl;

    /**
     * Get the retraite agirc compl.
     *
     * @return string Returns the retraite agirc compl.
     */
    public function getRetraiteAgircCompl() {
        return $this->retraiteAgircCompl;
    }

    /**
     * Set the retraite agirc compl.
     *
     * @param string $retraiteAgircCompl The retraite agirc compl.
     */
    public function setRetraiteAgircCompl($retraiteAgircCompl) {
        $this->retraiteAgircCompl = $retraiteAgircCompl;
        return $this;
    }
}
