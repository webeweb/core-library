<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Fixtures\Model;

use WBW\Library\XmlTv\Model\AbstractCredit;

/**
 * Test abstract credit.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Fixtures\Model
 */
class TestAbstractCredit extends AbstractCredit {

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return "";
    }
}
