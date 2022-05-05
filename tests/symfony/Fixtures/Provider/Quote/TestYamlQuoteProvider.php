<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Provider\Quote;

use WBW\Library\Symfony\Provider\Quote\YamlQuoteProvider;

/**
 * Test YAML quote provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Provider\Quote
 */
class TestYamlQuoteProvider extends YamlQuoteProvider {

    /**
     * {@inheritdoc}
     */
    public function init(): void {
        parent::init();
    }
}
