<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\TestifyBackendApi\Processor\TestStubs;

use Codeception\Test\Test;

class TestStub extends Test
{
    public function test(): void
    {
    }

    public function getSignature(): string
    {
        return 'TestStub';
    }

    public function toString(): string
    {
        return 'TestStub';
    }
}
